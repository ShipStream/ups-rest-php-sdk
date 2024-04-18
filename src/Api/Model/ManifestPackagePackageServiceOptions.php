<?php

namespace ShipStream\Ups\Api\Model;

class ManifestPackagePackageServiceOptions extends \ArrayObject
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
     * Container for cash on delivery (COD) information.
     *
     * @var ManifestPackageServiceOptionsCOD
     */
    protected $cOD;
    /**
     * Container tag for insured value amount for the package.
     *
     * @var PackageServiceOptionsInsuredValue
     */
    protected $insuredValue;
    /**
     * Earliest delivery time. Time format is HHMMSS.
     *
     * @var string
     */
    protected $earliestDeliveryTime;
    /**
    * Indicates if the package contains hazardous materials. Valid values:
    - 1 - Hazardous Material
    - 2 - Electronically billed hazardous material.
    
    If present, only one package may exist in the shipment.
    
    *
    * @var string
    */
    protected $hazardousMaterialsCode;
    /**
     * A flag indicating if a package should be held for pickup. True if tag exists, false otherwise.
     *
     * @var string
     */
    protected $holdForPickup;
    /**
     * An indicator flag that represents a Collect on Delivery (COD) package.
     *
     * @var string
     */
    protected $addShippingChargesToCODIndicator;
    /**
     * Container for cash on delivery (COD) information.
     *
     * @return ManifestPackageServiceOptionsCOD
     */
    public function getCOD() : ManifestPackageServiceOptionsCOD
    {
        return $this->cOD;
    }
    /**
     * Container for cash on delivery (COD) information.
     *
     * @param ManifestPackageServiceOptionsCOD $cOD
     *
     * @return self
     */
    public function setCOD(ManifestPackageServiceOptionsCOD $cOD) : self
    {
        $this->initialized['cOD'] = true;
        $this->cOD = $cOD;
        return $this;
    }
    /**
     * Container tag for insured value amount for the package.
     *
     * @return PackageServiceOptionsInsuredValue
     */
    public function getInsuredValue() : PackageServiceOptionsInsuredValue
    {
        return $this->insuredValue;
    }
    /**
     * Container tag for insured value amount for the package.
     *
     * @param PackageServiceOptionsInsuredValue $insuredValue
     *
     * @return self
     */
    public function setInsuredValue(PackageServiceOptionsInsuredValue $insuredValue) : self
    {
        $this->initialized['insuredValue'] = true;
        $this->insuredValue = $insuredValue;
        return $this;
    }
    /**
     * Earliest delivery time. Time format is HHMMSS.
     *
     * @return string
     */
    public function getEarliestDeliveryTime() : string
    {
        return $this->earliestDeliveryTime;
    }
    /**
     * Earliest delivery time. Time format is HHMMSS.
     *
     * @param string $earliestDeliveryTime
     *
     * @return self
     */
    public function setEarliestDeliveryTime(string $earliestDeliveryTime) : self
    {
        $this->initialized['earliestDeliveryTime'] = true;
        $this->earliestDeliveryTime = $earliestDeliveryTime;
        return $this;
    }
    /**
    * Indicates if the package contains hazardous materials. Valid values:
    - 1 - Hazardous Material
    - 2 - Electronically billed hazardous material.
    
    If present, only one package may exist in the shipment.
    
    *
    * @return string
    */
    public function getHazardousMaterialsCode() : string
    {
        return $this->hazardousMaterialsCode;
    }
    /**
    * Indicates if the package contains hazardous materials. Valid values:
    - 1 - Hazardous Material
    - 2 - Electronically billed hazardous material.
    
    If present, only one package may exist in the shipment.
    
    *
    * @param string $hazardousMaterialsCode
    *
    * @return self
    */
    public function setHazardousMaterialsCode(string $hazardousMaterialsCode) : self
    {
        $this->initialized['hazardousMaterialsCode'] = true;
        $this->hazardousMaterialsCode = $hazardousMaterialsCode;
        return $this;
    }
    /**
     * A flag indicating if a package should be held for pickup. True if tag exists, false otherwise.
     *
     * @return string
     */
    public function getHoldForPickup() : string
    {
        return $this->holdForPickup;
    }
    /**
     * A flag indicating if a package should be held for pickup. True if tag exists, false otherwise.
     *
     * @param string $holdForPickup
     *
     * @return self
     */
    public function setHoldForPickup(string $holdForPickup) : self
    {
        $this->initialized['holdForPickup'] = true;
        $this->holdForPickup = $holdForPickup;
        return $this;
    }
    /**
     * An indicator flag that represents a Collect on Delivery (COD) package.
     *
     * @return string
     */
    public function getAddShippingChargesToCODIndicator() : string
    {
        return $this->addShippingChargesToCODIndicator;
    }
    /**
     * An indicator flag that represents a Collect on Delivery (COD) package.
     *
     * @param string $addShippingChargesToCODIndicator
     *
     * @return self
     */
    public function setAddShippingChargesToCODIndicator(string $addShippingChargesToCODIndicator) : self
    {
        $this->initialized['addShippingChargesToCODIndicator'] = true;
        $this->addShippingChargesToCODIndicator = $addShippingChargesToCODIndicator;
        return $this;
    }
}