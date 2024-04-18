<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentServiceOptionsDeliveryConfirmation extends \ArrayObject
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
    * Type of delivery confirmation.  Valid values: 
    1 - Delivery Confirmation Signature Required
    2 - Delivery Confirmation Adult Signature Required. Valid for forward shipments only.
    *
    * @var string
    */
    protected $dCISType;
    /**
     * DCIS Number.
     *
     * @var string
     */
    protected $dCISNumber;
    /**
    * Type of delivery confirmation.  Valid values: 
    1 - Delivery Confirmation Signature Required
    2 - Delivery Confirmation Adult Signature Required. Valid for forward shipments only.
    *
    * @return string
    */
    public function getDCISType() : string
    {
        return $this->dCISType;
    }
    /**
    * Type of delivery confirmation.  Valid values: 
    1 - Delivery Confirmation Signature Required
    2 - Delivery Confirmation Adult Signature Required. Valid for forward shipments only.
    *
    * @param string $dCISType
    *
    * @return self
    */
    public function setDCISType(string $dCISType) : self
    {
        $this->initialized['dCISType'] = true;
        $this->dCISType = $dCISType;
        return $this;
    }
    /**
     * DCIS Number.
     *
     * @return string
     */
    public function getDCISNumber() : string
    {
        return $this->dCISNumber;
    }
    /**
     * DCIS Number.
     *
     * @param string $dCISNumber
     *
     * @return self
     */
    public function setDCISNumber(string $dCISNumber) : self
    {
        $this->initialized['dCISNumber'] = true;
        $this->dCISNumber = $dCISNumber;
        return $this;
    }
}