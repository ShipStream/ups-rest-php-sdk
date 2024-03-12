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
     * @var ImageType
     */
    protected $type;
    /**
     * Base 64 encoded graphic image.
     *
     * @var string
     */
    protected $graphicImage;
    /**
     * ImageFormat Container.
     *
     * @var ImageFormat
     */
    protected $format;
    /**
     * Image Type Container.
     *
     * @return ImageType
     */
    public function getType() : ImageType
    {
        return $this->type;
    }
    /**
     * Image Type Container.
     *
     * @param ImageType $type
     *
     * @return self
     */
    public function setType(ImageType $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Base 64 encoded graphic image.
     *
     * @return string
     */
    public function getGraphicImage() : string
    {
        return $this->graphicImage;
    }
    /**
     * Base 64 encoded graphic image.
     *
     * @param string $graphicImage
     *
     * @return self
     */
    public function setGraphicImage(string $graphicImage) : self
    {
        $this->initialized['graphicImage'] = true;
        $this->graphicImage = $graphicImage;
        return $this;
    }
    /**
     * ImageFormat Container.
     *
     * @return ImageFormat
     */
    public function getFormat() : ImageFormat
    {
        return $this->format;
    }
    /**
     * ImageFormat Container.
     *
     * @param ImageFormat $format
     *
     * @return self
     */
    public function setFormat(ImageFormat $format) : self
    {
        $this->initialized['format'] = true;
        $this->format = $format;
        return $this;
    }
}