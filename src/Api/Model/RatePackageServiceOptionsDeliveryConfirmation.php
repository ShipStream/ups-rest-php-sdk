<?php

namespace ShipStream\Ups\Api\Model;

class RatePackageServiceOptionsDeliveryConfirmation extends \ArrayObject
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
     * Type of delivery confirmation. Valid values: 1 - Unsupported 2 - Delivery Confirmation Signature Required 3 - Delivery Confirmation Adult Signature Required
     *
     * @var string|null
     */
    protected $dCISType;
    /**
     * Type of delivery confirmation. Valid values: 1 - Unsupported 2 - Delivery Confirmation Signature Required 3 - Delivery Confirmation Adult Signature Required
     *
     * @return string|null
     */
    public function getDCISType() : ?string
    {
        return $this->dCISType;
    }
    /**
     * Type of delivery confirmation. Valid values: 1 - Unsupported 2 - Delivery Confirmation Signature Required 3 - Delivery Confirmation Adult Signature Required
     *
     * @param string|null $dCISType
     *
     * @return self
     */
    public function setDCISType(?string $dCISType) : self
    {
        $this->initialized['dCISType'] = true;
        $this->dCISType = $dCISType;
        return $this;
    }
}