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
     * Container for the format of image.
     *
     * @var LRCODTurnInPageImageImageFormat
     */
    protected $imageFormat;
    /**
     * Base64 Encoded COD Turnin Page image.
     *
     * @var string
     */
    protected $graphicImage;
    /**
     * Container for the format of image.
     *
     * @return LRCODTurnInPageImageImageFormat
     */
    public function getImageFormat() : LRCODTurnInPageImageImageFormat
    {
        return $this->imageFormat;
    }
    /**
     * Container for the format of image.
     *
     * @param LRCODTurnInPageImageImageFormat $imageFormat
     *
     * @return self
     */
    public function setImageFormat(LRCODTurnInPageImageImageFormat $imageFormat) : self
    {
        $this->initialized['imageFormat'] = true;
        $this->imageFormat = $imageFormat;
        return $this;
    }
    /**
     * Base64 Encoded COD Turnin Page image.
     *
     * @return string
     */
    public function getGraphicImage() : string
    {
        return $this->graphicImage;
    }
    /**
     * Base64 Encoded COD Turnin Page image.
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