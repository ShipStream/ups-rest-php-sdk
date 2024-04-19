<?php

namespace ShipStream\Ups\Api\Model;

class PickupCancelResponseGWNStatus extends \ArrayObject
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
    * The status code defined by operation system.
    - 001 = User Triggered
    - 002 = User Cancelled
    - 003 = Completed
    - 004 = Missed
    - 005 = Not In
    - 006 = Not Ready
    - 007 = Closed
    - 008 = Cancelled By Driver
    - 999 = Unknown
    *
    * @var string
    */
    protected $code;
    /**
     * Please refer to /PickupPendingStatusResponse/PendingStatus/PickupStatusMessage
     *
     * @var string
     */
    protected $description;
    /**
    * The status code defined by operation system.
    - 001 = User Triggered
    - 002 = User Cancelled
    - 003 = Completed
    - 004 = Missed
    - 005 = Not In
    - 006 = Not Ready
    - 007 = Closed
    - 008 = Cancelled By Driver
    - 999 = Unknown
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * The status code defined by operation system.
    - 001 = User Triggered
    - 002 = User Cancelled
    - 003 = Completed
    - 004 = Missed
    - 005 = Not In
    - 006 = Not Ready
    - 007 = Closed
    - 008 = Cancelled By Driver
    - 999 = Unknown
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
     * Please refer to /PickupPendingStatusResponse/PendingStatus/PickupStatusMessage
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Please refer to /PickupPendingStatusResponse/PendingStatus/PickupStatusMessage
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