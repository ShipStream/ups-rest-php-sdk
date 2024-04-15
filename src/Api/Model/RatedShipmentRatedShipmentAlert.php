<?php

namespace ShipStream\Ups\Api\Model;

class RatedShipmentRatedShipmentAlert extends \ArrayObject
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
     * The rated shipments warning code returned by the system.
     *
     * @var string|null
     */
    protected $code;
    /**
     * The rated shipment warning Description returned by the system.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The rated shipments warning code returned by the system.
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * The rated shipments warning code returned by the system.
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
     * The rated shipment warning Description returned by the system.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * The rated shipment warning Description returned by the system.
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