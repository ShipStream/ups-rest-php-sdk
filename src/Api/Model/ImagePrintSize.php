<?php

namespace ShipStream\Ups\Api\Model;

class ImagePrintSize extends \ArrayObject
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
     * The lengths of the image print size.
     *
     * @var string|null
     */
    protected $length;
    /**
     * The widths of the image print size.
     *
     * @var string|null
     */
    protected $width;
    /**
     * The lengths of the image print size.
     *
     * @return string|null
     */
    public function getLength() : ?string
    {
        return $this->length;
    }
    /**
     * The lengths of the image print size.
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
     * The widths of the image print size.
     *
     * @return string|null
     */
    public function getWidth() : ?string
    {
        return $this->width;
    }
    /**
     * The widths of the image print size.
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
}