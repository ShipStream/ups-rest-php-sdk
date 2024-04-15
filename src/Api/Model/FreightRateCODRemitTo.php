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
     * @var string|null
     */
    protected $name;
    /**
     * Address Container.
     *
     * @var RemitToAddress|null
     */
    protected $address;
    /**
     * Payee contact name for the COD charges.
     *
     * @var string|null
     */
    protected $attentionName;
    /**
     * The payee company name for the COD charges.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The payee company name for the COD charges.
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
     * Address Container.
     *
     * @return RemitToAddress|null
     */
    public function getAddress() : ?RemitToAddress
    {
        return $this->address;
    }
    /**
     * Address Container.
     *
     * @param RemitToAddress|null $address
     *
     * @return self
     */
    public function setAddress(?RemitToAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Payee contact name for the COD charges.
     *
     * @return string|null
     */
    public function getAttentionName() : ?string
    {
        return $this->attentionName;
    }
    /**
     * Payee contact name for the COD charges.
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
}