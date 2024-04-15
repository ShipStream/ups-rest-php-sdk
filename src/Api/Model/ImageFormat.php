<?php

namespace ShipStream\Ups\Api\Model;

class ImageFormat extends \ArrayObject
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
     * Code representing the format of the form. Currently only pdf is supported.
     *
     * @var string|null
     */
    protected $code;
    /**
     * Description of the format code of the form.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Code representing the format of the form. Currently only pdf is supported.
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Code representing the format of the form. Currently only pdf is supported.
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
     * Description of the format code of the form.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Description of the format code of the form.
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