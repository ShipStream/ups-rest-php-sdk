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
     * Container for a Image Format.  Applicable only for ShipmentResponse and ShipAcceptResponse.
     *
     * @var ShippingReceiptImageFormat|null
     */
    protected $imageFormat;
    /**
    * Base 64 encoded receipt in HTML format. 
     Applicable only for ShipmentResponse and ShipAcceptResponse.
    
    The receipt image is only returned for the first 5 packages.
    *
    * @var string|null
    */
    protected $graphicImage;
    /**
     * Container for a Image Format.  Applicable only for ShipmentResponse and ShipAcceptResponse.
     *
     * @return ShippingReceiptImageFormat|null
     */
    public function getImageFormat() : ?ShippingReceiptImageFormat
    {
        return $this->imageFormat;
    }
    /**
     * Container for a Image Format.  Applicable only for ShipmentResponse and ShipAcceptResponse.
     *
     * @param ShippingReceiptImageFormat|null $imageFormat
     *
     * @return self
     */
    public function setImageFormat(?ShippingReceiptImageFormat $imageFormat) : self
    {
        $this->initialized['imageFormat'] = true;
        $this->imageFormat = $imageFormat;
        return $this;
    }
    /**
    * Base 64 encoded receipt in HTML format. 
     Applicable only for ShipmentResponse and ShipAcceptResponse.
    
    The receipt image is only returned for the first 5 packages.
    *
    * @return string|null
    */
    public function getGraphicImage() : ?string
    {
        return $this->graphicImage;
    }
    /**
    * Base 64 encoded receipt in HTML format. 
     Applicable only for ShipmentResponse and ShipAcceptResponse.
    
    The receipt image is only returned for the first 5 packages.
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