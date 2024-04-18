<?php

namespace ShipStream\Ups\Api\Model;

class UpdatedAddressAddressExtendedInformation extends \ArrayObject
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
     * Allows for secondary address information such as s suite or apartment. It will be returned if there is any update due to exception.
     *
     * @var string
     */
    protected $type;
    /**
     * The lower limit associated with the extended address type. It will be returned if there is any update due to exception.
     *
     * @var string
     */
    protected $low;
    /**
     * The higher limit associated with the extended address type. It will be returned if there is any update due to exception.
     *
     * @var string
     */
    protected $high;
    /**
     * Allows for secondary address information such as s suite or apartment. It will be returned if there is any update due to exception.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Allows for secondary address information such as s suite or apartment. It will be returned if there is any update due to exception.
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
     * The lower limit associated with the extended address type. It will be returned if there is any update due to exception.
     *
     * @return string
     */
    public function getLow() : string
    {
        return $this->low;
    }
    /**
     * The lower limit associated with the extended address type. It will be returned if there is any update due to exception.
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
     * The higher limit associated with the extended address type. It will be returned if there is any update due to exception.
     *
     * @return string
     */
    public function getHigh() : string
    {
        return $this->high;
    }
    /**
     * The higher limit associated with the extended address type. It will be returned if there is any update due to exception.
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