<?php

namespace ShipStream\Ups\Api\Model;

class AcceptanceAuditPreCheckResponsePackageResults extends \ArrayObject
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
     * Identifies the package containing Dangerous Goods.
     *
     * @var string|null
     */
    protected $packageIdentifier;
    /**
    * Indicates if a package is crew accessible or not.  Y = Package is crew accessible.
    N = Package is not crew accessible.
    *
    * @var string|null
    */
    protected $accessibleIndicator;
    /**
    * Indicates if origin country or territory is in the Europe Business Unit. 
     Y = Origin country or territory is in the Europe Business Unit.
    N = Origin country or territory is not in the Europe Business Unit.
    *
    * @var string|null
    */
    protected $europeBUIndicator;
    /**
     * 
     *
     * @var list<PackageResultsChemicalRecordResults>|null
     */
    protected $chemicalRecordResults;
    /**
     * Identifies the package containing Dangerous Goods.
     *
     * @return string|null
     */
    public function getPackageIdentifier() : ?string
    {
        return $this->packageIdentifier;
    }
    /**
     * Identifies the package containing Dangerous Goods.
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
    * Indicates if a package is crew accessible or not.  Y = Package is crew accessible.
    N = Package is not crew accessible.
    *
    * @return string|null
    */
    public function getAccessibleIndicator() : ?string
    {
        return $this->accessibleIndicator;
    }
    /**
    * Indicates if a package is crew accessible or not.  Y = Package is crew accessible.
    N = Package is not crew accessible.
    *
    * @param string|null $accessibleIndicator
    *
    * @return self
    */
    public function setAccessibleIndicator(?string $accessibleIndicator) : self
    {
        $this->initialized['accessibleIndicator'] = true;
        $this->accessibleIndicator = $accessibleIndicator;
        return $this;
    }
    /**
    * Indicates if origin country or territory is in the Europe Business Unit. 
     Y = Origin country or territory is in the Europe Business Unit.
    N = Origin country or territory is not in the Europe Business Unit.
    *
    * @return string|null
    */
    public function getEuropeBUIndicator() : ?string
    {
        return $this->europeBUIndicator;
    }
    /**
    * Indicates if origin country or territory is in the Europe Business Unit. 
     Y = Origin country or territory is in the Europe Business Unit.
    N = Origin country or territory is not in the Europe Business Unit.
    *
    * @param string|null $europeBUIndicator
    *
    * @return self
    */
    public function setEuropeBUIndicator(?string $europeBUIndicator) : self
    {
        $this->initialized['europeBUIndicator'] = true;
        $this->europeBUIndicator = $europeBUIndicator;
        return $this;
    }
    /**
     * 
     *
     * @return list<PackageResultsChemicalRecordResults>|null
     */
    public function getChemicalRecordResults() : ?array
    {
        return $this->chemicalRecordResults;
    }
    /**
     * 
     *
     * @param list<PackageResultsChemicalRecordResults>|null $chemicalRecordResults
     *
     * @return self
     */
    public function setChemicalRecordResults(?array $chemicalRecordResults) : self
    {
        $this->initialized['chemicalRecordResults'] = true;
        $this->chemicalRecordResults = $chemicalRecordResults;
        return $this;
    }
}