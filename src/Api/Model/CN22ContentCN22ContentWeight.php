<?php

namespace ShipStream\Ups\Api\Model;

class CN22ContentCN22ContentWeight extends \ArrayObject
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
     * Container for UOM.
     *
     * @var CN22ContentWeightUnitOfMeasurement|null
     */
    protected $unitOfMeasurement;
    /**
     * Total weight of the content. Pounds and Ounces are allowed up to 2 decimals.  Required if the CN22 form container is present.
     *
     * @var string|null
     */
    protected $weight;
    /**
     * Container for UOM.
     *
     * @return CN22ContentWeightUnitOfMeasurement|null
     */
    public function getUnitOfMeasurement() : ?CN22ContentWeightUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * Container for UOM.
     *
     * @param CN22ContentWeightUnitOfMeasurement|null $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(?CN22ContentWeightUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
    /**
     * Total weight of the content. Pounds and Ounces are allowed up to 2 decimals.  Required if the CN22 form container is present.
     *
     * @return string|null
     */
    public function getWeight() : ?string
    {
        return $this->weight;
    }
    /**
     * Total weight of the content. Pounds and Ounces are allowed up to 2 decimals.  Required if the CN22 form container is present.
     *
     * @param string|null $weight
     *
     * @return self
     */
    public function setWeight(?string $weight) : self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
}