<?php

namespace ShipStream\Ups\Api\Model;

class RatePackageUPSPremier extends \ArrayObject
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
     * UPS Premier Category  Valid values are 01,02,03 UPS Premier Silver - 01 UPS Premier Gold - 02 UPS Premier Platinum - 03
     *
     * @var string
     */
    protected $category;
    /**
     * UPS Premier Category  Valid values are 01,02,03 UPS Premier Silver - 01 UPS Premier Gold - 02 UPS Premier Platinum - 03
     *
     * @return string
     */
    public function getCategory() : string
    {
        return $this->category;
    }
    /**
     * UPS Premier Category  Valid values are 01,02,03 UPS Premier Silver - 01 UPS Premier Gold - 02 UPS Premier Platinum - 03
     *
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category) : self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
}