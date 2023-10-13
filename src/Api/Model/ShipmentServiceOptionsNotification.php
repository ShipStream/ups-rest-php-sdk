<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentServiceOptionsNotification extends \ArrayObject
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
     * @var NotificationEMail
     */
    protected $eMail;
    /**
     * VoiceMessage container is used for specifying phone number for receiving voice Alternate Delivery Location notification and UAP Shipper notification.  Valid only for Alternate Delivery Location notification and UAP Shipper notification. VoiceMessage phone number or TextMessage phone number or email address is required for ADL notification and UAP Shipper notification.
     *
     * @var NotificationVoiceMessage
     */
    protected $voiceMessage;
    /**
     * TextMessage container is used for specifying phone number for receiving text Alternate Delivery Location notification and UAP Shipper notification.  Valid only for Alternate Delivery Location notification and UAP Shipper notification. VoiceMessage phone number or TextMessage phone number or email address is required for ADL notification and UAP Shipper notification.
     *
     * @var NotificationTextMessage
     */
    protected $textMessage;
    /**
     * This container is used for providing Language and dialect details for Alternate Delivery Location notifications and UAP Shipper notifications.  Valid only for Alternate Delivery Location notification and UAP Shipper notification.
     *
     * @var NotificationLocale
     */
    protected $locale;
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
     * @return NotificationEMail
     */
    public function getEMail() : NotificationEMail
    {
        return $this->eMail;
    }
    /**
     * Container for the e-mail message.
     *
     * @param NotificationEMail $eMail
     *
     * @return self
     */
    public function setEMail(NotificationEMail $eMail) : self
    {
        $this->initialized['eMail'] = true;
        $this->eMail = $eMail;
        return $this;
    }
    /**
     * VoiceMessage container is used for specifying phone number for receiving voice Alternate Delivery Location notification and UAP Shipper notification.  Valid only for Alternate Delivery Location notification and UAP Shipper notification. VoiceMessage phone number or TextMessage phone number or email address is required for ADL notification and UAP Shipper notification.
     *
     * @return NotificationVoiceMessage
     */
    public function getVoiceMessage() : NotificationVoiceMessage
    {
        return $this->voiceMessage;
    }
    /**
     * VoiceMessage container is used for specifying phone number for receiving voice Alternate Delivery Location notification and UAP Shipper notification.  Valid only for Alternate Delivery Location notification and UAP Shipper notification. VoiceMessage phone number or TextMessage phone number or email address is required for ADL notification and UAP Shipper notification.
     *
     * @param NotificationVoiceMessage $voiceMessage
     *
     * @return self
     */
    public function setVoiceMessage(NotificationVoiceMessage $voiceMessage) : self
    {
        $this->initialized['voiceMessage'] = true;
        $this->voiceMessage = $voiceMessage;
        return $this;
    }
    /**
     * TextMessage container is used for specifying phone number for receiving text Alternate Delivery Location notification and UAP Shipper notification.  Valid only for Alternate Delivery Location notification and UAP Shipper notification. VoiceMessage phone number or TextMessage phone number or email address is required for ADL notification and UAP Shipper notification.
     *
     * @return NotificationTextMessage
     */
    public function getTextMessage() : NotificationTextMessage
    {
        return $this->textMessage;
    }
    /**
     * TextMessage container is used for specifying phone number for receiving text Alternate Delivery Location notification and UAP Shipper notification.  Valid only for Alternate Delivery Location notification and UAP Shipper notification. VoiceMessage phone number or TextMessage phone number or email address is required for ADL notification and UAP Shipper notification.
     *
     * @param NotificationTextMessage $textMessage
     *
     * @return self
     */
    public function setTextMessage(NotificationTextMessage $textMessage) : self
    {
        $this->initialized['textMessage'] = true;
        $this->textMessage = $textMessage;
        return $this;
    }
    /**
     * This container is used for providing Language and dialect details for Alternate Delivery Location notifications and UAP Shipper notifications.  Valid only for Alternate Delivery Location notification and UAP Shipper notification.
     *
     * @return NotificationLocale
     */
    public function getLocale() : NotificationLocale
    {
        return $this->locale;
    }
    /**
     * This container is used for providing Language and dialect details for Alternate Delivery Location notifications and UAP Shipper notifications.  Valid only for Alternate Delivery Location notification and UAP Shipper notification.
     *
     * @param NotificationLocale $locale
     *
     * @return self
     */
    public function setLocale(NotificationLocale $locale) : self
    {
        $this->initialized['locale'] = true;
        $this->locale = $locale;
        return $this;
    }
}