<?php

namespace ShipStream\Ups\Api\Model;

class BillShipperCreditCard extends \ArrayObject
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
    * Valid values:
    - 01 = American Express
    - 03 = Discover
    - 04 = MasterCard
    - 05 = Optima
    - 06 = VISA
    - 07 = Bravo
    - 08 = Diners Club
    - 13 = Dankort
    - 14 = Hipercard
    - 15 = JCB
    - 17 = Postepay
    - 18 = UnionPay/ExpressPay
    - 19 = Visa Electron
    - 20 = VPAY
    - 21 = Carte Bleue
    *
    * @var string
    */
    protected $type;
    /**
     * Credit Card number.
     *
     * @var string
     */
    protected $number;
    /**
     * Format is MMYYYY where MM is the 2 digit month and YYYY is the 4 digit year.  Valid month values are 01-12 and valid year values are Present Year - (Present Year + 10 years)
     *
     * @var string
     */
    protected $expirationDate;
    /**
     * Three or four digits that can be found either on top of credit card number or on the back of credit card. Number of digits varies for different type of credit card.  Valid values are 3 or 4 digits. It is required to provide the security code if credit card information is provided and when the ShipFrom countries or territories are other than the below mentioned countries or territories. Argentina, Bahamas, Costa Rica, Dominican Republic, Guatemala, Panama, Puerto Rico and Russia.
     *
     * @var string
     */
    protected $securityCode;
    /**
     * Container to hold the Credit card Billing Address.  It is required to provide billing address if credit card information is provided and when the ShipFrom country or territory is the US, PR, and CA.
     *
     * @var CreditCardAddress
     */
    protected $address;
    /**
    * Valid values:
    - 01 = American Express
    - 03 = Discover
    - 04 = MasterCard
    - 05 = Optima
    - 06 = VISA
    - 07 = Bravo
    - 08 = Diners Club
    - 13 = Dankort
    - 14 = Hipercard
    - 15 = JCB
    - 17 = Postepay
    - 18 = UnionPay/ExpressPay
    - 19 = Visa Electron
    - 20 = VPAY
    - 21 = Carte Bleue
    *
    * @return string
    */
    public function getType() : string
    {
        return $this->type;
    }
    /**
    * Valid values:
    - 01 = American Express
    - 03 = Discover
    - 04 = MasterCard
    - 05 = Optima
    - 06 = VISA
    - 07 = Bravo
    - 08 = Diners Club
    - 13 = Dankort
    - 14 = Hipercard
    - 15 = JCB
    - 17 = Postepay
    - 18 = UnionPay/ExpressPay
    - 19 = Visa Electron
    - 20 = VPAY
    - 21 = Carte Bleue
    *
    * @param string $type
    *
    * @return self
    */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Credit Card number.
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * Credit Card number.
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number) : self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * Format is MMYYYY where MM is the 2 digit month and YYYY is the 4 digit year.  Valid month values are 01-12 and valid year values are Present Year - (Present Year + 10 years)
     *
     * @return string
     */
    public function getExpirationDate() : string
    {
        return $this->expirationDate;
    }
    /**
     * Format is MMYYYY where MM is the 2 digit month and YYYY is the 4 digit year.  Valid month values are 01-12 and valid year values are Present Year - (Present Year + 10 years)
     *
     * @param string $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(string $expirationDate) : self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     * Three or four digits that can be found either on top of credit card number or on the back of credit card. Number of digits varies for different type of credit card.  Valid values are 3 or 4 digits. It is required to provide the security code if credit card information is provided and when the ShipFrom countries or territories are other than the below mentioned countries or territories. Argentina, Bahamas, Costa Rica, Dominican Republic, Guatemala, Panama, Puerto Rico and Russia.
     *
     * @return string
     */
    public function getSecurityCode() : string
    {
        return $this->securityCode;
    }
    /**
     * Three or four digits that can be found either on top of credit card number or on the back of credit card. Number of digits varies for different type of credit card.  Valid values are 3 or 4 digits. It is required to provide the security code if credit card information is provided and when the ShipFrom countries or territories are other than the below mentioned countries or territories. Argentina, Bahamas, Costa Rica, Dominican Republic, Guatemala, Panama, Puerto Rico and Russia.
     *
     * @param string $securityCode
     *
     * @return self
     */
    public function setSecurityCode(string $securityCode) : self
    {
        $this->initialized['securityCode'] = true;
        $this->securityCode = $securityCode;
        return $this;
    }
    /**
     * Container to hold the Credit card Billing Address.  It is required to provide billing address if credit card information is provided and when the ShipFrom country or territory is the US, PR, and CA.
     *
     * @return CreditCardAddress
     */
    public function getAddress() : CreditCardAddress
    {
        return $this->address;
    }
    /**
     * Container to hold the Credit card Billing Address.  It is required to provide billing address if credit card information is provided and when the ShipFrom country or territory is the US, PR, and CA.
     *
     * @param CreditCardAddress $address
     *
     * @return self
     */
    public function setAddress(CreditCardAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}