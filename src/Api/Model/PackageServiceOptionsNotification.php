<?php

namespace ShipStream\Ups\Api\Model;

class PackageServiceOptionsNotification extends \ArrayObject
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
    * Notification Code.  Valid values:
    3 - Receiver Return Notification
    6 - QV Email Notification
    7 - QV Exception Notification
    8 - QV Delivery Notification 
    For Mail Innovations forward shipments, QV Email Notifications are allowed for First Class, Priority Mail, and Expedited Mail Innovation services.
    *
    * @var string
    */
    protected $notificationCode;
    /**
     * Container for the e-mail message.
     *
     * @var PackageServiceOptionsNotificationEMail
     */
    protected $eMail;
    /**
    * Notification Code.  Valid values:
    3 - Receiver Return Notification
    6 - QV Email Notification
    7 - QV Exception Notification
    8 - QV Delivery Notification 
    For Mail Innovations forward shipments, QV Email Notifications are allowed for First Class, Priority Mail, and Expedited Mail Innovation services.
    *
    * @return string
    */
    public function getNotificationCode() : string
    {
        return $this->notificationCode;
    }
    /**
    * Notification Code.  Valid values:
    3 - Receiver Return Notification
    6 - QV Email Notification
    7 - QV Exception Notification
    8 - QV Delivery Notification 
    For Mail Innovations forward shipments, QV Email Notifications are allowed for First Class, Priority Mail, and Expedited Mail Innovation services.
    *
    * @param string $notificationCode
    *
    * @return self
    */
    public function setNotificationCode(string $notificationCode) : self
    {
        $this->initialized['notificationCode'] = true;
        $this->notificationCode = $notificationCode;
        return $this;
    }
    /**
     * Container for the e-mail message.
     *
     * @return PackageServiceOptionsNotificationEMail
     */
    public function getEMail() : PackageServiceOptionsNotificationEMail
    {
        return $this->eMail;
    }
    /**
     * Container for the e-mail message.
     *
     * @param PackageServiceOptionsNotificationEMail $eMail
     *
     * @return self
     */
    public function setEMail(PackageServiceOptionsNotificationEMail $eMail) : self
    {
        $this->initialized['eMail'] = true;
        $this->eMail = $eMail;
        return $this;
    }
}