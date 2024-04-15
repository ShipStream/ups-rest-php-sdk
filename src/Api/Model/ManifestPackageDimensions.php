<?php

namespace ShipStream\Ups\Api\Model;

class ManifestPackageDimensions extends \ArrayObject
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
    * Package length. 
    Valid values: 0 to 108 IN and 0 to 270 CM
    *
    * @var string|null
    */
    protected $length;
    /**
     * Package width.
     *
     * @var string|null
     */
    protected $width;
    /**
     * Package height.
     *
     * @var string|null
     */
    protected $height;
    /**
    * Package length. 
    Valid values: 0 to 108 IN and 0 to 270 CM
    *
    * @return string|null
    */
    public function getLength() : ?string
    {
        return $this->length;
    }
    /**
    * Package length. 
    Valid values: 0 to 108 IN and 0 to 270 CM
    *
    * @param string|null $length
    *
    * @return self
    */
    public function setLength(?string $length) : self
    {
        $this->initialized['length'] = true;
        $this->length = $length;
        return $this;
    }
    /**
     * Package width.
     *
     * @return string|null
     */
    public function getWidth() : ?string
    {
        return $this->width;
    }
    /**
     * Package width.
     *
     * @param string|null $width
     *
     * @return self
     */
    public function setWidth(?string $width) : self
    {
        $this->initialized['width'] = true;
        $this->width = $width;
        return $this;
    }
    /**
     * Package height.
     *
     * @return string|null
     */
    public function getHeight() : ?string
    {
        return $this->height;
    }
    /**
     * Package height.
     *
     * @param string|null $height
     *
     * @return self
     */
    public function setHeight(?string $height) : self
    {
        $this->initialized['height'] = true;
        $this->height = $height;
        return $this;
    }
}