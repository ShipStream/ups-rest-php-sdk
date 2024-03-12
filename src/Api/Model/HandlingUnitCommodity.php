<?php

namespace ShipStream\Ups\Api\Model;

class HandlingUnitCommodity extends \ArrayObject
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
     * Number of Pieces.
     *
     * @var string
     */
    protected $numberOfPieces;
    /**
     * PackagingType Container.
     *
     * @var CommodityPackagingType
     */
    protected $packagingType;
    /**
     * Hazmat Indicator.
     *
     * @var string
     */
    protected $dangerousGoodsIndicator;
    /**
     * Description of articles, special marks, freight codes.
     *
     * @var string
     */
    protected $description;
    /**
     * NMFC.
     *
     * @var string
     */
    protected $nMFCCommodityCode;
    /**
     * Class.
     *
     * @var string
     */
    protected $freightClass;
    /**
     * Dimensions Container.
     *
     * @var FreightShipCommodityDimensions
     */
    protected $dimensions;
    /**
     * Weight of the package.
     *
     * @var string
     */
    protected $weight;
    /**
     * Unit price of the commodity.
     *
     * @var string
     */
    protected $commodityValue;
    /**
     * Number of Pieces.
     *
     * @return string
     */
    public function getNumberOfPieces() : string
    {
        return $this->numberOfPieces;
    }
    /**
     * Number of Pieces.
     *
     * @param string $numberOfPieces
     *
     * @return self
     */
    public function setNumberOfPieces(string $numberOfPieces) : self
    {
        $this->initialized['numberOfPieces'] = true;
        $this->numberOfPieces = $numberOfPieces;
        return $this;
    }
    /**
     * PackagingType Container.
     *
     * @return CommodityPackagingType
     */
    public function getPackagingType() : CommodityPackagingType
    {
        return $this->packagingType;
    }
    /**
     * PackagingType Container.
     *
     * @param CommodityPackagingType $packagingType
     *
     * @return self
     */
    public function setPackagingType(CommodityPackagingType $packagingType) : self
    {
        $this->initialized['packagingType'] = true;
        $this->packagingType = $packagingType;
        return $this;
    }
    /**
     * Hazmat Indicator.
     *
     * @return string
     */
    public function getDangerousGoodsIndicator() : string
    {
        return $this->dangerousGoodsIndicator;
    }
    /**
     * Hazmat Indicator.
     *
     * @param string $dangerousGoodsIndicator
     *
     * @return self
     */
    public function setDangerousGoodsIndicator(string $dangerousGoodsIndicator) : self
    {
        $this->initialized['dangerousGoodsIndicator'] = true;
        $this->dangerousGoodsIndicator = $dangerousGoodsIndicator;
        return $this;
    }
    /**
     * Description of articles, special marks, freight codes.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of articles, special marks, freight codes.
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
     * NMFC.
     *
     * @return string
     */
    public function getNMFCCommodityCode() : string
    {
        return $this->nMFCCommodityCode;
    }
    /**
     * NMFC.
     *
     * @param string $nMFCCommodityCode
     *
     * @return self
     */
    public function setNMFCCommodityCode(string $nMFCCommodityCode) : self
    {
        $this->initialized['nMFCCommodityCode'] = true;
        $this->nMFCCommodityCode = $nMFCCommodityCode;
        return $this;
    }
    /**
     * Class.
     *
     * @return string
     */
    public function getFreightClass() : string
    {
        return $this->freightClass;
    }
    /**
     * Class.
     *
     * @param string $freightClass
     *
     * @return self
     */
    public function setFreightClass(string $freightClass) : self
    {
        $this->initialized['freightClass'] = true;
        $this->freightClass = $freightClass;
        return $this;
    }
    /**
     * Dimensions Container.
     *
     * @return FreightShipCommodityDimensions
     */
    public function getDimensions() : FreightShipCommodityDimensions
    {
        return $this->dimensions;
    }
    /**
     * Dimensions Container.
     *
     * @param FreightShipCommodityDimensions $dimensions
     *
     * @return self
     */
    public function setDimensions(FreightShipCommodityDimensions $dimensions) : self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
    /**
     * Weight of the package.
     *
     * @return string
     */
    public function getWeight() : string
    {
        return $this->weight;
    }
    /**
     * Weight of the package.
     *
     * @param string $weight
     *
     * @return self
     */
    public function setWeight(string $weight) : self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * Unit price of the commodity.
     *
     * @return string
     */
    public function getCommodityValue() : string
    {
        return $this->commodityValue;
    }
    /**
     * Unit price of the commodity.
     *
     * @param string $commodityValue
     *
     * @return self
     */
    public function setCommodityValue(string $commodityValue) : self
    {
        $this->initialized['commodityValue'] = true;
        $this->commodityValue = $commodityValue;
        return $this;
    }
}