<?php

namespace ShipStream\Ups\Api\Model;

class ExceptionResolution extends \ArrayObject
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
     * Type of resolution for updating shipping address issue.
     *
     * @var string
     */
    protected $code;
    /**
     * Description of resolution type for updating shipping address.
     *
     * @var string
     */
    protected $description;
    /**
     * Type of resolution for updating shipping address issue.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Type of resolution for updating shipping address issue.
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
     * Description of resolution type for updating shipping address.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of resolution type for updating shipping address.
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