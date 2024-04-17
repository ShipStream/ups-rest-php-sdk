<?php

namespace ShipStream\Ups\Api\Model;

class AlternateTrackingNumber extends \ArrayObject
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
     * The alternate tracking number.
     *
     * @var string
     */
    protected $number;
    /**
     * The type of alternate number. Non-typed numbers are typically UPS tracking numbers.
     *
     * @var string
     */
    protected $type;
    /**
     * The alternate tracking number.
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * The alternate tracking number.
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
     * The type of alternate number. Non-typed numbers are typically UPS tracking numbers.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The type of alternate number. Non-typed numbers are typically UPS tracking numbers.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}