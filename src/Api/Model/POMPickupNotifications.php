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
     * @var string|null
     */
    protected $companyName;
    /**
     * 
     *
     * @var list<PickupNotificationsEMailNotification>|null
     */
    protected $eMailNotification;
    /**
     * Alternate email address to receive notifications regarding a failed email.
     *
     * @var string|null
     */
    protected $failedEMail;
    /**
     * Name of company
     *
     * @return string|null
     */
    public function getCompanyName() : ?string
    {
        return $this->companyName;
    }
    /**
     * Name of company
     *
     * @param string|null $companyName
     *
     * @return self
     */
    public function setCompanyName(?string $companyName) : self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * 
     *
     * @return list<PickupNotificationsEMailNotification>|null
     */
    public function getEMailNotification() : ?array
    {
        return $this->eMailNotification;
    }
    /**
     * 
     *
     * @param list<PickupNotificationsEMailNotification>|null $eMailNotification
     *
     * @return self
     */
    public function setEMailNotification(?array $eMailNotification) : self
    {
        $this->initialized['eMailNotification'] = true;
        $this->eMailNotification = $eMailNotification;
        return $this;
    }
    /**
     * Alternate email address to receive notifications regarding a failed email.
     *
     * @return string|null
     */
    public function getFailedEMail() : ?string
    {
        return $this->failedEMail;
    }
    /**
     * Alternate email address to receive notifications regarding a failed email.
     *
     * @param string|null $failedEMail
     *
     * @return self
     */
    public function setFailedEMail(?string $failedEMail) : self
    {
        $this->initialized['failedEMail'] = true;
        $this->failedEMail = $failedEMail;
        return $this;
    }
}