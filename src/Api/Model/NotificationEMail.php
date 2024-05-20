<?php

namespace ShipStream\Ups\Api\Model;

class NotificationEMail extends \ArrayObject
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
     * Email address where the notification is sent.  Up to five email addresses are allowed for each type of Quantum View TM shipment notification. Up to two email address for return notification.
     *
     * @var list<string>
     */
    protected $eMailAddress;
    /**
     * The address where an undeliverable eMail message is sent if the eMail with the notification is undeliverable.  There can be only one UndeliverableEMailAddress for each shipment with Quantum View Shipment Notifications.
     *
     * @var string
     */
    protected $undeliverableEMailAddress;
    /**
     * The e-mail address specifies the Reply To E-mail address. The "From" field of the message header contains pkginfo@ups.com.  Valid for Return Notification only.
     *
     * @var string
     */
    protected $fromEMailAddress;
    /**
     * The name the email will appear to be from. Defaults to the Shipper Name.  The FromName must occur only once for each shipment with Quantum View Shipment Notifications.
     *
     * @var string
     */
    protected $fromName;
    /**
     * User defined text that will be included in the eMail.  The Memo must occur only once for each shipment with Quantum View Shipment Notifications.
     *
     * @var string
     */
    protected $memo;
    /**
     * Email address where the notification is sent.  Up to five email addresses are allowed for each type of Quantum View TM shipment notification. Up to two email address for return notification.
     *
     * @return list<string>
     */
    public function getEMailAddress() : array
    {
        return $this->eMailAddress;
    }
    /**
     * Email address where the notification is sent.  Up to five email addresses are allowed for each type of Quantum View TM shipment notification. Up to two email address for return notification.
     *
     * @param list<string> $eMailAddress
     *
     * @return self
     */
    public function setEMailAddress(array $eMailAddress) : self
    {
        $this->initialized['eMailAddress'] = true;
        $this->eMailAddress = $eMailAddress;
        return $this;
    }
    /**
     * The address where an undeliverable eMail message is sent if the eMail with the notification is undeliverable.  There can be only one UndeliverableEMailAddress for each shipment with Quantum View Shipment Notifications.
     *
     * @return string
     */
    public function getUndeliverableEMailAddress() : string
    {
        return $this->undeliverableEMailAddress;
    }
    /**
     * The address where an undeliverable eMail message is sent if the eMail with the notification is undeliverable.  There can be only one UndeliverableEMailAddress for each shipment with Quantum View Shipment Notifications.
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
     * The e-mail address specifies the Reply To E-mail address. The "From" field of the message header contains pkginfo@ups.com.  Valid for Return Notification only.
     *
     * @return string
     */
    public function getFromEMailAddress() : string
    {
        return $this->fromEMailAddress;
    }
    /**
     * The e-mail address specifies the Reply To E-mail address. The "From" field of the message header contains pkginfo@ups.com.  Valid for Return Notification only.
     *
     * @param string $fromEMailAddress
     *
     * @return self
     */
    public function setFromEMailAddress(string $fromEMailAddress) : self
    {
        $this->initialized['fromEMailAddress'] = true;
        $this->fromEMailAddress = $fromEMailAddress;
        return $this;
    }
    /**
     * The name the email will appear to be from. Defaults to the Shipper Name.  The FromName must occur only once for each shipment with Quantum View Shipment Notifications.
     *
     * @return string
     */
    public function getFromName() : string
    {
        return $this->fromName;
    }
    /**
     * The name the email will appear to be from. Defaults to the Shipper Name.  The FromName must occur only once for each shipment with Quantum View Shipment Notifications.
     *
     * @param string $fromName
     *
     * @return self
     */
    public function setFromName(string $fromName) : self
    {
        $this->initialized['fromName'] = true;
        $this->fromName = $fromName;
        return $this;
    }
    /**
     * User defined text that will be included in the eMail.  The Memo must occur only once for each shipment with Quantum View Shipment Notifications.
     *
     * @return string
     */
    public function getMemo() : string
    {
        return $this->memo;
    }
    /**
     * User defined text that will be included in the eMail.  The Memo must occur only once for each shipment with Quantum View Shipment Notifications.
     *
     * @param string $memo
     *
     * @return self
     */
    public function setMemo(string $memo) : self
    {
        $this->initialized['memo'] = true;
        $this->memo = $memo;
        return $this;
    }
}