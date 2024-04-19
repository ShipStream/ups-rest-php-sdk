<?php

namespace ShipStream\Ups\Api\Model;

class ContactsSoldTo extends \ArrayObject
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
     * Company Name.
     *
     * @var string
     */
    protected $name;
    /**
     * Sold to contact name.
     *
     * @var string
     */
    protected $attentionName;
    /**
     * SoldTo Tax Identification Number.
     *
     * @var string
     */
    protected $taxIdentificationNumber;
    /**
     * Phone Container.
     *
     * @var SoldToPhone
     */
    protected $phone;
    /**
     * The text associated with the code will be printed in the sold to section of the NAFTA CO form.  The values indicate the following: 01 – Unknown.  Applies to NAFTA CO form. Possible Values are 01 and 02.
     *
     * @var string
     */
    protected $option;
    /**
     * Sold To Address Container.  Applies to NAFTA CO.
     *
     * @var SoldToAddress
     */
    protected $address;
    /**
     * SoldTo email address.
     *
     * @var string
     */
    protected $eMailAddress;
    /**
     * SoldTo AccountNumber
     *
     * @var string
     */
    protected $accountNumber;
    /**
     * Company Name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Company Name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Sold to contact name.
     *
     * @return string
     */
    public function getAttentionName() : string
    {
        return $this->attentionName;
    }
    /**
     * Sold to contact name.
     *
     * @param string $attentionName
     *
     * @return self
     */
    public function setAttentionName(string $attentionName) : self
    {
        $this->initialized['attentionName'] = true;
        $this->attentionName = $attentionName;
        return $this;
    }
    /**
     * SoldTo Tax Identification Number.
     *
     * @return string
     */
    public function getTaxIdentificationNumber() : string
    {
        return $this->taxIdentificationNumber;
    }
    /**
     * SoldTo Tax Identification Number.
     *
     * @param string $taxIdentificationNumber
     *
     * @return self
     */
    public function setTaxIdentificationNumber(string $taxIdentificationNumber) : self
    {
        $this->initialized['taxIdentificationNumber'] = true;
        $this->taxIdentificationNumber = $taxIdentificationNumber;
        return $this;
    }
    /**
     * Phone Container.
     *
     * @return SoldToPhone
     */
    public function getPhone() : SoldToPhone
    {
        return $this->phone;
    }
    /**
     * Phone Container.
     *
     * @param SoldToPhone $phone
     *
     * @return self
     */
    public function setPhone(SoldToPhone $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * The text associated with the code will be printed in the sold to section of the NAFTA CO form.  The values indicate the following: 01 – Unknown.  Applies to NAFTA CO form. Possible Values are 01 and 02.
     *
     * @return string
     */
    public function getOption() : string
    {
        return $this->option;
    }
    /**
     * The text associated with the code will be printed in the sold to section of the NAFTA CO form.  The values indicate the following: 01 – Unknown.  Applies to NAFTA CO form. Possible Values are 01 and 02.
     *
     * @param string $option
     *
     * @return self
     */
    public function setOption(string $option) : self
    {
        $this->initialized['option'] = true;
        $this->option = $option;
        return $this;
    }
    /**
     * Sold To Address Container.  Applies to NAFTA CO.
     *
     * @return SoldToAddress
     */
    public function getAddress() : SoldToAddress
    {
        return $this->address;
    }
    /**
     * Sold To Address Container.  Applies to NAFTA CO.
     *
     * @param SoldToAddress $address
     *
     * @return self
     */
    public function setAddress(SoldToAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * SoldTo email address.
     *
     * @return string
     */
    public function getEMailAddress() : string
    {
        return $this->eMailAddress;
    }
    /**
     * SoldTo email address.
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
     * SoldTo AccountNumber
     *
     * @return string
     */
    public function getAccountNumber() : string
    {
        return $this->accountNumber;
    }
    /**
     * SoldTo AccountNumber
     *
     * @param string $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(string $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
}