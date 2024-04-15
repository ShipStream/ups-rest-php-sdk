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
     * @var ManifestPackageServiceOptionsCOD|null
     */
    protected $cOD;
    /**
     * Container tag for insured value amount for the package.
     *
     * @var PackageServiceOptionsInsuredValue|null
     */
    protected $insuredValue;
    /**
     * Earliest delivery time. Time format is HHMMSS.
     *
     * @var string|null
     */
    protected $earliestDeliveryTime;
    /**
    * Indicates if the package contains hazardous materials. 
    Valid values: 
    1 - Hazardous Material
    2 - Electronically billed hazardous material.�
    If present, only one package may exist in the shipment.
    *
    * @var string|null
    */
    protected $hazardousMaterialsCode;
    /**
     * A flag indicating if a package should be held for pickup. True if tag exists, false otherwise.
     *
     * @var string|null
     */
    protected $holdForPickup;
    /**
     * An indicator flag that represents a Collect on Delivery (COD) package.
     *
     * @var string|null
     */
    protected $addShippingChargesToCODIndicator;
    /**
     * Container for cash on delivery (COD) information.
     *
     * @return ManifestPackageServiceOptionsCOD|null
     */
    public function getCOD() : ?ManifestPackageServiceOptionsCOD
    {
        return $this->cOD;
    }
    /**
     * Container for cash on delivery (COD) information.
     *
     * @param ManifestPackageServiceOptionsCOD|null $cOD
     *
     * @return self
     */
    public function setCOD(?ManifestPackageServiceOptionsCOD $cOD) : self
    {
        $this->initialized['cOD'] = true;
        $this->cOD = $cOD;
        return $this;
    }
    /**
     * Container tag for insured value amount for the package.
     *
     * @return PackageServiceOptionsInsuredValue|null
     */
    public function getInsuredValue() : ?PackageServiceOptionsInsuredValue
    {
        return $this->insuredValue;
    }
    /**
     * Container tag for insured value amount for the package.
     *
     * @param PackageServiceOptionsInsuredValue|null $insuredValue
     *
     * @return self
     */
    public function setInsuredValue(?PackageServiceOptionsInsuredValue $insuredValue) : self
    {
        $this->initialized['insuredValue'] = true;
        $this->insuredValue = $insuredValue;
        return $this;
    }
    /**
     * Earliest delivery time. Time format is HHMMSS.
     *
     * @return string|null
     */
    public function getEarliestDeliveryTime() : ?string
    {
        return $this->earliestDeliveryTime;
    }
    /**
     * Earliest delivery time. Time format is HHMMSS.
     *
     * @param string|null $earliestDeliveryTime
     *
     * @return self
     */
    public function setEarliestDeliveryTime(?string $earliestDeliveryTime) : self
    {
        $this->initialized['earliestDeliveryTime'] = true;
        $this->earliestDeliveryTime = $earliestDeliveryTime;
        return $this;
    }
    /**
    * Indicates if the package contains hazardous materials. 
    Valid values: 
    1 - Hazardous Material
    2 - Electronically billed hazardous material.�
    If present, only one package may exist in the shipment.
    *
    * @return string|null
    */
    public function getHazardousMaterialsCode() : ?string
    {
        return $this->hazardousMaterialsCode;
    }
    /**
    * Indicates if the package contains hazardous materials. 
    Valid values: 
    1 - Hazardous Material
    2 - Electronically billed hazardous material.�
    If present, only one package may exist in the shipment.
    *
    * @param string|null $hazardousMaterialsCode
    *
    * @return self
    */
    public function setHazardousMaterialsCode(?string $hazardousMaterialsCode) : self
    {
        $this->initialized['hazardousMaterialsCode'] = true;
        $this->hazardousMaterialsCode = $hazardousMaterialsCode;
        return $this;
    }
    /**
     * A flag indicating if a package should be held for pickup. True if tag exists, false otherwise.
     *
     * @return string|null
     */
    public function getHoldForPickup() : ?string
    {
        return $this->holdForPickup;
    }
    /**
     * A flag indicating if a package should be held for pickup. True if tag exists, false otherwise.
     *
     * @param string|null $holdForPickup
     *
     * @return self
     */
    public function setHoldForPickup(?string $holdForPickup) : self
    {
        $this->initialized['holdForPickup'] = true;
        $this->holdForPickup = $holdForPickup;
        return $this;
    }
    /**
     * An indicator flag that represents a Collect on Delivery (COD) package.
     *
     * @return string|null
     */
    public function getAddShippingChargesToCODIndicator() : ?string
    {
        return $this->addShippingChargesToCODIndicator;
    }
    /**
     * An indicator flag that represents a Collect on Delivery (COD) package.
     *
     * @param string|null $addShippingChargesToCODIndicator
     *
     * @return self
     */
    public function setAddShippingChargesToCODIndicator(?string $addShippingChargesToCODIndicator) : self
    {
        $this->initialized['addShippingChargesToCODIndicator'] = true;
        $this->addShippingChargesToCODIndicator = $addShippingChargesToCODIndicator;
        return $this;
    }
}