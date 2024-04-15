<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentServiceOptionsRestrictedArticles extends \ArrayObject
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
     * This field is a flag to indicate if the package has Biological substances. True if present; false otherwise.  Shippers account needs to have a valid contract for Biological Substances. Lane check will happen based on postal code/ city.
     *
     * @var string|null
     */
    protected $diagnosticSpecimensIndicator;
    /**
     * Presence/Absence Indicator. True if present; false otherwise. Any value is ignored. If present, indicates that the package contains Alcoholic Beverages  Shippers account needs to have a valid contract for Alcohol.
     *
     * @var string|null
     */
    protected $alcoholicBeveragesIndicator;
    /**
     * Presence/Absence Indicator. True if present; false otherwise. Any value is ignored. If present, indicates that the package contains Perishable items.  Shippers account needs to have a valid contract for Perishables.
     *
     * @var string|null
     */
    protected $perishablesIndicator;
    /**
     * Presence/Absence Indicator. True if present; false otherwise. Any value is ignored. If present, indicates that the package contains Plants  Shippers account needs to have a valid contract for Plants.
     *
     * @var string|null
     */
    protected $plantsIndicator;
    /**
     * Presence/Absence Indicator. True if present; false otherwise. Any value is ignored. If present, indicates that the package contains Seeds.  Shippers account needs to have a valid contract for Seeds.
     *
     * @var string|null
     */
    protected $seedsIndicator;
    /**
     * Presence/Absence Indicator. True if present; false otherwise. Any value is ignored. If present, indicates that the package contains Special Exception items.  Shippers account needs to have a valid contract for Special Exceptions.
     *
     * @var string|null
     */
    protected $specialExceptionsIndicator;
    /**
     * Presence/Absence Indicator. True if present; false otherwise. Any value is ignored. If present, indicates that the package contains Tobacco  Shippers account needs to have a valid contract for Tobacco.
     *
     * @var string|null
     */
    protected $tobaccoIndicator;
    /**
     * This field is a flag to indicate if the package has Biological substances. True if present; false otherwise.  Shippers account needs to have a valid contract for Biological Substances. Lane check will happen based on postal code/ city.
     *
     * @return string|null
     */
    public function getDiagnosticSpecimensIndicator() : ?string
    {
        return $this->diagnosticSpecimensIndicator;
    }
    /**
     * This field is a flag to indicate if the package has Biological substances. True if present; false otherwise.  Shippers account needs to have a valid contract for Biological Substances. Lane check will happen based on postal code/ city.
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
     * Presence/Absence Indicator. True if present; false otherwise. Any value is ignored. If present, indicates that the package contains Alcoholic Beverages  Shippers account needs to have a valid contract for Alcohol.
     *
     * @return string|null
     */
    public function getAlcoholicBeveragesIndicator() : ?string
    {
        return $this->alcoholicBeveragesIndicator;
    }
    /**
     * Presence/Absence Indicator. True if present; false otherwise. Any value is ignored. If present, indicates that the package contains Alcoholic Beverages  Shippers account needs to have a valid contract for Alcohol.
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
     * Presence/Absence Indicator. True if present; false otherwise. Any value is ignored. If present, indicates that the package contains Perishable items.  Shippers account needs to have a valid contract for Perishables.
     *
     * @return string|null
     */
    public function getPerishablesIndicator() : ?string
    {
        return $this->perishablesIndicator;
    }
    /**
     * Presence/Absence Indicator. True if present; false otherwise. Any value is ignored. If present, indicates that the package contains Perishable items.  Shippers account needs to have a valid contract for Perishables.
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
     * Presence/Absence Indicator. True if present; false otherwise. Any value is ignored. If present, indicates that the package contains Plants  Shippers account needs to have a valid contract for Plants.
     *
     * @return string|null
     */
    public function getPlantsIndicator() : ?string
    {
        return $this->plantsIndicator;
    }
    /**
     * Presence/Absence Indicator. True if present; false otherwise. Any value is ignored. If present, indicates that the package contains Plants  Shippers account needs to have a valid contract for Plants.
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
     * Presence/Absence Indicator. True if present; false otherwise. Any value is ignored. If present, indicates that the package contains Seeds.  Shippers account needs to have a valid contract for Seeds.
     *
     * @return string|null
     */
    public function getSeedsIndicator() : ?string
    {
        return $this->seedsIndicator;
    }
    /**
     * Presence/Absence Indicator. True if present; false otherwise. Any value is ignored. If present, indicates that the package contains Seeds.  Shippers account needs to have a valid contract for Seeds.
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
     * Presence/Absence Indicator. True if present; false otherwise. Any value is ignored. If present, indicates that the package contains Special Exception items.  Shippers account needs to have a valid contract for Special Exceptions.
     *
     * @return string|null
     */
    public function getSpecialExceptionsIndicator() : ?string
    {
        return $this->specialExceptionsIndicator;
    }
    /**
     * Presence/Absence Indicator. True if present; false otherwise. Any value is ignored. If present, indicates that the package contains Special Exception items.  Shippers account needs to have a valid contract for Special Exceptions.
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
     * Presence/Absence Indicator. True if present; false otherwise. Any value is ignored. If present, indicates that the package contains Tobacco  Shippers account needs to have a valid contract for Tobacco.
     *
     * @return string|null
     */
    public function getTobaccoIndicator() : ?string
    {
        return $this->tobaccoIndicator;
    }
    /**
     * Presence/Absence Indicator. True if present; false otherwise. Any value is ignored. If present, indicates that the package contains Tobacco  Shippers account needs to have a valid contract for Tobacco.
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
}