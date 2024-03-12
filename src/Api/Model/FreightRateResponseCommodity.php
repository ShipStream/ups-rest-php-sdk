<?php

namespace ShipStream\Ups\Api\Model;

class FreightRateResponseCommodity extends \ArrayObject
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
     * Unique identifier for the commodity.
     *
     * @var string
     */
    protected $commodityID;
    /**
     * Description of the line item.
     *
     * @var string
     */
    protected $description;
    /**
     * Commodity Weight Container.
     *
     * @var CommodityWeight
     */
    protected $weight;
    /**
     * Adjusted Weight Container.
     *
     * @var CommodityAdjustedWeight
     */
    protected $adjustedWeight;
    /**
     * Unique identifier for the commodity.
     *
     * @return string
     */
    public function getCommodityID() : string
    {
        return $this->commodityID;
    }
    /**
     * Unique identifier for the commodity.
     *
     * @param string $commodityID
     *
     * @return self
     */
    public function setCommodityID(string $commodityID) : self
    {
        $this->initialized['commodityID'] = true;
        $this->commodityID = $commodityID;
        return $this;
    }
    /**
     * Description of the line item.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the line item.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Commodity Weight Container.
     *
     * @return CommodityWeight
     */
    public function getWeight() : CommodityWeight
    {
        return $this->weight;
    }
    /**
     * Commodity Weight Container.
     *
     * @param CommodityWeight $weight
     *
     * @return self
     */
    public function setWeight(CommodityWeight $weight) : self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * Adjusted Weight Container.
     *
     * @return CommodityAdjustedWeight
     */
    public function getAdjustedWeight() : CommodityAdjustedWeight
    {
        return $this->adjustedWeight;
    }
    /**
     * Adjusted Weight Container.
     *
     * @param CommodityAdjustedWeight $adjustedWeight
     *
     * @return self
     */
    public function setAdjustedWeight(CommodityAdjustedWeight $adjustedWeight) : self
    {
        $this->initialized['adjustedWeight'] = true;
        $this->adjustedWeight = $adjustedWeight;
        return $this;
    }
}