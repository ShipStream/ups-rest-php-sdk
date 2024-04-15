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
     * Container for the High Value report format required if parent exist.    Applicable only for ShipmentResponse and ShipAcceptResponse.
     *
     * @var ControlLogReceiptImageFormat|null
     */
    protected $imageFormat;
    /**
    * Base 64 encoded html, EPL2, ZPL or SPL image.
      Applicable only for ShipmentResponse and ShipAcceptResponse.
    *
    * @var string|null
    */
    protected $graphicImage;
    /**
     * Container for the High Value report format required if parent exist.    Applicable only for ShipmentResponse and ShipAcceptResponse.
     *
     * @return ControlLogReceiptImageFormat|null
     */
    public function getImageFormat() : ?ControlLogReceiptImageFormat
    {
        return $this->imageFormat;
    }
    /**
     * Container for the High Value report format required if parent exist.    Applicable only for ShipmentResponse and ShipAcceptResponse.
     *
     * @param ControlLogReceiptImageFormat|null $imageFormat
     *
     * @return self
     */
    public function setImageFormat(?ControlLogReceiptImageFormat $imageFormat) : self
    {
        $this->initialized['imageFormat'] = true;
        $this->imageFormat = $imageFormat;
        return $this;
    }
    /**
    * Base 64 encoded html, EPL2, ZPL or SPL image.
      Applicable only for ShipmentResponse and ShipAcceptResponse.
    *
    * @return string|null
    */
    public function getGraphicImage() : ?string
    {
        return $this->graphicImage;
    }
    /**
    * Base 64 encoded html, EPL2, ZPL or SPL image.
      Applicable only for ShipmentResponse and ShipAcceptResponse.
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