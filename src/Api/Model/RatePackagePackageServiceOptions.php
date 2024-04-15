<?php

namespace ShipStream\Ups\Api\Model;

class RatePackagePackageServiceOptions extends \ArrayObject
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
     * Delivery Confirmation Container. For a list of valid origin/destination countries or territories please refer to appendix.  DeliveryConfirmation and COD are mutually exclusive.
     *
     * @var RatePackageServiceOptionsDeliveryConfirmation|null
     */
    protected $deliveryConfirmation;
    /**
     * Access Point COD indicates Package COD is requested for a shipment.  Valid only for "01 - Hold For Pickup At UPS Access Point" Shipment Indication type. Package Access Point COD is valid only for shipment without return service from US/PR to US/PR and CA to CA. Not valid with COD at package level.
     *
     * @var PackageServiceOptionsAccessPointCOD|null
     */
    protected $accessPointCOD;
    /**
     * Container for COD.  Indicates COD is requested. Package level COD is available for shipment without return service from US/PR to US/PR, CA to CA, and CA to US. CA to US COD is not allowed for package Letter/ Envelope. COD is not valid for return service movements.
     *
     * @var PackageServiceOptionsCOD|null
     */
    protected $cOD;
    /**
     * Declared Value Container.  N/A
     *
     * @var RatePackageServiceOptionsDeclaredValue|null
     */
    protected $declaredValue;
    /**
     * Shipper Paid Declared Value Charge at Package level.   Valid for UPS World Wide Express Freight shipments.
     *
     * @var PackageServiceOptionsShipperDeclaredValue|null
     */
    protected $shipperDeclaredValue;
    /**
     * The presence indicates that the package may be released by driver without a signature from the consignee.  Empty Tag. Only available for US50/PR to US50/PR packages without return service.
     *
     * @var string|null
     */
    protected $shipperReleaseIndicator;
    /**
     * Any value associated with this element will be ignored. If present, the package is rated for UPS Proactive Response and proactive package tracking.Contractual accessorial for health care companies to allow package monitoring throughout the UPS system.  Shippers account needs to have valid contract for UPS Proactive Response.
     *
     * @var string|null
     */
    protected $proactiveIndicator;
    /**
     * Presence/Absence Indicator. Any value is ignored. If present, indicates that the package contains an item that needs refrigeration.  Shippers account needs to have a valid contract for Refrigeration.
     *
     * @var string|null
     */
    protected $refrigerationIndicator;
    /**
     * An UPSPremiumCareIndicator indicates special handling is required for shipment having controlled substances.  Empty Tag means indicator is present. Valid only for Canada to Canada movements.Available for the following Return Services:Returns Exchange (available with a contract)Print Return LabelPrint and MailElectronic Return LabelReturn Service Three AttemptMay be requested with following UPS services: UPS Express" EarlyUPS ExpressUPS Express SaverUPS Standard. Not available for packages with the following:Delivery Confirmation - Signature RequiredDelivery Confirmation - Adult Signature Required.
     *
     * @var string|null
     */
    protected $uPSPremiumCareIndicator;
    /**
     * Container to hold HazMat information.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @var RatePackageServiceOptionsHazMat|null
     */
    protected $hazMat;
    /**
     * Container to hold Dry Ice information.  Lane check will happen based on postal code/ city.
     *
     * @var RatePackageServiceOptionsDryIce|null
     */
    protected $dryIce;
    /**
     * Delivery Confirmation Container. For a list of valid origin/destination countries or territories please refer to appendix.  DeliveryConfirmation and COD are mutually exclusive.
     *
     * @return RatePackageServiceOptionsDeliveryConfirmation|null
     */
    public function getDeliveryConfirmation() : ?RatePackageServiceOptionsDeliveryConfirmation
    {
        return $this->deliveryConfirmation;
    }
    /**
     * Delivery Confirmation Container. For a list of valid origin/destination countries or territories please refer to appendix.  DeliveryConfirmation and COD are mutually exclusive.
     *
     * @param RatePackageServiceOptionsDeliveryConfirmation|null $deliveryConfirmation
     *
     * @return self
     */
    public function setDeliveryConfirmation(?RatePackageServiceOptionsDeliveryConfirmation $deliveryConfirmation) : self
    {
        $this->initialized['deliveryConfirmation'] = true;
        $this->deliveryConfirmation = $deliveryConfirmation;
        return $this;
    }
    /**
     * Access Point COD indicates Package COD is requested for a shipment.  Valid only for "01 - Hold For Pickup At UPS Access Point" Shipment Indication type. Package Access Point COD is valid only for shipment without return service from US/PR to US/PR and CA to CA. Not valid with COD at package level.
     *
     * @return PackageServiceOptionsAccessPointCOD|null
     */
    public function getAccessPointCOD() : ?PackageServiceOptionsAccessPointCOD
    {
        return $this->accessPointCOD;
    }
    /**
     * Access Point COD indicates Package COD is requested for a shipment.  Valid only for "01 - Hold For Pickup At UPS Access Point" Shipment Indication type. Package Access Point COD is valid only for shipment without return service from US/PR to US/PR and CA to CA. Not valid with COD at package level.
     *
     * @param PackageServiceOptionsAccessPointCOD|null $accessPointCOD
     *
     * @return self
     */
    public function setAccessPointCOD(?PackageServiceOptionsAccessPointCOD $accessPointCOD) : self
    {
        $this->initialized['accessPointCOD'] = true;
        $this->accessPointCOD = $accessPointCOD;
        return $this;
    }
    /**
     * Container for COD.  Indicates COD is requested. Package level COD is available for shipment without return service from US/PR to US/PR, CA to CA, and CA to US. CA to US COD is not allowed for package Letter/ Envelope. COD is not valid for return service movements.
     *
     * @return PackageServiceOptionsCOD|null
     */
    public function getCOD() : ?PackageServiceOptionsCOD
    {
        return $this->cOD;
    }
    /**
     * Container for COD.  Indicates COD is requested. Package level COD is available for shipment without return service from US/PR to US/PR, CA to CA, and CA to US. CA to US COD is not allowed for package Letter/ Envelope. COD is not valid for return service movements.
     *
     * @param PackageServiceOptionsCOD|null $cOD
     *
     * @return self
     */
    public function setCOD(?PackageServiceOptionsCOD $cOD) : self
    {
        $this->initialized['cOD'] = true;
        $this->cOD = $cOD;
        return $this;
    }
    /**
     * Declared Value Container.  N/A
     *
     * @return RatePackageServiceOptionsDeclaredValue|null
     */
    public function getDeclaredValue() : ?RatePackageServiceOptionsDeclaredValue
    {
        return $this->declaredValue;
    }
    /**
     * Declared Value Container.  N/A
     *
     * @param RatePackageServiceOptionsDeclaredValue|null $declaredValue
     *
     * @return self
     */
    public function setDeclaredValue(?RatePackageServiceOptionsDeclaredValue $declaredValue) : self
    {
        $this->initialized['declaredValue'] = true;
        $this->declaredValue = $declaredValue;
        return $this;
    }
    /**
     * Shipper Paid Declared Value Charge at Package level.   Valid for UPS World Wide Express Freight shipments.
     *
     * @return PackageServiceOptionsShipperDeclaredValue|null
     */
    public function getShipperDeclaredValue() : ?PackageServiceOptionsShipperDeclaredValue
    {
        return $this->shipperDeclaredValue;
    }
    /**
     * Shipper Paid Declared Value Charge at Package level.   Valid for UPS World Wide Express Freight shipments.
     *
     * @param PackageServiceOptionsShipperDeclaredValue|null $shipperDeclaredValue
     *
     * @return self
     */
    public function setShipperDeclaredValue(?PackageServiceOptionsShipperDeclaredValue $shipperDeclaredValue) : self
    {
        $this->initialized['shipperDeclaredValue'] = true;
        $this->shipperDeclaredValue = $shipperDeclaredValue;
        return $this;
    }
    /**
     * The presence indicates that the package may be released by driver without a signature from the consignee.  Empty Tag. Only available for US50/PR to US50/PR packages without return service.
     *
     * @return string|null
     */
    public function getShipperReleaseIndicator() : ?string
    {
        return $this->shipperReleaseIndicator;
    }
    /**
     * The presence indicates that the package may be released by driver without a signature from the consignee.  Empty Tag. Only available for US50/PR to US50/PR packages without return service.
     *
     * @param string|null $shipperReleaseIndicator
     *
     * @return self
     */
    public function setShipperReleaseIndicator(?string $shipperReleaseIndicator) : self
    {
        $this->initialized['shipperReleaseIndicator'] = true;
        $this->shipperReleaseIndicator = $shipperReleaseIndicator;
        return $this;
    }
    /**
     * Any value associated with this element will be ignored. If present, the package is rated for UPS Proactive Response and proactive package tracking.Contractual accessorial for health care companies to allow package monitoring throughout the UPS system.  Shippers account needs to have valid contract for UPS Proactive Response.
     *
     * @return string|null
     */
    public function getProactiveIndicator() : ?string
    {
        return $this->proactiveIndicator;
    }
    /**
     * Any value associated with this element will be ignored. If present, the package is rated for UPS Proactive Response and proactive package tracking.Contractual accessorial for health care companies to allow package monitoring throughout the UPS system.  Shippers account needs to have valid contract for UPS Proactive Response.
     *
     * @param string|null $proactiveIndicator
     *
     * @return self
     */
    public function setProactiveIndicator(?string $proactiveIndicator) : self
    {
        $this->initialized['proactiveIndicator'] = true;
        $this->proactiveIndicator = $proactiveIndicator;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value is ignored. If present, indicates that the package contains an item that needs refrigeration.  Shippers account needs to have a valid contract for Refrigeration.
     *
     * @return string|null
     */
    public function getRefrigerationIndicator() : ?string
    {
        return $this->refrigerationIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value is ignored. If present, indicates that the package contains an item that needs refrigeration.  Shippers account needs to have a valid contract for Refrigeration.
     *
     * @param string|null $refrigerationIndicator
     *
     * @return self
     */
    public function setRefrigerationIndicator(?string $refrigerationIndicator) : self
    {
        $this->initialized['refrigerationIndicator'] = true;
        $this->refrigerationIndicator = $refrigerationIndicator;
        return $this;
    }
    /**
     * An UPSPremiumCareIndicator indicates special handling is required for shipment having controlled substances.  Empty Tag means indicator is present. Valid only for Canada to Canada movements.Available for the following Return Services:Returns Exchange (available with a contract)Print Return LabelPrint and MailElectronic Return LabelReturn Service Three AttemptMay be requested with following UPS services: UPS Express" EarlyUPS ExpressUPS Express SaverUPS Standard. Not available for packages with the following:Delivery Confirmation - Signature RequiredDelivery Confirmation - Adult Signature Required.
     *
     * @return string|null
     */
    public function getUPSPremiumCareIndicator() : ?string
    {
        return $this->uPSPremiumCareIndicator;
    }
    /**
     * An UPSPremiumCareIndicator indicates special handling is required for shipment having controlled substances.  Empty Tag means indicator is present. Valid only for Canada to Canada movements.Available for the following Return Services:Returns Exchange (available with a contract)Print Return LabelPrint and MailElectronic Return LabelReturn Service Three AttemptMay be requested with following UPS services: UPS Express" EarlyUPS ExpressUPS Express SaverUPS Standard. Not available for packages with the following:Delivery Confirmation - Signature RequiredDelivery Confirmation - Adult Signature Required.
     *
     * @param string|null $uPSPremiumCareIndicator
     *
     * @return self
     */
    public function setUPSPremiumCareIndicator(?string $uPSPremiumCareIndicator) : self
    {
        $this->initialized['uPSPremiumCareIndicator'] = true;
        $this->uPSPremiumCareIndicator = $uPSPremiumCareIndicator;
        return $this;
    }
    /**
     * Container to hold HazMat information.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @return RatePackageServiceOptionsHazMat|null
     */
    public function getHazMat() : ?RatePackageServiceOptionsHazMat
    {
        return $this->hazMat;
    }
    /**
     * Container to hold HazMat information.  Applies only if SubVersion is greater than or equal to 1701.
     *
     * @param RatePackageServiceOptionsHazMat|null $hazMat
     *
     * @return self
     */
    public function setHazMat(?RatePackageServiceOptionsHazMat $hazMat) : self
    {
        $this->initialized['hazMat'] = true;
        $this->hazMat = $hazMat;
        return $this;
    }
    /**
     * Container to hold Dry Ice information.  Lane check will happen based on postal code/ city.
     *
     * @return RatePackageServiceOptionsDryIce|null
     */
    public function getDryIce() : ?RatePackageServiceOptionsDryIce
    {
        return $this->dryIce;
    }
    /**
     * Container to hold Dry Ice information.  Lane check will happen based on postal code/ city.
     *
     * @param RatePackageServiceOptionsDryIce|null $dryIce
     *
     * @return self
     */
    public function setDryIce(?RatePackageServiceOptionsDryIce $dryIce) : self
    {
        $this->initialized['dryIce'] = true;
        $this->dryIce = $dryIce;
        return $this;
    }
}