<?php

namespace ShipStream\Ups\Api\Model;

class DeliveryTimeInformationReturnContractServices extends \ArrayObject
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
     * Return contract Service code. Valid Code "01" - Heavy Goods. If 01 will return Heavy Goods service transit times for a given origin and destination (if applicable)  Invalid Code will be ignore.
     *
     * @var string|null
     */
    protected $code;
    /**
     * Return contract service Description
     *
     * @var string|null
     */
    protected $description;
    /**
     * Return contract Service code. Valid Code "01" - Heavy Goods. If 01 will return Heavy Goods service transit times for a given origin and destination (if applicable)  Invalid Code will be ignore.
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Return contract Service code. Valid Code "01" - Heavy Goods. If 01 will return Heavy Goods service transit times for a given origin and destination (if applicable)  Invalid Code will be ignore.
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Return contract service Description
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Return contract service Description
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}