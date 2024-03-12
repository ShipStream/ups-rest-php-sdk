<?php

namespace ShipStream\Ups\Api\Model;

class PackageReferenceNumber extends \ArrayObject
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
    * If the indicator is present then the reference numbers value will be bar coded on the label.
    
    This is an empty tag, any value inside is ignored.
     Only one shipment-level or package-level reference number can be bar coded per shipment. 
    
    In order to barcode a reference number, its value must be no longer than 14 alphanumeric characters or 24 numeric characters and cannot contain spaces.
    *
    * @var string
    */
    protected $barCodeIndicator;
    /**
    * Reference number type code, for the entire shipment. The code specifies the Reference name. 
    
    Refer to the Reference Number Code table.  Valid if the origin/destination pair is US/US or PR/PR and character should be alpha-numeric.
    *
    * @var string
    */
    protected $code;
    /**
     * Customer supplied reference number.  Valid if the origin/destination pair is US/US or PR/PR.
     *
     * @var string
     */
    protected $value;
    /**
    * If the indicator is present then the reference numbers value will be bar coded on the label.
    
    This is an empty tag, any value inside is ignored.
     Only one shipment-level or package-level reference number can be bar coded per shipment. 
    
    In order to barcode a reference number, its value must be no longer than 14 alphanumeric characters or 24 numeric characters and cannot contain spaces.
    *
    * @return string
    */
    public function getBarCodeIndicator() : string
    {
        return $this->barCodeIndicator;
    }
    /**
    * If the indicator is present then the reference numbers value will be bar coded on the label.
    
    This is an empty tag, any value inside is ignored.
     Only one shipment-level or package-level reference number can be bar coded per shipment. 
    
    In order to barcode a reference number, its value must be no longer than 14 alphanumeric characters or 24 numeric characters and cannot contain spaces.
    *
    * @param string $barCodeIndicator
    *
    * @return self
    */
    public function setBarCodeIndicator(string $barCodeIndicator) : self
    {
        $this->initialized['barCodeIndicator'] = true;
        $this->barCodeIndicator = $barCodeIndicator;
        return $this;
    }
    /**
    * Reference number type code, for the entire shipment. The code specifies the Reference name. 
    
    Refer to the Reference Number Code table.  Valid if the origin/destination pair is US/US or PR/PR and character should be alpha-numeric.
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Reference number type code, for the entire shipment. The code specifies the Reference name. 
    
    Refer to the Reference Number Code table.  Valid if the origin/destination pair is US/US or PR/PR and character should be alpha-numeric.
    *
    * @param string $code
    *
    * @return self
    */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Customer supplied reference number.  Valid if the origin/destination pair is US/US or PR/PR.
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * Customer supplied reference number.  Valid if the origin/destination pair is US/US or PR/PR.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}