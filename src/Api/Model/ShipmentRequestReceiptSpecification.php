<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentRequestReceiptSpecification extends \ArrayObject
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
     * ImageFormat Container.
     *
     * @var ReceiptSpecificationImageFormat
     */
    protected $imageFormat;
    /**
     * ImageFormat Container.
     *
     * @return ReceiptSpecificationImageFormat
     */
    public function getImageFormat() : ReceiptSpecificationImageFormat
    {
        return $this->imageFormat;
    }
    /**
     * ImageFormat Container.
     *
     * @param ReceiptSpecificationImageFormat $imageFormat
     *
     * @return self
     */
    public function setImageFormat(ReceiptSpecificationImageFormat $imageFormat) : self
    {
        $this->initialized['imageFormat'] = true;
        $this->imageFormat = $imageFormat;
        return $this;
    }
}