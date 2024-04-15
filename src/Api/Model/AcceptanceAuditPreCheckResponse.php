<?php

namespace ShipStream\Ups\Api\Model;

class AcceptanceAuditPreCheckResponse extends \ArrayObject
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
     * Contains Dangerous Goods Utility Acceptance Audit Pre-check response components.
     *
     * @var AcceptanceAuditPreCheckResponseResponse|null
     */
    protected $response;
    /**
     * Shipper's six digit account number. This is same account number present in the request that is played back in response.
     *
     * @var string|null
     */
    protected $shipperNumber;
    /**
     * UPS service type. This is same UPS Service present in the request that is played back in response.
     *
     * @var AcceptanceAuditPreCheckResponseService|null
     */
    protected $service;
    /**
    * The Regulatory set associated with every regulated shipment. This is same Regulation set present in the request that is played back in response.  Valid values:
    ADR
    49CFR
    IATA
    TDG
    *
    * @var string|null
    */
    protected $regulationSet;
    /**
     * 
     *
     * @var list<AcceptanceAuditPreCheckResponsePackageResults>|null
     */
    protected $packageResults;
    /**
     * Contains Dangerous Goods Utility Acceptance Audit Pre-check response components.
     *
     * @return AcceptanceAuditPreCheckResponseResponse|null
     */
    public function getResponse() : ?AcceptanceAuditPreCheckResponseResponse
    {
        return $this->response;
    }
    /**
     * Contains Dangerous Goods Utility Acceptance Audit Pre-check response components.
     *
     * @param AcceptanceAuditPreCheckResponseResponse|null $response
     *
     * @return self
     */
    public function setResponse(?AcceptanceAuditPreCheckResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * Shipper's six digit account number. This is same account number present in the request that is played back in response.
     *
     * @return string|null
     */
    public function getShipperNumber() : ?string
    {
        return $this->shipperNumber;
    }
    /**
     * Shipper's six digit account number. This is same account number present in the request that is played back in response.
     *
     * @param string|null $shipperNumber
     *
     * @return self
     */
    public function setShipperNumber(?string $shipperNumber) : self
    {
        $this->initialized['shipperNumber'] = true;
        $this->shipperNumber = $shipperNumber;
        return $this;
    }
    /**
     * UPS service type. This is same UPS Service present in the request that is played back in response.
     *
     * @return AcceptanceAuditPreCheckResponseService|null
     */
    public function getService() : ?AcceptanceAuditPreCheckResponseService
    {
        return $this->service;
    }
    /**
     * UPS service type. This is same UPS Service present in the request that is played back in response.
     *
     * @param AcceptanceAuditPreCheckResponseService|null $service
     *
     * @return self
     */
    public function setService(?AcceptanceAuditPreCheckResponseService $service) : self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
    /**
    * The Regulatory set associated with every regulated shipment. This is same Regulation set present in the request that is played back in response.  Valid values:
    ADR
    49CFR
    IATA
    TDG
    *
    * @return string|null
    */
    public function getRegulationSet() : ?string
    {
        return $this->regulationSet;
    }
    /**
    * The Regulatory set associated with every regulated shipment. This is same Regulation set present in the request that is played back in response.  Valid values:
    ADR
    49CFR
    IATA
    TDG
    *
    * @param string|null $regulationSet
    *
    * @return self
    */
    public function setRegulationSet(?string $regulationSet) : self
    {
        $this->initialized['regulationSet'] = true;
        $this->regulationSet = $regulationSet;
        return $this;
    }
    /**
     * 
     *
     * @return list<AcceptanceAuditPreCheckResponsePackageResults>|null
     */
    public function getPackageResults() : ?array
    {
        return $this->packageResults;
    }
    /**
     * 
     *
     * @param list<AcceptanceAuditPreCheckResponsePackageResults>|null $packageResults
     *
     * @return self
     */
    public function setPackageResults(?array $packageResults) : self
    {
        $this->initialized['packageResults'] = true;
        $this->packageResults = $packageResults;
        return $this;
    }
}