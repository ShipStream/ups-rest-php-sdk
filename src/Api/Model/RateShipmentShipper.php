<?php

namespace ShipStream\Ups\Api\Model;

class RateShipmentShipper extends \ArrayObject
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
     * Shipper's name or company name.  Length is not validated.
     *
     * @var string
     */
    protected $name;
    /**
     * Shipper's attention name.  Length is not validated.
     *
     * @var string
     */
    protected $attentionName;
    /**
     * Shipper's UPS account number.  A valid account number is required to receive negotiated rates. Optional otherwise. Cannot be present when requesting UserLevelDiscount.
     *
     * @var string
     */
    protected $shipperNumber;
    /**
    * Address tag Container.  The package should be returned to this address if the package is undeliverable.
    
    This address appears on the upper left hand corner of the label.
    
    Note: If the ShipFrom container is not present then this address will be used as the ShipFrom address. If this address is used as the ShipFrom the shipment will be rated from this origin address.
    
    *
    * @var ShipperAddress
    */
    protected $address;
    /**
     * Shipper's name or company name.  Length is not validated.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Shipper's name or company name.  Length is not validated.
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
     * Shipper's attention name.  Length is not validated.
     *
     * @return string
     */
    public function getAttentionName() : string
    {
        return $this->attentionName;
    }
    /**
     * Shipper's attention name.  Length is not validated.
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
     * Shipper's UPS account number.  A valid account number is required to receive negotiated rates. Optional otherwise. Cannot be present when requesting UserLevelDiscount.
     *
     * @return string
     */
    public function getShipperNumber() : string
    {
        return $this->shipperNumber;
    }
    /**
     * Shipper's UPS account number.  A valid account number is required to receive negotiated rates. Optional otherwise. Cannot be present when requesting UserLevelDiscount.
     *
     * @param string $shipperNumber
     *
     * @return self
     */
    public function setShipperNumber(string $shipperNumber) : self
    {
        $this->initialized['shipperNumber'] = true;
        $this->shipperNumber = $shipperNumber;
        return $this;
    }
    /**
    * Address tag Container.  The package should be returned to this address if the package is undeliverable.
    
    This address appears on the upper left hand corner of the label.
    
    Note: If the ShipFrom container is not present then this address will be used as the ShipFrom address. If this address is used as the ShipFrom the shipment will be rated from this origin address.
    
    *
    * @return ShipperAddress
    */
    public function getAddress() : ShipperAddress
    {
        return $this->address;
    }
    /**
    * Address tag Container.  The package should be returned to this address if the package is undeliverable.
    
    This address appears on the upper left hand corner of the label.
    
    Note: If the ShipFrom container is not present then this address will be used as the ShipFrom address. If this address is used as the ShipFrom the shipment will be rated from this origin address.
    
    *
    * @param ShipperAddress $address
    *
    * @return self
    */
    public function setAddress(ShipperAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}