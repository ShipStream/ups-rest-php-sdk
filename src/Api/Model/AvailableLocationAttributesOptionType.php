<?php

namespace ShipStream\Ups\Api\Model;

class AvailableLocationAttributesOptionType extends \ArrayObject
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
     * Code for Option type.
     *
     * @var string
     */
    protected $code;
    /**
     * Description for Option type such as RetailLocation, AdditionalServices and ProgramType.
     *
     * @var string
     */
    protected $description;
    /**
     * Code for Option type.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Code for Option type.
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
     * Description for Option type such as RetailLocation, AdditionalServices and ProgramType.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description for Option type such as RetailLocation, AdditionalServices and ProgramType.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}