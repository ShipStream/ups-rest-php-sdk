<?php

namespace ShipStream\Ups\Api\Model;

class LabelRecoveryResponse extends \ArrayObject
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
     * Response Container
     *
     * @var LabelRecoveryResponseResponse
     */
    protected $response;
    /**
     * Tracking number of the leading package in the shipment
     *
     * @var string
     */
    protected $shipmentIdentificationNumber;
    /**
     * 
     *
     * @var list<LabelRecoveryResponseLabelResults>
     */
    protected $labelResults;
    /**
     * Container for COD Turnin Page.
     *
     * @var LabelRecoveryResponseCODTurnInPage
     */
    protected $cODTurnInPage;
    /**
     * Container tag for the International Forms. Currently, represents Commercial Invoice for Electronic Returns Label and Electronic Import Control Label.  Applicable for Electronic Return Label and Electronic Import Control Label shipments only. Returned for request with SubVersion greater than or equal to 1707.
     *
     * @var LabelRecoveryResponseForm
     */
    protected $form;
    /**
     * Container tag for the High Value Report for Electronic Returns Label and Electronic Import Control Label.  Applicable for Electronic Return Label and Electronic Import Control Label shipments only. Returned for request with SubVersion greater than or equal to 1707.
     *
     * @var LabelRecoveryResponseHighValueReport
     */
    protected $highValueReport;
    /**
     * 
     *
     * @var list<LabelRecoveryResponseTrackingCandidate>
     */
    protected $trackingCandidate;
    /**
     * Response Container
     *
     * @return LabelRecoveryResponseResponse
     */
    public function getResponse() : LabelRecoveryResponseResponse
    {
        return $this->response;
    }
    /**
     * Response Container
     *
     * @param LabelRecoveryResponseResponse $response
     *
     * @return self
     */
    public function setResponse(LabelRecoveryResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * Tracking number of the leading package in the shipment
     *
     * @return string
     */
    public function getShipmentIdentificationNumber() : string
    {
        return $this->shipmentIdentificationNumber;
    }
    /**
     * Tracking number of the leading package in the shipment
     *
     * @param string $shipmentIdentificationNumber
     *
     * @return self
     */
    public function setShipmentIdentificationNumber(string $shipmentIdentificationNumber) : self
    {
        $this->initialized['shipmentIdentificationNumber'] = true;
        $this->shipmentIdentificationNumber = $shipmentIdentificationNumber;
        return $this;
    }
    /**
     * 
     *
     * @return list<LabelRecoveryResponseLabelResults>
     */
    public function getLabelResults() : array
    {
        return $this->labelResults;
    }
    /**
     * 
     *
     * @param list<LabelRecoveryResponseLabelResults> $labelResults
     *
     * @return self
     */
    public function setLabelResults(array $labelResults) : self
    {
        $this->initialized['labelResults'] = true;
        $this->labelResults = $labelResults;
        return $this;
    }
    /**
     * Container for COD Turnin Page.
     *
     * @return LabelRecoveryResponseCODTurnInPage
     */
    public function getCODTurnInPage() : LabelRecoveryResponseCODTurnInPage
    {
        return $this->cODTurnInPage;
    }
    /**
     * Container for COD Turnin Page.
     *
     * @param LabelRecoveryResponseCODTurnInPage $cODTurnInPage
     *
     * @return self
     */
    public function setCODTurnInPage(LabelRecoveryResponseCODTurnInPage $cODTurnInPage) : self
    {
        $this->initialized['cODTurnInPage'] = true;
        $this->cODTurnInPage = $cODTurnInPage;
        return $this;
    }
    /**
     * Container tag for the International Forms. Currently, represents Commercial Invoice for Electronic Returns Label and Electronic Import Control Label.  Applicable for Electronic Return Label and Electronic Import Control Label shipments only. Returned for request with SubVersion greater than or equal to 1707.
     *
     * @return LabelRecoveryResponseForm
     */
    public function getForm() : LabelRecoveryResponseForm
    {
        return $this->form;
    }
    /**
     * Container tag for the International Forms. Currently, represents Commercial Invoice for Electronic Returns Label and Electronic Import Control Label.  Applicable for Electronic Return Label and Electronic Import Control Label shipments only. Returned for request with SubVersion greater than or equal to 1707.
     *
     * @param LabelRecoveryResponseForm $form
     *
     * @return self
     */
    public function setForm(LabelRecoveryResponseForm $form) : self
    {
        $this->initialized['form'] = true;
        $this->form = $form;
        return $this;
    }
    /**
     * Container tag for the High Value Report for Electronic Returns Label and Electronic Import Control Label.  Applicable for Electronic Return Label and Electronic Import Control Label shipments only. Returned for request with SubVersion greater than or equal to 1707.
     *
     * @return LabelRecoveryResponseHighValueReport
     */
    public function getHighValueReport() : LabelRecoveryResponseHighValueReport
    {
        return $this->highValueReport;
    }
    /**
     * Container tag for the High Value Report for Electronic Returns Label and Electronic Import Control Label.  Applicable for Electronic Return Label and Electronic Import Control Label shipments only. Returned for request with SubVersion greater than or equal to 1707.
     *
     * @param LabelRecoveryResponseHighValueReport $highValueReport
     *
     * @return self
     */
    public function setHighValueReport(LabelRecoveryResponseHighValueReport $highValueReport) : self
    {
        $this->initialized['highValueReport'] = true;
        $this->highValueReport = $highValueReport;
        return $this;
    }
    /**
     * 
     *
     * @return list<LabelRecoveryResponseTrackingCandidate>
     */
    public function getTrackingCandidate() : array
    {
        return $this->trackingCandidate;
    }
    /**
     * 
     *
     * @param list<LabelRecoveryResponseTrackingCandidate> $trackingCandidate
     *
     * @return self
     */
    public function setTrackingCandidate(array $trackingCandidate) : self
    {
        $this->initialized['trackingCandidate'] = true;
        $this->trackingCandidate = $trackingCandidate;
        return $this;
    }
}