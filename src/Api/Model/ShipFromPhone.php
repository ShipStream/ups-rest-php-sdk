<?php

namespace ShipStream\Ups\Api\Model;

class ShipFromPhone extends \ArrayObject
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
     * The Ship from phone Number.
     *
     * @var string
     */
    protected $number;
    /**
     * The Ship from phone extension.
     *
     * @var string
     */
    protected $extension;
    /**
     * The Ship from phone Number.
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * The Ship from phone Number.
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
     * The Ship from phone extension.
     *
     * @return string
     */
    public function getExtension() : string
    {
        return $this->extension;
    }
    /**
     * The Ship from phone extension.
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