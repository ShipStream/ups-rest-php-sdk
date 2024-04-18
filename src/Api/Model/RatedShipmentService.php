<?php

namespace ShipStream\Ups\Api\Model;

class RatedShipmentService extends \ArrayObject
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
     * The UPS service code.
     *
     * @var string
     */
    protected $code;
    /**
     * The UPS service Description.
     *
     * @var string
     */
    protected $description;
    /**
     * The UPS service code.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * The UPS service code.
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
     * The UPS service Description.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The UPS service Description.
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