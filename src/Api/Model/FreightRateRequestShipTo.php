<?php

namespace ShipStream\Ups\Api\Model;

class FreightRateRequestShipTo extends \ArrayObject
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
     * Consignee's company name.
     *
     * @var string
     */
    protected $name;
    /**
     * Address Container.
     *
     * @var FreightRateShipToAddress
     */
    protected $address;
    /**
     * Contact name at the consignee's location.
     *
     * @var string
     */
    protected $attentionName;
    /**
     * Consignee's company name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Consignee's company name.
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
     * @return FreightRateShipToAddress
     */
    public function getAddress() : FreightRateShipToAddress
    {
        return $this->address;
    }
    /**
     * Address Container.
     *
     * @param FreightRateShipToAddress $address
     *
     * @return self
     */
    public function setAddress(FreightRateShipToAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Contact name at the consignee's location.
     *
     * @return string
     */
    public function getAttentionName() : string
    {
        return $this->attentionName;
    }
    /**
     * Contact name at the consignee's location.
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