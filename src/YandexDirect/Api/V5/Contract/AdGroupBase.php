<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdGroupBase
{

    protected $RegionIds = null;

    protected $NegativeKeywords = null;

    protected $TrackingParams = null;

    /**
     * Creates a new instance of AdGroupBase.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets RegionIds.
     *
     * @return int[]|null
     */
    public function getRegionIds()
    {
        return $this->RegionIds;
    }

    /**
     * Sets RegionIds.
     *
     * @param int[]|null $value
     * @return self
     */
    public function setRegionIds(array $value = null)
    {
        $this->RegionIds = $value;

        return $this;
    }

    /**
     * Gets NegativeKeywords.
     *
     * @return struct[]|null
     */
    public function getNegativeKeywords()
    {
        return $this->NegativeKeywords;
    }

    /**
     * Sets NegativeKeywords.
     *
     * @param struct[]|null $value
     * @return self
     */
    public function setNegativeKeywords(array $value = null)
    {
        $this->NegativeKeywords = $value;

        return $this;
    }

    /**
     * Gets TrackingParams.
     *
     * @return string|null
     */
    public function getTrackingParams()
    {
        return $this->TrackingParams;
    }

    /**
     * Sets TrackingParams.
     *
     * @param string|null $value
     * @return self
     */
    public function setTrackingParams($value = null)
    {
        $this->TrackingParams = $value;

        return $this;
    }


}

