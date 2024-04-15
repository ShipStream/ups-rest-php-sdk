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
     * @var string|null
     */
    protected $locale;
    /**
     * Promotion text for the given location.
     *
     * @var string|null
     */
    protected $promotion;
    /**
     * Locale (language/ dialect) for the promotion code.
     *
     * @return string|null
     */
    public function getLocale() : ?string
    {
        return $this->locale;
    }
    /**
     * Locale (language/ dialect) for the promotion code.
     *
     * @param string|null $locale
     *
     * @return self
     */
    public function setLocale(?string $locale) : self
    {
        $this->initialized['locale'] = true;
        $this->locale = $locale;
        return $this;
    }
    /**
     * Promotion text for the given location.
     *
     * @return string|null
     */
    public function getPromotion() : ?string
    {
        return $this->promotion;
    }
    /**
     * Promotion text for the given location.
     *
     * @param string|null $promotion
     *
     * @return self
     */
    public function setPromotion(?string $promotion) : self
    {
        $this->initialized['promotion'] = true;
        $this->promotion = $promotion;
        return $this;
    }
}