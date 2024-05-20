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
     * @var string
     */
    protected $packageIdentifier;
    /**
    * Indicates if a package is crew accessible or not.  Y = Package is crew accessible.
    N = Package is not crew accessible.
    *
    * @var string
    */
    protected $accessibleIndicator;
    /**
    * Indicates if origin country or territory is in the Europe Business Unit. 
     Y = Origin country or territory is in the Europe Business Unit.
    N = Origin country or territory is not in the Europe Business Unit.
    *
    * @var string
    */
    protected $europeBUIndicator;
    /**
     * 
     *
     * @var list<PackageResultsChemicalRecordResults>
     */
    protected $chemicalRecordResults;
    /**
     * Identifies the package containing Dangerous Goods.
     *
     * @return string
     */
    public function getPackageIdentifier() : string
    {
        return $this->packageIdentifier;
    }
    /**
     * Identifies the package containing Dangerous Goods.
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
    * Indicates if a package is crew accessible or not.  Y = Package is crew accessible.
    N = Package is not crew accessible.
    *
    * @return string
    */
    public function getAccessibleIndicator() : string
    {
        return $this->accessibleIndicator;
    }
    /**
    * Indicates if a package is crew accessible or not.  Y = Package is crew accessible.
    N = Package is not crew accessible.
    *
    * @param string $accessibleIndicator
    *
    * @return self
    */
    public function setAccessibleIndicator(string $accessibleIndicator) : self
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
    * @return string
    */
    public function getEuropeBUIndicator() : string
    {
        return $this->europeBUIndicator;
    }
    /**
    * Indicates if origin country or territory is in the Europe Business Unit. 
     Y = Origin country or territory is in the Europe Business Unit.
    N = Origin country or territory is not in the Europe Business Unit.
    *
    * @param string $europeBUIndicator
    *
    * @return self
    */
    public function setEuropeBUIndicator(string $europeBUIndicator) : self
    {
        $this->initialized['europeBUIndicator'] = true;
        $this->europeBUIndicator = $europeBUIndicator;
        return $this;
    }
    /**
     * 
     *
     * @return list<PackageResultsChemicalRecordResults>
     */
    public function getChemicalRecordResults() : array
    {
        return $this->chemicalRecordResults;
    }
    /**
     * 
     *
     * @param list<PackageResultsChemicalRecordResults> $chemicalRecordResults
     *
     * @return self
     */
    public function setChemicalRecordResults(array $chemicalRecordResults) : self
    {
        $this->initialized['chemicalRecordResults'] = true;
        $this->chemicalRecordResults = $chemicalRecordResults;
        return $this;
    }
}