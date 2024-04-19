<?php

namespace ShipStream\Ups\Api\Model;

class PackageResultsShippingReceipt extends \ArrayObject
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
     * Container for a Image Format.
     *
     * @var ShippingReceiptImageFormat
     */
    protected $imageFormat;
    /**
    * Base 64 encoded receipt in HTML format.
    
    The receipt image is only returned for the first 5 packages.
    *
    * @var string
    */
    protected $graphicImage;
    /**
     * Container for a Image Format.
     *
     * @return ShippingReceiptImageFormat
     */
    public function getImageFormat() : ShippingReceiptImageFormat
    {
        return $this->imageFormat;
    }
    /**
     * Container for a Image Format.
     *
     * @param ShippingReceiptImageFormat $imageFormat
     *
     * @return self
     */
    public function setImageFormat(ShippingReceiptImageFormat $imageFormat) : self
    {
        $this->initialized['imageFormat'] = true;
        $this->imageFormat = $imageFormat;
        return $this;
    }
    /**
    * Base 64 encoded receipt in HTML format.
    
    The receipt image is only returned for the first 5 packages.
    *
    * @return string
    */
    public function getGraphicImage() : string
    {
        return $this->graphicImage;
    }
    /**
    * Base 64 encoded receipt in HTML format.
    
    The receipt image is only returned for the first 5 packages.
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