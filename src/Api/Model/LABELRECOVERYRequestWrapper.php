<?php

namespace ShipStream\Ups\Api\Model;

class LABELRECOVERYRequestWrapper extends \ArrayObject
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
     * Request for obtaining the Label for the return shipment.
     *
     * @var LabelRecoveryRequest|null
     */
    protected $labelRecoveryRequest;
    /**
     * Request for obtaining the Label for the return shipment.
     *
     * @return LabelRecoveryRequest|null
     */
    public function getLabelRecoveryRequest() : ?LabelRecoveryRequest
    {
        return $this->labelRecoveryRequest;
    }
    /**
     * Request for obtaining the Label for the return shipment.
     *
     * @param LabelRecoveryRequest|null $labelRecoveryRequest
     *
     * @return self
     */
    public function setLabelRecoveryRequest(?LabelRecoveryRequest $labelRecoveryRequest) : self
    {
        $this->initialized['labelRecoveryRequest'] = true;
        $this->labelRecoveryRequest = $labelRecoveryRequest;
        return $this;
    }
}