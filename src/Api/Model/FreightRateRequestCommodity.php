<?php

namespace ShipStream\Ups\Api\Model;

class FreightRateRequestCommodity extends \ArrayObject
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
     * @var string|null
     */
    protected $commodityID;
    /**
     * Description of the line item.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Commodity Weight Container.
     *
     * @var CommodityWeight|null
     */
    protected $weight;
    /**
     * Adjusted Weight Container.
     *
     * @var CommodityAdjustedWeight|null
     */
    protected $adjustedWeight;
    /**
     * Dimensions Container.
     *
     * @var CommodityDimensions|null
     */
    protected $dimensions;
    /**
     * Number of piece of the commodity in the handling unit.
     *
     * @var string|null
     */
    protected $numberOfPieces;
    /**
     * PackagingType Container.
     *
     * @var CommodityPackagingType|null
     */
    protected $packagingType;
    /**
    * The presence of the tag DangerousGoodsIndicator indicates that the commodity is of type dangerous goods.
    Required for at least one commodity when the dangerous goods accessorial is passed.
    *
    * @var string|null
    */
    protected $dangerousGoodsIndicator;
    /**
     * CommodityValue Container.
     *
     * @var CommodityCommodityValue|null
     */
    protected $commodityValue;
    /**
    * Freight Classification. 
    Refer to Ground Freight Classes in the Appendix for valid values.
    *
    * @var string|null
    */
    protected $freightClass;
    /**
     * National Motor Freight Classification Commodity code.
     *
     * @var string|null
     */
    protected $nMFCCommodityCode;
    /**
    * Container for National Motor Freight Classification Commodity.  This Container is for customers who choose to send the NMFC Prime and sub code as two different fields.
    This container is mutually exclusive with NMFCCommodityCode element above.
    *
    * @var CommodityNMFCCommodity|null
    */
    protected $nMFCCommodity;
    /**
     * Unique identifier for the commodity.
     *
     * @return string|null
     */
    public function getCommodityID() : ?string
    {
        return $this->commodityID;
    }
    /**
     * Unique identifier for the commodity.
     *
     * @param string|null $commodityID
     *
     * @return self
     */
    public function setCommodityID(?string $commodityID) : self
    {
        $this->initialized['commodityID'] = true;
        $this->commodityID = $commodityID;
        return $this;
    }
    /**
     * Description of the line item.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Description of the line item.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Commodity Weight Container.
     *
     * @return CommodityWeight|null
     */
    public function getWeight() : ?CommodityWeight
    {
        return $this->weight;
    }
    /**
     * Commodity Weight Container.
     *
     * @param CommodityWeight|null $weight
     *
     * @return self
     */
    public function setWeight(?CommodityWeight $weight) : self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * Adjusted Weight Container.
     *
     * @return CommodityAdjustedWeight|null
     */
    public function getAdjustedWeight() : ?CommodityAdjustedWeight
    {
        return $this->adjustedWeight;
    }
    /**
     * Adjusted Weight Container.
     *
     * @param CommodityAdjustedWeight|null $adjustedWeight
     *
     * @return self
     */
    public function setAdjustedWeight(?CommodityAdjustedWeight $adjustedWeight) : self
    {
        $this->initialized['adjustedWeight'] = true;
        $this->adjustedWeight = $adjustedWeight;
        return $this;
    }
    /**
     * Dimensions Container.
     *
     * @return CommodityDimensions|null
     */
    public function getDimensions() : ?CommodityDimensions
    {
        return $this->dimensions;
    }
    /**
     * Dimensions Container.
     *
     * @param CommodityDimensions|null $dimensions
     *
     * @return self
     */
    public function setDimensions(?CommodityDimensions $dimensions) : self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
    /**
     * Number of piece of the commodity in the handling unit.
     *
     * @return string|null
     */
    public function getNumberOfPieces() : ?string
    {
        return $this->numberOfPieces;
    }
    /**
     * Number of piece of the commodity in the handling unit.
     *
     * @param string|null $numberOfPieces
     *
     * @return self
     */
    public function setNumberOfPieces(?string $numberOfPieces) : self
    {
        $this->initialized['numberOfPieces'] = true;
        $this->numberOfPieces = $numberOfPieces;
        return $this;
    }
    /**
     * PackagingType Container.
     *
     * @return CommodityPackagingType|null
     */
    public function getPackagingType() : ?CommodityPackagingType
    {
        return $this->packagingType;
    }
    /**
     * PackagingType Container.
     *
     * @param CommodityPackagingType|null $packagingType
     *
     * @return self
     */
    public function setPackagingType(?CommodityPackagingType $packagingType) : self
    {
        $this->initialized['packagingType'] = true;
        $this->packagingType = $packagingType;
        return $this;
    }
    /**
    * The presence of the tag DangerousGoodsIndicator indicates that the commodity is of type dangerous goods.
    Required for at least one commodity when the dangerous goods accessorial is passed.
    *
    * @return string|null
    */
    public function getDangerousGoodsIndicator() : ?string
    {
        return $this->dangerousGoodsIndicator;
    }
    /**
    * The presence of the tag DangerousGoodsIndicator indicates that the commodity is of type dangerous goods.
    Required for at least one commodity when the dangerous goods accessorial is passed.
    *
    * @param string|null $dangerousGoodsIndicator
    *
    * @return self
    */
    public function setDangerousGoodsIndicator(?string $dangerousGoodsIndicator) : self
    {
        $this->initialized['dangerousGoodsIndicator'] = true;
        $this->dangerousGoodsIndicator = $dangerousGoodsIndicator;
        return $this;
    }
    /**
     * CommodityValue Container.
     *
     * @return CommodityCommodityValue|null
     */
    public function getCommodityValue() : ?CommodityCommodityValue
    {
        return $this->commodityValue;
    }
    /**
     * CommodityValue Container.
     *
     * @param CommodityCommodityValue|null $commodityValue
     *
     * @return self
     */
    public function setCommodityValue(?CommodityCommodityValue $commodityValue) : self
    {
        $this->initialized['commodityValue'] = true;
        $this->commodityValue = $commodityValue;
        return $this;
    }
    /**
    * Freight Classification. 
    Refer to Ground Freight Classes in the Appendix for valid values.
    *
    * @return string|null
    */
    public function getFreightClass() : ?string
    {
        return $this->freightClass;
    }
    /**
    * Freight Classification. 
    Refer to Ground Freight Classes in the Appendix for valid values.
    *
    * @param string|null $freightClass
    *
    * @return self
    */
    public function setFreightClass(?string $freightClass) : self
    {
        $this->initialized['freightClass'] = true;
        $this->freightClass = $freightClass;
        return $this;
    }
    /**
     * National Motor Freight Classification Commodity code.
     *
     * @return string|null
     */
    public function getNMFCCommodityCode() : ?string
    {
        return $this->nMFCCommodityCode;
    }
    /**
     * National Motor Freight Classification Commodity code.
     *
     * @param string|null $nMFCCommodityCode
     *
     * @return self
     */
    public function setNMFCCommodityCode(?string $nMFCCommodityCode) : self
    {
        $this->initialized['nMFCCommodityCode'] = true;
        $this->nMFCCommodityCode = $nMFCCommodityCode;
        return $this;
    }
    /**
    * Container for National Motor Freight Classification Commodity.  This Container is for customers who choose to send the NMFC Prime and sub code as two different fields.
    This container is mutually exclusive with NMFCCommodityCode element above.
    *
    * @return CommodityNMFCCommodity|null
    */
    public function getNMFCCommodity() : ?CommodityNMFCCommodity
    {
        return $this->nMFCCommodity;
    }
    /**
    * Container for National Motor Freight Classification Commodity.  This Container is for customers who choose to send the NMFC Prime and sub code as two different fields.
    This container is mutually exclusive with NMFCCommodityCode element above.
    *
    * @param CommodityNMFCCommodity|null $nMFCCommodity
    *
    * @return self
    */
    public function setNMFCCommodity(?CommodityNMFCCommodity $nMFCCommodity) : self
    {
        $this->initialized['nMFCCommodity'] = true;
        $this->nMFCCommodity = $nMFCCommodity;
        return $this;
    }
}