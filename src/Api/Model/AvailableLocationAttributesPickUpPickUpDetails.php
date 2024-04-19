<?php

namespace ShipStream\Ups\Api\Model;

class AvailableLocationAttributesPickUpPickUpDetails extends \ArrayObject
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
     * Time of pickup in military format (HHMM) e.g. 0930, 1700, 1845 etc. with exception for midnight. For midnight the time will be returned as 0.
     *
     * @var string
     */
    protected $pickUpTime;
    /**
    * Indicates whether or not there is a pickup time for the specified day of the week. Valid values:
    - True-there is a pickup time
    - False-there is not a pickup time.
    
    *
    * @var string
    */
    protected $noPickUpIndicator;
    /**
     * Time of pickup in military format (HHMM) e.g. 0930, 1700, 1845 etc. with exception for midnight. For midnight the time will be returned as 0.
     *
     * @return string
     */
    public function getPickUpTime() : string
    {
        return $this->pickUpTime;
    }
    /**
     * Time of pickup in military format (HHMM) e.g. 0930, 1700, 1845 etc. with exception for midnight. For midnight the time will be returned as 0.
     *
     * @param string $pickUpTime
     *
     * @return self
     */
    public function setPickUpTime(string $pickUpTime) : self
    {
        $this->initialized['pickUpTime'] = true;
        $this->pickUpTime = $pickUpTime;
        return $this;
    }
    /**
    * Indicates whether or not there is a pickup time for the specified day of the week. Valid values:
    - True-there is a pickup time
    - False-there is not a pickup time.
    
    *
    * @return string
    */
    public function getNoPickUpIndicator() : string
    {
        return $this->noPickUpIndicator;
    }
    /**
    * Indicates whether or not there is a pickup time for the specified day of the week. Valid values:
    - True-there is a pickup time
    - False-there is not a pickup time.
    
    *
    * @param string $noPickUpIndicator
    *
    * @return self
    */
    public function setNoPickUpIndicator(string $noPickUpIndicator) : self
    {
        $this->initialized['noPickUpIndicator'] = true;
        $this->noPickUpIndicator = $noPickUpIndicator;
        return $this;
    }
}