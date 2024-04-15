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
     * @var string|null
     */
    protected $companyName;
    /**
     * The "Attention To" field for the person/company to whom package is shipped.
     *
     * @var string|null
     */
    protected $attentionName;
    /**
     * Information that specifies a physical location.
     *
     * @var UAPAddressAddress|null
     */
    protected $address;
    /**
     * UPS Access Point's Phone Number. US Phone numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
     *
     * @var string|null
     */
    protected $phoneNumber;
    /**
     * The name of person or company to whom package was shipped.
     *
     * @return string|null
     */
    public function getCompanyName() : ?string
    {
        return $this->companyName;
    }
    /**
     * The name of person or company to whom package was shipped.
     *
     * @param string|null $companyName
     *
     * @return self
     */
    public function setCompanyName(?string $companyName) : self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * The "Attention To" field for the person/company to whom package is shipped.
     *
     * @return string|null
     */
    public function getAttentionName() : ?string
    {
        return $this->attentionName;
    }
    /**
     * The "Attention To" field for the person/company to whom package is shipped.
     *
     * @param string|null $attentionName
     *
     * @return self
     */
    public function setAttentionName(?string $attentionName) : self
    {
        $this->initialized['attentionName'] = true;
        $this->attentionName = $attentionName;
        return $this;
    }
    /**
     * Information that specifies a physical location.
     *
     * @return UAPAddressAddress|null
     */
    public function getAddress() : ?UAPAddressAddress
    {
        return $this->address;
    }
    /**
     * Information that specifies a physical location.
     *
     * @param UAPAddressAddress|null $address
     *
     * @return self
     */
    public function setAddress(?UAPAddressAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * UPS Access Point's Phone Number. US Phone numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
     *
     * @return string|null
     */
    public function getPhoneNumber() : ?string
    {
        return $this->phoneNumber;
    }
    /**
     * UPS Access Point's Phone Number. US Phone numbers must be 10 digits. No formatting is allowed. Required if origin and destination countries or territories are different.
     *
     * @param string|null $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(?string $phoneNumber) : self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
}