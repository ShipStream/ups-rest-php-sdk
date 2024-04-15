<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentCommodity extends \ArrayObject
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
     * Description of articles, special marks, freight codes.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Weight of the package.
     *
     * @var string|null
     */
    protected $weight;
    /**
     * Dimensions Container.
     *
     * @var FreightShipCommodityDimensions|null
     */
    protected $dimensions;
    /**
     * Number of Pieces.
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
     * Hazmat Indicator.
     *
     * @var string|null
     */
    protected $dangerousGoodsIndicator;
    /**
     * Unit price of the commodity.
     *
     * @var string|null
     */
    protected $commodityValue;
    /**
     * Class.
     *
     * @var string|null
     */
    protected $freightClass;
    /**
     * NMFC.
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
     * Description of articles, special marks, freight codes.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Description of articles, special marks, freight codes.
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
     * Weight of the package.
     *
     * @return string|null
     */
    public function getWeight() : ?string
    {
        return $this->weight;
    }
    /**
     * Weight of the package.
     *
     * @param string|null $weight
     *
     * @return self
     */
    public function setWeight(?string $weight) : self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * Dimensions Container.
     *
     * @return FreightShipCommodityDimensions|null
     */
    public function getDimensions() : ?FreightShipCommodityDimensions
    {
        return $this->dimensions;
    }
    /**
     * Dimensions Container.
     *
     * @param FreightShipCommodityDimensions|null $dimensions
     *
     * @return self
     */
    public function setDimensions(?FreightShipCommodityDimensions $dimensions) : self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
    /**
     * Number of Pieces.
     *
     * @return string|null
     */
    public function getNumberOfPieces() : ?string
    {
        return $this->numberOfPieces;
    }
    /**
     * Number of Pieces.
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
     * Hazmat Indicator.
     *
     * @return string|null
     */
    public function getDangerousGoodsIndicator() : ?string
    {
        return $this->dangerousGoodsIndicator;
    }
    /**
     * Hazmat Indicator.
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
     * Unit price of the commodity.
     *
     * @return string|null
     */
    public function getCommodityValue() : ?string
    {
        return $this->commodityValue;
    }
    /**
     * Unit price of the commodity.
     *
     * @param string|null $commodityValue
     *
     * @return self
     */
    public function setCommodityValue(?string $commodityValue) : self
    {
        $this->initialized['commodityValue'] = true;
        $this->commodityValue = $commodityValue;
        return $this;
    }
    /**
     * Class.
     *
     * @return string|null
     */
    public function getFreightClass() : ?string
    {
        return $this->freightClass;
    }
    /**
     * Class.
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
     * NMFC.
     *
     * @return string|null
     */
    public function getNMFCCommodityCode() : ?string
    {
        return $this->nMFCCommodityCode;
    }
    /**
     * NMFC.
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