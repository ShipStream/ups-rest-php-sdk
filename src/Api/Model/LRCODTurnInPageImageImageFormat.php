<?php

namespace ShipStream\Ups\Api\Model;

class LRCODTurnInPageImageImageFormat extends \ArrayObject
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
     * Image format code. Values are 01=HTML
     *
     * @var string
     */
    protected $code;
    /**
     * Description for code.
     *
     * @var string
     */
    protected $description;
    /**
     * Image format code. Values are 01=HTML
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Image format code. Values are 01=HTML
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
     * Description for code.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description for code.
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