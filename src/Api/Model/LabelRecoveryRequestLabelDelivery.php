<?php

namespace ShipStream\Ups\Api\Model;

class LabelRecoveryRequestLabelDelivery extends \ArrayObject
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
    * Indicates the Label Recovery and Receipt Recovery URL links are to be returned in the XML Response. Valid for following shipment -
    Print/Electronic Return Label
    Print/Electronic Import Control Label
    Forward shipment except for Mail Innovations Forward
    *
    * @var string
    */
    protected $labelLinkIndicator;
    /**
     * Not Used. If this tag is present, resend the Label Delivery notification email.
     *
     * @var string
     */
    protected $resendEMailIndicator;
    /**
    * Indicates the Label Recovery and Receipt Recovery URL links are to be returned in the XML Response. Valid for following shipment -
    Print/Electronic Return Label
    Print/Electronic Import Control Label
    Forward shipment except for Mail Innovations Forward
    *
    * @return string
    */
    public function getLabelLinkIndicator() : string
    {
        return $this->labelLinkIndicator;
    }
    /**
    * Indicates the Label Recovery and Receipt Recovery URL links are to be returned in the XML Response. Valid for following shipment -
    Print/Electronic Return Label
    Print/Electronic Import Control Label
    Forward shipment except for Mail Innovations Forward
    *
    * @param string $labelLinkIndicator
    *
    * @return self
    */
    public function setLabelLinkIndicator(string $labelLinkIndicator) : self
    {
        $this->initialized['labelLinkIndicator'] = true;
        $this->labelLinkIndicator = $labelLinkIndicator;
        return $this;
    }
    /**
     * Not Used. If this tag is present, resend the Label Delivery notification email.
     *
     * @return string
     */
    public function getResendEMailIndicator() : string
    {
        return $this->resendEMailIndicator;
    }
    /**
     * Not Used. If this tag is present, resend the Label Delivery notification email.
     *
     * @param string $resendEMailIndicator
     *
     * @return self
     */
    public function setResendEMailIndicator(string $resendEMailIndicator) : self
    {
        $this->initialized['resendEMailIndicator'] = true;
        $this->resendEMailIndicator = $resendEMailIndicator;
        return $this;
    }
}