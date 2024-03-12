<?php

namespace ShipStream\Ups\Api\Model;

class ManifestUAPAddress extends \ArrayObject
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
     * The name of person or company to whom package was shipped.
     *
     * @var string
     */
    protected $companyName;
    /**
     * The "Attention To" field for the person/company to whom package is shipped.
     *
     * @var string
     */
    protected $attentionName;
    /**
     * Information that specifies a physical location.
     *
     * @var UAPAddressAddress
     */
    protected $address;
    /**
     * UPS Access Point's Phone Number. US Phone numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * The name of person or company to whom package was shipped.
     *
     * @return string
     */
    public function getCompanyName() : string
    {
        return $this->companyName;
    }
    /**
     * The name of person or company to whom package was shipped.
     *
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName(string $companyName) : self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * The "Attention To" field for the person/company to whom package is shipped.
     *
     * @return string
     */
    public function getAttentionName() : string
    {
        return $this->attentionName;
    }
    /**
     * The "Attention To" field for the person/company to whom package is shipped.
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
     * Information that specifies a physical location.
     *
     * @return UAPAddressAddress
     */
    public function getAddress() : UAPAddressAddress
    {
        return $this->address;
    }
    /**
     * Information that specifies a physical location.
     *
     * @param UAPAddressAddress $address
     *
     * @return self
     */
    public function setAddress(UAPAddressAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * UPS Access Point's Phone Number. US Phone numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
     *
     * @return string
     */
    public function getPhoneNumber() : string
    {
        return $this->phoneNumber;
    }
    /**
     * UPS Access Point's Phone Number. US Phone numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
     *
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(string $phoneNumber) : self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
}