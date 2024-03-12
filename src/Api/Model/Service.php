<?php

namespace ShipStream\Ups\Api\Model;

class Service extends \ArrayObject
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
     * code
     *
     * @var string
     */
    protected $code;
    /**
     * description
     *
     * @var string
     */
    protected $description;
    /**
     * code
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * code
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * description
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}