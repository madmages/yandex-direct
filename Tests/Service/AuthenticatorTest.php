<?php

namespace Biplane\YandexDirectBundle\Tests\Service;

use Biplane\YandexDirectBundle\Service\Authenticator;
use Buzz\Message\Form\FormRequest;
use Buzz\Message\Response;

/**
 * @author Denis Vasilev <yethee@auto-pilot.pro>
 */
class AuthenticatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowExceptionWhenApplicationIdIsEmpty()
    {
        new Authenticator(null, null);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowExceptionWhenSecretKeyIsEmpty()
    {
        new Authenticator('identifier', null);
    }

    public function testGetAuthUrlWhenPopupIsTrue()
    {
        $authenticator = new Authenticator('id', 'secr4t');

        $this->assertEquals(
            'https://oauth.yandex.ru/authorize?response_type=code&client_id=id&display=popup',
            $authenticator->getAuthUrl(true)
        );
    }

    public function testGetAuthUrlWhenPopupIsFalse()
    {
        $authenticator = new Authenticator('id', 'secr4t');

        $this->assertEquals(
            'https://oauth.yandex.ru/authorize?response_type=code&client_id=id',
            $authenticator->getAuthUrl()
        );
    }

    public function testAuthenticationShouldBeCompleted()
    {
        $client = $this->getMock('Buzz\Client\ClientInterface');
        $authenticator = new Authenticator('Id', 's$cr4t', $client);

        $request = new FormRequest();
        $request->setHost('https://oauth.yandex.ru');
        $request->setResource('/token');
        $request->addFields(array(
            'grant_type'    => 'authorization_code',
            'code'          => 'c0de',
            'client_id'     => 'Id',
            'client_secret' => 's$cr4t',
        ));

        $client->expects($this->once())
            ->method('send')
            ->with($this->equalTo($request))
            ->will($this->returnCallback(function($request, Response $response) {
                $response->addHeader('HTTP 200 OK');
                $response->addHeader('Content-type: application/json');
                $response->addHeader('Content-Length: 76');
                $response->setContent('{"access_token": "ea135929105c4f29a0f5117d2960926f", "expires_in": 2592000}');
            }));

        $token = $authenticator->authenticate('c0de');

        $this->assertSame(
            array(
                'access_token' => 'ea135929105c4f29a0f5117d2960926f',
                'expires_in'   => 2592000,
            ),
            $token
        );
    }
}
