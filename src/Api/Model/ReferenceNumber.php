<?php

namespace ShipStream\Ups\Api\Model;

class ReferenceNumber extends \ArrayObject
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
     * The reference number.
     *
     * @var string
     */
    protected $number;
    /**
     * The type of reference number. Specifies how the reference number is associated with the package.
     *
     * @var string
     */
    protected $type;
    /**
     * The reference number.
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * The reference number.
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
     * The type of reference number. Specifies how the reference number is associated with the package.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The type of reference number. Specifies how the reference number is associated with the package.
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