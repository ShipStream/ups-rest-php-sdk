<?php

namespace ShipStream\Ups\Api\Model;

class POMPickupNotifications extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Name of company
     *
     * @var string
     */
    protected $companyName;
    /**
     * Container for email notifications
     *
     * @var PickupNotificationsEMailNotification
     */
    protected $eMailNotification;
    /**
     * Alternate email address to receive failure notifications
     *
     * @var string
     */
    protected $failedEMail;
    /**
     * Name of company
     *
     * @return string
     */
    public function getCompanyName() : string
    {
        return $this->companyName;
    }
    /**
     * Name of company
     *
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName(string $companyName) : self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * Container for email notifications
     *
     * @return PickupNotificationsEMailNotification
     */
    public function getEMailNotification() : PickupNotificationsEMailNotification
    {
        return $this->eMailNotification;
    }
    /**
     * Container for email notifications
     *
     * @param PickupNotificationsEMailNotification $eMailNotification
     *
     * @return self
     */
    public function setEMailNotification(PickupNotificationsEMailNotification $eMailNotification) : self
    {
        $this->initialized['eMailNotification'] = true;
        $this->eMailNotification = $eMailNotification;
        return $this;
    }
    /**
     * Alternate email address to receive failure notifications
     *
     * @return string
     */
    public function getFailedEMail() : string
    {
        return $this->failedEMail;
    }
    /**
     * Alternate email address to receive failure notifications
     *
     * @param string $failedEMail
     *
     * @return self
     */
    public function setFailedEMail(string $failedEMail) : self
    {
        $this->initialized['failedEMail'] = true;
        $this->failedEMail = $failedEMail;
        return $this;
    }
}