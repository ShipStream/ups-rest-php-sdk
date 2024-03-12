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
     * 
     *
     * @var Address
     */
    protected $address;
    /**
     * 
     *
     * @var string
     */
    protected $attentionName;
    /**
     * name
     *
     * @var string
     */
    protected $name;
    /**
     * type
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @return Address
     */
    public function getAddress() : Address
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param Address $address
     *
     * @return self
     */
    public function setAddress(Address $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAttentionName() : string
    {
        return $this->attentionName;
    }
    /**
     * 
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
     * name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * name
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