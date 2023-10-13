<?php

namespace ShipStream\Ups\Api\Model;

class QueryRequestShipment extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Two-character ISO country or territory code where the items shipped from. Cannot be the same as destination country or territory code.
     *
     * @var string
     */
    protected $originCountryCode;
    /**
     * State/Province Code of origin country. Required if the 			origin country is Canada CA or Brazil BR.
     *
     * @var string
     */
    protected $originStateProvinceCode;
    /**
     * Two-character ISO code ISO country or territory code where the items 			shipped to. Cannot be the same as origin country or territory code.
     *
     * @var string
     */
    protected $destinationCountryCode;
    /**
     * State/Province Code of destination country or territory. Required if 			the destination country is Canada CA or Brazil BR.
     *
     * @var string
     */
    protected $destinationStateProvinceCode;
    /**
    * Valid values:
    1 - Air
    2 - Ground
    3 - Rail
    4 -?? Ocean
    If 			not specified, default to Air.
    *
    * @var string
    */
    protected $transportationMode;
    /**
     * Container for the transportation charge for the shipment.
     *
     * @var ShipmentFreightCharges
     */
    protected $freightCharges;
    /**
     * Container for the insurance charge for the shipment.
     *
     * @var ShipmentAdditionalInsurance
     */
    protected $additionalInsurance;
    /**
    * Contains the indicator for global Tariff Code Alerts.
    0 = true, send tariff code alerts for all tariff codes in the request.
    1 = false, do not send tariff code alerts for any of the tariff codes in the request.
    This indicator setting supersedes the TariffCodeAlert settings in individual Product Type elements.
    Note: by setting this value to 1 false, you will not receive Tariff Code Alerts for the products in the request. 
    Note: Invalid values will result in the value being set to true.
    *
    * @var string
    */
    protected $tariffCodeAlert;
    /**
     * 
     *
     * @var ShipmentProduct[]
     */
    protected $product;
    /**
     * Currency code for the Landed Cost quote. Must be 			three-character ISO code.
     *
     * @var string
     */
    protected $resultCurrencyCode;
    /**
     * Two-character ISO country or territory code where the items shipped from. Cannot be the same as destination country or territory code.
     *
     * @return string
     */
    public function getOriginCountryCode() : string
    {
        return $this->originCountryCode;
    }
    /**
     * Two-character ISO country or territory code where the items shipped from. Cannot be the same as destination country or territory code.
     *
     * @param string $originCountryCode
     *
     * @return self
     */
    public function setOriginCountryCode(string $originCountryCode) : self
    {
        $this->initialized['originCountryCode'] = true;
        $this->originCountryCode = $originCountryCode;
        return $this;
    }
    /**
     * State/Province Code of origin country. Required if the 			origin country is Canada CA or Brazil BR.
     *
     * @return string
     */
    public function getOriginStateProvinceCode() : string
    {
        return $this->originStateProvinceCode;
    }
    /**
     * State/Province Code of origin country. Required if the 			origin country is Canada CA or Brazil BR.
     *
     * @param string $originStateProvinceCode
     *
     * @return self
     */
    public function setOriginStateProvinceCode(string $originStateProvinceCode) : self
    {
        $this->initialized['originStateProvinceCode'] = true;
        $this->originStateProvinceCode = $originStateProvinceCode;
        return $this;
    }
    /**
     * Two-character ISO code ISO country or territory code where the items 			shipped to. Cannot be the same as origin country or territory code.
     *
     * @return string
     */
    public function getDestinationCountryCode() : string
    {
        return $this->destinationCountryCode;
    }
    /**
     * Two-character ISO code ISO country or territory code where the items 			shipped to. Cannot be the same as origin country or territory code.
     *
     * @param string $destinationCountryCode
     *
     * @return self
     */
    public function setDestinationCountryCode(string $destinationCountryCode) : self
    {
        $this->initialized['destinationCountryCode'] = true;
        $this->destinationCountryCode = $destinationCountryCode;
        return $this;
    }
    /**
     * State/Province Code of destination country or territory. Required if 			the destination country is Canada CA or Brazil BR.
     *
     * @return string
     */
    public function getDestinationStateProvinceCode() : string
    {
        return $this->destinationStateProvinceCode;
    }
    /**
     * State/Province Code of destination country or territory. Required if 			the destination country is Canada CA or Brazil BR.
     *
     * @param string $destinationStateProvinceCode
     *
     * @return self
     */
    public function setDestinationStateProvinceCode(string $destinationStateProvinceCode) : self
    {
        $this->initialized['destinationStateProvinceCode'] = true;
        $this->destinationStateProvinceCode = $destinationStateProvinceCode;
        return $this;
    }
    /**
    * Valid values:
    1 - Air
    2 - Ground
    3 - Rail
    4 -?? Ocean
    If 			not specified, default to Air.
    *
    * @return string
    */
    public function getTransportationMode() : string
    {
        return $this->transportationMode;
    }
    /**
    * Valid values:
    1 - Air
    2 - Ground
    3 - Rail
    4 -?? Ocean
    If 			not specified, default to Air.
    *
    * @param string $transportationMode
    *
    * @return self
    */
    public function setTransportationMode(string $transportationMode) : self
    {
        $this->initialized['transportationMode'] = true;
        $this->transportationMode = $transportationMode;
        return $this;
    }
    /**
     * Container for the transportation charge for the shipment.
     *
     * @return ShipmentFreightCharges
     */
    public function getFreightCharges() : ShipmentFreightCharges
    {
        return $this->freightCharges;
    }
    /**
     * Container for the transportation charge for the shipment.
     *
     * @param ShipmentFreightCharges $freightCharges
     *
     * @return self
     */
    public function setFreightCharges(ShipmentFreightCharges $freightCharges) : self
    {
        $this->initialized['freightCharges'] = true;
        $this->freightCharges = $freightCharges;
        return $this;
    }
    /**
     * Container for the insurance charge for the shipment.
     *
     * @return ShipmentAdditionalInsurance
     */
    public function getAdditionalInsurance() : ShipmentAdditionalInsurance
    {
        return $this->additionalInsurance;
    }
    /**
     * Container for the insurance charge for the shipment.
     *
     * @param ShipmentAdditionalInsurance $additionalInsurance
     *
     * @return self
     */
    public function setAdditionalInsurance(ShipmentAdditionalInsurance $additionalInsurance) : self
    {
        $this->initialized['additionalInsurance'] = true;
        $this->additionalInsurance = $additionalInsurance;
        return $this;
    }
    /**
    * Contains the indicator for global Tariff Code Alerts.
    0 = true, send tariff code alerts for all tariff codes in the request.
    1 = false, do not send tariff code alerts for any of the tariff codes in the request.
    This indicator setting supersedes the TariffCodeAlert settings in individual Product Type elements.
    Note: by setting this value to 1 false, you will not receive Tariff Code Alerts for the products in the request. 
    Note: Invalid values will result in the value being set to true.
    *
    * @return string
    */
    public function getTariffCodeAlert() : string
    {
        return $this->tariffCodeAlert;
    }
    /**
    * Contains the indicator for global Tariff Code Alerts.
    0 = true, send tariff code alerts for all tariff codes in the request.
    1 = false, do not send tariff code alerts for any of the tariff codes in the request.
    This indicator setting supersedes the TariffCodeAlert settings in individual Product Type elements.
    Note: by setting this value to 1 false, you will not receive Tariff Code Alerts for the products in the request. 
    Note: Invalid values will result in the value being set to true.
    *
    * @param string $tariffCodeAlert
    *
    * @return self
    */
    public function setTariffCodeAlert(string $tariffCodeAlert) : self
    {
        $this->initialized['tariffCodeAlert'] = true;
        $this->tariffCodeAlert = $tariffCodeAlert;
        return $this;
    }
    /**
     * 
     *
     * @return ShipmentProduct[]
     */
    public function getProduct() : array
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param ShipmentProduct[] $product
     *
     * @return self
     */
    public function setProduct(array $product) : self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * Currency code for the Landed Cost quote. Must be 			three-character ISO code.
     *
     * @return string
     */
    public function getResultCurrencyCode() : string
    {
        return $this->resultCurrencyCode;
    }
    /**
     * Currency code for the Landed Cost quote. Must be 			three-character ISO code.
     *
     * @param string $resultCurrencyCode
     *
     * @return self
     */
    public function setResultCurrencyCode(string $resultCurrencyCode) : self
    {
        $this->initialized['resultCurrencyCode'] = true;
        $this->resultCurrencyCode = $resultCurrencyCode;
        return $this;
    }
}