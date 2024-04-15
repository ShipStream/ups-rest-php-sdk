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
     * @var ReceiptSpecificationImageFormat|null
     */
    protected $imageFormat;
    /**
     * ImageFormat Container.
     *
     * @return ReceiptSpecificationImageFormat|null
     */
    public function getImageFormat() : ?ReceiptSpecificationImageFormat
    {
        return $this->imageFormat;
    }
    /**
     * ImageFormat Container.
     *
     * @param ReceiptSpecificationImageFormat|null $imageFormat
     *
     * @return self
     */
    public function setImageFormat(?ReceiptSpecificationImageFormat $imageFormat) : self
    {
        $this->initialized['imageFormat'] = true;
        $this->imageFormat = $imageFormat;
        return $this;
    }
}