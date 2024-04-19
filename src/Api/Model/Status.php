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
     * The current status code.
     *
     * @var string|null
     */
    protected $code;
    /**
     * The current status description. Note that this field will be translated based on the locale provided in the request.
     *
     * @var string
     */
    protected $description;
    /**
     * The current status in simplified text. This is a supplementary description providing additional information on the status of the package. Note that this field will be translated based on the locale provided in the request.
     *
     * @var string
     */
    protected $simplifiedTextDescription;
    /**
     * The activity package detail status code see API Codes for possible values.
     *
     * @var string
     */
    protected $statusCode;
    /**
     * The activity status type.
     *
     * @var string
     */
    protected $type;
    /**
     * The current status code.
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * The current status code.
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
     * The current status description. Note that this field will be translated based on the locale provided in the request.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The current status description. Note that this field will be translated based on the locale provided in the request.
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
     * The current status in simplified text. This is a supplementary description providing additional information on the status of the package. Note that this field will be translated based on the locale provided in the request.
     *
     * @return string
     */
    public function getSimplifiedTextDescription() : string
    {
        return $this->simplifiedTextDescription;
    }
    /**
     * The current status in simplified text. This is a supplementary description providing additional information on the status of the package. Note that this field will be translated based on the locale provided in the request.
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
     * The activity package detail status code see API Codes for possible values.
     *
     * @return string
     */
    public function getStatusCode() : string
    {
        return $this->statusCode;
    }
    /**
     * The activity package detail status code see API Codes for possible values.
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
     * The activity status type.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The activity status type.
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