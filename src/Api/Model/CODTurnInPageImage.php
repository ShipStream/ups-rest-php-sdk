<?php

namespace ShipStream\Ups\Api\Model;

class CODTurnInPageImage extends \ArrayObject
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
     * The container for format of COD Turn In Page.
     *
     * @var CODTurnInPageImageImageFormat
     */
    protected $imageFormat;
    /**
     * Base 64 encoded html browser image rendering software
     *
     * @var string
     */
    protected $graphicImage;
    /**
     * The container for format of COD Turn In Page.
     *
     * @return CODTurnInPageImageImageFormat
     */
    public function getImageFormat() : CODTurnInPageImageImageFormat
    {
        return $this->imageFormat;
    }
    /**
     * The container for format of COD Turn In Page.
     *
     * @param CODTurnInPageImageImageFormat $imageFormat
     *
     * @return self
     */
    public function setImageFormat(CODTurnInPageImageImageFormat $imageFormat) : self
    {
        $this->initialized['imageFormat'] = true;
        $this->imageFormat = $imageFormat;
        return $this;
    }
    /**
     * Base 64 encoded html browser image rendering software
     *
     * @return string
     */
    public function getGraphicImage() : string
    {
        return $this->graphicImage;
    }
    /**
     * Base 64 encoded html browser image rendering software
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