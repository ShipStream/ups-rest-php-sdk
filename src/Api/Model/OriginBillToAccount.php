<?php

namespace ShipStream\Ups\Api\Model;

class OriginBillToAccount extends \ArrayObject
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
    * Indicates how shipping charges for the package were billed. Valid Values:
    - 01 - Shipper
    - 02 - Consignee Billing
    - 03 - Third Party
    - 04 - Freight Collect
    
    *
    * @var string
    */
    protected $option;
    /**
     * The UPS Account number to which the shipping charges were billed.
     *
     * @var string
     */
    protected $number;
    /**
    * Indicates how shipping charges for the package were billed. Valid Values:
    - 01 - Shipper
    - 02 - Consignee Billing
    - 03 - Third Party
    - 04 - Freight Collect
    
    *
    * @return string
    */
    public function getOption() : string
    {
        return $this->option;
    }
    /**
    * Indicates how shipping charges for the package were billed. Valid Values:
    - 01 - Shipper
    - 02 - Consignee Billing
    - 03 - Third Party
    - 04 - Freight Collect
    
    *
    * @param string $option
    *
    * @return self
    */
    public function setOption(string $option) : self
    {
        $this->initialized['option'] = true;
        $this->option = $option;
        return $this;
    }
    /**
     * The UPS Account number to which the shipping charges were billed.
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * The UPS Account number to which the shipping charges were billed.
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
}