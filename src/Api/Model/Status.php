<?php

namespace ShipStream\Ups\Api\Model;

class Status extends \ArrayObject
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
     * simplifiedTextDescription
     *
     * @var string
     */
    protected $simplifiedTextDescription;
    /**
     * statusCode
     *
     * @var string
     */
    protected $statusCode;
    /**
     * type
     *
     * @var string
     */
    protected $type;
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
    /**
     * simplifiedTextDescription
     *
     * @return string
     */
    public function getSimplifiedTextDescription() : string
    {
        return $this->simplifiedTextDescription;
    }
    /**
     * simplifiedTextDescription
     *
     * @param string $simplifiedTextDescription
     *
     * @return self
     */
    public function setSimplifiedTextDescription(string $simplifiedTextDescription) : self
    {
        $this->initialized['simplifiedTextDescription'] = true;
        $this->simplifiedTextDescription = $simplifiedTextDescription;
        return $this;
    }
    /**
     * statusCode
     *
     * @return string
     */
    public function getStatusCode() : string
    {
        return $this->statusCode;
    }
    /**
     * statusCode
     *
     * @param string $statusCode
     *
     * @return self
     */
    public function setStatusCode(string $statusCode) : self
    {
        $this->initialized['statusCode'] = true;
        $this->statusCode = $statusCode;
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