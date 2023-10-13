<?php

namespace ShipStream\Ups\Api\Model;

class FormImage extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Container for the High Value Report image format information for Import Control Shipments.
     *
     * @var ImageImageFormat
     */
    protected $imageFormat;
    /**
     * Base 64 Encoded PDF Image.
     *
     * @var string
     */
    protected $graphicImage;
    /**
     * Container for the High Value Report image format information for Import Control Shipments.
     *
     * @return ImageImageFormat
     */
    public function getImageFormat() : ImageImageFormat
    {
        return $this->imageFormat;
    }
    /**
     * Container for the High Value Report image format information for Import Control Shipments.
     *
     * @param ImageImageFormat $imageFormat
     *
     * @return self
     */
    public function setImageFormat(ImageImageFormat $imageFormat) : self
    {
        $this->initialized['imageFormat'] = true;
        $this->imageFormat = $imageFormat;
        return $this;
    }
    /**
     * Base 64 Encoded PDF Image.
     *
     * @return string
     */
    public function getGraphicImage() : string
    {
        return $this->graphicImage;
    }
    /**
     * Base 64 Encoded PDF Image.
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
}