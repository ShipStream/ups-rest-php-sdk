<?php

namespace ShipStream\Ups\Api\Model;

class PackageResultsChemicalRecordResults extends \ArrayObject
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
     * Identifies the Chemical Record.
     *
     * @var string|null
     */
    protected $chemicalRecordIdentifier;
    /**
     * Total points for the chemical records.
     *
     * @var string|null
     */
    protected $aDRPoints;
    /**
     * Transport Category.  Valid values: 0 to 4
     *
     * @var string|null
     */
    protected $transportCategory;
    /**
     * Defines what is restricted to pass through a tunnel.
     *
     * @var string|null
     */
    protected $tunnelRestrictionCode;
    /**
    * Number of ADR Units (Liters/Kg)
    Format: 9999.99
    *
    * @var string|null
    */
    protected $aDRUnits;
    /**
     * Identifies the Chemical Record.
     *
     * @return string|null
     */
    public function getChemicalRecordIdentifier() : ?string
    {
        return $this->chemicalRecordIdentifier;
    }
    /**
     * Identifies the Chemical Record.
     *
     * @param string|null $chemicalRecordIdentifier
     *
     * @return self
     */
    public function setChemicalRecordIdentifier(?string $chemicalRecordIdentifier) : self
    {
        $this->initialized['chemicalRecordIdentifier'] = true;
        $this->chemicalRecordIdentifier = $chemicalRecordIdentifier;
        return $this;
    }
    /**
     * Total points for the chemical records.
     *
     * @return string|null
     */
    public function getADRPoints() : ?string
    {
        return $this->aDRPoints;
    }
    /**
     * Total points for the chemical records.
     *
     * @param string|null $aDRPoints
     *
     * @return self
     */
    public function setADRPoints(?string $aDRPoints) : self
    {
        $this->initialized['aDRPoints'] = true;
        $this->aDRPoints = $aDRPoints;
        return $this;
    }
    /**
     * Transport Category.  Valid values: 0 to 4
     *
     * @return string|null
     */
    public function getTransportCategory() : ?string
    {
        return $this->transportCategory;
    }
    /**
     * Transport Category.  Valid values: 0 to 4
     *
     * @param string|null $transportCategory
     *
     * @return self
     */
    public function setTransportCategory(?string $transportCategory) : self
    {
        $this->initialized['transportCategory'] = true;
        $this->transportCategory = $transportCategory;
        return $this;
    }
    /**
     * Defines what is restricted to pass through a tunnel.
     *
     * @return string|null
     */
    public function getTunnelRestrictionCode() : ?string
    {
        return $this->tunnelRestrictionCode;
    }
    /**
     * Defines what is restricted to pass through a tunnel.
     *
     * @param string|null $tunnelRestrictionCode
     *
     * @return self
     */
    public function setTunnelRestrictionCode(?string $tunnelRestrictionCode) : self
    {
        $this->initialized['tunnelRestrictionCode'] = true;
        $this->tunnelRestrictionCode = $tunnelRestrictionCode;
        return $this;
    }
    /**
    * Number of ADR Units (Liters/Kg)
    Format: 9999.99
    *
    * @return string|null
    */
    public function getADRUnits() : ?string
    {
        return $this->aDRUnits;
    }
    /**
    * Number of ADR Units (Liters/Kg)
    Format: 9999.99
    *
    * @param string|null $aDRUnits
    *
    * @return self
    */
    public function setADRUnits(?string $aDRUnits) : self
    {
        $this->initialized['aDRUnits'] = true;
        $this->aDRUnits = $aDRUnits;
        return $this;
    }
}