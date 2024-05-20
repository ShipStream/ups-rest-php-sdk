<?php

namespace ShipStream\Ups\Api\Model;

class PackageServiceOptionsNotificationEMail extends \ArrayObject
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
     * The eMails subject. Defaults to the UPS Receiver Return Notification plus the shipment ID.  Only allowed at the first package.
     *
     * @var string
     */
    protected $subject;
    /**
    * Specifies a reference code and reference number to display in the subject of the Receiver Return Notification.
    
    When the subject code is provided, the subject will contain the following: UPS Receiver Return Notification.
    
    The reference code (the reference code will be mapped to the corresponding ANSI value) Plus the reference number.
    
    The valid subject codes are:
    - 01 - Shipment Reference Number 1,
    - 02 - Shipment Reference Number 2,
    - 03 - package Reference Number 1,
    - 04 - package Reference Number 2,
    - 05 - package Reference Number 3,
    - 06 - package Reference Number 4,
    - 07 - package Reference Number 5,
    - 08 - Subject Text (Return Notification only).
    
    If the subject code tag is not provided and the subject text is provided, the subject of the notification will be the subject text.
    
    If the subject text is provided, and subject code tag exists, then the subject code value must be 08.
    
    If the subject code is 08, the subject text must exist. If a subject code is provided that refers to a nonexistent reference number, the subject will default to the tracking number. Only allowed at the first package.
    
    *
    * @var string
    */
    protected $subjectCode;
    /**
     * The destination email address of the receiver returns notification email.
     *
     * @var list<string>
     */
    protected $eMailAddress;
    /**
     * The e-mail address where an undeliverable email message is sent if the Receiver Return Notification email is undeliverable. Defaults to FromEMailAddress. Only allowed at the first package.
     *
     * @var string
     */
    protected $undeliverableEMailAddress;
    /**
     * The email address listed in the Reply To field of the message header, includes name and e-mail address of sender. The "From" field of the message header contains pkginfo@ups.com.  Only allowed at the first package.
     *
     * @var string
     */
    protected $fromEMailAddress;
    /**
     * The name the receiver return notification will appear to be from. Defaults to the Shipper Name. Only allowed at the first package.
     *
     * @var string
     */
    protected $fromName;
    /**
     * User defined text that will be included in the email. Only allowed at the first package.
     *
     * @var string
     */
    protected $memo;
    /**
     * The eMails subject. Defaults to the UPS Receiver Return Notification plus the shipment ID.  Only allowed at the first package.
     *
     * @return string
     */
    public function getSubject() : string
    {
        return $this->subject;
    }
    /**
     * The eMails subject. Defaults to the UPS Receiver Return Notification plus the shipment ID.  Only allowed at the first package.
     *
     * @param string $subject
     *
     * @return self
     */
    public function setSubject(string $subject) : self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;
        return $this;
    }
    /**
    * Specifies a reference code and reference number to display in the subject of the Receiver Return Notification.
    
    When the subject code is provided, the subject will contain the following: UPS Receiver Return Notification.
    
    The reference code (the reference code will be mapped to the corresponding ANSI value) Plus the reference number.
    
    The valid subject codes are:
    - 01 - Shipment Reference Number 1,
    - 02 - Shipment Reference Number 2,
    - 03 - package Reference Number 1,
    - 04 - package Reference Number 2,
    - 05 - package Reference Number 3,
    - 06 - package Reference Number 4,
    - 07 - package Reference Number 5,
    - 08 - Subject Text (Return Notification only).
    
    If the subject code tag is not provided and the subject text is provided, the subject of the notification will be the subject text.
    
    If the subject text is provided, and subject code tag exists, then the subject code value must be 08.
    
    If the subject code is 08, the subject text must exist. If a subject code is provided that refers to a nonexistent reference number, the subject will default to the tracking number. Only allowed at the first package.
    
    *
    * @return string
    */
    public function getSubjectCode() : string
    {
        return $this->subjectCode;
    }
    /**
    * Specifies a reference code and reference number to display in the subject of the Receiver Return Notification.
    
    When the subject code is provided, the subject will contain the following: UPS Receiver Return Notification.
    
    The reference code (the reference code will be mapped to the corresponding ANSI value) Plus the reference number.
    
    The valid subject codes are:
    - 01 - Shipment Reference Number 1,
    - 02 - Shipment Reference Number 2,
    - 03 - package Reference Number 1,
    - 04 - package Reference Number 2,
    - 05 - package Reference Number 3,
    - 06 - package Reference Number 4,
    - 07 - package Reference Number 5,
    - 08 - Subject Text (Return Notification only).
    
    If the subject code tag is not provided and the subject text is provided, the subject of the notification will be the subject text.
    
    If the subject text is provided, and subject code tag exists, then the subject code value must be 08.
    
    If the subject code is 08, the subject text must exist. If a subject code is provided that refers to a nonexistent reference number, the subject will default to the tracking number. Only allowed at the first package.
    
    *
    * @param string $subjectCode
    *
    * @return self
    */
    public function setSubjectCode(string $subjectCode) : self
    {
        $this->initialized['subjectCode'] = true;
        $this->subjectCode = $subjectCode;
        return $this;
    }
    /**
     * The destination email address of the receiver returns notification email.
     *
     * @return list<string>
     */
    public function getEMailAddress() : array
    {
        return $this->eMailAddress;
    }
    /**
     * The destination email address of the receiver returns notification email.
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
     * The e-mail address where an undeliverable email message is sent if the Receiver Return Notification email is undeliverable. Defaults to FromEMailAddress. Only allowed at the first package.
     *
     * @return string
     */
    public function getUndeliverableEMailAddress() : string
    {
        return $this->undeliverableEMailAddress;
    }
    /**
     * The e-mail address where an undeliverable email message is sent if the Receiver Return Notification email is undeliverable. Defaults to FromEMailAddress. Only allowed at the first package.
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
     * The email address listed in the Reply To field of the message header, includes name and e-mail address of sender. The "From" field of the message header contains pkginfo@ups.com.  Only allowed at the first package.
     *
     * @return string
     */
    public function getFromEMailAddress() : string
    {
        return $this->fromEMailAddress;
    }
    /**
     * The email address listed in the Reply To field of the message header, includes name and e-mail address of sender. The "From" field of the message header contains pkginfo@ups.com.  Only allowed at the first package.
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
     * The name the receiver return notification will appear to be from. Defaults to the Shipper Name. Only allowed at the first package.
     *
     * @return string
     */
    public function getFromName() : string
    {
        return $this->fromName;
    }
    /**
     * The name the receiver return notification will appear to be from. Defaults to the Shipper Name. Only allowed at the first package.
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
     * User defined text that will be included in the email. Only allowed at the first package.
     *
     * @return string
     */
    public function getMemo() : string
    {
        return $this->memo;
    }
    /**
     * User defined text that will be included in the email. Only allowed at the first package.
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