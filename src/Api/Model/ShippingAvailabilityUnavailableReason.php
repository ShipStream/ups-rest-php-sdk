<?php

namespace ShipStream\Ups\Api\Model;

class ShippingAvailabilityUnavailableReason extends \ArrayObject
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
    * Code for shipping unavailability. Code for DCR/DCO unavailability.
    
    Valid values:
    - 01 - Temporarily Unavailable
    - 02 - Location Full
    - 03 - Unavailable
    - 04 - Weather
    
    *
    * @var string
    */
    protected $code;
    /**
     * Description for shipping unavailability.
     *
     * @var string
     */
    protected $description;
    /**
    * Code for shipping unavailability. Code for DCR/DCO unavailability.
    
    Valid values:
    - 01 - Temporarily Unavailable
    - 02 - Location Full
    - 03 - Unavailable
    - 04 - Weather
    
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Code for shipping unavailability. Code for DCR/DCO unavailability.
    
    Valid values:
    - 01 - Temporarily Unavailable
    - 02 - Location Full
    - 03 - Unavailable
    - 04 - Weather
    
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
     * Description for shipping unavailability.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description for shipping unavailability.
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