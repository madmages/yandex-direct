<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class IdsCriteria
{

    protected $Ids = array(
        
    );

    /**
     * Creates a new instance of IdsCriteria.
     *
     * @return IdsCriteria
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Ids.
     *
     * @return long[]
     */
    public function getIds()
    {
        return $this->Ids;
    }

    /**
     * Sets Ids.
     *
     * @param long[] $value
     * @return $this
     */
    public function setIds(array $value)
    {
        $this->Ids = $value;

        return $this;
    }


}
