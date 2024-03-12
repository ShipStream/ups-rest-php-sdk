<?php

namespace ShipStream\Ups\Api\Model;

class ManifestPackageReferenceNumber extends \ArrayObject
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
     * Number tag.
     *
     * @var string
     */
    protected $number;
    /**
    * Reference number type code for entire shipment, two-character alphanumeric. 
    The code specifies the Reference name. 
    Valid if the origin/destination pair is US/US or PR/PR.
    For additional information, refer to the Reference Codes table in the Appendix.
    *
    * @var string
    */
    protected $code;
    /**
     * Customer supplied reference number, defined by the shipper and can contain any character string. Valid if the origin/destination pair is US/US or PR/PR.
     *
     * @var string
     */
    protected $value;
    /**
     * Number tag.
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * Number tag.
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
    * Reference number type code for entire shipment, two-character alphanumeric. 
    The code specifies the Reference name. 
    Valid if the origin/destination pair is US/US or PR/PR.
    For additional information, refer to the Reference Codes table in the Appendix.
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Reference number type code for entire shipment, two-character alphanumeric. 
    The code specifies the Reference name. 
    Valid if the origin/destination pair is US/US or PR/PR.
    For additional information, refer to the Reference Codes table in the Appendix.
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
     * Customer supplied reference number, defined by the shipper and can contain any character string. Valid if the origin/destination pair is US/US or PR/PR.
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * Customer supplied reference number, defined by the shipper and can contain any character string. Valid if the origin/destination pair is US/US or PR/PR.
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