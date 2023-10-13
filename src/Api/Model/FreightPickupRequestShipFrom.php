<?php

namespace ShipStream\Ups\Api\Model;

class FreightPickupRequestShipFrom extends \ArrayObject
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
     * Contact name at the ship from location.
     *
     * @var string
     */
    protected $attentionName;
    /**
     * The ship from locations name or company name.
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
    * Container for Phone Number.  If ShipFrom country or territory is US, PR, CA, and VI, the layout is:
    area code, 7 digit phone number or 
    area code, 7 digit phone number, 4 digit extension number.
    
    For other countries or territories, the layout is:
    country or territory code, area code, 7 digit number. 
    
    If ShipFrom tag is in the XML and International forms is requested.
    *
    * @var ShipFromPhone
    */
    protected $phone;
    /**
     * Ship from email address.
     *
     * @var string
     */
    protected $eMailAddress;
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
    /**
     * The ship from locations name or company name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The ship from locations name or company name.
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
    * Container for Phone Number.  If ShipFrom country or territory is US, PR, CA, and VI, the layout is:
    area code, 7 digit phone number or 
    area code, 7 digit phone number, 4 digit extension number.
    
    For other countries or territories, the layout is:
    country or territory code, area code, 7 digit number. 
    
    If ShipFrom tag is in the XML and International forms is requested.
    *
    * @return ShipFromPhone
    */
    public function getPhone() : ShipFromPhone
    {
        return $this->phone;
    }
    /**
    * Container for Phone Number.  If ShipFrom country or territory is US, PR, CA, and VI, the layout is:
    area code, 7 digit phone number or 
    area code, 7 digit phone number, 4 digit extension number.
    
    For other countries or territories, the layout is:
    country or territory code, area code, 7 digit number. 
    
    If ShipFrom tag is in the XML and International forms is requested.
    *
    * @param ShipFromPhone $phone
    *
    * @return self
    */
    public function setPhone(ShipFromPhone $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * Ship from email address.
     *
     * @return string
     */
    public function getEMailAddress() : string
    {
        return $this->eMailAddress;
    }
    /**
     * Ship from email address.
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
}