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
     * The service name code.
     *
     * @var string
     */
    protected $code;
    /**
     * The service name description. Note that this field will be translated based on the locale provided in the request.
     *
     * @var string
     */
    protected $description;
    /**
     * levelCode
     *
     * @var string
     */
    protected $levelCode;
    /**
     * The service name code.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * The service name code.
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
     * The service name description. Note that this field will be translated based on the locale provided in the request.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The service name description. Note that this field will be translated based on the locale provided in the request.
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
    /**
     * levelCode
     *
     * @return string
     */
    public function getLevelCode() : string
    {
        return $this->levelCode;
    }
    /**
     * levelCode
     *
     * @param string $levelCode
     *
     * @return self
     */
    public function setLevelCode(string $levelCode) : self
    {
        $this->initialized['levelCode'] = true;
        $this->levelCode = $levelCode;
        return $this;
    }
}