<?php

namespace ShipStream\Ups\Api\Model;

class POMPickupNotifications extends \ArrayObject
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
     * Name of company
     *
     * @var string
     */
    protected $companyName;
    /**
     * 
     *
     * @var list<PickupNotificationsEMailNotification>
     */
    protected $eMailNotification;
    /**
     * Alternate email address to receive notifications regarding a failed email.
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
     * 
     *
     * @return list<PickupNotificationsEMailNotification>
     */
    public function getEMailNotification() : array
    {
        return $this->eMailNotification;
    }
    /**
     * 
     *
     * @param list<PickupNotificationsEMailNotification> $eMailNotification
     *
     * @return self
     */
    public function setEMailNotification(array $eMailNotification) : self
    {
        $this->initialized['eMailNotification'] = true;
        $this->eMailNotification = $eMailNotification;
        return $this;
    }
    /**
     * Alternate email address to receive notifications regarding a failed email.
     *
     * @return string
     */
    public function getFailedEMail() : string
    {
        return $this->failedEMail;
    }
    /**
     * Alternate email address to receive notifications regarding a failed email.
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