<?php

namespace ShipStream\Ups\Api\Model;

class DANGEROUSGOODSUTILITYAPCRequestWrapper extends \ArrayObject
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
     * Dangerous Goods Utility Request container for Acceptance Audit Pre-check.
     *
     * @var AcceptanceAuditPreCheckRequest|null
     */
    protected $acceptanceAuditPreCheckRequest;
    /**
     * Dangerous Goods Utility Request container for Acceptance Audit Pre-check.
     *
     * @return AcceptanceAuditPreCheckRequest|null
     */
    public function getAcceptanceAuditPreCheckRequest() : ?AcceptanceAuditPreCheckRequest
    {
        return $this->acceptanceAuditPreCheckRequest;
    }
    /**
     * Dangerous Goods Utility Request container for Acceptance Audit Pre-check.
     *
     * @param AcceptanceAuditPreCheckRequest|null $acceptanceAuditPreCheckRequest
     *
     * @return self
     */
    public function setAcceptanceAuditPreCheckRequest(?AcceptanceAuditPreCheckRequest $acceptanceAuditPreCheckRequest) : self
    {
        $this->initialized['acceptanceAuditPreCheckRequest'] = true;
        $this->acceptanceAuditPreCheckRequest = $acceptanceAuditPreCheckRequest;
        return $this;
    }
}