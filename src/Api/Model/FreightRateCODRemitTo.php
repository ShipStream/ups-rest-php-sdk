<?php

namespace ShipStream\Ups\Api\Model;

class FreightRateCODRemitTo extends \ArrayObject
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
     * The payee company name for the COD charges.
     *
     * @var string
     */
    protected $name;
    /**
     * Address Container.
     *
     * @var RemitToAddress
     */
    protected $address;
    /**
     * Payee contact name for the COD charges.
     *
     * @var string
     */
    protected $attentionName;
    /**
     * The payee company name for the COD charges.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The payee company name for the COD charges.
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
     * Address Container.
     *
     * @return RemitToAddress
     */
    public function getAddress() : RemitToAddress
    {
        return $this->address;
    }
    /**
     * Address Container.
     *
     * @param RemitToAddress $address
     *
     * @return self
     */
    public function setAddress(RemitToAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Payee contact name for the COD charges.
     *
     * @return string
     */
    public function getAttentionName() : string
    {
        return $this->attentionName;
    }
    /**
     * Payee contact name for the COD charges.
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
}