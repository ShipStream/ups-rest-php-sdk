<?php

namespace ShipStream\Ups\Api\Model;

class DANGEROUSGOODSUTILITYAPCResponseWrapper extends \ArrayObject
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
     * Dangerous Goods Utility Response container for Acceptance Audit Pre-check.
     *
     * @var AcceptanceAuditPreCheckResponse
     */
    protected $acceptanceAuditPreCheckResponse;
    /**
     * Dangerous Goods Utility Response container for Acceptance Audit Pre-check.
     *
     * @return AcceptanceAuditPreCheckResponse
     */
    public function getAcceptanceAuditPreCheckResponse() : AcceptanceAuditPreCheckResponse
    {
        return $this->acceptanceAuditPreCheckResponse;
    }
    /**
     * Dangerous Goods Utility Response container for Acceptance Audit Pre-check.
     *
     * @param AcceptanceAuditPreCheckResponse $acceptanceAuditPreCheckResponse
     *
     * @return self
     */
    public function setAcceptanceAuditPreCheckResponse(AcceptanceAuditPreCheckResponse $acceptanceAuditPreCheckResponse) : self
    {
        $this->initialized['acceptanceAuditPreCheckResponse'] = true;
        $this->acceptanceAuditPreCheckResponse = $acceptanceAuditPreCheckResponse;
        return $this;
    }
}