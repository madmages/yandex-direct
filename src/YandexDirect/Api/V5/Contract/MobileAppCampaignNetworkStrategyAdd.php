<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppCampaignNetworkStrategyAdd extends MobileAppCampaignStrategyAddBase
{

    protected $BiddingStrategyType = null;

    protected $NetworkDefault = null;

    /**
     * Creates a new instance of MobileAppCampaignNetworkStrategyAdd.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets BiddingStrategyType.
     *
     * @return string
     * @see MobileAppCampaignNetworkStrategyTypeEnum
     */
    public function getBiddingStrategyType()
    {
        return $this->BiddingStrategyType;
    }

    /**
     * Sets BiddingStrategyType.
     *
     * @param string $value
     * @return self
     * @see MobileAppCampaignNetworkStrategyTypeEnum
     */
    public function setBiddingStrategyType($value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }

    /**
     * Gets NetworkDefault.
     *
     * @return StrategyNetworkDefaultAdd|null
     */
    public function getNetworkDefault()
    {
        return $this->NetworkDefault;
    }

    /**
     * Sets NetworkDefault.
     *
     * @param StrategyNetworkDefaultAdd|null $value
     * @return self
     */
    public function setNetworkDefault(StrategyNetworkDefaultAdd $value = null)
    {
        $this->NetworkDefault = $value;

        return $this;
    }


}

