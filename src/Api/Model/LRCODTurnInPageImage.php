<?php

namespace ShipStream\Ups\Api\Model;

class LRCODTurnInPageImage extends \ArrayObject
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
     * Container for the High Value Report image format information for Import Control Shipments.
     *
     * @var ImageImageFormat|null
     */
    protected $imageFormat;
    /**
     * Base 64 encoded High Value Report image.
     *
     * @var string|null
     */
    protected $graphicImage;
    /**
     * Container for the High Value Report image format information for Import Control Shipments.
     *
     * @return ImageImageFormat|null
     */
    public function getImageFormat() : ?ImageImageFormat
    {
        return $this->imageFormat;
    }
    /**
     * Container for the High Value Report image format information for Import Control Shipments.
     *
     * @param ImageImageFormat|null $imageFormat
     *
     * @return self
     */
    public function setImageFormat(?ImageImageFormat $imageFormat) : self
    {
        $this->initialized['imageFormat'] = true;
        $this->imageFormat = $imageFormat;
        return $this;
    }
    /**
     * Base 64 encoded High Value Report image.
     *
     * @return string|null
     */
    public function getGraphicImage() : ?string
    {
        return $this->graphicImage;
    }
    /**
     * Base 64 encoded High Value Report image.
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
}