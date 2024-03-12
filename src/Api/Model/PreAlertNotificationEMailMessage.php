<?php

namespace ShipStream\Ups\Api\Model;

class PreAlertNotificationEMailMessage extends \ArrayObject
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
     * EMailAddress where PreAlertNotification is sent.
     *
     * @var string
     */
    protected $eMailAddress;
    /**
     * This is used for notification when EMailAddress for PreAlertNotification is undeliverable.
     *
     * @var string
     */
    protected $undeliverableEMailAddress;
    /**
     * EMailAddress where PreAlertNotification is sent.
     *
     * @return string
     */
    public function getEMailAddress() : string
    {
        return $this->eMailAddress;
    }
    /**
     * EMailAddress where PreAlertNotification is sent.
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
     * This is used for notification when EMailAddress for PreAlertNotification is undeliverable.
     *
     * @return string
     */
    public function getUndeliverableEMailAddress() : string
    {
        return $this->undeliverableEMailAddress;
    }
    /**
     * This is used for notification when EMailAddress for PreAlertNotification is undeliverable.
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
}