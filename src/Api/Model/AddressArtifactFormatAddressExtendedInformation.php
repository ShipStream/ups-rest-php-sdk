<?php

namespace ShipStream\Ups\Api\Model;

class AddressArtifactFormatAddressExtendedInformation extends \ArrayObject
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
     * Allows for secondary address information such as a suite or apartment.
     *
     * @var string
     */
    protected $type;
    /**
     * The low number associated with an extended address.
     *
     * @var string
     */
    protected $low;
    /**
     * The high number associated with an extended address.
     *
     * @var string
     */
    protected $high;
    /**
     * Allows for secondary address information such as a suite or apartment.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Allows for secondary address information such as a suite or apartment.
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
    /**
     * The low number associated with an extended address.
     *
     * @return string
     */
    public function getLow() : string
    {
        return $this->low;
    }
    /**
     * The low number associated with an extended address.
     *
     * @param string $low
     *
     * @return self
     */
    public function setLow(string $low) : self
    {
        $this->initialized['low'] = true;
        $this->low = $low;
        return $this;
    }
    /**
     * The high number associated with an extended address.
     *
     * @return string
     */
    public function getHigh() : string
    {
        return $this->high;
    }
    /**
     * The high number associated with an extended address.
     *
     * @param string $high
     *
     * @return self
     */
    public function setHigh(string $high) : self
    {
        $this->initialized['high'] = true;
        $this->high = $high;
        return $this;
    }
}