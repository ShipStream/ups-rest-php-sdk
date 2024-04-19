<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentServiceOptionsNotification extends \ArrayObject
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
    * The type of notification requested.
    
    Note:
    - QVN Exception notification and return notification are not applicable to GFP.
    - QV In-transit and Return Notifications are only valid for ImportControl and Return shipment.
    - QV In-transit Notification is allowed for return shipments only.
    - QV Ship Notification is allowed for forward moving shipments only.
    
    Valid values:
    - 5 - QV In-transit Notification
    - 6 - QV Ship Notification
    - 7 - QV Exception Notification
    - 8 - QV Delivery Notification
    - 2 - Return Notification or Label Creation Notification
    - 012 - Alternate Delivery Location Notification
    - 013 - UAP Shipper Notification.
    *
    * @var string
    */
    protected $notificationCode;
    /**
     * Container for Email Information.
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
    * The type of notification requested.
    
    Note:
    - QVN Exception notification and return notification are not applicable to GFP.
    - QV In-transit and Return Notifications are only valid for ImportControl and Return shipment.
    - QV In-transit Notification is allowed for return shipments only.
    - QV Ship Notification is allowed for forward moving shipments only.
    
    Valid values:
    - 5 - QV In-transit Notification
    - 6 - QV Ship Notification
    - 7 - QV Exception Notification
    - 8 - QV Delivery Notification
    - 2 - Return Notification or Label Creation Notification
    - 012 - Alternate Delivery Location Notification
    - 013 - UAP Shipper Notification.
    *
    * @return string
    */
    public function getNotificationCode() : string
    {
        return $this->notificationCode;
    }
    /**
    * The type of notification requested.
    
    Note:
    - QVN Exception notification and return notification are not applicable to GFP.
    - QV In-transit and Return Notifications are only valid for ImportControl and Return shipment.
    - QV In-transit Notification is allowed for return shipments only.
    - QV Ship Notification is allowed for forward moving shipments only.
    
    Valid values:
    - 5 - QV In-transit Notification
    - 6 - QV Ship Notification
    - 7 - QV Exception Notification
    - 8 - QV Delivery Notification
    - 2 - Return Notification or Label Creation Notification
    - 012 - Alternate Delivery Location Notification
    - 013 - UAP Shipper Notification.
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
     * Container for Email Information.
     *
     * @return NotificationEMail
     */
    public function getEMail() : NotificationEMail
    {
        return $this->eMail;
    }
    /**
     * Container for Email Information.
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