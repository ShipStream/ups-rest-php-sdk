<?php

namespace ShipStream\Ups\Api\Model;

class PickupPendingStatusResponsePendingStatus extends \ArrayObject
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
    * Specify the type of pending pickup.
    - 01 = on-callPickup
    *
    * @var string
    */
    protected $pickupType;
    /**
    * Local service date. Format: yyyyMMdd
    - yyyy = Year applicable
    - MM = 01-12
    - dd = 01-31
    *
    * @var string
    */
    protected $serviceDate;
    /**
     * Returned PRN
     *
     * @var string
     */
    protected $pRN;
    /**
     * Status code for Smart Pickup.
     *
     * @var string
     */
    protected $gWNStatusCode;
    /**
     * A unique string identifier to identify a success pre-notification processing. Only available if end result is success.
     *
     * @var string
     */
    protected $onCallStatusCode;
    /**
    * The status for on-callpickup.
    
    PickupPendingStatusResponse will only display incomplete status for today and tomorrow only.
    - 002 and 012 are the most common responses.
    - 001 = Received at dispatch
    - 002 = Dispatched to driver
    - 003 = Order successfully completed
    - 004 = Order unsuccessfully completed
    - 005 = Missed commit – Updated ETA supplied by driver
    - 007 = Cancelled
    - 008 = Order has invalid order status
    - 012 = Your pickup request is being processed
    
    *
    * @var string
    */
    protected $pickupStatusMessage;
    /**
    * Pickup billing classification for on call
    - 01 = Regular
    - 02 = Return
    - 03 = Alternate Address (Not supported for now)
    *
    * @var string
    */
    protected $billingCode;
    /**
     * on-callpickup contact name
     *
     * @var string
     */
    protected $contactName;
    /**
     * Customer provided reference number for on-call pickup
     *
     * @var string
     */
    protected $referenceNumber;
    /**
    * Specify the type of pending pickup.
    - 01 = on-callPickup
    *
    * @return string
    */
    public function getPickupType() : string
    {
        return $this->pickupType;
    }
    /**
    * Specify the type of pending pickup.
    - 01 = on-callPickup
    *
    * @param string $pickupType
    *
    * @return self
    */
    public function setPickupType(string $pickupType) : self
    {
        $this->initialized['pickupType'] = true;
        $this->pickupType = $pickupType;
        return $this;
    }
    /**
    * Local service date. Format: yyyyMMdd
    - yyyy = Year applicable
    - MM = 01-12
    - dd = 01-31
    *
    * @return string
    */
    public function getServiceDate() : string
    {
        return $this->serviceDate;
    }
    /**
    * Local service date. Format: yyyyMMdd
    - yyyy = Year applicable
    - MM = 01-12
    - dd = 01-31
    *
    * @param string $serviceDate
    *
    * @return self
    */
    public function setServiceDate(string $serviceDate) : self
    {
        $this->initialized['serviceDate'] = true;
        $this->serviceDate = $serviceDate;
        return $this;
    }
    /**
     * Returned PRN
     *
     * @return string
     */
    public function getPRN() : string
    {
        return $this->pRN;
    }
    /**
     * Returned PRN
     *
     * @param string $pRN
     *
     * @return self
     */
    public function setPRN(string $pRN) : self
    {
        $this->initialized['pRN'] = true;
        $this->pRN = $pRN;
        return $this;
    }
    /**
     * Status code for Smart Pickup.
     *
     * @return string
     */
    public function getGWNStatusCode() : string
    {
        return $this->gWNStatusCode;
    }
    /**
     * Status code for Smart Pickup.
     *
     * @param string $gWNStatusCode
     *
     * @return self
     */
    public function setGWNStatusCode(string $gWNStatusCode) : self
    {
        $this->initialized['gWNStatusCode'] = true;
        $this->gWNStatusCode = $gWNStatusCode;
        return $this;
    }
    /**
     * A unique string identifier to identify a success pre-notification processing. Only available if end result is success.
     *
     * @return string
     */
    public function getOnCallStatusCode() : string
    {
        return $this->onCallStatusCode;
    }
    /**
     * A unique string identifier to identify a success pre-notification processing. Only available if end result is success.
     *
     * @param string $onCallStatusCode
     *
     * @return self
     */
    public function setOnCallStatusCode(string $onCallStatusCode) : self
    {
        $this->initialized['onCallStatusCode'] = true;
        $this->onCallStatusCode = $onCallStatusCode;
        return $this;
    }
    /**
    * The status for on-callpickup.
    
    PickupPendingStatusResponse will only display incomplete status for today and tomorrow only.
    - 002 and 012 are the most common responses.
    - 001 = Received at dispatch
    - 002 = Dispatched to driver
    - 003 = Order successfully completed
    - 004 = Order unsuccessfully completed
    - 005 = Missed commit – Updated ETA supplied by driver
    - 007 = Cancelled
    - 008 = Order has invalid order status
    - 012 = Your pickup request is being processed
    
    *
    * @return string
    */
    public function getPickupStatusMessage() : string
    {
        return $this->pickupStatusMessage;
    }
    /**
    * The status for on-callpickup.
    
    PickupPendingStatusResponse will only display incomplete status for today and tomorrow only.
    - 002 and 012 are the most common responses.
    - 001 = Received at dispatch
    - 002 = Dispatched to driver
    - 003 = Order successfully completed
    - 004 = Order unsuccessfully completed
    - 005 = Missed commit – Updated ETA supplied by driver
    - 007 = Cancelled
    - 008 = Order has invalid order status
    - 012 = Your pickup request is being processed
    
    *
    * @param string $pickupStatusMessage
    *
    * @return self
    */
    public function setPickupStatusMessage(string $pickupStatusMessage) : self
    {
        $this->initialized['pickupStatusMessage'] = true;
        $this->pickupStatusMessage = $pickupStatusMessage;
        return $this;
    }
    /**
    * Pickup billing classification for on call
    - 01 = Regular
    - 02 = Return
    - 03 = Alternate Address (Not supported for now)
    *
    * @return string
    */
    public function getBillingCode() : string
    {
        return $this->billingCode;
    }
    /**
    * Pickup billing classification for on call
    - 01 = Regular
    - 02 = Return
    - 03 = Alternate Address (Not supported for now)
    *
    * @param string $billingCode
    *
    * @return self
    */
    public function setBillingCode(string $billingCode) : self
    {
        $this->initialized['billingCode'] = true;
        $this->billingCode = $billingCode;
        return $this;
    }
    /**
     * on-callpickup contact name
     *
     * @return string
     */
    public function getContactName() : string
    {
        return $this->contactName;
    }
    /**
     * on-callpickup contact name
     *
     * @param string $contactName
     *
     * @return self
     */
    public function setContactName(string $contactName) : self
    {
        $this->initialized['contactName'] = true;
        $this->contactName = $contactName;
        return $this;
    }
    /**
     * Customer provided reference number for on-call pickup
     *
     * @return string
     */
    public function getReferenceNumber() : string
    {
        return $this->referenceNumber;
    }
    /**
     * Customer provided reference number for on-call pickup
     *
     * @param string $referenceNumber
     *
     * @return self
     */
    public function setReferenceNumber(string $referenceNumber) : self
    {
        $this->initialized['referenceNumber'] = true;
        $this->referenceNumber = $referenceNumber;
        return $this;
    }
}