<?php

namespace ShipStream\Ups\Api\Model;

class ShipperPhone extends \ArrayObject
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
    * Shipper's phone Number.  Valid values are 0 - 9.
    
    If Shipper country or territory is US, PR, CA, and VI, the layout is:
    area code, 7 digit PhoneNumber or
    area code, 7 digit PhoneNumber, 4 digit extension number.
    
    For other countries or territories, the layout is: country or territory code, area code, 7 digit number.
    
    A phone number is required if destination is international.
    
    *
    * @var string
    */
    protected $number;
    /**
     * Shipper's phone extension.
     *
     * @var string
     */
    protected $extension;
    /**
    * Shipper's phone Number.  Valid values are 0 - 9.
    
    If Shipper country or territory is US, PR, CA, and VI, the layout is:
    area code, 7 digit PhoneNumber or
    area code, 7 digit PhoneNumber, 4 digit extension number.
    
    For other countries or territories, the layout is: country or territory code, area code, 7 digit number.
    
    A phone number is required if destination is international.
    
    *
    * @return string
    */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
    * Shipper's phone Number.  Valid values are 0 - 9.
    
    If Shipper country or territory is US, PR, CA, and VI, the layout is:
    area code, 7 digit PhoneNumber or
    area code, 7 digit PhoneNumber, 4 digit extension number.
    
    For other countries or territories, the layout is: country or territory code, area code, 7 digit number.
    
    A phone number is required if destination is international.
    
    *
    * @param string $number
    *
    * @return self
    */
    public function setNumber(string $number) : self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * Shipper's phone extension.
     *
     * @return string
     */
    public function getExtension() : string
    {
        return $this->extension;
    }
    /**
     * Shipper's phone extension.
     *
     * @param string $extension
     *
     * @return self
     */
    public function setExtension(string $extension) : self
    {
        $this->initialized['extension'] = true;
        $this->extension = $extension;
        return $this;
    }
}