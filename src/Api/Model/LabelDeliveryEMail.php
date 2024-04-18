<?php

namespace ShipStream\Ups\Api\Model;

class LabelDeliveryEMail extends \ArrayObject
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
     * The destination eMail address for the Label Delivery.
     *
     * @var string
     */
    protected $eMailAddress;
    /**
     * The address where an undeliverable email message is sent if the Label Delivery email is undeliverable.  Defaults to FromEMailAddress.
     *
     * @var string
     */
    protected $undeliverableEMailAddress;
    /**
     * The e-mail address specifies the Reply To E-mail address. The "From" field of the message header contains pkginfo@ups.com.
     *
     * @var string
     */
    protected $fromEMailAddress;
    /**
     * The "FrontName" is the name from which notification will appear. Defaults to the "Shipper Name".
     *
     * @var string
     */
    protected $fromName;
    /**
     * User defined text that will be included in the email.
     *
     * @var string
     */
    protected $memo;
    /**
     * The eMails subject. Defaults to the Label Delivery Notification plus the shipment ID. Defaults to text provided by UPS.
     *
     * @var string
     */
    protected $subject;
    /**
    * Specifies a reference code and reference number to display in the subject of the Label Delivery notification.
    
    When the subject code is provided, the subject will contain the following: UPS Label Delivery, the reference code (the reference code will be mapped to the corresponding ANSI value) and the reference number.
    
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
    
    If the subject text is provided, and the subject code tag exists, then the subject code value must be 08. If Subject code is 08, subject text must exist. If a subject code is provided that refers to a nonexistent reference number, the subject will default to the shipment identification number.
    
    *
    * @var string
    */
    protected $subjectCode;
    /**
     * The destination eMail address for the Label Delivery.
     *
     * @return string
     */
    public function getEMailAddress() : string
    {
        return $this->eMailAddress;
    }
    /**
     * The destination eMail address for the Label Delivery.
     *
     * @param string $eMailAddress
     *
     * @return self
     */
    public function setEMailAddress(string $eMailAddress) : self
    {
        $this->initialized['eMailAddress'] = true;
        $this->eMailAddress = $eMailAddress;
        return $this;
    }
    /**
     * The address where an undeliverable email message is sent if the Label Delivery email is undeliverable.  Defaults to FromEMailAddress.
     *
     * @return string
     */
    public function getUndeliverableEMailAddress() : string
    {
        return $this->undeliverableEMailAddress;
    }
    /**
     * The address where an undeliverable email message is sent if the Label Delivery email is undeliverable.  Defaults to FromEMailAddress.
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
     * The e-mail address specifies the Reply To E-mail address. The "From" field of the message header contains pkginfo@ups.com.
     *
     * @return string
     */
    public function getFromEMailAddress() : string
    {
        return $this->fromEMailAddress;
    }
    /**
     * The e-mail address specifies the Reply To E-mail address. The "From" field of the message header contains pkginfo@ups.com.
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
     * The "FrontName" is the name from which notification will appear. Defaults to the "Shipper Name".
     *
     * @return string
     */
    public function getFromName() : string
    {
        return $this->fromName;
    }
    /**
     * The "FrontName" is the name from which notification will appear. Defaults to the "Shipper Name".
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
     * User defined text that will be included in the email.
     *
     * @return string
     */
    public function getMemo() : string
    {
        return $this->memo;
    }
    /**
     * User defined text that will be included in the email.
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
    /**
     * The eMails subject. Defaults to the Label Delivery Notification plus the shipment ID. Defaults to text provided by UPS.
     *
     * @return string
     */
    public function getSubject() : string
    {
        return $this->subject;
    }
    /**
     * The eMails subject. Defaults to the Label Delivery Notification plus the shipment ID. Defaults to text provided by UPS.
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
    * Specifies a reference code and reference number to display in the subject of the Label Delivery notification.
    
    When the subject code is provided, the subject will contain the following: UPS Label Delivery, the reference code (the reference code will be mapped to the corresponding ANSI value) and the reference number.
    
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
    
    If the subject text is provided, and the subject code tag exists, then the subject code value must be 08. If Subject code is 08, subject text must exist. If a subject code is provided that refers to a nonexistent reference number, the subject will default to the shipment identification number.
    
    *
    * @return string
    */
    public function getSubjectCode() : string
    {
        return $this->subjectCode;
    }
    /**
    * Specifies a reference code and reference number to display in the subject of the Label Delivery notification.
    
    When the subject code is provided, the subject will contain the following: UPS Label Delivery, the reference code (the reference code will be mapped to the corresponding ANSI value) and the reference number.
    
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
    
    If the subject text is provided, and the subject code tag exists, then the subject code value must be 08. If Subject code is 08, subject text must exist. If a subject code is provided that refers to a nonexistent reference number, the subject will default to the shipment identification number.
    
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
}