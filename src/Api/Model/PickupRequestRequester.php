<?php

namespace ShipStream\Ups\Api\Model;

class PickupRequestRequester extends \ArrayObject
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
     * @var string
     */
    protected $thirdPartyIndicator;
    /**
     * Requester�s name.
     *
     * @var string
     */
    protected $attentionName;
    /**
     * Requester�s email address.
     *
     * @var string
     */
    protected $eMailAddress;
    /**
     * Requester�s company name.
     *
     * @var string
     */
    protected $name;
    /**
     * Phone Container
     *
     * @var RequesterPhone
     */
    protected $phone;
    /**
     * Indicates whether the requester is Consignee, Third Party, Shipper, other.
     *
     * @return string
     */
    public function getThirdPartyIndicator() : string
    {
        return $this->thirdPartyIndicator;
    }
    /**
     * Indicates whether the requester is Consignee, Third Party, Shipper, other.
     *
     * @param string $thirdPartyIndicator
     *
     * @return self
     */
    public function setThirdPartyIndicator(string $thirdPartyIndicator) : self
    {
        $this->initialized['thirdPartyIndicator'] = true;
        $this->thirdPartyIndicator = $thirdPartyIndicator;
        return $this;
    }
    /**
     * Requester�s name.
     *
     * @return string
     */
    public function getAttentionName() : string
    {
        return $this->attentionName;
    }
    /**
     * Requester�s name.
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
     * Requester�s email address.
     *
     * @return string
     */
    public function getEMailAddress() : string
    {
        return $this->eMailAddress;
    }
    /**
     * Requester�s email address.
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
     * Requester�s company name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Requester�s company name.
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
     * Phone Container
     *
     * @return RequesterPhone
     */
    public function getPhone() : RequesterPhone
    {
        return $this->phone;
    }
    /**
     * Phone Container
     *
     * @param RequesterPhone $phone
     *
     * @return self
     */
    public function setPhone(RequesterPhone $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
}