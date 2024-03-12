<?php

namespace ShipStream\Ups\Api\Model;

class ReferenceValuesReferenceNumber extends \ArrayObject
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
     * Required if TrackingNumber or Mail Innovations Tracking Number is not populated. Customer supplied reference number. Supports up to 2 customer supplied combinations of Reference code- value combinations.
     *
     * @var string
     */
    protected $value;
    /**
     * Required if TrackingNumber or Mail Innovations Tracking Number is not populated. Customer supplied reference number. Supports up to 2 customer supplied combinations of Reference code- value combinations.
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * Required if TrackingNumber or Mail Innovations Tracking Number is not populated. Customer supplied reference number. Supports up to 2 customer supplied combinations of Reference code- value combinations.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}