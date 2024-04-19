<?php

namespace ShipStream\Ups\Api\Model;

class HighValueReportImage extends \ArrayObject
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
     * @var HighValueReportImageImageFormat
     */
    protected $imageFormat;
    /**
     * Base 64 encoded High Value Report image.
     *
     * @var string
     */
    protected $graphicImage;
    /**
     * Container for the High Value Report image format information for Import Control Shipments.
     *
     * @return HighValueReportImageImageFormat
     */
    public function getImageFormat() : HighValueReportImageImageFormat
    {
        return $this->imageFormat;
    }
    /**
     * Container for the High Value Report image format information for Import Control Shipments.
     *
     * @param HighValueReportImageImageFormat $imageFormat
     *
     * @return self
     */
    public function setImageFormat(HighValueReportImageImageFormat $imageFormat) : self
    {
        $this->initialized['imageFormat'] = true;
        $this->imageFormat = $imageFormat;
        return $this;
    }
    /**
     * Base 64 encoded High Value Report image.
     *
     * @return string
     */
    public function getGraphicImage() : string
    {
        return $this->graphicImage;
    }
    /**
     * Base 64 encoded High Value Report image.
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