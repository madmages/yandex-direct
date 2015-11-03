<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextCampaignGetItem extends TextCampaignBase
{

    protected $BiddingStrategy = null;

    protected $Settings = null;

    /**
     * Creates a new instance of TextCampaignGetItem.
     *
     * @return TextCampaignGetItem
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets BiddingStrategy.
     *
     * @return TextCampaignStrategy|null
     */
    public function getBiddingStrategy()
    {
        return $this->BiddingStrategy;
    }

    /**
     * Sets BiddingStrategy.
     *
     * @param TextCampaignStrategy|null $value
     * @return $this
     */
    public function setBiddingStrategy(TextCampaignStrategy $value = null)
    {
        $this->BiddingStrategy = $value;

        return $this;
    }

    /**
     * Gets Settings.
     *
     * @return TextCampaignSettingGet[]|null
     */
    public function getSettings()
    {
        return $this->Settings;
    }

    /**
     * Sets Settings.
     *
     * @param TextCampaignSettingGet[]|null $value
     * @return $this
     */
    public function setSettings(array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }


}

