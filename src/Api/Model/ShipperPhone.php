<?php

namespace ShipStream\Ups\Api\Model;

class ShipperPhone extends \ArrayObject
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
     * Shipper's phone Number.
     *
     * @var string
     */
    protected $number;
    /**
     * Shipper's phone extension.
     *
     * @var string
     */
    protected $extension;
    /**
     * Shipper's phone Number.
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * Shipper's phone Number.
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
     * Shipper's phone extension.
     *
     * @return string
     */
    public function getExtension() : string
    {
        return $this->extension;
    }
    /**
     * Shipper's phone extension.
     *
     * @param string $extension
     *
     * @return self
     */
    public function setExtension(string $extension) : self
    {
        $this->initialized['extension'] = true;
        $this->extension = $extension;
        return $this;
    }
}