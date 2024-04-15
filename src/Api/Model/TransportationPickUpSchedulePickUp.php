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
    * Day of the week for scheduled pickup. Valid values are: 
    1-Sunday
    2-Monday
    3-Tuesday
    4-Wednesday
    5-Thursday
    6-Friday
    7-Saturday.
    *
    * @var string|null
    */
    protected $dayOfWeek;
    /**
     * Container to hold information regarding pickup time and pickup availability indicator.
     *
     * @var PickUpPickUpDetails|null
     */
    protected $pickUpDetails;
    /**
    * Day of the week for scheduled pickup. Valid values are: 
    1-Sunday
    2-Monday
    3-Tuesday
    4-Wednesday
    5-Thursday
    6-Friday
    7-Saturday.
    *
    * @return string|null
    */
    public function getDayOfWeek() : ?string
    {
        return $this->dayOfWeek;
    }
    /**
    * Day of the week for scheduled pickup. Valid values are: 
    1-Sunday
    2-Monday
    3-Tuesday
    4-Wednesday
    5-Thursday
    6-Friday
    7-Saturday.
    *
    * @param string|null $dayOfWeek
    *
    * @return self
    */
    public function setDayOfWeek(?string $dayOfWeek) : self
    {
        $this->initialized['dayOfWeek'] = true;
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * Container to hold information regarding pickup time and pickup availability indicator.
     *
     * @return PickUpPickUpDetails|null
     */
    public function getPickUpDetails() : ?PickUpPickUpDetails
    {
        return $this->pickUpDetails;
    }
    /**
     * Container to hold information regarding pickup time and pickup availability indicator.
     *
     * @param PickUpPickUpDetails|null $pickUpDetails
     *
     * @return self
     */
    public function setPickUpDetails(?PickUpPickUpDetails $pickUpDetails) : self
    {
        $this->initialized['pickUpDetails'] = true;
        $this->pickUpDetails = $pickUpDetails;
        return $this;
    }
}