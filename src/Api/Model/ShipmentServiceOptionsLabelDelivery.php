<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentServiceOptionsLabelDelivery extends \ArrayObject
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
     * Container for the email message.
     *
     * @var LabelDeliveryEMail
     */
    protected $eMail;
    /**
     * Indicates the Label and Receipt URLs are to be returned in the XML response.
     *
     * @var string
     */
    protected $labelLinksIndicator;
    /**
     * Container for the email message.
     *
     * @return LabelDeliveryEMail
     */
    public function getEMail() : LabelDeliveryEMail
    {
        return $this->eMail;
    }
    /**
     * Container for the email message.
     *
     * @param LabelDeliveryEMail $eMail
     *
     * @return self
     */
    public function setEMail(LabelDeliveryEMail $eMail) : self
    {
        $this->initialized['eMail'] = true;
        $this->eMail = $eMail;
        return $this;
    }
    /**
     * Indicates the Label and Receipt URLs are to be returned in the XML response.
     *
     * @return string
     */
    public function getLabelLinksIndicator() : string
    {
        return $this->labelLinksIndicator;
    }
    /**
     * Indicates the Label and Receipt URLs are to be returned in the XML response.
     *
     * @param string $labelLinksIndicator
     *
     * @return self
     */
    public function setLabelLinksIndicator(string $labelLinksIndicator) : self
    {
        $this->initialized['labelLinksIndicator'] = true;
        $this->labelLinksIndicator = $labelLinksIndicator;
        return $this;
    }
}