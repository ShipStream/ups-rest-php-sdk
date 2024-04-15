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
     * @var string|null
     */
    protected $code;
    /**
     * description
     *
     * @var string|null
     */
    protected $description;
    /**
     * simplifiedTextDescription
     *
     * @var string|null
     */
    protected $simplifiedTextDescription;
    /**
     * statusCode
     *
     * @var string|null
     */
    protected $statusCode;
    /**
     * type
     *
     * @var string|null
     */
    protected $type;
    /**
     * code
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * code
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * description
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * description
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * simplifiedTextDescription
     *
     * @return string|null
     */
    public function getSimplifiedTextDescription() : ?string
    {
        return $this->simplifiedTextDescription;
    }
    /**
     * simplifiedTextDescription
     *
     * @param string|null $simplifiedTextDescription
     *
     * @return self
     */
    public function setSimplifiedTextDescription(?string $simplifiedTextDescription) : self
    {
        $this->initialized['simplifiedTextDescription'] = true;
        $this->simplifiedTextDescription = $simplifiedTextDescription;
        return $this;
    }
    /**
     * statusCode
     *
     * @return string|null
     */
    public function getStatusCode() : ?string
    {
        return $this->statusCode;
    }
    /**
     * statusCode
     *
     * @param string|null $statusCode
     *
     * @return self
     */
    public function setStatusCode(?string $statusCode) : self
    {
        $this->initialized['statusCode'] = true;
        $this->statusCode = $statusCode;
        return $this;
    }
    /**
     * type
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * type
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}