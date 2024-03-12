<?php

namespace ShipStream\Ups\Api\Model;

class PickupCreationRequestTotalWeight extends \ArrayObject
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
    * The weight of the package. 
    One decimal digit is allowed. Example: 10.9
    *
    * @var string
    */
    protected $weight;
    /**
    * The code representing the unit of measurement associated with the package.
    LBS = Pounds
    KGS = Kilograms
    *
    * @var string
    */
    protected $unitOfMeasurement;
    /**
    * The weight of the package. 
    One decimal digit is allowed. Example: 10.9
    *
    * @return string
    */
    public function getWeight() : string
    {
        return $this->weight;
    }
    /**
    * The weight of the package. 
    One decimal digit is allowed. Example: 10.9
    *
    * @param string $weight
    *
    * @return self
    */
    public function setWeight(string $weight) : self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
    * The code representing the unit of measurement associated with the package.
    LBS = Pounds
    KGS = Kilograms
    *
    * @return string
    */
    public function getUnitOfMeasurement() : string
    {
        return $this->unitOfMeasurement;
    }
    /**
    * The code representing the unit of measurement associated with the package.
    LBS = Pounds
    KGS = Kilograms
    *
    * @param string $unitOfMeasurement
    *
    * @return self
    */
    public function setUnitOfMeasurement(string $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
}