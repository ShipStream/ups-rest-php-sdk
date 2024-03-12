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
     * @var AcceptanceAuditPreCheckRequestRequest
     */
    protected $request;
    /**
    * The time that the request was made from the originating system. UTC time down to milliseconds. 
    Example: 2016-07-14T12:01:33.999
    *
    * @var string
    */
    protected $originRecordTransactionTimestamp;
    /**
     * Contains shipment information.
     *
     * @var AcceptanceAuditPreCheckRequestShipment
     */
    protected $shipment;
    /**
     * Contains Dangerous Goods Utility Acceptance Audit Pre-check request criteria elements.
     *
     * @return AcceptanceAuditPreCheckRequestRequest
     */
    public function getRequest() : AcceptanceAuditPreCheckRequestRequest
    {
        return $this->request;
    }
    /**
     * Contains Dangerous Goods Utility Acceptance Audit Pre-check request criteria elements.
     *
     * @param AcceptanceAuditPreCheckRequestRequest $request
     *
     * @return self
     */
    public function setRequest(AcceptanceAuditPreCheckRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
    * The time that the request was made from the originating system. UTC time down to milliseconds. 
    Example: 2016-07-14T12:01:33.999
    *
    * @return string
    */
    public function getOriginRecordTransactionTimestamp() : string
    {
        return $this->originRecordTransactionTimestamp;
    }
    /**
    * The time that the request was made from the originating system. UTC time down to milliseconds. 
    Example: 2016-07-14T12:01:33.999
    *
    * @param string $originRecordTransactionTimestamp
    *
    * @return self
    */
    public function setOriginRecordTransactionTimestamp(string $originRecordTransactionTimestamp) : self
    {
        $this->initialized['originRecordTransactionTimestamp'] = true;
        $this->originRecordTransactionTimestamp = $originRecordTransactionTimestamp;
        return $this;
    }
    /**
     * Contains shipment information.
     *
     * @return AcceptanceAuditPreCheckRequestShipment
     */
    public function getShipment() : AcceptanceAuditPreCheckRequestShipment
    {
        return $this->shipment;
    }
    /**
     * Contains shipment information.
     *
     * @param AcceptanceAuditPreCheckRequestShipment $shipment
     *
     * @return self
     */
    public function setShipment(AcceptanceAuditPreCheckRequestShipment $shipment) : self
    {
        $this->initialized['shipment'] = true;
        $this->shipment = $shipment;
        return $this;
    }
}