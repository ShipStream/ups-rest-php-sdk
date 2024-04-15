<?php

namespace ShipStream\Ups\Api\Model;

class PackagePackageServiceOptions extends \ArrayObject
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
    * Delivery Confirmation container. 
    Refer to Delivery Confirmation Origin-
    Destination Pairs in the Appendix for a list of valid values.  Valid only for forward shipment only.
    *
    * @var PackageServiceOptionsDeliveryConfirmation|null
    */
    protected $deliveryConfirmation;
    /**
     * Container for Declared Value.
     *
     * @var PackageServiceOptionsDeclaredValue|null
     */
    protected $declaredValue;
    /**
     * Container for COD.  Indicates COD is requested. Package level COD is available for shipment without return service from US/PR to US/PR, CA to CA, and CA to US. CA to US COD is not allowed for package Letter/ Envelope. COD is not valid for return service movements.
     *
     * @var PackageServiceOptionsCOD|null
     */
    protected $cOD;
    /**
     * Access Point COD indicates Package COD is requested for a shipment.  Valid only for "01 - Hold For Pickup At UPS Access Point" Shipment Indication type. Package Access Point COD is valid only for shipment without return service from US/PR to US/PR and CA to CA. Not valid with COD at package level.
     *
     * @var PackageServiceOptionsAccessPointCOD|null
     */
    protected $accessPointCOD;
    /**
     * The presence indicates that the package may be released by driver without a signature from the consignee.  Empty Tag. Only available for US50/PR to US50/PR packages without return service.
     *
     * @var string|null
     */
    protected $shipperReleaseIndicator;
    /**
     * Receiver Return Notification.  Applicable for Shipment with returned service.
     *
     * @var PackageServiceOptionsNotification|null
     */
    protected $notification;
    /**
     * 
     *
     * @var list<PackageServiceOptionsHazMat>|null
     */
    protected $hazMat;
    /**
     * Container for Dry Ice.  Maximum 1 Dry Ice is allowed. Lane check will happen based on postal code/ city.
     *
     * @var PackageServiceOptionsDryIce|null
     */
    protected $dryIce;
    /**
    * An UPSPremiumCareIndicator indicates special handling is required for shipment having controlled substances.  Empty Tag means indicator is present. 
    
    The UPSPremiumCareIndicator cannot be requested for package with Delivery Confirmation - Adult Signature Required and Delivery Confirmation- Signature Required. 
    
    UPSPremiumCareIndicator is valid for following Return services: 
    Returns Exchange (available with a contract)
    Print Return Label
    Print and Mail
    Electronic Return Label 
    Return Service Three Attempt
    
    The UPSPremiumCareIndicator can be requested with following UPS services: 
    UPS Express Early
    UPS Express
    UPS Express Saver 
    UPS Standard
    Valid only for Canada to Canada movements.
    *
    * @var string|null
    */
    protected $uPSPremiumCareIndicator;
    /**
     * Presence/Absence Indicator. Any value is ignored. If present, the package is rated for UPS Proactive Response and proactive package tracking. Contractual accessorial for health care companies to allow package monitoring throughout the UPS system.  Shippers account needs to have valid contract for UPS Proactive Reponse.
     *
     * @var string|null
     */
    protected $proactiveIndicator;
    /**
     * Identifies the package containing Dangerous Goods.  Required for Hazmat shipment if SubVersion is greater than or equal to 1701.
     *
     * @var string|null
     */
    protected $packageIdentifier;
    /**
     * Unique identifier for clinical trials
     *
     * @var string|null
     */
    protected $clinicalTrialsID;
    /**
     * Presence/Absence Indicator. Any value is ignored. If present, indicates that the package contains an item that needs refrigeration.  Shippers account needs to have a valid contract for Refrigeration.
     *
     * @var string|null
     */
    protected $refrigerationIndicator;
    /**
    * Delivery Confirmation container. 
    Refer to Delivery Confirmation Origin-
    Destination Pairs in the Appendix for a list of valid values.  Valid only for forward shipment only.
    *
    * @return PackageServiceOptionsDeliveryConfirmation|null
    */
    public function getDeliveryConfirmation() : ?PackageServiceOptionsDeliveryConfirmation
    {
        return $this->deliveryConfirmation;
    }
    /**
    * Delivery Confirmation container. 
    Refer to Delivery Confirmation Origin-
    Destination Pairs in the Appendix for a list of valid values.  Valid only for forward shipment only.
    *
    * @param PackageServiceOptionsDeliveryConfirmation|null $deliveryConfirmation
    *
    * @return self
    */
    public function setDeliveryConfirmation(?PackageServiceOptionsDeliveryConfirmation $deliveryConfirmation) : self
    {
        $this->initialized['deliveryConfirmation'] = true;
        $this->deliveryConfirmation = $deliveryConfirmation;
        return $this;
    }
    /**
     * Container for Declared Value.
     *
     * @return PackageServiceOptionsDeclaredValue|null
     */
    public function getDeclaredValue() : ?PackageServiceOptionsDeclaredValue
    {
        return $this->declaredValue;
    }
    /**
     * Container for Declared Value.
     *
     * @param PackageServiceOptionsDeclaredValue|null $declaredValue
     *
     * @return self
     */
    public function setDeclaredValue(?PackageServiceOptionsDeclaredValue $declaredValue) : self
    {
        $this->initialized['declaredValue'] = true;
        $this->declaredValue = $declaredValue;
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
     * Receiver Return Notification.  Applicable for Shipment with returned service.
     *
     * @return PackageServiceOptionsNotification|null
     */
    public function getNotification() : ?PackageServiceOptionsNotification
    {
        return $this->notification;
    }
    /**
     * Receiver Return Notification.  Applicable for Shipment with returned service.
     *
     * @param PackageServiceOptionsNotification|null $notification
     *
     * @return self
     */
    public function setNotification(?PackageServiceOptionsNotification $notification) : self
    {
        $this->initialized['notification'] = true;
        $this->notification = $notification;
        return $this;
    }
    /**
     * 
     *
     * @return list<PackageServiceOptionsHazMat>|null
     */
    public function getHazMat() : ?array
    {
        return $this->hazMat;
    }
    /**
     * 
     *
     * @param list<PackageServiceOptionsHazMat>|null $hazMat
     *
     * @return self
     */
    public function setHazMat(?array $hazMat) : self
    {
        $this->initialized['hazMat'] = true;
        $this->hazMat = $hazMat;
        return $this;
    }
    /**
     * Container for Dry Ice.  Maximum 1 Dry Ice is allowed. Lane check will happen based on postal code/ city.
     *
     * @return PackageServiceOptionsDryIce|null
     */
    public function getDryIce() : ?PackageServiceOptionsDryIce
    {
        return $this->dryIce;
    }
    /**
     * Container for Dry Ice.  Maximum 1 Dry Ice is allowed. Lane check will happen based on postal code/ city.
     *
     * @param PackageServiceOptionsDryIce|null $dryIce
     *
     * @return self
     */
    public function setDryIce(?PackageServiceOptionsDryIce $dryIce) : self
    {
        $this->initialized['dryIce'] = true;
        $this->dryIce = $dryIce;
        return $this;
    }
    /**
    * An UPSPremiumCareIndicator indicates special handling is required for shipment having controlled substances.  Empty Tag means indicator is present. 
    
    The UPSPremiumCareIndicator cannot be requested for package with Delivery Confirmation - Adult Signature Required and Delivery Confirmation- Signature Required. 
    
    UPSPremiumCareIndicator is valid for following Return services: 
    Returns Exchange (available with a contract)
    Print Return Label
    Print and Mail
    Electronic Return Label 
    Return Service Three Attempt
    
    The UPSPremiumCareIndicator can be requested with following UPS services: 
    UPS Express Early
    UPS Express
    UPS Express Saver 
    UPS Standard
    Valid only for Canada to Canada movements.
    *
    * @return string|null
    */
    public function getUPSPremiumCareIndicator() : ?string
    {
        return $this->uPSPremiumCareIndicator;
    }
    /**
    * An UPSPremiumCareIndicator indicates special handling is required for shipment having controlled substances.  Empty Tag means indicator is present. 
    
    The UPSPremiumCareIndicator cannot be requested for package with Delivery Confirmation - Adult Signature Required and Delivery Confirmation- Signature Required. 
    
    UPSPremiumCareIndicator is valid for following Return services: 
    Returns Exchange (available with a contract)
    Print Return Label
    Print and Mail
    Electronic Return Label 
    Return Service Three Attempt
    
    The UPSPremiumCareIndicator can be requested with following UPS services: 
    UPS Express Early
    UPS Express
    UPS Express Saver 
    UPS Standard
    Valid only for Canada to Canada movements.
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
     * Presence/Absence Indicator. Any value is ignored. If present, the package is rated for UPS Proactive Response and proactive package tracking. Contractual accessorial for health care companies to allow package monitoring throughout the UPS system.  Shippers account needs to have valid contract for UPS Proactive Reponse.
     *
     * @return string|null
     */
    public function getProactiveIndicator() : ?string
    {
        return $this->proactiveIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value is ignored. If present, the package is rated for UPS Proactive Response and proactive package tracking. Contractual accessorial for health care companies to allow package monitoring throughout the UPS system.  Shippers account needs to have valid contract for UPS Proactive Reponse.
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
     * Identifies the package containing Dangerous Goods.  Required for Hazmat shipment if SubVersion is greater than or equal to 1701.
     *
     * @return string|null
     */
    public function getPackageIdentifier() : ?string
    {
        return $this->packageIdentifier;
    }
    /**
     * Identifies the package containing Dangerous Goods.  Required for Hazmat shipment if SubVersion is greater than or equal to 1701.
     *
     * @param string|null $packageIdentifier
     *
     * @return self
     */
    public function setPackageIdentifier(?string $packageIdentifier) : self
    {
        $this->initialized['packageIdentifier'] = true;
        $this->packageIdentifier = $packageIdentifier;
        return $this;
    }
    /**
     * Unique identifier for clinical trials
     *
     * @return string|null
     */
    public function getClinicalTrialsID() : ?string
    {
        return $this->clinicalTrialsID;
    }
    /**
     * Unique identifier for clinical trials
     *
     * @param string|null $clinicalTrialsID
     *
     * @return self
     */
    public function setClinicalTrialsID(?string $clinicalTrialsID) : self
    {
        $this->initialized['clinicalTrialsID'] = true;
        $this->clinicalTrialsID = $clinicalTrialsID;
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
}