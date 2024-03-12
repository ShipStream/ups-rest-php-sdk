<?php

namespace ShipStream\Ups\Api\Model;

class EMailInformationEMail extends \ArrayObject
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
     * Email address where the notification is sent.
     *
     * @var string
     */
    protected $eMailAddress;
    /**
    * Contents of the email to be sent.
    Only used for BOL Email Types. Otherwise ignored.
    *
    * @var string
    */
    protected $eMailText;
    /**
     * The address where an undeliverable email message is sent if the email with the notification is undeliverable.
     *
     * @var string
     */
    protected $undeliverableEMailAddress;
    /**
    * Email subject line.
    Only used for BOL Email Types. Otherwise ignored.
    *
    * @var string
    */
    protected $subject;
    /**
     * Email address where the notification is sent.
     *
     * @return string
     */
    public function getEMailAddress() : string
    {
        return $this->eMailAddress;
    }
    /**
     * Email address where the notification is sent.
     *
     * @param string $eMailAddress
     *
     * @return self
     */
    public function setEMailAddress(string $eMailAddress) : self
    {
        $this->initialized['eMailAddress'] = true;
        $this->eMailAddress = $eMailAddress;
        return $this;
    }
    /**
    * Contents of the email to be sent.
    Only used for BOL Email Types. Otherwise ignored.
    *
    * @return string
    */
    public function getEMailText() : string
    {
        return $this->eMailText;
    }
    /**
    * Contents of the email to be sent.
    Only used for BOL Email Types. Otherwise ignored.
    *
    * @param string $eMailText
    *
    * @return self
    */
    public function setEMailText(string $eMailText) : self
    {
        $this->initialized['eMailText'] = true;
        $this->eMailText = $eMailText;
        return $this;
    }
    /**
     * The address where an undeliverable email message is sent if the email with the notification is undeliverable.
     *
     * @return string
     */
    public function getUndeliverableEMailAddress() : string
    {
        return $this->undeliverableEMailAddress;
    }
    /**
     * The address where an undeliverable email message is sent if the email with the notification is undeliverable.
     *
     * @param string $undeliverableEMailAddress
     *
     * @return self
     */
    public function setUndeliverableEMailAddress(string $undeliverableEMailAddress) : self
    {
        $this->initialized['undeliverableEMailAddress'] = true;
        $this->undeliverableEMailAddress = $undeliverableEMailAddress;
        return $this;
    }
    /**
    * Email subject line.
    Only used for BOL Email Types. Otherwise ignored.
    *
    * @return string
    */
    public function getSubject() : string
    {
        return $this->subject;
    }
    /**
    * Email subject line.
    Only used for BOL Email Types. Otherwise ignored.
    *
    * @param string $subject
    *
    * @return self
    */
    public function setSubject(string $subject) : self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;
        return $this;
    }
}