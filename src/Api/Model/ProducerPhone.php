<?php

namespace ShipStream\Ups\Api\Model;

class ProducerPhone extends \ArrayObject
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
     * The locations phone number of the Producer.
     *
     * @var string|null
     */
    protected $number;
    /**
     * The locations phone extension of the Producer.
     *
     * @var string|null
     */
    protected $extension;
    /**
     * The locations phone number of the Producer.
     *
     * @return string|null
     */
    public function getNumber() : ?string
    {
        return $this->number;
    }
    /**
     * The locations phone number of the Producer.
     *
     * @param string|null $number
     *
     * @return self
     */
    public function setNumber(?string $number) : self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * The locations phone extension of the Producer.
     *
     * @return string|null
     */
    public function getExtension() : ?string
    {
        return $this->extension;
    }
    /**
     * The locations phone extension of the Producer.
     *
     * @param string|null $extension
     *
     * @return self
     */
    public function setExtension(?string $extension) : self
    {
        $this->initialized['extension'] = true;
        $this->extension = $extension;
        return $this;
    }
}