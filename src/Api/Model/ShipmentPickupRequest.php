<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentPickupRequest extends \ArrayObject
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
     * Additional pickup comments or instructions
     *
     * @var string
     */
    protected $additionalComments;
    /**
    * Requester Container. Also referred to as caller.
    Required for ground shipments if PickupRequest container is present.
    *
    * @var PickupRequestRequester
    */
    protected $requester;
    /**
    * Date of the Pickup. 
    Format: YYYYMMDD.
    Ground pickup may be scheduled up to 42 days in the future.
    Note: This element will act as PickupDate or DropOffDate based on the presence of PickupTimeReady or DropOffTimeReady element.
    *
    * @var string
    */
    protected $pickupDate;
    /**
    * The earliest time a shipment is ready to be picked up.
    The time is on a 24 hour clock. 
    Format: HHMM
    HH = Hour values 00 to 23
    MM = Minute values 00 to 59
    *
    * @var string
    */
    protected $earliestTimeReady;
    /**
    * The latest time a shipment can be picked up. Can be also referred as the Closing Time for a pickup time window.
    The time is on a 24 hour clock. 
    Format: HHMM
    HH = Hour values 00 to 23
    MM = Minute values 00 to 59
    Optional if the account type is House.
    *
    * @var string
    */
    protected $latestTimeReady;
    /**
     * Pickup Order Management (POM) container.
     *
     * @var PickupRequestPOM
     */
    protected $pOM;
    /**
     * Additional pickup comments or instructions
     *
     * @return string
     */
    public function getAdditionalComments() : string
    {
        return $this->additionalComments;
    }
    /**
     * Additional pickup comments or instructions
     *
     * @param string $additionalComments
     *
     * @return self
     */
    public function setAdditionalComments(string $additionalComments) : self
    {
        $this->initialized['additionalComments'] = true;
        $this->additionalComments = $additionalComments;
        return $this;
    }
    /**
    * Requester Container. Also referred to as caller.
    Required for ground shipments if PickupRequest container is present.
    *
    * @return PickupRequestRequester
    */
    public function getRequester() : PickupRequestRequester
    {
        return $this->requester;
    }
    /**
    * Requester Container. Also referred to as caller.
    Required for ground shipments if PickupRequest container is present.
    *
    * @param PickupRequestRequester $requester
    *
    * @return self
    */
    public function setRequester(PickupRequestRequester $requester) : self
    {
        $this->initialized['requester'] = true;
        $this->requester = $requester;
        return $this;
    }
    /**
    * Date of the Pickup. 
    Format: YYYYMMDD.
    Ground pickup may be scheduled up to 42 days in the future.
    Note: This element will act as PickupDate or DropOffDate based on the presence of PickupTimeReady or DropOffTimeReady element.
    *
    * @return string
    */
    public function getPickupDate() : string
    {
        return $this->pickupDate;
    }
    /**
    * Date of the Pickup. 
    Format: YYYYMMDD.
    Ground pickup may be scheduled up to 42 days in the future.
    Note: This element will act as PickupDate or DropOffDate based on the presence of PickupTimeReady or DropOffTimeReady element.
    *
    * @param string $pickupDate
    *
    * @return self
    */
    public function setPickupDate(string $pickupDate) : self
    {
        $this->initialized['pickupDate'] = true;
        $this->pickupDate = $pickupDate;
        return $this;
    }
    /**
    * The earliest time a shipment is ready to be picked up.
    The time is on a 24 hour clock. 
    Format: HHMM
    HH = Hour values 00 to 23
    MM = Minute values 00 to 59
    *
    * @return string
    */
    public function getEarliestTimeReady() : string
    {
        return $this->earliestTimeReady;
    }
    /**
    * The earliest time a shipment is ready to be picked up.
    The time is on a 24 hour clock. 
    Format: HHMM
    HH = Hour values 00 to 23
    MM = Minute values 00 to 59
    *
    * @param string $earliestTimeReady
    *
    * @return self
    */
    public function setEarliestTimeReady(string $earliestTimeReady) : self
    {
        $this->initialized['earliestTimeReady'] = true;
        $this->earliestTimeReady = $earliestTimeReady;
        return $this;
    }
    /**
    * The latest time a shipment can be picked up. Can be also referred as the Closing Time for a pickup time window.
    The time is on a 24 hour clock. 
    Format: HHMM
    HH = Hour values 00 to 23
    MM = Minute values 00 to 59
    Optional if the account type is House.
    *
    * @return string
    */
    public function getLatestTimeReady() : string
    {
        return $this->latestTimeReady;
    }
    /**
    * The latest time a shipment can be picked up. Can be also referred as the Closing Time for a pickup time window.
    The time is on a 24 hour clock. 
    Format: HHMM
    HH = Hour values 00 to 23
    MM = Minute values 00 to 59
    Optional if the account type is House.
    *
    * @param string $latestTimeReady
    *
    * @return self
    */
    public function setLatestTimeReady(string $latestTimeReady) : self
    {
        $this->initialized['latestTimeReady'] = true;
        $this->latestTimeReady = $latestTimeReady;
        return $this;
    }
    /**
     * Pickup Order Management (POM) container.
     *
     * @return PickupRequestPOM
     */
    public function getPOM() : PickupRequestPOM
    {
        return $this->pOM;
    }
    /**
     * Pickup Order Management (POM) container.
     *
     * @param PickupRequestPOM $pOM
     *
     * @return self
     */
    public function setPOM(PickupRequestPOM $pOM) : self
    {
        $this->initialized['pOM'] = true;
        $this->pOM = $pOM;
        return $this;
    }
}