<?php

namespace ShipStream\Ups\Api\Model;

class AlternateTrackingNumber extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * number
     *
     * @var string
     */
    protected $number;
    /**
     * type
     *
     * @var string
     */
    protected $type;
    /**
     * number
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * number
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
     * type
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * type
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