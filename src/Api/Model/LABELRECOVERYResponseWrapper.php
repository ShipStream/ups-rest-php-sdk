<?php

namespace ShipStream\Ups\Api\Model;

class LABELRECOVERYResponseWrapper extends \ArrayObject
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
     * Response for the Label recovery request  Validates the date range and label being present. Also if the shipment is return or not
     *
     * @var LabelRecoveryResponse
     */
    protected $labelRecoveryResponse;
    /**
     * Response for the Label recovery request  Validates the date range and label being present. Also if the shipment is return or not
     *
     * @return LabelRecoveryResponse
     */
    public function getLabelRecoveryResponse() : LabelRecoveryResponse
    {
        return $this->labelRecoveryResponse;
    }
    /**
     * Response for the Label recovery request  Validates the date range and label being present. Also if the shipment is return or not
     *
     * @param LabelRecoveryResponse $labelRecoveryResponse
     *
     * @return self
     */
    public function setLabelRecoveryResponse(LabelRecoveryResponse $labelRecoveryResponse) : self
    {
        $this->initialized['labelRecoveryResponse'] = true;
        $this->labelRecoveryResponse = $labelRecoveryResponse;
        return $this;
    }
}