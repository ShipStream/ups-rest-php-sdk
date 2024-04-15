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
     * @var string|null
     */
    protected $code;
    /**
     * Optional. Description of service. Example, UPS Next Day Air, UPS Ground etc, as referenced by the Service Code.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The UPS service code.
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * The UPS service code.
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
     * Optional. Description of service. Example, UPS Next Day Air, UPS Ground etc, as referenced by the Service Code.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Optional. Description of service. Example, UPS Next Day Air, UPS Ground etc, as referenced by the Service Code.
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