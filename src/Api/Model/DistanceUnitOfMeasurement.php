<?php

namespace ShipStream\Ups\Api\Model;

class DistanceUnitOfMeasurement extends \ArrayObject
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
    * The distance unit of measurement code. The unit of measurement used in the search request is returned. 
    
    Valid values: MI-Miles or KM-Kilometers
    *
    * @var string
    */
    protected $code;
    /**
     * May return the description of the unit of measure specified in the request.
     *
     * @var string
     */
    protected $description;
    /**
    * The distance unit of measurement code. The unit of measurement used in the search request is returned. 
    
    Valid values: MI-Miles or KM-Kilometers
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * The distance unit of measurement code. The unit of measurement used in the search request is returned. 
    
    Valid values: MI-Miles or KM-Kilometers
    *
    * @param string $code
    *
    * @return self
    */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * May return the description of the unit of measure specified in the request.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * May return the description of the unit of measure specified in the request.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}