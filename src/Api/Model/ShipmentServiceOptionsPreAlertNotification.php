<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentServiceOptionsPreAlertNotification extends \ArrayObject
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
     * This container is used for Populating EMailMessage details for PreAlertNotification.
     *
     * @var PreAlertNotificationEMailMessage|null
     */
    protected $eMailMessage;
    /**
     * VoiceMessage container is used for specifying phone number for receiving voice PreAlertNotification.
     *
     * @var PreAlertNotificationVoiceMessage|null
     */
    protected $voiceMessage;
    /**
     * TextMessage container is used for specifying phone number for receiving text preAlertNotification.
     *
     * @var PreAlertNotificationTextMessage|null
     */
    protected $textMessage;
    /**
     * This container is used for providing Language and dialect details for PreAlertNotification.
     *
     * @var PreAlertNotificationLocale|null
     */
    protected $locale;
    /**
     * This container is used for Populating EMailMessage details for PreAlertNotification.
     *
     * @return PreAlertNotificationEMailMessage|null
     */
    public function getEMailMessage() : ?PreAlertNotificationEMailMessage
    {
        return $this->eMailMessage;
    }
    /**
     * This container is used for Populating EMailMessage details for PreAlertNotification.
     *
     * @param PreAlertNotificationEMailMessage|null $eMailMessage
     *
     * @return self
     */
    public function setEMailMessage(?PreAlertNotificationEMailMessage $eMailMessage) : self
    {
        $this->initialized['eMailMessage'] = true;
        $this->eMailMessage = $eMailMessage;
        return $this;
    }
    /**
     * VoiceMessage container is used for specifying phone number for receiving voice PreAlertNotification.
     *
     * @return PreAlertNotificationVoiceMessage|null
     */
    public function getVoiceMessage() : ?PreAlertNotificationVoiceMessage
    {
        return $this->voiceMessage;
    }
    /**
     * VoiceMessage container is used for specifying phone number for receiving voice PreAlertNotification.
     *
     * @param PreAlertNotificationVoiceMessage|null $voiceMessage
     *
     * @return self
     */
    public function setVoiceMessage(?PreAlertNotificationVoiceMessage $voiceMessage) : self
    {
        $this->initialized['voiceMessage'] = true;
        $this->voiceMessage = $voiceMessage;
        return $this;
    }
    /**
     * TextMessage container is used for specifying phone number for receiving text preAlertNotification.
     *
     * @return PreAlertNotificationTextMessage|null
     */
    public function getTextMessage() : ?PreAlertNotificationTextMessage
    {
        return $this->textMessage;
    }
    /**
     * TextMessage container is used for specifying phone number for receiving text preAlertNotification.
     *
     * @param PreAlertNotificationTextMessage|null $textMessage
     *
     * @return self
     */
    public function setTextMessage(?PreAlertNotificationTextMessage $textMessage) : self
    {
        $this->initialized['textMessage'] = true;
        $this->textMessage = $textMessage;
        return $this;
    }
    /**
     * This container is used for providing Language and dialect details for PreAlertNotification.
     *
     * @return PreAlertNotificationLocale|null
     */
    public function getLocale() : ?PreAlertNotificationLocale
    {
        return $this->locale;
    }
    /**
     * This container is used for providing Language and dialect details for PreAlertNotification.
     *
     * @param PreAlertNotificationLocale|null $locale
     *
     * @return self
     */
    public function setLocale(?PreAlertNotificationLocale $locale) : self
    {
        $this->initialized['locale'] = true;
        $this->locale = $locale;
        return $this;
    }
}