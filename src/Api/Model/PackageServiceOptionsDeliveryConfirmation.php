<?php

namespace ShipStream\Ups\Api\Model;

class PackageServiceOptionsDeliveryConfirmation extends \ArrayObject
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
    * Type of delivery confirmation. Valid values: 1 - Unsupported
    2 - Delivery Confirmation Signature Required
    3 - Delivery Confirmation Adult Signature Required
    *
    * @var string|null
    */
    protected $dCISType;
    /**
     * Delivery Confirmation Control number associated with the delivery confirmation for the package.  Valid for forward shipments only.
     *
     * @var string|null
     */
    protected $dCISNumber;
    /**
    * Type of delivery confirmation. Valid values: 1 - Unsupported
    2 - Delivery Confirmation Signature Required
    3 - Delivery Confirmation Adult Signature Required
    *
    * @return string|null
    */
    public function getDCISType() : ?string
    {
        return $this->dCISType;
    }
    /**
    * Type of delivery confirmation. Valid values: 1 - Unsupported
    2 - Delivery Confirmation Signature Required
    3 - Delivery Confirmation Adult Signature Required
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
    /**
     * Delivery Confirmation Control number associated with the delivery confirmation for the package.  Valid for forward shipments only.
     *
     * @return string|null
     */
    public function getDCISNumber() : ?string
    {
        return $this->dCISNumber;
    }
    /**
     * Delivery Confirmation Control number associated with the delivery confirmation for the package.  Valid for forward shipments only.
     *
     * @param string|null $dCISNumber
     *
     * @return self
     */
    public function setDCISNumber(?string $dCISNumber) : self
    {
        $this->initialized['dCISNumber'] = true;
        $this->dCISNumber = $dCISNumber;
        return $this;
    }
}