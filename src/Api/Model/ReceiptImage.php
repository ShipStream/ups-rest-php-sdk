<?php

namespace ShipStream\Ups\Api\Model;

class ReceiptImage extends \ArrayObject
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
     * Container for the format of the receipt.
     *
     * @var ReceiptImageImageFormat
     */
    protected $imageFormat;
    /**
     * Base 64 encoded graphic image
     *
     * @var string
     */
    protected $graphicImage;
    /**
     * Container for the format of the receipt.
     *
     * @return ReceiptImageImageFormat
     */
    public function getImageFormat() : ReceiptImageImageFormat
    {
        return $this->imageFormat;
    }
    /**
     * Container for the format of the receipt.
     *
     * @param ReceiptImageImageFormat $imageFormat
     *
     * @return self
     */
    public function setImageFormat(ReceiptImageImageFormat $imageFormat) : self
    {
        $this->initialized['imageFormat'] = true;
        $this->imageFormat = $imageFormat;
        return $this;
    }
    /**
     * Base 64 encoded graphic image
     *
     * @return string
     */
    public function getGraphicImage() : string
    {
        return $this->graphicImage;
    }
    /**
     * Base 64 encoded graphic image
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