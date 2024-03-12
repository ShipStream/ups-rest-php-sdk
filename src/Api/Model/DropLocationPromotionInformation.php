<?php

namespace ShipStream\Ups\Api\Model;

class DropLocationPromotionInformation extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Locale (language/ dialect) for the promotion code.
     *
     * @var string
     */
    protected $locale;
    /**
     * Promotion text for the given location.
     *
     * @var string
     */
    protected $promotion;
    /**
     * Locale (language/ dialect) for the promotion code.
     *
     * @return string
     */
    public function getLocale() : string
    {
        return $this->locale;
    }
    /**
     * Locale (language/ dialect) for the promotion code.
     *
     * @param string $locale
     *
     * @return self
     */
    public function setLocale(string $locale) : self
    {
        $this->initialized['locale'] = true;
        $this->locale = $locale;
        return $this;
    }
    /**
     * Promotion text for the given location.
     *
     * @return string
     */
    public function getPromotion() : string
    {
        return $this->promotion;
    }
    /**
     * Promotion text for the given location.
     *
     * @param string $promotion
     *
     * @return self
     */
    public function setPromotion(string $promotion) : self
    {
        $this->initialized['promotion'] = true;
        $this->promotion = $promotion;
        return $this;
    }
}