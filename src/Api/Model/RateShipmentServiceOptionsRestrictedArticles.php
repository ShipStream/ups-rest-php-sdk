<?php

namespace ShipStream\Ups\Api\Model;

class RateShipmentServiceOptionsRestrictedArticles extends \ArrayObject
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
     * This field is a flag to indicate if the package has Alcohol. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @var string|null
     */
    protected $alcoholicBeveragesIndicator;
    /**
     * This field is a flag to indicate if the package has Biological substances. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments. Lane check will happen based on postal code/ city.
     *
     * @var string|null
     */
    protected $diagnosticSpecimensIndicator;
    /**
     * This field is a flag to indicate if the package has Perishables. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @var string|null
     */
    protected $perishablesIndicator;
    /**
     * This field is a flag to indicate if the package has Plants. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @var string|null
     */
    protected $plantsIndicator;
    /**
     * This field is a flag to indicate if the package has Seeds. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @var string|null
     */
    protected $seedsIndicator;
    /**
     * This field is a flag to indicate if the package has Special Exceptions Restricted Materials. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @var string|null
     */
    protected $specialExceptionsIndicator;
    /**
     * This field is a flag to indicate if the package has Tobacco. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @var string|null
     */
    protected $tobaccoIndicator;
    /**
     * This field is a flag to indicate if the package has E-Cigarettes. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @var string|null
     */
    protected $eCigarettesIndicator;
    /**
     * This field is a flag to indicate if the package has Hemp/CBD. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @var string|null
     */
    protected $hempCBDIndicator;
    /**
     * This field is a flag to indicate if the package has Alcohol. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return string|null
     */
    public function getAlcoholicBeveragesIndicator() : ?string
    {
        return $this->alcoholicBeveragesIndicator;
    }
    /**
     * This field is a flag to indicate if the package has Alcohol. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @param string|null $alcoholicBeveragesIndicator
     *
     * @return self
     */
    public function setAlcoholicBeveragesIndicator(?string $alcoholicBeveragesIndicator) : self
    {
        $this->initialized['alcoholicBeveragesIndicator'] = true;
        $this->alcoholicBeveragesIndicator = $alcoholicBeveragesIndicator;
        return $this;
    }
    /**
     * This field is a flag to indicate if the package has Biological substances. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments. Lane check will happen based on postal code/ city.
     *
     * @return string|null
     */
    public function getDiagnosticSpecimensIndicator() : ?string
    {
        return $this->diagnosticSpecimensIndicator;
    }
    /**
     * This field is a flag to indicate if the package has Biological substances. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments. Lane check will happen based on postal code/ city.
     *
     * @param string|null $diagnosticSpecimensIndicator
     *
     * @return self
     */
    public function setDiagnosticSpecimensIndicator(?string $diagnosticSpecimensIndicator) : self
    {
        $this->initialized['diagnosticSpecimensIndicator'] = true;
        $this->diagnosticSpecimensIndicator = $diagnosticSpecimensIndicator;
        return $this;
    }
    /**
     * This field is a flag to indicate if the package has Perishables. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return string|null
     */
    public function getPerishablesIndicator() : ?string
    {
        return $this->perishablesIndicator;
    }
    /**
     * This field is a flag to indicate if the package has Perishables. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @param string|null $perishablesIndicator
     *
     * @return self
     */
    public function setPerishablesIndicator(?string $perishablesIndicator) : self
    {
        $this->initialized['perishablesIndicator'] = true;
        $this->perishablesIndicator = $perishablesIndicator;
        return $this;
    }
    /**
     * This field is a flag to indicate if the package has Plants. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return string|null
     */
    public function getPlantsIndicator() : ?string
    {
        return $this->plantsIndicator;
    }
    /**
     * This field is a flag to indicate if the package has Plants. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @param string|null $plantsIndicator
     *
     * @return self
     */
    public function setPlantsIndicator(?string $plantsIndicator) : self
    {
        $this->initialized['plantsIndicator'] = true;
        $this->plantsIndicator = $plantsIndicator;
        return $this;
    }
    /**
     * This field is a flag to indicate if the package has Seeds. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return string|null
     */
    public function getSeedsIndicator() : ?string
    {
        return $this->seedsIndicator;
    }
    /**
     * This field is a flag to indicate if the package has Seeds. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @param string|null $seedsIndicator
     *
     * @return self
     */
    public function setSeedsIndicator(?string $seedsIndicator) : self
    {
        $this->initialized['seedsIndicator'] = true;
        $this->seedsIndicator = $seedsIndicator;
        return $this;
    }
    /**
     * This field is a flag to indicate if the package has Special Exceptions Restricted Materials. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return string|null
     */
    public function getSpecialExceptionsIndicator() : ?string
    {
        return $this->specialExceptionsIndicator;
    }
    /**
     * This field is a flag to indicate if the package has Special Exceptions Restricted Materials. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @param string|null $specialExceptionsIndicator
     *
     * @return self
     */
    public function setSpecialExceptionsIndicator(?string $specialExceptionsIndicator) : self
    {
        $this->initialized['specialExceptionsIndicator'] = true;
        $this->specialExceptionsIndicator = $specialExceptionsIndicator;
        return $this;
    }
    /**
     * This field is a flag to indicate if the package has Tobacco. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return string|null
     */
    public function getTobaccoIndicator() : ?string
    {
        return $this->tobaccoIndicator;
    }
    /**
     * This field is a flag to indicate if the package has Tobacco. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @param string|null $tobaccoIndicator
     *
     * @return self
     */
    public function setTobaccoIndicator(?string $tobaccoIndicator) : self
    {
        $this->initialized['tobaccoIndicator'] = true;
        $this->tobaccoIndicator = $tobaccoIndicator;
        return $this;
    }
    /**
     * This field is a flag to indicate if the package has E-Cigarettes. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return string|null
     */
    public function getECigarettesIndicator() : ?string
    {
        return $this->eCigarettesIndicator;
    }
    /**
     * This field is a flag to indicate if the package has E-Cigarettes. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @param string|null $eCigarettesIndicator
     *
     * @return self
     */
    public function setECigarettesIndicator(?string $eCigarettesIndicator) : self
    {
        $this->initialized['eCigarettesIndicator'] = true;
        $this->eCigarettesIndicator = $eCigarettesIndicator;
        return $this;
    }
    /**
     * This field is a flag to indicate if the package has Hemp/CBD. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return string|null
     */
    public function getHempCBDIndicator() : ?string
    {
        return $this->hempCBDIndicator;
    }
    /**
     * This field is a flag to indicate if the package has Hemp/CBD. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @param string|null $hempCBDIndicator
     *
     * @return self
     */
    public function setHempCBDIndicator(?string $hempCBDIndicator) : self
    {
        $this->initialized['hempCBDIndicator'] = true;
        $this->hempCBDIndicator = $hempCBDIndicator;
        return $this;
    }
}