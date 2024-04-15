<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentFreightShipmentInformation extends \ArrayObject
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
     * Freight Density Info container.  Required if DensityEligibleIndicator is present.
     *
     * @var FreightShipmentInformationFreightDensityInfo|null
     */
    protected $freightDensityInfo;
    /**
    * The presence of the tag indicates that the rate request is density based.
    For Density Based Rating (DBR), the customer must have DBR Contract Service.
    *
    * @var string|null
    */
    protected $densityEligibleIndicator;
    /**
     * Freight Density Info container.  Required if DensityEligibleIndicator is present.
     *
     * @return FreightShipmentInformationFreightDensityInfo|null
     */
    public function getFreightDensityInfo() : ?FreightShipmentInformationFreightDensityInfo
    {
        return $this->freightDensityInfo;
    }
    /**
     * Freight Density Info container.  Required if DensityEligibleIndicator is present.
     *
     * @param FreightShipmentInformationFreightDensityInfo|null $freightDensityInfo
     *
     * @return self
     */
    public function setFreightDensityInfo(?FreightShipmentInformationFreightDensityInfo $freightDensityInfo) : self
    {
        $this->initialized['freightDensityInfo'] = true;
        $this->freightDensityInfo = $freightDensityInfo;
        return $this;
    }
    /**
    * The presence of the tag indicates that the rate request is density based.
    For Density Based Rating (DBR), the customer must have DBR Contract Service.
    *
    * @return string|null
    */
    public function getDensityEligibleIndicator() : ?string
    {
        return $this->densityEligibleIndicator;
    }
    /**
    * The presence of the tag indicates that the rate request is density based.
    For Density Based Rating (DBR), the customer must have DBR Contract Service.
    *
    * @param string|null $densityEligibleIndicator
    *
    * @return self
    */
    public function setDensityEligibleIndicator(?string $densityEligibleIndicator) : self
    {
        $this->initialized['densityEligibleIndicator'] = true;
        $this->densityEligibleIndicator = $densityEligibleIndicator;
        return $this;
    }
}