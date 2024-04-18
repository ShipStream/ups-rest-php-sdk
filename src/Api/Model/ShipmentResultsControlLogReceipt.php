<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentResultsControlLogReceipt extends \ArrayObject
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
     * Container for the High Value report format required if parent exist.
     *
     * @var ControlLogReceiptImageFormat
     */
    protected $imageFormat;
    /**
     * Base 64 encoded html, EPL2, ZPL or SPL image.
     *
     * @var string
     */
    protected $graphicImage;
    /**
     * Container for the High Value report format required if parent exist.
     *
     * @return ControlLogReceiptImageFormat
     */
    public function getImageFormat() : ControlLogReceiptImageFormat
    {
        return $this->imageFormat;
    }
    /**
     * Container for the High Value report format required if parent exist.
     *
     * @param ControlLogReceiptImageFormat $imageFormat
     *
     * @return self
     */
    public function setImageFormat(ControlLogReceiptImageFormat $imageFormat) : self
    {
        $this->initialized['imageFormat'] = true;
        $this->imageFormat = $imageFormat;
        return $this;
    }
    /**
     * Base 64 encoded html, EPL2, ZPL or SPL image.
     *
     * @return string
     */
    public function getGraphicImage() : string
    {
        return $this->graphicImage;
    }
    /**
     * Base 64 encoded html, EPL2, ZPL or SPL image.
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