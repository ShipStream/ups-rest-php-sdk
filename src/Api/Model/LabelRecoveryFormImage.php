<?php

namespace ShipStream\Ups\Api\Model;

class LabelRecoveryFormImage extends \ArrayObject
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
     * Container tag for the International forms image format information.
     *
     * @var LabelRecoveryImageImageFormat
     */
    protected $imageFormat;
    /**
     * Base 64 encoded International Forms image.
     *
     * @var string
     */
    protected $graphicImage;
    /**
     * Container tag for the International forms image format information.
     *
     * @return LabelRecoveryImageImageFormat
     */
    public function getImageFormat() : LabelRecoveryImageImageFormat
    {
        return $this->imageFormat;
    }
    /**
     * Container tag for the International forms image format information.
     *
     * @param LabelRecoveryImageImageFormat $imageFormat
     *
     * @return self
     */
    public function setImageFormat(LabelRecoveryImageImageFormat $imageFormat) : self
    {
        $this->initialized['imageFormat'] = true;
        $this->imageFormat = $imageFormat;
        return $this;
    }
    /**
     * Base 64 encoded International Forms image.
     *
     * @return string
     */
    public function getGraphicImage() : string
    {
        return $this->graphicImage;
    }
    /**
     * Base 64 encoded International Forms image.
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