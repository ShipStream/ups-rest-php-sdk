<?php

namespace ShipStream\Ups\Api\Model;

class RequestShipmentItems extends \ArrayObject
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
     * Commodity ID is used to associate tariffs with product in the output. Should be unique for each commodity in a request. It is an arbitrary string provided by the user of the API that will be returned with the Landed Cost Quote to indicate which commodity tariffs apply to.
     *
     * @var string|null
     */
    protected $commodityId;
    /**
     * Specifies the gross weight of the commodity as any non-negative value.
     *
     * @var float|null
     */
    protected $grossWeight;
    /**
     * Specifies the units of the gross weight. Required if GrossWeight is used. If GrossWeight is not specified, this value must not be set to anything but null. Supported values: LB, KG
     *
     * @var string|null
     */
    protected $grossWeightUnit;
    /**
     * Specifies the price for each commodity unit in the settlement currency. The total price of the entire number of shipmentItems may not exceed 999999999999.99
     *
     * @var float|null
     */
    protected $priceEach;
    /**
     * Specifies the Currency Code used for commodity price. All commodities must have the same currency code.
     *
     * @var string|null
     */
    protected $commodityCurrencyCode;
    /**
     * Specifies the number of product units to be shipped. The total price of the entire number of shipmentItems may not exceed 999999999999.99, 1 or greater than 1
     *
     * @var int|null
     */
    protected $quantity;
    /**
     * Specify unit of measure. Check UOM List in the Appendices section
     *
     * @var string|null
     */
    protected $uOM;
    /**
     * Specifies a valid HS or HTS code for the shipment�s destination or import country. This field is required if description is not provided. Valid HTS Code with or without periods
     *
     * @var string|null
     */
    protected $hsCode;
    /**
     * This field is populated with description of the commodity. This field is required if hsCode is not provided.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Country of Manufacture or origin.
     *
     * @var string|null
     */
    protected $originCountryCode;
    /**
     * Commodity ID is used to associate tariffs with product in the output. Should be unique for each commodity in a request. It is an arbitrary string provided by the user of the API that will be returned with the Landed Cost Quote to indicate which commodity tariffs apply to.
     *
     * @return string|null
     */
    public function getCommodityId() : ?string
    {
        return $this->commodityId;
    }
    /**
     * Commodity ID is used to associate tariffs with product in the output. Should be unique for each commodity in a request. It is an arbitrary string provided by the user of the API that will be returned with the Landed Cost Quote to indicate which commodity tariffs apply to.
     *
     * @param string|null $commodityId
     *
     * @return self
     */
    public function setCommodityId(?string $commodityId) : self
    {
        $this->initialized['commodityId'] = true;
        $this->commodityId = $commodityId;
        return $this;
    }
    /**
     * Specifies the gross weight of the commodity as any non-negative value.
     *
     * @return float|null
     */
    public function getGrossWeight() : ?float
    {
        return $this->grossWeight;
    }
    /**
     * Specifies the gross weight of the commodity as any non-negative value.
     *
     * @param float|null $grossWeight
     *
     * @return self
     */
    public function setGrossWeight(?float $grossWeight) : self
    {
        $this->initialized['grossWeight'] = true;
        $this->grossWeight = $grossWeight;
        return $this;
    }
    /**
     * Specifies the units of the gross weight. Required if GrossWeight is used. If GrossWeight is not specified, this value must not be set to anything but null. Supported values: LB, KG
     *
     * @return string|null
     */
    public function getGrossWeightUnit() : ?string
    {
        return $this->grossWeightUnit;
    }
    /**
     * Specifies the units of the gross weight. Required if GrossWeight is used. If GrossWeight is not specified, this value must not be set to anything but null. Supported values: LB, KG
     *
     * @param string|null $grossWeightUnit
     *
     * @return self
     */
    public function setGrossWeightUnit(?string $grossWeightUnit) : self
    {
        $this->initialized['grossWeightUnit'] = true;
        $this->grossWeightUnit = $grossWeightUnit;
        return $this;
    }
    /**
     * Specifies the price for each commodity unit in the settlement currency. The total price of the entire number of shipmentItems may not exceed 999999999999.99
     *
     * @return float|null
     */
    public function getPriceEach() : ?float
    {
        return $this->priceEach;
    }
    /**
     * Specifies the price for each commodity unit in the settlement currency. The total price of the entire number of shipmentItems may not exceed 999999999999.99
     *
     * @param float|null $priceEach
     *
     * @return self
     */
    public function setPriceEach(?float $priceEach) : self
    {
        $this->initialized['priceEach'] = true;
        $this->priceEach = $priceEach;
        return $this;
    }
    /**
     * Specifies the Currency Code used for commodity price. All commodities must have the same currency code.
     *
     * @return string|null
     */
    public function getCommodityCurrencyCode() : ?string
    {
        return $this->commodityCurrencyCode;
    }
    /**
     * Specifies the Currency Code used for commodity price. All commodities must have the same currency code.
     *
     * @param string|null $commodityCurrencyCode
     *
     * @return self
     */
    public function setCommodityCurrencyCode(?string $commodityCurrencyCode) : self
    {
        $this->initialized['commodityCurrencyCode'] = true;
        $this->commodityCurrencyCode = $commodityCurrencyCode;
        return $this;
    }
    /**
     * Specifies the number of product units to be shipped. The total price of the entire number of shipmentItems may not exceed 999999999999.99, 1 or greater than 1
     *
     * @return int|null
     */
    public function getQuantity() : ?int
    {
        return $this->quantity;
    }
    /**
     * Specifies the number of product units to be shipped. The total price of the entire number of shipmentItems may not exceed 999999999999.99, 1 or greater than 1
     *
     * @param int|null $quantity
     *
     * @return self
     */
    public function setQuantity(?int $quantity) : self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Specify unit of measure. Check UOM List in the Appendices section
     *
     * @return string|null
     */
    public function getUOM() : ?string
    {
        return $this->uOM;
    }
    /**
     * Specify unit of measure. Check UOM List in the Appendices section
     *
     * @param string|null $uOM
     *
     * @return self
     */
    public function setUOM(?string $uOM) : self
    {
        $this->initialized['uOM'] = true;
        $this->uOM = $uOM;
        return $this;
    }
    /**
     * Specifies a valid HS or HTS code for the shipment�s destination or import country. This field is required if description is not provided. Valid HTS Code with or without periods
     *
     * @return string|null
     */
    public function getHsCode() : ?string
    {
        return $this->hsCode;
    }
    /**
     * Specifies a valid HS or HTS code for the shipment�s destination or import country. This field is required if description is not provided. Valid HTS Code with or without periods
     *
     * @param string|null $hsCode
     *
     * @return self
     */
    public function setHsCode(?string $hsCode) : self
    {
        $this->initialized['hsCode'] = true;
        $this->hsCode = $hsCode;
        return $this;
    }
    /**
     * This field is populated with description of the commodity. This field is required if hsCode is not provided.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * This field is populated with description of the commodity. This field is required if hsCode is not provided.
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
     * Country of Manufacture or origin.
     *
     * @return string|null
     */
    public function getOriginCountryCode() : ?string
    {
        return $this->originCountryCode;
    }
    /**
     * Country of Manufacture or origin.
     *
     * @param string|null $originCountryCode
     *
     * @return self
     */
    public function setOriginCountryCode(?string $originCountryCode) : self
    {
        $this->initialized['originCountryCode'] = true;
        $this->originCountryCode = $originCountryCode;
        return $this;
    }
}