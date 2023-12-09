<?php

namespace ShipStream\Ups\Api\Model;

class FreightRateRequestShipTo extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
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
     * Consignee�s Address Container.
     *
     * @var ShipToAddress
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
     * Consignee�s Address Container.
     *
     * @return ShipToAddress
     */
    public function getAddress() : ShipToAddress
    {
        return $this->address;
    }
    /**
     * Consignee�s Address Container.
     *
     * @param ShipToAddress $address
     *
     * @return self
     */
    public function setAddress(ShipToAddress $address) : self
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