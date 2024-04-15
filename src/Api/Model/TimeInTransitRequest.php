<?php

namespace ShipStream\Ups\Api\Model;

class TimeInTransitRequest extends \ArrayObject
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
    * The country code of the origin shipment. 
    Valid Values: 
    Must conform to the ISO-defined country codes.  Refer to Country or Territory Codoes in the Appendix for valid values.
    *
    * @var string|null
    */
    protected $originCountryCode;
    /**
    * The shipment origin state or province.  For U.S. addresses, the value must be a valid 2-character value (per U.S. Mail standards) 
    For non-U.S. addresses the full State or Province name should be provided.
    *
    * @var string|null
    */
    protected $originStateProvince;
    /**
     * Required for International requests for those countries that do not utilize postal codes.  The shipment origin city.
     *
     * @var string|null
     */
    protected $originCityName;
    /**
     * The shipment origin town.  Town is a subdivision of city.
     *
     * @var string|null
     */
    protected $originTownName;
    /**
    * Required for Domestic requests.  The shipment origin postal code.  
    Either 5- or 9- digit US zip codes must be used for U.S. addresses.  For non-U.S. addresses, this is recommended for all countries that utilize postal codes.
    *
    * @var string|null
    */
    protected $originPostalCode;
    /**
    * The country code of the destination.  
    Valid values: 
    Must conform to ISO-defined country codes.
    *
    * @var string|null
    */
    protected $destinationCountryCode;
    /**
    * The shipment destination state or province.  For U.S. addresses, the value must be a valid 2-character value (per U.S. Mail standards).  
    For non-U.S. addresses the full State or Province name should be provided.
    *
    * @var string|null
    */
    protected $destinationStateProvince;
    /**
     * Required for International Requests for those countries that do not utilize postal codes. The shipment destination city.
     *
     * @var string|null
     */
    protected $destinationCityName;
    /**
     * The shipment destination town.  Town is a subdivision of city.
     *
     * @var string|null
     */
    protected $destinationTownName;
    /**
    * The shipment destination postal code.  
    Required for Domestic requests. Either 5- or 9-digit U.S. zip codes must be used for U.S. addresses.  For non-U.S. addresses, this is recommended for all countries that utilize postal codes.
    *
    * @var string|null
    */
    protected $destinationPostalCode;
    /**
    * Required for Domestic requests. 
    
    Valid values: "01", "02" 
    01 = Residential 
    02 = Commercial 
    
    Defaults to commercial for International Requests.
    *
    * @var string|null
    */
    protected $residentialIndicator;
    /**
    * The date the shipment is tendered to UPS for shipping (can be dropped off at UPS or picked up by UPS).  This date may or may not be the UPS business date.  Format is YYYY-MM-DD.  YYYY = 4 digit year; MM = 2 digit month, valid values 01-12; DD = 2 digit day of month, valid values 01-31 
    If no value is provided, defaults to current system date.
    *
    * @var string|null
    */
    protected $shipDate;
    /**
    * The time the shipment is tendered to UPS for shipping (can be dropped off at UPS or picked up by UPS).  
    Format is HH:MM:SS
    *
    * @var string|null
    */
    protected $shipTime;
    /**
    * Required for International requests.  The weight of the shipment. 
    
    Note: If decimal values are used, valid values will be rounded to the tenths.  
    
    Note: Maximum value is 70 kilograms or 150 pounds.
    *
    * @var float|null
    */
    protected $weight;
    /**
    * Required for International requests and when weight value is provided. 
    
    Valid Values: "LBS", "KGS"
    *
    * @var string|null
    */
    protected $weightUnitOfMeasure;
    /**
    * The monetary value of shpment contents. 
    
    Required when origin country does not equal destination country and BillType is 03 (non-documented) or 04 (WWEF) 
    
    Required when origin country does not equal destination country, and destination country = CA, and BIllType = 02 (document). 
    
    Note: If decimal values are used, valid values will be rounded to the tenths.
    *
    * @var float|null
    */
    protected $shipmentContentsValue;
    /**
    * Required if ShipmentContentsValue is populated.  The unit of currency used for values.  
    Valid value: must conform to ISO standards.
    *
    * @var string|null
    */
    protected $shipmentContentsCurrencyCode;
    /**
    * Required for International Requests. 
    Valid values: "02","03","04" 
    02 - Document 
    03 - Non Document 
    04 - WWEF (Pallet)
    *
    * @var string|null
    */
    protected $billType;
    /**
    * Used to bypass address validation when the address has already been validated by the calling application.  
    
    Valid values: true, false 
    
    Defaults to true 
    Note: not to be exposed to external customers.
    *
    * @var bool|null
    */
    protected $avvFlag;
    /**
     * Sets the number of packages in shipment.  Default value is 1.
     *
     * @var int|null
     */
    protected $numberOfPackages;
    /**
    * Sets the indicator for an international Freight Pallet shipment that is going to be dropped off by shipper to a UPS facility.  The indicator is used when the Bill Type is "04".  
    
    Valid values: "0", "1". 
    
    0 = WWDTProcessIF.PICKUP_BY_UPS 
    1 = WWDTProcessIf.DROPOFF_BY_SHIPPER 
    
    The default value is "0" 
    *
    * @var int|null
    */
    protected $dropOffAtFacilityIndicator;
    /**
    * Sets the indicator for an international Freight Pallet shipment that is going to be pick-up by consignee in a destination facility.  The indicator is used when the Bill Type is "04".  
    
    Valid values: "0", "1". 
    
    0 = WWDTProcessIF.DELIVERY_BY_UPS 
    1 = WWDTProcessIf.PICKUP_BY_CONSIGNEE 
    
    The default value is "0" 
    *
    * @var int|null
    */
    protected $holdForPickupIndicator;
    /**
    * Used to get back a full list of services - bypassing current WWDT business rules to remove services from the list being returned to clients for US domestic that are slower than UPS Ground.  
    
    Default value is false.
    *
    * @var bool|null
    */
    protected $returnUnfilterdServices;
    /**
    * Sets the limit for the number of candidates returned in candidate list.  
    
    Default value is 200.
    *
    * @var int|null
    */
    protected $maxList;
    /**
    * The country code of the origin shipment. 
    Valid Values: 
    Must conform to the ISO-defined country codes.  Refer to Country or Territory Codoes in the Appendix for valid values.
    *
    * @return string|null
    */
    public function getOriginCountryCode() : ?string
    {
        return $this->originCountryCode;
    }
    /**
    * The country code of the origin shipment. 
    Valid Values: 
    Must conform to the ISO-defined country codes.  Refer to Country or Territory Codoes in the Appendix for valid values.
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
    /**
    * The shipment origin state or province.  For U.S. addresses, the value must be a valid 2-character value (per U.S. Mail standards) 
    For non-U.S. addresses the full State or Province name should be provided.
    *
    * @return string|null
    */
    public function getOriginStateProvince() : ?string
    {
        return $this->originStateProvince;
    }
    /**
    * The shipment origin state or province.  For U.S. addresses, the value must be a valid 2-character value (per U.S. Mail standards) 
    For non-U.S. addresses the full State or Province name should be provided.
    *
    * @param string|null $originStateProvince
    *
    * @return self
    */
    public function setOriginStateProvince(?string $originStateProvince) : self
    {
        $this->initialized['originStateProvince'] = true;
        $this->originStateProvince = $originStateProvince;
        return $this;
    }
    /**
     * Required for International requests for those countries that do not utilize postal codes.  The shipment origin city.
     *
     * @return string|null
     */
    public function getOriginCityName() : ?string
    {
        return $this->originCityName;
    }
    /**
     * Required for International requests for those countries that do not utilize postal codes.  The shipment origin city.
     *
     * @param string|null $originCityName
     *
     * @return self
     */
    public function setOriginCityName(?string $originCityName) : self
    {
        $this->initialized['originCityName'] = true;
        $this->originCityName = $originCityName;
        return $this;
    }
    /**
     * The shipment origin town.  Town is a subdivision of city.
     *
     * @return string|null
     */
    public function getOriginTownName() : ?string
    {
        return $this->originTownName;
    }
    /**
     * The shipment origin town.  Town is a subdivision of city.
     *
     * @param string|null $originTownName
     *
     * @return self
     */
    public function setOriginTownName(?string $originTownName) : self
    {
        $this->initialized['originTownName'] = true;
        $this->originTownName = $originTownName;
        return $this;
    }
    /**
    * Required for Domestic requests.  The shipment origin postal code.  
    Either 5- or 9- digit US zip codes must be used for U.S. addresses.  For non-U.S. addresses, this is recommended for all countries that utilize postal codes.
    *
    * @return string|null
    */
    public function getOriginPostalCode() : ?string
    {
        return $this->originPostalCode;
    }
    /**
    * Required for Domestic requests.  The shipment origin postal code.  
    Either 5- or 9- digit US zip codes must be used for U.S. addresses.  For non-U.S. addresses, this is recommended for all countries that utilize postal codes.
    *
    * @param string|null $originPostalCode
    *
    * @return self
    */
    public function setOriginPostalCode(?string $originPostalCode) : self
    {
        $this->initialized['originPostalCode'] = true;
        $this->originPostalCode = $originPostalCode;
        return $this;
    }
    /**
    * The country code of the destination.  
    Valid values: 
    Must conform to ISO-defined country codes.
    *
    * @return string|null
    */
    public function getDestinationCountryCode() : ?string
    {
        return $this->destinationCountryCode;
    }
    /**
    * The country code of the destination.  
    Valid values: 
    Must conform to ISO-defined country codes.
    *
    * @param string|null $destinationCountryCode
    *
    * @return self
    */
    public function setDestinationCountryCode(?string $destinationCountryCode) : self
    {
        $this->initialized['destinationCountryCode'] = true;
        $this->destinationCountryCode = $destinationCountryCode;
        return $this;
    }
    /**
    * The shipment destination state or province.  For U.S. addresses, the value must be a valid 2-character value (per U.S. Mail standards).  
    For non-U.S. addresses the full State or Province name should be provided.
    *
    * @return string|null
    */
    public function getDestinationStateProvince() : ?string
    {
        return $this->destinationStateProvince;
    }
    /**
    * The shipment destination state or province.  For U.S. addresses, the value must be a valid 2-character value (per U.S. Mail standards).  
    For non-U.S. addresses the full State or Province name should be provided.
    *
    * @param string|null $destinationStateProvince
    *
    * @return self
    */
    public function setDestinationStateProvince(?string $destinationStateProvince) : self
    {
        $this->initialized['destinationStateProvince'] = true;
        $this->destinationStateProvince = $destinationStateProvince;
        return $this;
    }
    /**
     * Required for International Requests for those countries that do not utilize postal codes. The shipment destination city.
     *
     * @return string|null
     */
    public function getDestinationCityName() : ?string
    {
        return $this->destinationCityName;
    }
    /**
     * Required for International Requests for those countries that do not utilize postal codes. The shipment destination city.
     *
     * @param string|null $destinationCityName
     *
     * @return self
     */
    public function setDestinationCityName(?string $destinationCityName) : self
    {
        $this->initialized['destinationCityName'] = true;
        $this->destinationCityName = $destinationCityName;
        return $this;
    }
    /**
     * The shipment destination town.  Town is a subdivision of city.
     *
     * @return string|null
     */
    public function getDestinationTownName() : ?string
    {
        return $this->destinationTownName;
    }
    /**
     * The shipment destination town.  Town is a subdivision of city.
     *
     * @param string|null $destinationTownName
     *
     * @return self
     */
    public function setDestinationTownName(?string $destinationTownName) : self
    {
        $this->initialized['destinationTownName'] = true;
        $this->destinationTownName = $destinationTownName;
        return $this;
    }
    /**
    * The shipment destination postal code.  
    Required for Domestic requests. Either 5- or 9-digit U.S. zip codes must be used for U.S. addresses.  For non-U.S. addresses, this is recommended for all countries that utilize postal codes.
    *
    * @return string|null
    */
    public function getDestinationPostalCode() : ?string
    {
        return $this->destinationPostalCode;
    }
    /**
    * The shipment destination postal code.  
    Required for Domestic requests. Either 5- or 9-digit U.S. zip codes must be used for U.S. addresses.  For non-U.S. addresses, this is recommended for all countries that utilize postal codes.
    *
    * @param string|null $destinationPostalCode
    *
    * @return self
    */
    public function setDestinationPostalCode(?string $destinationPostalCode) : self
    {
        $this->initialized['destinationPostalCode'] = true;
        $this->destinationPostalCode = $destinationPostalCode;
        return $this;
    }
    /**
    * Required for Domestic requests. 
    
    Valid values: "01", "02" 
    01 = Residential 
    02 = Commercial 
    
    Defaults to commercial for International Requests.
    *
    * @return string|null
    */
    public function getResidentialIndicator() : ?string
    {
        return $this->residentialIndicator;
    }
    /**
    * Required for Domestic requests. 
    
    Valid values: "01", "02" 
    01 = Residential 
    02 = Commercial 
    
    Defaults to commercial for International Requests.
    *
    * @param string|null $residentialIndicator
    *
    * @return self
    */
    public function setResidentialIndicator(?string $residentialIndicator) : self
    {
        $this->initialized['residentialIndicator'] = true;
        $this->residentialIndicator = $residentialIndicator;
        return $this;
    }
    /**
    * The date the shipment is tendered to UPS for shipping (can be dropped off at UPS or picked up by UPS).  This date may or may not be the UPS business date.  Format is YYYY-MM-DD.  YYYY = 4 digit year; MM = 2 digit month, valid values 01-12; DD = 2 digit day of month, valid values 01-31 
    If no value is provided, defaults to current system date.
    *
    * @return string|null
    */
    public function getShipDate() : ?string
    {
        return $this->shipDate;
    }
    /**
    * The date the shipment is tendered to UPS for shipping (can be dropped off at UPS or picked up by UPS).  This date may or may not be the UPS business date.  Format is YYYY-MM-DD.  YYYY = 4 digit year; MM = 2 digit month, valid values 01-12; DD = 2 digit day of month, valid values 01-31 
    If no value is provided, defaults to current system date.
    *
    * @param string|null $shipDate
    *
    * @return self
    */
    public function setShipDate(?string $shipDate) : self
    {
        $this->initialized['shipDate'] = true;
        $this->shipDate = $shipDate;
        return $this;
    }
    /**
    * The time the shipment is tendered to UPS for shipping (can be dropped off at UPS or picked up by UPS).  
    Format is HH:MM:SS
    *
    * @return string|null
    */
    public function getShipTime() : ?string
    {
        return $this->shipTime;
    }
    /**
    * The time the shipment is tendered to UPS for shipping (can be dropped off at UPS or picked up by UPS).  
    Format is HH:MM:SS
    *
    * @param string|null $shipTime
    *
    * @return self
    */
    public function setShipTime(?string $shipTime) : self
    {
        $this->initialized['shipTime'] = true;
        $this->shipTime = $shipTime;
        return $this;
    }
    /**
    * Required for International requests.  The weight of the shipment. 
    
    Note: If decimal values are used, valid values will be rounded to the tenths.  
    
    Note: Maximum value is 70 kilograms or 150 pounds.
    *
    * @return float|null
    */
    public function getWeight() : ?float
    {
        return $this->weight;
    }
    /**
    * Required for International requests.  The weight of the shipment. 
    
    Note: If decimal values are used, valid values will be rounded to the tenths.  
    
    Note: Maximum value is 70 kilograms or 150 pounds.
    *
    * @param float|null $weight
    *
    * @return self
    */
    public function setWeight(?float $weight) : self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
    * Required for International requests and when weight value is provided. 
    
    Valid Values: "LBS", "KGS"
    *
    * @return string|null
    */
    public function getWeightUnitOfMeasure() : ?string
    {
        return $this->weightUnitOfMeasure;
    }
    /**
    * Required for International requests and when weight value is provided. 
    
    Valid Values: "LBS", "KGS"
    *
    * @param string|null $weightUnitOfMeasure
    *
    * @return self
    */
    public function setWeightUnitOfMeasure(?string $weightUnitOfMeasure) : self
    {
        $this->initialized['weightUnitOfMeasure'] = true;
        $this->weightUnitOfMeasure = $weightUnitOfMeasure;
        return $this;
    }
    /**
    * The monetary value of shpment contents. 
    
    Required when origin country does not equal destination country and BillType is 03 (non-documented) or 04 (WWEF) 
    
    Required when origin country does not equal destination country, and destination country = CA, and BIllType = 02 (document). 
    
    Note: If decimal values are used, valid values will be rounded to the tenths.
    *
    * @return float|null
    */
    public function getShipmentContentsValue() : ?float
    {
        return $this->shipmentContentsValue;
    }
    /**
    * The monetary value of shpment contents. 
    
    Required when origin country does not equal destination country and BillType is 03 (non-documented) or 04 (WWEF) 
    
    Required when origin country does not equal destination country, and destination country = CA, and BIllType = 02 (document). 
    
    Note: If decimal values are used, valid values will be rounded to the tenths.
    *
    * @param float|null $shipmentContentsValue
    *
    * @return self
    */
    public function setShipmentContentsValue(?float $shipmentContentsValue) : self
    {
        $this->initialized['shipmentContentsValue'] = true;
        $this->shipmentContentsValue = $shipmentContentsValue;
        return $this;
    }
    /**
    * Required if ShipmentContentsValue is populated.  The unit of currency used for values.  
    Valid value: must conform to ISO standards.
    *
    * @return string|null
    */
    public function getShipmentContentsCurrencyCode() : ?string
    {
        return $this->shipmentContentsCurrencyCode;
    }
    /**
    * Required if ShipmentContentsValue is populated.  The unit of currency used for values.  
    Valid value: must conform to ISO standards.
    *
    * @param string|null $shipmentContentsCurrencyCode
    *
    * @return self
    */
    public function setShipmentContentsCurrencyCode(?string $shipmentContentsCurrencyCode) : self
    {
        $this->initialized['shipmentContentsCurrencyCode'] = true;
        $this->shipmentContentsCurrencyCode = $shipmentContentsCurrencyCode;
        return $this;
    }
    /**
    * Required for International Requests. 
    Valid values: "02","03","04" 
    02 - Document 
    03 - Non Document 
    04 - WWEF (Pallet)
    *
    * @return string|null
    */
    public function getBillType() : ?string
    {
        return $this->billType;
    }
    /**
    * Required for International Requests. 
    Valid values: "02","03","04" 
    02 - Document 
    03 - Non Document 
    04 - WWEF (Pallet)
    *
    * @param string|null $billType
    *
    * @return self
    */
    public function setBillType(?string $billType) : self
    {
        $this->initialized['billType'] = true;
        $this->billType = $billType;
        return $this;
    }
    /**
    * Used to bypass address validation when the address has already been validated by the calling application.  
    
    Valid values: true, false 
    
    Defaults to true 
    Note: not to be exposed to external customers.
    *
    * @return bool|null
    */
    public function getAvvFlag() : ?bool
    {
        return $this->avvFlag;
    }
    /**
    * Used to bypass address validation when the address has already been validated by the calling application.  
    
    Valid values: true, false 
    
    Defaults to true 
    Note: not to be exposed to external customers.
    *
    * @param bool|null $avvFlag
    *
    * @return self
    */
    public function setAvvFlag(?bool $avvFlag) : self
    {
        $this->initialized['avvFlag'] = true;
        $this->avvFlag = $avvFlag;
        return $this;
    }
    /**
     * Sets the number of packages in shipment.  Default value is 1.
     *
     * @return int|null
     */
    public function getNumberOfPackages() : ?int
    {
        return $this->numberOfPackages;
    }
    /**
     * Sets the number of packages in shipment.  Default value is 1.
     *
     * @param int|null $numberOfPackages
     *
     * @return self
     */
    public function setNumberOfPackages(?int $numberOfPackages) : self
    {
        $this->initialized['numberOfPackages'] = true;
        $this->numberOfPackages = $numberOfPackages;
        return $this;
    }
    /**
    * Sets the indicator for an international Freight Pallet shipment that is going to be dropped off by shipper to a UPS facility.  The indicator is used when the Bill Type is "04".  
    
    Valid values: "0", "1". 
    
    0 = WWDTProcessIF.PICKUP_BY_UPS 
    1 = WWDTProcessIf.DROPOFF_BY_SHIPPER 
    
    The default value is "0" 
    *
    * @return int|null
    */
    public function getDropOffAtFacilityIndicator() : ?int
    {
        return $this->dropOffAtFacilityIndicator;
    }
    /**
    * Sets the indicator for an international Freight Pallet shipment that is going to be dropped off by shipper to a UPS facility.  The indicator is used when the Bill Type is "04".  
    
    Valid values: "0", "1". 
    
    0 = WWDTProcessIF.PICKUP_BY_UPS 
    1 = WWDTProcessIf.DROPOFF_BY_SHIPPER 
    
    The default value is "0" 
    *
    * @param int|null $dropOffAtFacilityIndicator
    *
    * @return self
    */
    public function setDropOffAtFacilityIndicator(?int $dropOffAtFacilityIndicator) : self
    {
        $this->initialized['dropOffAtFacilityIndicator'] = true;
        $this->dropOffAtFacilityIndicator = $dropOffAtFacilityIndicator;
        return $this;
    }
    /**
    * Sets the indicator for an international Freight Pallet shipment that is going to be pick-up by consignee in a destination facility.  The indicator is used when the Bill Type is "04".  
    
    Valid values: "0", "1". 
    
    0 = WWDTProcessIF.DELIVERY_BY_UPS 
    1 = WWDTProcessIf.PICKUP_BY_CONSIGNEE 
    
    The default value is "0" 
    *
    * @return int|null
    */
    public function getHoldForPickupIndicator() : ?int
    {
        return $this->holdForPickupIndicator;
    }
    /**
    * Sets the indicator for an international Freight Pallet shipment that is going to be pick-up by consignee in a destination facility.  The indicator is used when the Bill Type is "04".  
    
    Valid values: "0", "1". 
    
    0 = WWDTProcessIF.DELIVERY_BY_UPS 
    1 = WWDTProcessIf.PICKUP_BY_CONSIGNEE 
    
    The default value is "0" 
    *
    * @param int|null $holdForPickupIndicator
    *
    * @return self
    */
    public function setHoldForPickupIndicator(?int $holdForPickupIndicator) : self
    {
        $this->initialized['holdForPickupIndicator'] = true;
        $this->holdForPickupIndicator = $holdForPickupIndicator;
        return $this;
    }
    /**
    * Used to get back a full list of services - bypassing current WWDT business rules to remove services from the list being returned to clients for US domestic that are slower than UPS Ground.  
    
    Default value is false.
    *
    * @return bool|null
    */
    public function getReturnUnfilterdServices() : ?bool
    {
        return $this->returnUnfilterdServices;
    }
    /**
    * Used to get back a full list of services - bypassing current WWDT business rules to remove services from the list being returned to clients for US domestic that are slower than UPS Ground.  
    
    Default value is false.
    *
    * @param bool|null $returnUnfilterdServices
    *
    * @return self
    */
    public function setReturnUnfilterdServices(?bool $returnUnfilterdServices) : self
    {
        $this->initialized['returnUnfilterdServices'] = true;
        $this->returnUnfilterdServices = $returnUnfilterdServices;
        return $this;
    }
    /**
    * Sets the limit for the number of candidates returned in candidate list.  
    
    Default value is 200.
    *
    * @return int|null
    */
    public function getMaxList() : ?int
    {
        return $this->maxList;
    }
    /**
    * Sets the limit for the number of candidates returned in candidate list.  
    
    Default value is 200.
    *
    * @param int|null $maxList
    *
    * @return self
    */
    public function setMaxList(?int $maxList) : self
    {
        $this->initialized['maxList'] = true;
        $this->maxList = $maxList;
        return $this;
    }
}