<?php

namespace ShipStream\Ups\Api\Model;

class FreightPickupRequestRequester extends \ArrayObject
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
     * Indicates whether the requester is Consignee, Third Party, Shipper, other.
     *
     * @var string|null
     */
    protected $thirdPartyIndicator;
    /**
     * Requesters name.
     *
     * @var string|null
     */
    protected $attentionName;
    /**
     * Requesters email address.
     *
     * @var string|null
     */
    protected $eMailAddress;
    /**
     * Requesters company name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Phone Container
     *
     * @var RequesterPhone|null
     */
    protected $phone;
    /**
     * Indicates whether the requester is Consignee, Third Party, Shipper, other.
     *
     * @return string|null
     */
    public function getThirdPartyIndicator() : ?string
    {
        return $this->thirdPartyIndicator;
    }
    /**
     * Indicates whether the requester is Consignee, Third Party, Shipper, other.
     *
     * @param string|null $thirdPartyIndicator
     *
     * @return self
     */
    public function setThirdPartyIndicator(?string $thirdPartyIndicator) : self
    {
        $this->initialized['thirdPartyIndicator'] = true;
        $this->thirdPartyIndicator = $thirdPartyIndicator;
        return $this;
    }
    /**
     * Requesters name.
     *
     * @return string|null
     */
    public function getAttentionName() : ?string
    {
        return $this->attentionName;
    }
    /**
     * Requesters name.
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
     * Requesters email address.
     *
     * @return string|null
     */
    public function getEMailAddress() : ?string
    {
        return $this->eMailAddress;
    }
    /**
     * Requesters email address.
     *
     * @param string|null $eMailAddress
     *
     * @return self
     */
    public function setEMailAddress(?string $eMailAddress) : self
    {
        $this->initialized['eMailAddress'] = true;
        $this->eMailAddress = $eMailAddress;
        return $this;
    }
    /**
     * Requesters company name.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Requesters company name.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Phone Container
     *
     * @return RequesterPhone|null
     */
    public function getPhone() : ?RequesterPhone
    {
        return $this->phone;
    }
    /**
     * Phone Container
     *
     * @param RequesterPhone|null $phone
     *
     * @return self
     */
    public function setPhone(?RequesterPhone $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
}