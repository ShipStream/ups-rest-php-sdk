<?php

namespace ShipStream\Ups\Api\Model;

class AcceptanceAuditPreCheckRequest extends \ArrayObject
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
     * Contains Dangerous Goods Utility Acceptance Audit Pre-check request criteria elements.
     *
     * @var AcceptanceAuditPreCheckRequestRequest|null
     */
    protected $request;
    /**
    * The time that the request was made from the originating system. UTC time down to milliseconds. 
    Example: 2016-07-14T12:01:33.999
    *
    * @var string|null
    */
    protected $originRecordTransactionTimestamp;
    /**
     * Contains shipment information.
     *
     * @var AcceptanceAuditPreCheckRequestShipment|null
     */
    protected $shipment;
    /**
     * Contains Dangerous Goods Utility Acceptance Audit Pre-check request criteria elements.
     *
     * @return AcceptanceAuditPreCheckRequestRequest|null
     */
    public function getRequest() : ?AcceptanceAuditPreCheckRequestRequest
    {
        return $this->request;
    }
    /**
     * Contains Dangerous Goods Utility Acceptance Audit Pre-check request criteria elements.
     *
     * @param AcceptanceAuditPreCheckRequestRequest|null $request
     *
     * @return self
     */
    public function setRequest(?AcceptanceAuditPreCheckRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
    * The time that the request was made from the originating system. UTC time down to milliseconds. 
    Example: 2016-07-14T12:01:33.999
    *
    * @return string|null
    */
    public function getOriginRecordTransactionTimestamp() : ?string
    {
        return $this->originRecordTransactionTimestamp;
    }
    /**
    * The time that the request was made from the originating system. UTC time down to milliseconds. 
    Example: 2016-07-14T12:01:33.999
    *
    * @param string|null $originRecordTransactionTimestamp
    *
    * @return self
    */
    public function setOriginRecordTransactionTimestamp(?string $originRecordTransactionTimestamp) : self
    {
        $this->initialized['originRecordTransactionTimestamp'] = true;
        $this->originRecordTransactionTimestamp = $originRecordTransactionTimestamp;
        return $this;
    }
    /**
     * Contains shipment information.
     *
     * @return AcceptanceAuditPreCheckRequestShipment|null
     */
    public function getShipment() : ?AcceptanceAuditPreCheckRequestShipment
    {
        return $this->shipment;
    }
    /**
     * Contains shipment information.
     *
     * @param AcceptanceAuditPreCheckRequestShipment|null $shipment
     *
     * @return self
     */
    public function setShipment(?AcceptanceAuditPreCheckRequestShipment $shipment) : self
    {
        $this->initialized['shipment'] = true;
        $this->shipment = $shipment;
        return $this;
    }
}