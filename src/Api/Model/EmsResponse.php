<?php

namespace ShipStream\Ups\Api\Model;

class EmsResponse extends \ArrayObject
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
    * The date the shipment is tendered to UPS for shipping (can be dropped off at UPS or picked up by UPS).  This date may or may not be the UPS business date. 
    
    Valid Format: YYYY-MM-DD
    *
    * @var string|null
    */
    protected $shipDate;
    /**
    * The time the shipment is tendered to UPS for shipping (can be dropped off at UPS or picked up by UPS).  
    
    Valid Format: HH:MM:SS
    *
    * @var string|null
    */
    protected $shipTime;
    /**
    * Service Levels being returned. 
    
    A = all service levels. 
    
    Blank is the default for all Service Level values.
    *
    * @var string|null
    */
    protected $serviceLevel;
    /**
    * Represents the shipment type. 
    
    Valid values: "02","03","04","07" 
    02 - Document 
    03 - Non-Document 
    04 - WWEF 
    07 - Pallet
    *
    * @var string|null
    */
    protected $billType;
    /**
    * Populated with valid duty types for international transactions only.  
    
    Valid Duty Types: "01","02","03","04","05","06","07","08","09" 
    01 - Dutiable 
    02 - Non Dutiable 
    03 - Low Value 
    04 - Courier Remission 
    05 - Gift 
    06 - Military 
    07 - Exception 
    08 - Line Release 
    09 - Low Value
    *
    * @var string|null
    */
    protected $dutyType;
    /**
    * residential Indicator that was sent in on the request. 
    
    Valid values: "01","02" 
    
    01 - Residential 
    02 - Commercial
    *
    * @var string|null
    */
    protected $residentialIndicator;
    /**
     * Destination country name value
     *
     * @var string|null
     */
    protected $destinationCountryName;
    /**
     * Destination country code, conforms to ISO-defined country codes.
     *
     * @var string|null
     */
    protected $destinationCountryCode;
    /**
    * The shipment destination postal code.  Required for US domestic requests. 
    
    Either 5- or 9-digit US zip codes must be used for U.S. addresses.  For non-US addresses, this is recommended for all countries that utilize postal codes.
    *
    * @var string|null
    */
    protected $destinationPostalCode;
    /**
    * The shipment destination postal code low range.  Value may or may not differ from destinationPostalCode.  
    
    Either 5- or 9-digit US zip codes must be used for U.S. addresses.  For non-US addresses, this is recommended for all countries that utilize postal codes.
    *
    * @var string|null
    */
    protected $destinationPostalCodeLow;
    /**
    * The shipment destination postal code high range.  Value may or may not differ from destinationPostalCode.  
    
    Either 5- or 9-digit US zip codes must be used for U.S. addresses.  For non-US addresses, this is recommended for all countries that utilize postal codes.
    *
    * @var string|null
    */
    protected $destinationPostalCodeHigh;
    /**
    * The shipment destination state or province. 
    
    For U.S. addresses, the value will be a valid 2-Character value (per U.S. Mail Standards). 
    
    For non-U.S. addresses the full State or Province name will be returned.
    *
    * @var string|null
    */
    protected $destinationStateProvince;
    /**
    * The shipment destination city. 
    
    Required for International requests for thsoe countries that do not utilize postal codes.
    *
    * @var string|null
    */
    protected $destinationCityName;
    /**
     * Origin country name value
     *
     * @var string|null
     */
    protected $originCountryName;
    /**
     * Origin country code, conforms to ISO-defined country codes.
     *
     * @var string|null
     */
    protected $originCountryCode;
    /**
    * The shipment origin postal code.  Required for US domestic requests. 
    
    Either 5- or 9-digit US zip codes must be used for U.S. addresses.  For non-US addresses, this is recommended for all countries that utilize postal codes.
    *
    * @var string|null
    */
    protected $originPostalCode;
    /**
    * The shipment origin postal code low range.  Value may or may not differ from destinationPostalCode.  
    
    Either 5- or 9-digit US zip codes must be used for U.S. addresses.  For non-US addresses, this is recommended for all countries that utilize postal codes.
    *
    * @var string|null
    */
    protected $originPostalCodeLow;
    /**
    * The shipment origin postal code high range.  Value may or may not differ from destinationPostalCode.  
    
    Either 5- or 9-digit US zip codes must be used for U.S. addresses.  For non-US addresses, this is recommended for all countries that utilize postal codes.
    *
    * @var string|null
    */
    protected $originPostalCodeHigh;
    /**
    * The shipment origin state or province. 
    
    For U.S. addresses, the value will be a valid 2-Character value (per U.S. Mail Standards). 
    
    For non-U.S. addresses the full State or Province name will be returned.
    *
    * @var string|null
    */
    protected $originStateProvince;
    /**
    * The shipment origin city. 
    
    Required for International requests for thsoe countries that do not utilize postal codes.
    *
    * @var string|null
    */
    protected $originCityName;
    /**
    * Shipment weight.  Value is only requried for international shipment.  
    
    Defaults to 0.0
    *
    * @var string|null
    */
    protected $weight;
    /**
     * Returned on response when weight was present on the request.
     *
     * @var string|null
     */
    protected $weightUnitOfMeasure;
    /**
    * Shipment contents value. Value is only required for international shipment. 
    
    Defaults to 0.0
    *
    * @var string|null
    */
    protected $shipmentContentsValue;
    /**
     * Returned on response when shipmentContentsValue was present on the request.
     *
     * @var string|null
     */
    protected $shipmentContentsCurrencyCode;
    /**
    * Returns TRUE if the shipment dates fall within a defined peak date range. When the guarantee is suspended, it is suspended for all services in the response. 
    
     The logic for determining if guarantees are suspended applies per origin country. 
    
    The following wil be used to determine if a shipment falls within a defined peak date range: shipDate (from the response), deliveryDate (from the response), server Date. 
    
    Defined peak date range (range for when guarantees are suspended) is inclusive of start and end dates.
    *
    * @var bool|null
    */
    protected $guaranteeSuspended;
    /**
     * Number of services being returned in the services array.
     *
     * @var int|null
     */
    protected $numberOfServices;
    /**
     * 
     *
     * @var list<Services>|null
     */
    protected $services;
    /**
    * The date the shipment is tendered to UPS for shipping (can be dropped off at UPS or picked up by UPS).  This date may or may not be the UPS business date. 
    
    Valid Format: YYYY-MM-DD
    *
    * @return string|null
    */
    public function getShipDate() : ?string
    {
        return $this->shipDate;
    }
    /**
    * The date the shipment is tendered to UPS for shipping (can be dropped off at UPS or picked up by UPS).  This date may or may not be the UPS business date. 
    
    Valid Format: YYYY-MM-DD
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
    
    Valid Format: HH:MM:SS
    *
    * @return string|null
    */
    public function getShipTime() : ?string
    {
        return $this->shipTime;
    }
    /**
    * The time the shipment is tendered to UPS for shipping (can be dropped off at UPS or picked up by UPS).  
    
    Valid Format: HH:MM:SS
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
    * Service Levels being returned. 
    
    A = all service levels. 
    
    Blank is the default for all Service Level values.
    *
    * @return string|null
    */
    public function getServiceLevel() : ?string
    {
        return $this->serviceLevel;
    }
    /**
    * Service Levels being returned. 
    
    A = all service levels. 
    
    Blank is the default for all Service Level values.
    *
    * @param string|null $serviceLevel
    *
    * @return self
    */
    public function setServiceLevel(?string $serviceLevel) : self
    {
        $this->initialized['serviceLevel'] = true;
        $this->serviceLevel = $serviceLevel;
        return $this;
    }
    /**
    * Represents the shipment type. 
    
    Valid values: "02","03","04","07" 
    02 - Document 
    03 - Non-Document 
    04 - WWEF 
    07 - Pallet
    *
    * @return string|null
    */
    public function getBillType() : ?string
    {
        return $this->billType;
    }
    /**
    * Represents the shipment type. 
    
    Valid values: "02","03","04","07" 
    02 - Document 
    03 - Non-Document 
    04 - WWEF 
    07 - Pallet
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
    * Populated with valid duty types for international transactions only.  
    
    Valid Duty Types: "01","02","03","04","05","06","07","08","09" 
    01 - Dutiable 
    02 - Non Dutiable 
    03 - Low Value 
    04 - Courier Remission 
    05 - Gift 
    06 - Military 
    07 - Exception 
    08 - Line Release 
    09 - Low Value
    *
    * @return string|null
    */
    public function getDutyType() : ?string
    {
        return $this->dutyType;
    }
    /**
    * Populated with valid duty types for international transactions only.  
    
    Valid Duty Types: "01","02","03","04","05","06","07","08","09" 
    01 - Dutiable 
    02 - Non Dutiable 
    03 - Low Value 
    04 - Courier Remission 
    05 - Gift 
    06 - Military 
    07 - Exception 
    08 - Line Release 
    09 - Low Value
    *
    * @param string|null $dutyType
    *
    * @return self
    */
    public function setDutyType(?string $dutyType) : self
    {
        $this->initialized['dutyType'] = true;
        $this->dutyType = $dutyType;
        return $this;
    }
    /**
    * residential Indicator that was sent in on the request. 
    
    Valid values: "01","02" 
    
    01 - Residential 
    02 - Commercial
    *
    * @return string|null
    */
    public function getResidentialIndicator() : ?string
    {
        return $this->residentialIndicator;
    }
    /**
    * residential Indicator that was sent in on the request. 
    
    Valid values: "01","02" 
    
    01 - Residential 
    02 - Commercial
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
     * Destination country name value
     *
     * @return string|null
     */
    public function getDestinationCountryName() : ?string
    {
        return $this->destinationCountryName;
    }
    /**
     * Destination country name value
     *
     * @param string|null $destinationCountryName
     *
     * @return self
     */
    public function setDestinationCountryName(?string $destinationCountryName) : self
    {
        $this->initialized['destinationCountryName'] = true;
        $this->destinationCountryName = $destinationCountryName;
        return $this;
    }
    /**
     * Destination country code, conforms to ISO-defined country codes.
     *
     * @return string|null
     */
    public function getDestinationCountryCode() : ?string
    {
        return $this->destinationCountryCode;
    }
    /**
     * Destination country code, conforms to ISO-defined country codes.
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
    * The shipment destination postal code.  Required for US domestic requests. 
    
    Either 5- or 9-digit US zip codes must be used for U.S. addresses.  For non-US addresses, this is recommended for all countries that utilize postal codes.
    *
    * @return string|null
    */
    public function getDestinationPostalCode() : ?string
    {
        return $this->destinationPostalCode;
    }
    /**
    * The shipment destination postal code.  Required for US domestic requests. 
    
    Either 5- or 9-digit US zip codes must be used for U.S. addresses.  For non-US addresses, this is recommended for all countries that utilize postal codes.
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
    * The shipment destination postal code low range.  Value may or may not differ from destinationPostalCode.  
    
    Either 5- or 9-digit US zip codes must be used for U.S. addresses.  For non-US addresses, this is recommended for all countries that utilize postal codes.
    *
    * @return string|null
    */
    public function getDestinationPostalCodeLow() : ?string
    {
        return $this->destinationPostalCodeLow;
    }
    /**
    * The shipment destination postal code low range.  Value may or may not differ from destinationPostalCode.  
    
    Either 5- or 9-digit US zip codes must be used for U.S. addresses.  For non-US addresses, this is recommended for all countries that utilize postal codes.
    *
    * @param string|null $destinationPostalCodeLow
    *
    * @return self
    */
    public function setDestinationPostalCodeLow(?string $destinationPostalCodeLow) : self
    {
        $this->initialized['destinationPostalCodeLow'] = true;
        $this->destinationPostalCodeLow = $destinationPostalCodeLow;
        return $this;
    }
    /**
    * The shipment destination postal code high range.  Value may or may not differ from destinationPostalCode.  
    
    Either 5- or 9-digit US zip codes must be used for U.S. addresses.  For non-US addresses, this is recommended for all countries that utilize postal codes.
    *
    * @return string|null
    */
    public function getDestinationPostalCodeHigh() : ?string
    {
        return $this->destinationPostalCodeHigh;
    }
    /**
    * The shipment destination postal code high range.  Value may or may not differ from destinationPostalCode.  
    
    Either 5- or 9-digit US zip codes must be used for U.S. addresses.  For non-US addresses, this is recommended for all countries that utilize postal codes.
    *
    * @param string|null $destinationPostalCodeHigh
    *
    * @return self
    */
    public function setDestinationPostalCodeHigh(?string $destinationPostalCodeHigh) : self
    {
        $this->initialized['destinationPostalCodeHigh'] = true;
        $this->destinationPostalCodeHigh = $destinationPostalCodeHigh;
        return $this;
    }
    /**
    * The shipment destination state or province. 
    
    For U.S. addresses, the value will be a valid 2-Character value (per U.S. Mail Standards). 
    
    For non-U.S. addresses the full State or Province name will be returned.
    *
    * @return string|null
    */
    public function getDestinationStateProvince() : ?string
    {
        return $this->destinationStateProvince;
    }
    /**
    * The shipment destination state or province. 
    
    For U.S. addresses, the value will be a valid 2-Character value (per U.S. Mail Standards). 
    
    For non-U.S. addresses the full State or Province name will be returned.
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
    * The shipment destination city. 
    
    Required for International requests for thsoe countries that do not utilize postal codes.
    *
    * @return string|null
    */
    public function getDestinationCityName() : ?string
    {
        return $this->destinationCityName;
    }
    /**
    * The shipment destination city. 
    
    Required for International requests for thsoe countries that do not utilize postal codes.
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
     * Origin country name value
     *
     * @return string|null
     */
    public function getOriginCountryName() : ?string
    {
        return $this->originCountryName;
    }
    /**
     * Origin country name value
     *
     * @param string|null $originCountryName
     *
     * @return self
     */
    public function setOriginCountryName(?string $originCountryName) : self
    {
        $this->initialized['originCountryName'] = true;
        $this->originCountryName = $originCountryName;
        return $this;
    }
    /**
     * Origin country code, conforms to ISO-defined country codes.
     *
     * @return string|null
     */
    public function getOriginCountryCode() : ?string
    {
        return $this->originCountryCode;
    }
    /**
     * Origin country code, conforms to ISO-defined country codes.
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
    * The shipment origin postal code.  Required for US domestic requests. 
    
    Either 5- or 9-digit US zip codes must be used for U.S. addresses.  For non-US addresses, this is recommended for all countries that utilize postal codes.
    *
    * @return string|null
    */
    public function getOriginPostalCode() : ?string
    {
        return $this->originPostalCode;
    }
    /**
    * The shipment origin postal code.  Required for US domestic requests. 
    
    Either 5- or 9-digit US zip codes must be used for U.S. addresses.  For non-US addresses, this is recommended for all countries that utilize postal codes.
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
    * The shipment origin postal code low range.  Value may or may not differ from destinationPostalCode.  
    
    Either 5- or 9-digit US zip codes must be used for U.S. addresses.  For non-US addresses, this is recommended for all countries that utilize postal codes.
    *
    * @return string|null
    */
    public function getOriginPostalCodeLow() : ?string
    {
        return $this->originPostalCodeLow;
    }
    /**
    * The shipment origin postal code low range.  Value may or may not differ from destinationPostalCode.  
    
    Either 5- or 9-digit US zip codes must be used for U.S. addresses.  For non-US addresses, this is recommended for all countries that utilize postal codes.
    *
    * @param string|null $originPostalCodeLow
    *
    * @return self
    */
    public function setOriginPostalCodeLow(?string $originPostalCodeLow) : self
    {
        $this->initialized['originPostalCodeLow'] = true;
        $this->originPostalCodeLow = $originPostalCodeLow;
        return $this;
    }
    /**
    * The shipment origin postal code high range.  Value may or may not differ from destinationPostalCode.  
    
    Either 5- or 9-digit US zip codes must be used for U.S. addresses.  For non-US addresses, this is recommended for all countries that utilize postal codes.
    *
    * @return string|null
    */
    public function getOriginPostalCodeHigh() : ?string
    {
        return $this->originPostalCodeHigh;
    }
    /**
    * The shipment origin postal code high range.  Value may or may not differ from destinationPostalCode.  
    
    Either 5- or 9-digit US zip codes must be used for U.S. addresses.  For non-US addresses, this is recommended for all countries that utilize postal codes.
    *
    * @param string|null $originPostalCodeHigh
    *
    * @return self
    */
    public function setOriginPostalCodeHigh(?string $originPostalCodeHigh) : self
    {
        $this->initialized['originPostalCodeHigh'] = true;
        $this->originPostalCodeHigh = $originPostalCodeHigh;
        return $this;
    }
    /**
    * The shipment origin state or province. 
    
    For U.S. addresses, the value will be a valid 2-Character value (per U.S. Mail Standards). 
    
    For non-U.S. addresses the full State or Province name will be returned.
    *
    * @return string|null
    */
    public function getOriginStateProvince() : ?string
    {
        return $this->originStateProvince;
    }
    /**
    * The shipment origin state or province. 
    
    For U.S. addresses, the value will be a valid 2-Character value (per U.S. Mail Standards). 
    
    For non-U.S. addresses the full State or Province name will be returned.
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
    * The shipment origin city. 
    
    Required for International requests for thsoe countries that do not utilize postal codes.
    *
    * @return string|null
    */
    public function getOriginCityName() : ?string
    {
        return $this->originCityName;
    }
    /**
    * The shipment origin city. 
    
    Required for International requests for thsoe countries that do not utilize postal codes.
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
    * Shipment weight.  Value is only requried for international shipment.  
    
    Defaults to 0.0
    *
    * @return string|null
    */
    public function getWeight() : ?string
    {
        return $this->weight;
    }
    /**
    * Shipment weight.  Value is only requried for international shipment.  
    
    Defaults to 0.0
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
     * Returned on response when weight was present on the request.
     *
     * @return string|null
     */
    public function getWeightUnitOfMeasure() : ?string
    {
        return $this->weightUnitOfMeasure;
    }
    /**
     * Returned on response when weight was present on the request.
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
    * Shipment contents value. Value is only required for international shipment. 
    
    Defaults to 0.0
    *
    * @return string|null
    */
    public function getShipmentContentsValue() : ?string
    {
        return $this->shipmentContentsValue;
    }
    /**
    * Shipment contents value. Value is only required for international shipment. 
    
    Defaults to 0.0
    *
    * @param string|null $shipmentContentsValue
    *
    * @return self
    */
    public function setShipmentContentsValue(?string $shipmentContentsValue) : self
    {
        $this->initialized['shipmentContentsValue'] = true;
        $this->shipmentContentsValue = $shipmentContentsValue;
        return $this;
    }
    /**
     * Returned on response when shipmentContentsValue was present on the request.
     *
     * @return string|null
     */
    public function getShipmentContentsCurrencyCode() : ?string
    {
        return $this->shipmentContentsCurrencyCode;
    }
    /**
     * Returned on response when shipmentContentsValue was present on the request.
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
    * Returns TRUE if the shipment dates fall within a defined peak date range. When the guarantee is suspended, it is suspended for all services in the response. 
    
     The logic for determining if guarantees are suspended applies per origin country. 
    
    The following wil be used to determine if a shipment falls within a defined peak date range: shipDate (from the response), deliveryDate (from the response), server Date. 
    
    Defined peak date range (range for when guarantees are suspended) is inclusive of start and end dates.
    *
    * @return bool|null
    */
    public function getGuaranteeSuspended() : ?bool
    {
        return $this->guaranteeSuspended;
    }
    /**
    * Returns TRUE if the shipment dates fall within a defined peak date range. When the guarantee is suspended, it is suspended for all services in the response. 
    
     The logic for determining if guarantees are suspended applies per origin country. 
    
    The following wil be used to determine if a shipment falls within a defined peak date range: shipDate (from the response), deliveryDate (from the response), server Date. 
    
    Defined peak date range (range for when guarantees are suspended) is inclusive of start and end dates.
    *
    * @param bool|null $guaranteeSuspended
    *
    * @return self
    */
    public function setGuaranteeSuspended(?bool $guaranteeSuspended) : self
    {
        $this->initialized['guaranteeSuspended'] = true;
        $this->guaranteeSuspended = $guaranteeSuspended;
        return $this;
    }
    /**
     * Number of services being returned in the services array.
     *
     * @return int|null
     */
    public function getNumberOfServices() : ?int
    {
        return $this->numberOfServices;
    }
    /**
     * Number of services being returned in the services array.
     *
     * @param int|null $numberOfServices
     *
     * @return self
     */
    public function setNumberOfServices(?int $numberOfServices) : self
    {
        $this->initialized['numberOfServices'] = true;
        $this->numberOfServices = $numberOfServices;
        return $this;
    }
    /**
     * 
     *
     * @return list<Services>|null
     */
    public function getServices() : ?array
    {
        return $this->services;
    }
    /**
     * 
     *
     * @param list<Services>|null $services
     *
     * @return self
     */
    public function setServices(?array $services) : self
    {
        $this->initialized['services'] = true;
        $this->services = $services;
        return $this;
    }
}