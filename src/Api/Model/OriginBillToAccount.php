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
    * Indicates how shipping charges for the package were billed. 
    Valid Values: 01, 02, 03, 04, 99 
    Value Definitions: 
    01 Shipper
    02 Consignee Billing 
    03 Third Party
    04 Freight Collect
    99 International Bill Option
    *
    * @var string|null
    */
    protected $option;
    /**
     * The UPS Account number to which the shipping charges were billed.
     *
     * @var string|null
     */
    protected $number;
    /**
    * Indicates how shipping charges for the package were billed. 
    Valid Values: 01, 02, 03, 04, 99 
    Value Definitions: 
    01 Shipper
    02 Consignee Billing 
    03 Third Party
    04 Freight Collect
    99 International Bill Option
    *
    * @return string|null
    */
    public function getOption() : ?string
    {
        return $this->option;
    }
    /**
    * Indicates how shipping charges for the package were billed. 
    Valid Values: 01, 02, 03, 04, 99 
    Value Definitions: 
    01 Shipper
    02 Consignee Billing 
    03 Third Party
    04 Freight Collect
    99 International Bill Option
    *
    * @param string|null $option
    *
    * @return self
    */
    public function setOption(?string $option) : self
    {
        $this->initialized['option'] = true;
        $this->option = $option;
        return $this;
    }
    /**
     * The UPS Account number to which the shipping charges were billed.
     *
     * @return string|null
     */
    public function getNumber() : ?string
    {
        return $this->number;
    }
    /**
     * The UPS Account number to which the shipping charges were billed.
     *
     * @param string|null $number
     *
     * @return self
     */
    public function setNumber(?string $number) : self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
}