<?php

namespace ShipStream\Ups\Api\Model;

class VoidShipmentResponseSummaryResult extends \ArrayObject
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
     * Container for the status of the Summary Result
     *
     * @var SummaryResultStatus|null
     */
    protected $status;
    /**
     * Container for the status of the Summary Result
     *
     * @return SummaryResultStatus|null
     */
    public function getStatus() : ?SummaryResultStatus
    {
        return $this->status;
    }
    /**
     * Container for the status of the Summary Result
     *
     * @param SummaryResultStatus|null $status
     *
     * @return self
     */
    public function setStatus(?SummaryResultStatus $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}