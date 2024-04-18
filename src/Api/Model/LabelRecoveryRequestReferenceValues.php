<?php

namespace ShipStream\Ups\Api\Model;

class LabelRecoveryRequestReferenceValues extends \ArrayObject
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
     * Container for reference number
     *
     * @var ReferenceValuesReferenceNumber
     */
    protected $referenceNumber;
    /**
     * Required if ReferenceNumber/Value is populated. Shipper's six digit account number. Must be six alphanumeric characters. Must be associated with the Internet account used to login.
     *
     * @var string
     */
    protected $shipperNumber;
    /**
     * Container for reference number
     *
     * @return ReferenceValuesReferenceNumber
     */
    public function getReferenceNumber() : ReferenceValuesReferenceNumber
    {
        return $this->referenceNumber;
    }
    /**
     * Container for reference number
     *
     * @param ReferenceValuesReferenceNumber $referenceNumber
     *
     * @return self
     */
    public function setReferenceNumber(ReferenceValuesReferenceNumber $referenceNumber) : self
    {
        $this->initialized['referenceNumber'] = true;
        $this->referenceNumber = $referenceNumber;
        return $this;
    }
    /**
     * Required if ReferenceNumber/Value is populated. Shipper's six digit account number. Must be six alphanumeric characters. Must be associated with the Internet account used to login.
     *
     * @return string
     */
    public function getShipperNumber() : string
    {
        return $this->shipperNumber;
    }
    /**
     * Required if ReferenceNumber/Value is populated. Shipper's six digit account number. Must be six alphanumeric characters. Must be associated with the Internet account used to login.
     *
     * @param string $shipperNumber
     *
     * @return self
     */
    public function setShipperNumber(string $shipperNumber) : self
    {
        $this->initialized['shipperNumber'] = true;
        $this->shipperNumber = $shipperNumber;
        return $this;
    }
}