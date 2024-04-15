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
    * @var string|null
    */
    protected $labelLinkIndicator;
    /**
     * Not Used. If this tag is present, resend the Label Delivery notification email.
     *
     * @var string|null
     */
    protected $resendEMailIndicator;
    /**
    * Indicates the Label Recovery and Receipt Recovery URL links are to be returned in the XML Response. Valid for following shipment -
    Print/Electronic Return Label
    Print/Electronic Import Control Label
    Forward shipment except for Mail Innovations Forward
    *
    * @return string|null
    */
    public function getLabelLinkIndicator() : ?string
    {
        return $this->labelLinkIndicator;
    }
    /**
    * Indicates the Label Recovery and Receipt Recovery URL links are to be returned in the XML Response. Valid for following shipment -
    Print/Electronic Return Label
    Print/Electronic Import Control Label
    Forward shipment except for Mail Innovations Forward
    *
    * @param string|null $labelLinkIndicator
    *
    * @return self
    */
    public function setLabelLinkIndicator(?string $labelLinkIndicator) : self
    {
        $this->initialized['labelLinkIndicator'] = true;
        $this->labelLinkIndicator = $labelLinkIndicator;
        return $this;
    }
    /**
     * Not Used. If this tag is present, resend the Label Delivery notification email.
     *
     * @return string|null
     */
    public function getResendEMailIndicator() : ?string
    {
        return $this->resendEMailIndicator;
    }
    /**
     * Not Used. If this tag is present, resend the Label Delivery notification email.
     *
     * @param string|null $resendEMailIndicator
     *
     * @return self
     */
    public function setResendEMailIndicator(?string $resendEMailIndicator) : self
    {
        $this->initialized['resendEMailIndicator'] = true;
        $this->resendEMailIndicator = $resendEMailIndicator;
        return $this;
    }
}