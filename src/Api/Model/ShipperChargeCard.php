<?php

namespace ShipStream\Ups\Api\Model;

class ShipperChargeCard extends \ArrayObject
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
     * Charge card holder name. If the name is not provided, defaults to "No Name Provided".
     *
     * @var string|null
     */
    protected $cardHolderName;
    /**
    * Charge card type. Valid values:
    01 = American Express
    03 = Discover
    04 = Mastercard
    06 = VISA  Discover card Pickup country US only.
    *
    * @var string|null
    */
    protected $cardType;
    /**
     * Charge card number.  For Privileged clients, this element must be tokenized card number.
     *
     * @var string|null
     */
    protected $cardNumber;
    /**
    * Credit card expiration date.
    Format: yyyyMM
    yyyy = 4 digit year, valid value current year - 10 years.
    MM = 2 digit month, valid values 01-12
    *
    * @var string|null
    */
    protected $expirationDate;
    /**
    * Three or four digits that can be found either on top of credit card number or on the back of credit card. 
    Number of digits varies for different type of credit card.  Valid values are 3 or 4 digits.
    Security code is required if credit card information is provided.
    *
    * @var string|null
    */
    protected $securityCode;
    /**
     * Container to hold the Charge card address.
     *
     * @var ChargeCardCardAddress|null
     */
    protected $cardAddress;
    /**
     * Charge card holder name. If the name is not provided, defaults to "No Name Provided".
     *
     * @return string|null
     */
    public function getCardHolderName() : ?string
    {
        return $this->cardHolderName;
    }
    /**
     * Charge card holder name. If the name is not provided, defaults to "No Name Provided".
     *
     * @param string|null $cardHolderName
     *
     * @return self
     */
    public function setCardHolderName(?string $cardHolderName) : self
    {
        $this->initialized['cardHolderName'] = true;
        $this->cardHolderName = $cardHolderName;
        return $this;
    }
    /**
    * Charge card type. Valid values:
    01 = American Express
    03 = Discover
    04 = Mastercard
    06 = VISA  Discover card Pickup country US only.
    *
    * @return string|null
    */
    public function getCardType() : ?string
    {
        return $this->cardType;
    }
    /**
    * Charge card type. Valid values:
    01 = American Express
    03 = Discover
    04 = Mastercard
    06 = VISA  Discover card Pickup country US only.
    *
    * @param string|null $cardType
    *
    * @return self
    */
    public function setCardType(?string $cardType) : self
    {
        $this->initialized['cardType'] = true;
        $this->cardType = $cardType;
        return $this;
    }
    /**
     * Charge card number.  For Privileged clients, this element must be tokenized card number.
     *
     * @return string|null
     */
    public function getCardNumber() : ?string
    {
        return $this->cardNumber;
    }
    /**
     * Charge card number.  For Privileged clients, this element must be tokenized card number.
     *
     * @param string|null $cardNumber
     *
     * @return self
     */
    public function setCardNumber(?string $cardNumber) : self
    {
        $this->initialized['cardNumber'] = true;
        $this->cardNumber = $cardNumber;
        return $this;
    }
    /**
    * Credit card expiration date.
    Format: yyyyMM
    yyyy = 4 digit year, valid value current year - 10 years.
    MM = 2 digit month, valid values 01-12
    *
    * @return string|null
    */
    public function getExpirationDate() : ?string
    {
        return $this->expirationDate;
    }
    /**
    * Credit card expiration date.
    Format: yyyyMM
    yyyy = 4 digit year, valid value current year - 10 years.
    MM = 2 digit month, valid values 01-12
    *
    * @param string|null $expirationDate
    *
    * @return self
    */
    public function setExpirationDate(?string $expirationDate) : self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
    * Three or four digits that can be found either on top of credit card number or on the back of credit card. 
    Number of digits varies for different type of credit card.  Valid values are 3 or 4 digits.
    Security code is required if credit card information is provided.
    *
    * @return string|null
    */
    public function getSecurityCode() : ?string
    {
        return $this->securityCode;
    }
    /**
    * Three or four digits that can be found either on top of credit card number or on the back of credit card. 
    Number of digits varies for different type of credit card.  Valid values are 3 or 4 digits.
    Security code is required if credit card information is provided.
    *
    * @param string|null $securityCode
    *
    * @return self
    */
    public function setSecurityCode(?string $securityCode) : self
    {
        $this->initialized['securityCode'] = true;
        $this->securityCode = $securityCode;
        return $this;
    }
    /**
     * Container to hold the Charge card address.
     *
     * @return ChargeCardCardAddress|null
     */
    public function getCardAddress() : ?ChargeCardCardAddress
    {
        return $this->cardAddress;
    }
    /**
     * Container to hold the Charge card address.
     *
     * @param ChargeCardCardAddress|null $cardAddress
     *
     * @return self
     */
    public function setCardAddress(?ChargeCardCardAddress $cardAddress) : self
    {
        $this->initialized['cardAddress'] = true;
        $this->cardAddress = $cardAddress;
        return $this;
    }
}