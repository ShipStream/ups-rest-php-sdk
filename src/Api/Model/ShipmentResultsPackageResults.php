<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentResultsPackageResults extends \ArrayObject
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
    * Package 1Z number.  
    For Mail Innovations shipments, please use the USPSPICNumber when tracking packages (a non-1Z number Mail Manifest Id is returned).  Applicable only for ShipmentResponse and ShipAcceptResponse.
    *
    * @var string|null
    */
    protected $trackingNumber;
    /**
     * Container for returned Rate Modifier information. Applies only if SubVersion is 2205 or greater.
     *
     * @var PackageResultsRateModifier|null
     */
    protected $rateModifier;
    /**
    * Base Service Charge container.
    Transportation charge = BaseServiceCharge + Fuel charge  Returned only if Subversion >=1701.
    *
    * @var PackageResultsBaseServiceCharge|null
    */
    protected $baseServiceCharge;
    /**
     * Shipment charges info. Shipment charges are only guaranteed to be returned for shipments whose origin country or territory is US or Puerto Rico. Applicable only for ShipmentResponse and ShipAcceptResponse.
     *
     * @var PackageResultsServiceOptionsCharges|null
     */
    protected $serviceOptionsCharges;
    /**
    * The container for UPS shipping label. Returned for following shipments -
    Forward shipments,
    Shipments with PRL returns service, 
    Electronic Return Label or Electronic Import Control Label shipments with SubVersion greater than or equal to 1707. Shipping label wont be returned if BarCodeImageIndicator is present. Applicable only for ShipmentResponse and ShipAcceptResponse.
    *
    * @var PackageResultsShippingLabel|null
    */
    protected $shippingLabel;
    /**
    * Supported for following shipments -
    PRL shipments,
    Electronic Return Label or Electronic Import Control Label shipments with SubVersion greater than or equal to 1707.  Applicable only for ShipmentResponse and ShipAcceptResponse.
    *
    * @var PackageResultsShippingReceipt|null
    */
    protected $shippingReceipt;
    /**
     * USPSPICNumber is USPS Package Identification; it should be used for tracking Mail Innovations shipments.
     *
     * @var string|null
     */
    protected $uSPSPICNumber;
    /**
    * USPS defined CN22 ID number format varies based on destination country or territory. 
    Not applicable as of Jan 2015. 
    Mail Innovations shipments US to VI, PR, and GU are not considered international.
    *
    * @var string|null
    */
    protected $cN22Number;
    /**
     * 
     *
     * @var list<PackageResultsAccessorial>|null
     */
    protected $accessorial;
    /**
     * SimpleRate will be returned if Simple Rate  present in request
     *
     * @var PackageResultsSimpleRate|null
     */
    protected $simpleRate;
    /**
    * Container tag for the International forms image.  Currently this container would be returned for UPS Premium Care shipments. Form is returned for following shipments -
    Forward shipments,
    Shipments with PRL ReturnService,
    Electronic Return Label or Electronic Import Control Label shipments with SubVersion greater than or equal to 1707. CN22 data for Worlwide economy services will be returned within the PDF417 barcode of the label.
    *
    * @var PackageResultsForm|null
    */
    protected $form;
    /**
     * 
     *
     * @var list<PackageResultsItemizedCharges>|null
     */
    protected $itemizedCharges;
    /**
    * Negotiated Rates Charge Container.  These charges are returned when:
    1) Subversion is greater than or equal to 1607
    2) If negotiated rates were requested for GFP shipments and account number is eligible to receive negotiated rates.
    *
    * @var PackageResultsNegotiatedCharges|null
    */
    protected $negotiatedCharges;
    /**
    * Package 1Z number.  
    For Mail Innovations shipments, please use the USPSPICNumber when tracking packages (a non-1Z number Mail Manifest Id is returned).  Applicable only for ShipmentResponse and ShipAcceptResponse.
    *
    * @return string|null
    */
    public function getTrackingNumber() : ?string
    {
        return $this->trackingNumber;
    }
    /**
    * Package 1Z number.  
    For Mail Innovations shipments, please use the USPSPICNumber when tracking packages (a non-1Z number Mail Manifest Id is returned).  Applicable only for ShipmentResponse and ShipAcceptResponse.
    *
    * @param string|null $trackingNumber
    *
    * @return self
    */
    public function setTrackingNumber(?string $trackingNumber) : self
    {
        $this->initialized['trackingNumber'] = true;
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Container for returned Rate Modifier information. Applies only if SubVersion is 2205 or greater.
     *
     * @return PackageResultsRateModifier|null
     */
    public function getRateModifier() : ?PackageResultsRateModifier
    {
        return $this->rateModifier;
    }
    /**
     * Container for returned Rate Modifier information. Applies only if SubVersion is 2205 or greater.
     *
     * @param PackageResultsRateModifier|null $rateModifier
     *
     * @return self
     */
    public function setRateModifier(?PackageResultsRateModifier $rateModifier) : self
    {
        $this->initialized['rateModifier'] = true;
        $this->rateModifier = $rateModifier;
        return $this;
    }
    /**
    * Base Service Charge container.
    Transportation charge = BaseServiceCharge + Fuel charge  Returned only if Subversion >=1701.
    *
    * @return PackageResultsBaseServiceCharge|null
    */
    public function getBaseServiceCharge() : ?PackageResultsBaseServiceCharge
    {
        return $this->baseServiceCharge;
    }
    /**
    * Base Service Charge container.
    Transportation charge = BaseServiceCharge + Fuel charge  Returned only if Subversion >=1701.
    *
    * @param PackageResultsBaseServiceCharge|null $baseServiceCharge
    *
    * @return self
    */
    public function setBaseServiceCharge(?PackageResultsBaseServiceCharge $baseServiceCharge) : self
    {
        $this->initialized['baseServiceCharge'] = true;
        $this->baseServiceCharge = $baseServiceCharge;
        return $this;
    }
    /**
     * Shipment charges info. Shipment charges are only guaranteed to be returned for shipments whose origin country or territory is US or Puerto Rico. Applicable only for ShipmentResponse and ShipAcceptResponse.
     *
     * @return PackageResultsServiceOptionsCharges|null
     */
    public function getServiceOptionsCharges() : ?PackageResultsServiceOptionsCharges
    {
        return $this->serviceOptionsCharges;
    }
    /**
     * Shipment charges info. Shipment charges are only guaranteed to be returned for shipments whose origin country or territory is US or Puerto Rico. Applicable only for ShipmentResponse and ShipAcceptResponse.
     *
     * @param PackageResultsServiceOptionsCharges|null $serviceOptionsCharges
     *
     * @return self
     */
    public function setServiceOptionsCharges(?PackageResultsServiceOptionsCharges $serviceOptionsCharges) : self
    {
        $this->initialized['serviceOptionsCharges'] = true;
        $this->serviceOptionsCharges = $serviceOptionsCharges;
        return $this;
    }
    /**
    * The container for UPS shipping label. Returned for following shipments -
    Forward shipments,
    Shipments with PRL returns service, 
    Electronic Return Label or Electronic Import Control Label shipments with SubVersion greater than or equal to 1707. Shipping label wont be returned if BarCodeImageIndicator is present. Applicable only for ShipmentResponse and ShipAcceptResponse.
    *
    * @return PackageResultsShippingLabel|null
    */
    public function getShippingLabel() : ?PackageResultsShippingLabel
    {
        return $this->shippingLabel;
    }
    /**
    * The container for UPS shipping label. Returned for following shipments -
    Forward shipments,
    Shipments with PRL returns service, 
    Electronic Return Label or Electronic Import Control Label shipments with SubVersion greater than or equal to 1707. Shipping label wont be returned if BarCodeImageIndicator is present. Applicable only for ShipmentResponse and ShipAcceptResponse.
    *
    * @param PackageResultsShippingLabel|null $shippingLabel
    *
    * @return self
    */
    public function setShippingLabel(?PackageResultsShippingLabel $shippingLabel) : self
    {
        $this->initialized['shippingLabel'] = true;
        $this->shippingLabel = $shippingLabel;
        return $this;
    }
    /**
    * Supported for following shipments -
    PRL shipments,
    Electronic Return Label or Electronic Import Control Label shipments with SubVersion greater than or equal to 1707.  Applicable only for ShipmentResponse and ShipAcceptResponse.
    *
    * @return PackageResultsShippingReceipt|null
    */
    public function getShippingReceipt() : ?PackageResultsShippingReceipt
    {
        return $this->shippingReceipt;
    }
    /**
    * Supported for following shipments -
    PRL shipments,
    Electronic Return Label or Electronic Import Control Label shipments with SubVersion greater than or equal to 1707.  Applicable only for ShipmentResponse and ShipAcceptResponse.
    *
    * @param PackageResultsShippingReceipt|null $shippingReceipt
    *
    * @return self
    */
    public function setShippingReceipt(?PackageResultsShippingReceipt $shippingReceipt) : self
    {
        $this->initialized['shippingReceipt'] = true;
        $this->shippingReceipt = $shippingReceipt;
        return $this;
    }
    /**
     * USPSPICNumber is USPS Package Identification; it should be used for tracking Mail Innovations shipments.
     *
     * @return string|null
     */
    public function getUSPSPICNumber() : ?string
    {
        return $this->uSPSPICNumber;
    }
    /**
     * USPSPICNumber is USPS Package Identification; it should be used for tracking Mail Innovations shipments.
     *
     * @param string|null $uSPSPICNumber
     *
     * @return self
     */
    public function setUSPSPICNumber(?string $uSPSPICNumber) : self
    {
        $this->initialized['uSPSPICNumber'] = true;
        $this->uSPSPICNumber = $uSPSPICNumber;
        return $this;
    }
    /**
    * USPS defined CN22 ID number format varies based on destination country or territory. 
    Not applicable as of Jan 2015. 
    Mail Innovations shipments US to VI, PR, and GU are not considered international.
    *
    * @return string|null
    */
    public function getCN22Number() : ?string
    {
        return $this->cN22Number;
    }
    /**
    * USPS defined CN22 ID number format varies based on destination country or territory. 
    Not applicable as of Jan 2015. 
    Mail Innovations shipments US to VI, PR, and GU are not considered international.
    *
    * @param string|null $cN22Number
    *
    * @return self
    */
    public function setCN22Number(?string $cN22Number) : self
    {
        $this->initialized['cN22Number'] = true;
        $this->cN22Number = $cN22Number;
        return $this;
    }
    /**
     * 
     *
     * @return list<PackageResultsAccessorial>|null
     */
    public function getAccessorial() : ?array
    {
        return $this->accessorial;
    }
    /**
     * 
     *
     * @param list<PackageResultsAccessorial>|null $accessorial
     *
     * @return self
     */
    public function setAccessorial(?array $accessorial) : self
    {
        $this->initialized['accessorial'] = true;
        $this->accessorial = $accessorial;
        return $this;
    }
    /**
     * SimpleRate will be returned if Simple Rate  present in request
     *
     * @return PackageResultsSimpleRate|null
     */
    public function getSimpleRate() : ?PackageResultsSimpleRate
    {
        return $this->simpleRate;
    }
    /**
     * SimpleRate will be returned if Simple Rate  present in request
     *
     * @param PackageResultsSimpleRate|null $simpleRate
     *
     * @return self
     */
    public function setSimpleRate(?PackageResultsSimpleRate $simpleRate) : self
    {
        $this->initialized['simpleRate'] = true;
        $this->simpleRate = $simpleRate;
        return $this;
    }
    /**
    * Container tag for the International forms image.  Currently this container would be returned for UPS Premium Care shipments. Form is returned for following shipments -
    Forward shipments,
    Shipments with PRL ReturnService,
    Electronic Return Label or Electronic Import Control Label shipments with SubVersion greater than or equal to 1707. CN22 data for Worlwide economy services will be returned within the PDF417 barcode of the label.
    *
    * @return PackageResultsForm|null
    */
    public function getForm() : ?PackageResultsForm
    {
        return $this->form;
    }
    /**
    * Container tag for the International forms image.  Currently this container would be returned for UPS Premium Care shipments. Form is returned for following shipments -
    Forward shipments,
    Shipments with PRL ReturnService,
    Electronic Return Label or Electronic Import Control Label shipments with SubVersion greater than or equal to 1707. CN22 data for Worlwide economy services will be returned within the PDF417 barcode of the label.
    *
    * @param PackageResultsForm|null $form
    *
    * @return self
    */
    public function setForm(?PackageResultsForm $form) : self
    {
        $this->initialized['form'] = true;
        $this->form = $form;
        return $this;
    }
    /**
     * 
     *
     * @return list<PackageResultsItemizedCharges>|null
     */
    public function getItemizedCharges() : ?array
    {
        return $this->itemizedCharges;
    }
    /**
     * 
     *
     * @param list<PackageResultsItemizedCharges>|null $itemizedCharges
     *
     * @return self
     */
    public function setItemizedCharges(?array $itemizedCharges) : self
    {
        $this->initialized['itemizedCharges'] = true;
        $this->itemizedCharges = $itemizedCharges;
        return $this;
    }
    /**
    * Negotiated Rates Charge Container.  These charges are returned when:
    1) Subversion is greater than or equal to 1607
    2) If negotiated rates were requested for GFP shipments and account number is eligible to receive negotiated rates.
    *
    * @return PackageResultsNegotiatedCharges|null
    */
    public function getNegotiatedCharges() : ?PackageResultsNegotiatedCharges
    {
        return $this->negotiatedCharges;
    }
    /**
    * Negotiated Rates Charge Container.  These charges are returned when:
    1) Subversion is greater than or equal to 1607
    2) If negotiated rates were requested for GFP shipments and account number is eligible to receive negotiated rates.
    *
    * @param PackageResultsNegotiatedCharges|null $negotiatedCharges
    *
    * @return self
    */
    public function setNegotiatedCharges(?PackageResultsNegotiatedCharges $negotiatedCharges) : self
    {
        $this->initialized['negotiatedCharges'] = true;
        $this->negotiatedCharges = $negotiatedCharges;
        return $this;
    }
}