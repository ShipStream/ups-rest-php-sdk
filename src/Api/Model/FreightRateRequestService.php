<?php

namespace ShipStream\Ups\Api\Model;

class FreightRateRequestService extends \ArrayObject
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
     * The code for the UPS Service associated with the shipment.
     *
     * @var string|null
     */
    protected $code;
    /**
     * A text description of the UPS Service associated with the shipment.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The code for the UPS Service associated with the shipment.
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * The code for the UPS Service associated with the shipment.
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
     * A text description of the UPS Service associated with the shipment.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * A text description of the UPS Service associated with the shipment.
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