<?php

namespace ShipStream\Ups\Api\Model;

class FreightShipPOMPickupNotifications extends \ArrayObject
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
     * Container for email notifications
     *
     * @var FreightShipPickupNotificationsEMailNotification|null
     */
    protected $eMailNotification;
    /**
     * Alternate email address to receive failure notifications
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
     * Container for email notifications
     *
     * @return FreightShipPickupNotificationsEMailNotification|null
     */
    public function getEMailNotification() : ?FreightShipPickupNotificationsEMailNotification
    {
        return $this->eMailNotification;
    }
    /**
     * Container for email notifications
     *
     * @param FreightShipPickupNotificationsEMailNotification|null $eMailNotification
     *
     * @return self
     */
    public function setEMailNotification(?FreightShipPickupNotificationsEMailNotification $eMailNotification) : self
    {
        $this->initialized['eMailNotification'] = true;
        $this->eMailNotification = $eMailNotification;
        return $this;
    }
    /**
     * Alternate email address to receive failure notifications
     *
     * @return string|null
     */
    public function getFailedEMail() : ?string
    {
        return $this->failedEMail;
    }
    /**
     * Alternate email address to receive failure notifications
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