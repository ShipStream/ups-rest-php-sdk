<?php

namespace ShipStream\Ups\Api\Model;

class DocumentsImage extends \ArrayObject
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
     * Image Type Container.
     *
     * @var ImageType|null
     */
    protected $type;
    /**
     * Base 64 encoded graphic image.
     *
     * @var string|null
     */
    protected $graphicImage;
    /**
     * ImageFormat Container.
     *
     * @var ImageFormat|null
     */
    protected $format;
    /**
     * Image Type Container.
     *
     * @return ImageType|null
     */
    public function getType() : ?ImageType
    {
        return $this->type;
    }
    /**
     * Image Type Container.
     *
     * @param ImageType|null $type
     *
     * @return self
     */
    public function setType(?ImageType $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Base 64 encoded graphic image.
     *
     * @return string|null
     */
    public function getGraphicImage() : ?string
    {
        return $this->graphicImage;
    }
    /**
     * Base 64 encoded graphic image.
     *
     * @param string|null $graphicImage
     *
     * @return self
     */
    public function setGraphicImage(?string $graphicImage) : self
    {
        $this->initialized['graphicImage'] = true;
        $this->graphicImage = $graphicImage;
        return $this;
    }
    /**
     * ImageFormat Container.
     *
     * @return ImageFormat|null
     */
    public function getFormat() : ?ImageFormat
    {
        return $this->format;
    }
    /**
     * ImageFormat Container.
     *
     * @param ImageFormat|null $format
     *
     * @return self
     */
    public function setFormat(?ImageFormat $format) : self
    {
        $this->initialized['format'] = true;
        $this->format = $format;
        return $this;
    }
}