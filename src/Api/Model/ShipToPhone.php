<?php

namespace ShipStream\Ups\Api\Model;

class ShipToPhone extends \ArrayObject
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
     * Consignee's phone Number.
     *
     * @var string
     */
    protected $number;
    /**
     * Consignee's phone extension.
     *
     * @var string
     */
    protected $extension;
    /**
     * Consignee's phone Number.
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * Consignee's phone Number.
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
     * Consignee's phone extension.
     *
     * @return string
     */
    public function getExtension() : string
    {
        return $this->extension;
    }
    /**
     * Consignee's phone extension.
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