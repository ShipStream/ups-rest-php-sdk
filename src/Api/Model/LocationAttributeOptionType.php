<?php

namespace ShipStream\Ups\Api\Model;

class LocationAttributeOptionType extends \ArrayObject
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
     * @var string|null
     */
    protected $code;
    /**
     * Description for Option type such as RetailLocation, AdditionalServices and ProgramType.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Code for Option type.
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Code for Option type.
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
     * Description for Option type such as RetailLocation, AdditionalServices and ProgramType.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Description for Option type such as RetailLocation, AdditionalServices and ProgramType.
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