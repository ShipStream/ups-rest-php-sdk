<?php

namespace ShipStream\Ups\Api\Model;

class TransportationPickUpSchedulePickUp extends \ArrayObject
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
    * Day of week.
    - 1 - Sunday
    - 2 - Monday
    - 3 - Tuesday
    - 4 - Wednesday
    - 5 - Thursday
    - 6 - Friday
    - 7 - Saturday.
    
    *
    * @var string
    */
    protected $dayOfWeek;
    /**
     * PickUpDetails container contains either pickup time or NoPickupIndicator. Either PickUpTime or NoPickupIndicator
     *
     * @var PickUpPickUpDetails
     */
    protected $pickUpDetails;
    /**
    * Day of week.
    - 1 - Sunday
    - 2 - Monday
    - 3 - Tuesday
    - 4 - Wednesday
    - 5 - Thursday
    - 6 - Friday
    - 7 - Saturday.
    
    *
    * @return string
    */
    public function getDayOfWeek() : string
    {
        return $this->dayOfWeek;
    }
    /**
    * Day of week.
    - 1 - Sunday
    - 2 - Monday
    - 3 - Tuesday
    - 4 - Wednesday
    - 5 - Thursday
    - 6 - Friday
    - 7 - Saturday.
    
    *
    * @param string $dayOfWeek
    *
    * @return self
    */
    public function setDayOfWeek(string $dayOfWeek) : self
    {
        $this->initialized['dayOfWeek'] = true;
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * PickUpDetails container contains either pickup time or NoPickupIndicator. Either PickUpTime or NoPickupIndicator
     *
     * @return PickUpPickUpDetails
     */
    public function getPickUpDetails() : PickUpPickUpDetails
    {
        return $this->pickUpDetails;
    }
    /**
     * PickUpDetails container contains either pickup time or NoPickupIndicator. Either PickUpTime or NoPickupIndicator
     *
     * @param PickUpPickUpDetails $pickUpDetails
     *
     * @return self
     */
    public function setPickUpDetails(PickUpPickUpDetails $pickUpDetails) : self
    {
        $this->initialized['pickUpDetails'] = true;
        $this->pickUpDetails = $pickUpDetails;
        return $this;
    }
}