<?php

namespace ShipStream\Ups\Api\Model;

class PackageSimpleRate extends \ArrayObject
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
     * Simple Rate Package Size Valid values: XS -  Extra Small S -  Small M -  Medium L - Large XL - Extra Large
     *
     * @var string|null
     */
    protected $code;
    /**
     * Simple Rate Package Size Description
     *
     * @var string|null
     */
    protected $description;
    /**
     * Simple Rate Package Size Valid values: XS -  Extra Small S -  Small M -  Medium L - Large XL - Extra Large
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Simple Rate Package Size Valid values: XS -  Extra Small S -  Small M -  Medium L - Large XL - Extra Large
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
     * Simple Rate Package Size Description
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Simple Rate Package Size Description
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