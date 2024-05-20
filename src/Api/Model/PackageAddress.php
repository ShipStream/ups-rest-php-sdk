<?php

namespace ShipStream\Ups\Api\Model;

class PackageAddress extends \ArrayObject
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
     * The container which has the physical address.
     *
     * @var Address|null
     */
    protected $address;
    /**
     * The specific name of an individual associated with the address segment.
     *
     * @var string
     */
    protected $attentionName;
    /**
     * Ship-to name.
     *
     * @var string
     */
    protected $name;
    /**
     * The type of address.
     *
     * @var string
     */
    protected $type;
    /**
     * The container which has the physical address.
     *
     * @return Address|null
     */
    public function getAddress() : ?Address
    {
        return $this->address;
    }
    /**
     * The container which has the physical address.
     *
     * @param Address|null $address
     *
     * @return self
     */
    public function setAddress(?Address $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * The specific name of an individual associated with the address segment.
     *
     * @return string
     */
    public function getAttentionName() : string
    {
        return $this->attentionName;
    }
    /**
     * The specific name of an individual associated with the address segment.
     *
     * @param string $attentionName
     *
     * @return self
     */
    public function setAttentionName(string $attentionName) : self
    {
        $this->initialized['attentionName'] = true;
        $this->attentionName = $attentionName;
        return $this;
    }
    /**
     * Ship-to name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Ship-to name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The type of address.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The type of address.
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