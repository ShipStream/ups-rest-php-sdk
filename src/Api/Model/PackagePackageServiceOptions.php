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
    * @var PackageServiceOptionsDeliveryConfirmation
    */
    protected $deliveryConfirmation;
    /**
     * Container for Declared Value.
     *
     * @var PackageServiceOptionsDeclaredValue
     */
    protected $declaredValue;
    /**
     * Container for COD.  Indicates COD is requested. Package level COD is available for shipment without return service from US/PR to US/PR, CA to CA, and CA to US. CA to US COD is not allowed for package Letter/ Envelope. COD is not valid for return service movements.
     *
     * @var PackageServiceOptionsCOD
     */
    protected $cOD;
    /**
     * Access Point COD indicates Package COD is requested for a shipment.  Valid only for "01 - Hold For Pickup At UPS Access Point" Shipment Indication type. Package Access Point COD is valid only for shipment without return service from US/PR to US/PR and CA to CA. Not valid with COD at package level.
     *
     * @var PackageServiceOptionsAccessPointCOD
     */
    protected $accessPointCOD;
    /**
     * The presence indicates that the package may be released by driver without a signature from the consignee.  Empty Tag. Only available for US50/PR to US50/PR packages without return service.
     *
     * @var string
     */
    protected $shipperReleaseIndicator;
    /**
     * Receiver Return Notification.  Applicable for Shipment with returned service.
     *
     * @var PackageServiceOptionsNotification
     */
    protected $notification;
    /**
     * 
     *
     * @var list<PackageServiceOptionsHazMat>
     */
    protected $hazMat;
    /**
     * Container for Dry Ice.  Maximum 1 Dry Ice is allowed. Lane check will happen based on postal code/ city.
     *
     * @var PackageServiceOptionsDryIce
     */
    protected $dryIce;
    /**
    * An UPSPremiumCareIndicator indicates special handling is required for shipment having controlled substances. Empty Tag means indicator is present.
    
    The UPSPremiumCareIndicator cannot be requested for package with Delivery Confirmation - Adult Signature Required and Delivery Confirmation- Signature Required.
    
    UPSPremiumCareIndicator is valid for following Return services:
    - Returns Exchange (available with a contract)
    - Print Return Label
    - Print and Mail
    - Electronic Return Label
    - Return Service Three Attempt
    
    The UPSPremiumCareIndicator can be requested with following UPS services:
    - UPS Express® Early
    - UPS Express
    - UPS Express Saver
    - UPS Standard
    - Valid only for Canada to Canada movements.
    
    *
    * @var string
    */
    protected $uPSPremiumCareIndicator;
    /**
     * Presence/Absence Indicator. Any value is ignored. If present, the package is rated for UPS Proactive Response and proactive package tracking. Contractual accessorial for health care companies to allow package monitoring throughout the UPS system.  Shippers account needs to have valid contract for UPS Proactive Reponse.
     *
     * @var string
     */
    protected $proactiveIndicator;
    /**
     * Identifies the package containing Dangerous Goods.  Required for Hazmat shipment if SubVersion is greater than or equal to 1701.
     *
     * @var string
     */
    protected $packageIdentifier;
    /**
     * Unique identifier for clinical trials
     *
     * @var string
     */
    protected $clinicalTrialsID;
    /**
     * Presence/Absence Indicator. Any value is ignored. If present, indicates that the package contains an item that needs refrigeration.  Shippers account needs to have a valid contract for Refrigeration.
     *
     * @var string
     */
    protected $refrigerationIndicator;
    /**
    * Delivery Confirmation container. 
    Refer to Delivery Confirmation Origin-
    Destination Pairs in the Appendix for a list of valid values.  Valid only for forward shipment only.
    *
    * @return PackageServiceOptionsDeliveryConfirmation
    */
    public function getDeliveryConfirmation() : PackageServiceOptionsDeliveryConfirmation
    {
        return $this->deliveryConfirmation;
    }
    /**
    * Delivery Confirmation container. 
    Refer to Delivery Confirmation Origin-
    Destination Pairs in the Appendix for a list of valid values.  Valid only for forward shipment only.
    *
    * @param PackageServiceOptionsDeliveryConfirmation $deliveryConfirmation
    *
    * @return self
    */
    public function setDeliveryConfirmation(PackageServiceOptionsDeliveryConfirmation $deliveryConfirmation) : self
    {
        $this->initialized['deliveryConfirmation'] = true;
        $this->deliveryConfirmation = $deliveryConfirmation;
        return $this;
    }
    /**
     * Container for Declared Value.
     *
     * @return PackageServiceOptionsDeclaredValue
     */
    public function getDeclaredValue() : PackageServiceOptionsDeclaredValue
    {
        return $this->declaredValue;
    }
    /**
     * Container for Declared Value.
     *
     * @param PackageServiceOptionsDeclaredValue $declaredValue
     *
     * @return self
     */
    public function setDeclaredValue(PackageServiceOptionsDeclaredValue $declaredValue) : self
    {
        $this->initialized['declaredValue'] = true;
        $this->declaredValue = $declaredValue;
        return $this;
    }
    /**
     * Container for COD.  Indicates COD is requested. Package level COD is available for shipment without return service from US/PR to US/PR, CA to CA, and CA to US. CA to US COD is not allowed for package Letter/ Envelope. COD is not valid for return service movements.
     *
     * @return PackageServiceOptionsCOD
     */
    public function getCOD() : PackageServiceOptionsCOD
    {
        return $this->cOD;
    }
    /**
     * Container for COD.  Indicates COD is requested. Package level COD is available for shipment without return service from US/PR to US/PR, CA to CA, and CA to US. CA to US COD is not allowed for package Letter/ Envelope. COD is not valid for return service movements.
     *
     * @param PackageServiceOptionsCOD $cOD
     *
     * @return self
     */
    public function setCOD(PackageServiceOptionsCOD $cOD) : self
    {
        $this->initialized['cOD'] = true;
        $this->cOD = $cOD;
        return $this;
    }
    /**
     * Access Point COD indicates Package COD is requested for a shipment.  Valid only for "01 - Hold For Pickup At UPS Access Point" Shipment Indication type. Package Access Point COD is valid only for shipment without return service from US/PR to US/PR and CA to CA. Not valid with COD at package level.
     *
     * @return PackageServiceOptionsAccessPointCOD
     */
    public function getAccessPointCOD() : PackageServiceOptionsAccessPointCOD
    {
        return $this->accessPointCOD;
    }
    /**
     * Access Point COD indicates Package COD is requested for a shipment.  Valid only for "01 - Hold For Pickup At UPS Access Point" Shipment Indication type. Package Access Point COD is valid only for shipment without return service from US/PR to US/PR and CA to CA. Not valid with COD at package level.
     *
     * @param PackageServiceOptionsAccessPointCOD $accessPointCOD
     *
     * @return self
     */
    public function setAccessPointCOD(PackageServiceOptionsAccessPointCOD $accessPointCOD) : self
    {
        $this->initialized['accessPointCOD'] = true;
        $this->accessPointCOD = $accessPointCOD;
        return $this;
    }
    /**
     * The presence indicates that the package may be released by driver without a signature from the consignee.  Empty Tag. Only available for US50/PR to US50/PR packages without return service.
     *
     * @return string
     */
    public function getShipperReleaseIndicator() : string
    {
        return $this->shipperReleaseIndicator;
    }
    /**
     * The presence indicates that the package may be released by driver without a signature from the consignee.  Empty Tag. Only available for US50/PR to US50/PR packages without return service.
     *
     * @param string $shipperReleaseIndicator
     *
     * @return self
     */
    public function setShipperReleaseIndicator(string $shipperReleaseIndicator) : self
    {
        $this->initialized['shipperReleaseIndicator'] = true;
        $this->shipperReleaseIndicator = $shipperReleaseIndicator;
        return $this;
    }
    /**
     * Receiver Return Notification.  Applicable for Shipment with returned service.
     *
     * @return PackageServiceOptionsNotification
     */
    public function getNotification() : PackageServiceOptionsNotification
    {
        return $this->notification;
    }
    /**
     * Receiver Return Notification.  Applicable for Shipment with returned service.
     *
     * @param PackageServiceOptionsNotification $notification
     *
     * @return self
     */
    public function setNotification(PackageServiceOptionsNotification $notification) : self
    {
        $this->initialized['notification'] = true;
        $this->notification = $notification;
        return $this;
    }
    /**
     * 
     *
     * @return list<PackageServiceOptionsHazMat>
     */
    public function getHazMat() : array
    {
        return $this->hazMat;
    }
    /**
     * 
     *
     * @param list<PackageServiceOptionsHazMat> $hazMat
     *
     * @return self
     */
    public function setHazMat(array $hazMat) : self
    {
        $this->initialized['hazMat'] = true;
        $this->hazMat = $hazMat;
        return $this;
    }
    /**
     * Container for Dry Ice.  Maximum 1 Dry Ice is allowed. Lane check will happen based on postal code/ city.
     *
     * @return PackageServiceOptionsDryIce
     */
    public function getDryIce() : PackageServiceOptionsDryIce
    {
        return $this->dryIce;
    }
    /**
     * Container for Dry Ice.  Maximum 1 Dry Ice is allowed. Lane check will happen based on postal code/ city.
     *
     * @param PackageServiceOptionsDryIce $dryIce
     *
     * @return self
     */
    public function setDryIce(PackageServiceOptionsDryIce $dryIce) : self
    {
        $this->initialized['dryIce'] = true;
        $this->dryIce = $dryIce;
        return $this;
    }
    /**
    * An UPSPremiumCareIndicator indicates special handling is required for shipment having controlled substances. Empty Tag means indicator is present.
    
    The UPSPremiumCareIndicator cannot be requested for package with Delivery Confirmation - Adult Signature Required and Delivery Confirmation- Signature Required.
    
    UPSPremiumCareIndicator is valid for following Return services:
    - Returns Exchange (available with a contract)
    - Print Return Label
    - Print and Mail
    - Electronic Return Label
    - Return Service Three Attempt
    
    The UPSPremiumCareIndicator can be requested with following UPS services:
    - UPS Express® Early
    - UPS Express
    - UPS Express Saver
    - UPS Standard
    - Valid only for Canada to Canada movements.
    
    *
    * @return string
    */
    public function getUPSPremiumCareIndicator() : string
    {
        return $this->uPSPremiumCareIndicator;
    }
    /**
    * An UPSPremiumCareIndicator indicates special handling is required for shipment having controlled substances. Empty Tag means indicator is present.
    
    The UPSPremiumCareIndicator cannot be requested for package with Delivery Confirmation - Adult Signature Required and Delivery Confirmation- Signature Required.
    
    UPSPremiumCareIndicator is valid for following Return services:
    - Returns Exchange (available with a contract)
    - Print Return Label
    - Print and Mail
    - Electronic Return Label
    - Return Service Three Attempt
    
    The UPSPremiumCareIndicator can be requested with following UPS services:
    - UPS Express® Early
    - UPS Express
    - UPS Express Saver
    - UPS Standard
    - Valid only for Canada to Canada movements.
    
    *
    * @param string $uPSPremiumCareIndicator
    *
    * @return self
    */
    public function setUPSPremiumCareIndicator(string $uPSPremiumCareIndicator) : self
    {
        $this->initialized['uPSPremiumCareIndicator'] = true;
        $this->uPSPremiumCareIndicator = $uPSPremiumCareIndicator;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value is ignored. If present, the package is rated for UPS Proactive Response and proactive package tracking. Contractual accessorial for health care companies to allow package monitoring throughout the UPS system.  Shippers account needs to have valid contract for UPS Proactive Reponse.
     *
     * @return string
     */
    public function getProactiveIndicator() : string
    {
        return $this->proactiveIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value is ignored. If present, the package is rated for UPS Proactive Response and proactive package tracking. Contractual accessorial for health care companies to allow package monitoring throughout the UPS system.  Shippers account needs to have valid contract for UPS Proactive Reponse.
     *
     * @param string $proactiveIndicator
     *
     * @return self
     */
    public function setProactiveIndicator(string $proactiveIndicator) : self
    {
        $this->initialized['proactiveIndicator'] = true;
        $this->proactiveIndicator = $proactiveIndicator;
        return $this;
    }
    /**
     * Identifies the package containing Dangerous Goods.  Required for Hazmat shipment if SubVersion is greater than or equal to 1701.
     *
     * @return string
     */
    public function getPackageIdentifier() : string
    {
        return $this->packageIdentifier;
    }
    /**
     * Identifies the package containing Dangerous Goods.  Required for Hazmat shipment if SubVersion is greater than or equal to 1701.
     *
     * @param string $packageIdentifier
     *
     * @return self
     */
    public function setPackageIdentifier(string $packageIdentifier) : self
    {
        $this->initialized['packageIdentifier'] = true;
        $this->packageIdentifier = $packageIdentifier;
        return $this;
    }
    /**
     * Unique identifier for clinical trials
     *
     * @return string
     */
    public function getClinicalTrialsID() : string
    {
        return $this->clinicalTrialsID;
    }
    /**
     * Unique identifier for clinical trials
     *
     * @param string $clinicalTrialsID
     *
     * @return self
     */
    public function setClinicalTrialsID(string $clinicalTrialsID) : self
    {
        $this->initialized['clinicalTrialsID'] = true;
        $this->clinicalTrialsID = $clinicalTrialsID;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value is ignored. If present, indicates that the package contains an item that needs refrigeration.  Shippers account needs to have a valid contract for Refrigeration.
     *
     * @return string
     */
    public function getRefrigerationIndicator() : string
    {
        return $this->refrigerationIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value is ignored. If present, indicates that the package contains an item that needs refrigeration.  Shippers account needs to have a valid contract for Refrigeration.
     *
     * @param string $refrigerationIndicator
     *
     * @return self
     */
    public function setRefrigerationIndicator(string $refrigerationIndicator) : self
    {
        $this->initialized['refrigerationIndicator'] = true;
        $this->refrigerationIndicator = $refrigerationIndicator;
        return $this;
    }
}