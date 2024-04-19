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
     * The locations phone number of the Producer. Applies to NAFTA CO.
     *
     * @var string
     */
    protected $number;
    /**
     * The locations phone extension of the Producer. Applies to NAFTA CO.
     *
     * @var string
     */
    protected $extension;
    /**
     * The locations phone number of the Producer. Applies to NAFTA CO.
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * The locations phone number of the Producer. Applies to NAFTA CO.
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
     * The locations phone extension of the Producer. Applies to NAFTA CO.
     *
     * @return string
     */
    public function getExtension() : string
    {
        return $this->extension;
    }
    /**
     * The locations phone extension of the Producer. Applies to NAFTA CO.
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