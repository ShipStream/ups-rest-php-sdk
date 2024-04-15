<?php

namespace ShipStream\Ups\Api\Model;

class PackageResultsAccessorial extends \ArrayObject
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
     * Code for Accessorial Indicator.
     *
     * @var string|null
     */
    protected $code;
    /**
     * Description for Accessorial Indicator.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Code for Accessorial Indicator.
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Code for Accessorial Indicator.
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
     * Description for Accessorial Indicator.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Description for Accessorial Indicator.
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
}