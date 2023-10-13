<?php

namespace ShipStream\Ups\Api\Model;

class FreightRateRequestShipFrom extends \ArrayObject
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
     * The ship from location�s name or company name.
     *
     * @var string
     */
    protected $name;
    /**
     * Ship from Address Container.  The package will be originating from or being shipped from this address. The shipment will be rated from this origin address to the destination ship to address.
     *
     * @var ShipFromAddress
     */
    protected $address;
    /**
     * Contact name at the ship from location.
     *
     * @var string
     */
    protected $attentionName;
    /**
     * The ship from location�s name or company name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The ship from location�s name or company name.
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
     * Ship from Address Container.  The package will be originating from or being shipped from this address. The shipment will be rated from this origin address to the destination ship to address.
     *
     * @return ShipFromAddress
     */
    public function getAddress() : ShipFromAddress
    {
        return $this->address;
    }
    /**
     * Ship from Address Container.  The package will be originating from or being shipped from this address. The shipment will be rated from this origin address to the destination ship to address.
     *
     * @param ShipFromAddress $address
     *
     * @return self
     */
    public function setAddress(ShipFromAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Contact name at the ship from location.
     *
     * @return string
     */
    public function getAttentionName() : string
    {
        return $this->attentionName;
    }
    /**
     * Contact name at the ship from location.
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