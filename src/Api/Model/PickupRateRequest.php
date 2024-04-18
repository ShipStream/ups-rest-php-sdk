<?php

namespace ShipStream\Ups\Api\Model;

class PickupRateRequest extends \ArrayObject
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
     * Common element for all services
     *
     * @var PickupRateRequestRequest
     */
    protected $request;
    /**
     * Shipper account information.
     *
     * @var PickupRateRequestShipperAccount
     */
    protected $shipperAccount;
    /**
     * The address to pickup the packages
     *
     * @var PickupRateRequestPickupAddress
     */
    protected $pickupAddress;
    /**
    * Indicates if the pickup address is different than the address specified in the customer's profile.  
    Valid values:
    Y = Alternate address
    N = Original pickup address (default)
    *
    * @var string
    */
    protected $alternateAddressIndicator;
    /**
    * Indicates the pickup timeframe.
    - 01 = Same-Day Pickup
    - 02 = Future-Day Pickup
    - 03 = A Specific-Day Pickup
    
    If 03 is selected, then PickupDate, EarliestReadyTime, and LatestClosetime must be specified.
    *
    * @var string
    */
    protected $serviceDateOption;
    /**
    * Required if the ServiceDateOption is: 
    03 A Specific-Day Pickup
    *
    * @var PickupRateRequestPickupDateInfo
    */
    protected $pickupDateInfo;
    /**
    * Rate Type with which pickup is rated. Possible RateChart values for different regions will be:
    
    US 48 origin:
    1 – Daily Rates
    3 – Standard List Rates
    4 – Retail Rates.
    
    Alaska/Hawaii origin:
    1 – Daily Rates
    3 – Standard List Rates
    4 – Retail Rates.
    
    All Other origins:
    1 – Rates
    5 - Regional Rates
    6 - General List Rates.
    
    3 and 4 do not apply
    
    *
    * @var string
    */
    protected $rateChartType;
    /**
    * Indicates whether to return detailed taxes for on-callpickups.
    Valid values:
    - Y = Rate this pickup with taxes
    - N = Do not rate this pickup with taxes (default)
    *
    * @var string
    */
    protected $taxInformationIndicator;
    /**
    * Indicates whether to return user level promo discount for the on-callpickups. 
    Valid values:
    Y = Rate this pickup with user level promo discount
    N = Do not rate this pickup with user level promo discount(default)
    *
    * @var string
    */
    protected $userLevelDiscountIndicator;
    /**
     * Common element for all services
     *
     * @return PickupRateRequestRequest
     */
    public function getRequest() : PickupRateRequestRequest
    {
        return $this->request;
    }
    /**
     * Common element for all services
     *
     * @param PickupRateRequestRequest $request
     *
     * @return self
     */
    public function setRequest(PickupRateRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
     * Shipper account information.
     *
     * @return PickupRateRequestShipperAccount
     */
    public function getShipperAccount() : PickupRateRequestShipperAccount
    {
        return $this->shipperAccount;
    }
    /**
     * Shipper account information.
     *
     * @param PickupRateRequestShipperAccount $shipperAccount
     *
     * @return self
     */
    public function setShipperAccount(PickupRateRequestShipperAccount $shipperAccount) : self
    {
        $this->initialized['shipperAccount'] = true;
        $this->shipperAccount = $shipperAccount;
        return $this;
    }
    /**
     * The address to pickup the packages
     *
     * @return PickupRateRequestPickupAddress
     */
    public function getPickupAddress() : PickupRateRequestPickupAddress
    {
        return $this->pickupAddress;
    }
    /**
     * The address to pickup the packages
     *
     * @param PickupRateRequestPickupAddress $pickupAddress
     *
     * @return self
     */
    public function setPickupAddress(PickupRateRequestPickupAddress $pickupAddress) : self
    {
        $this->initialized['pickupAddress'] = true;
        $this->pickupAddress = $pickupAddress;
        return $this;
    }
    /**
    * Indicates if the pickup address is different than the address specified in the customer's profile.  
    Valid values:
    Y = Alternate address
    N = Original pickup address (default)
    *
    * @return string
    */
    public function getAlternateAddressIndicator() : string
    {
        return $this->alternateAddressIndicator;
    }
    /**
    * Indicates if the pickup address is different than the address specified in the customer's profile.  
    Valid values:
    Y = Alternate address
    N = Original pickup address (default)
    *
    * @param string $alternateAddressIndicator
    *
    * @return self
    */
    public function setAlternateAddressIndicator(string $alternateAddressIndicator) : self
    {
        $this->initialized['alternateAddressIndicator'] = true;
        $this->alternateAddressIndicator = $alternateAddressIndicator;
        return $this;
    }
    /**
    * Indicates the pickup timeframe.
    - 01 = Same-Day Pickup
    - 02 = Future-Day Pickup
    - 03 = A Specific-Day Pickup
    
    If 03 is selected, then PickupDate, EarliestReadyTime, and LatestClosetime must be specified.
    *
    * @return string
    */
    public function getServiceDateOption() : string
    {
        return $this->serviceDateOption;
    }
    /**
    * Indicates the pickup timeframe.
    - 01 = Same-Day Pickup
    - 02 = Future-Day Pickup
    - 03 = A Specific-Day Pickup
    
    If 03 is selected, then PickupDate, EarliestReadyTime, and LatestClosetime must be specified.
    *
    * @param string $serviceDateOption
    *
    * @return self
    */
    public function setServiceDateOption(string $serviceDateOption) : self
    {
        $this->initialized['serviceDateOption'] = true;
        $this->serviceDateOption = $serviceDateOption;
        return $this;
    }
    /**
    * Required if the ServiceDateOption is: 
    03 A Specific-Day Pickup
    *
    * @return PickupRateRequestPickupDateInfo
    */
    public function getPickupDateInfo() : PickupRateRequestPickupDateInfo
    {
        return $this->pickupDateInfo;
    }
    /**
    * Required if the ServiceDateOption is: 
    03 A Specific-Day Pickup
    *
    * @param PickupRateRequestPickupDateInfo $pickupDateInfo
    *
    * @return self
    */
    public function setPickupDateInfo(PickupRateRequestPickupDateInfo $pickupDateInfo) : self
    {
        $this->initialized['pickupDateInfo'] = true;
        $this->pickupDateInfo = $pickupDateInfo;
        return $this;
    }
    /**
    * Rate Type with which pickup is rated. Possible RateChart values for different regions will be:
    
    US 48 origin:
    1 – Daily Rates
    3 – Standard List Rates
    4 – Retail Rates.
    
    Alaska/Hawaii origin:
    1 – Daily Rates
    3 – Standard List Rates
    4 – Retail Rates.
    
    All Other origins:
    1 – Rates
    5 - Regional Rates
    6 - General List Rates.
    
    3 and 4 do not apply
    
    *
    * @return string
    */
    public function getRateChartType() : string
    {
        return $this->rateChartType;
    }
    /**
    * Rate Type with which pickup is rated. Possible RateChart values for different regions will be:
    
    US 48 origin:
    1 – Daily Rates
    3 – Standard List Rates
    4 – Retail Rates.
    
    Alaska/Hawaii origin:
    1 – Daily Rates
    3 – Standard List Rates
    4 – Retail Rates.
    
    All Other origins:
    1 – Rates
    5 - Regional Rates
    6 - General List Rates.
    
    3 and 4 do not apply
    
    *
    * @param string $rateChartType
    *
    * @return self
    */
    public function setRateChartType(string $rateChartType) : self
    {
        $this->initialized['rateChartType'] = true;
        $this->rateChartType = $rateChartType;
        return $this;
    }
    /**
    * Indicates whether to return detailed taxes for on-callpickups.
    Valid values:
    - Y = Rate this pickup with taxes
    - N = Do not rate this pickup with taxes (default)
    *
    * @return string
    */
    public function getTaxInformationIndicator() : string
    {
        return $this->taxInformationIndicator;
    }
    /**
    * Indicates whether to return detailed taxes for on-callpickups.
    Valid values:
    - Y = Rate this pickup with taxes
    - N = Do not rate this pickup with taxes (default)
    *
    * @param string $taxInformationIndicator
    *
    * @return self
    */
    public function setTaxInformationIndicator(string $taxInformationIndicator) : self
    {
        $this->initialized['taxInformationIndicator'] = true;
        $this->taxInformationIndicator = $taxInformationIndicator;
        return $this;
    }
    /**
    * Indicates whether to return user level promo discount for the on-callpickups. 
    Valid values:
    Y = Rate this pickup with user level promo discount
    N = Do not rate this pickup with user level promo discount(default)
    *
    * @return string
    */
    public function getUserLevelDiscountIndicator() : string
    {
        return $this->userLevelDiscountIndicator;
    }
    /**
    * Indicates whether to return user level promo discount for the on-callpickups. 
    Valid values:
    Y = Rate this pickup with user level promo discount
    N = Do not rate this pickup with user level promo discount(default)
    *
    * @param string $userLevelDiscountIndicator
    *
    * @return self
    */
    public function setUserLevelDiscountIndicator(string $userLevelDiscountIndicator) : self
    {
        $this->initialized['userLevelDiscountIndicator'] = true;
        $this->userLevelDiscountIndicator = $userLevelDiscountIndicator;
        return $this;
    }
}