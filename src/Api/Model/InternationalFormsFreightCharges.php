<?php

namespace ShipStream\Ups\Api\Model;

class InternationalFormsFreightCharges extends \ArrayObject
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
     * Cost to transport the shipment.  Applies to Invoice and Partial Invoice forms only. Required for Invoice forms and optional for Partial Invoice. Valid characters are 0-9 and "."  (Decimal point). Limit to 2 digit after the decimal. The maximum length of the field is 15 including "." and can hold up to 2 decimal places.
     *
     * @var string|null
     */
    protected $monetaryValue;
    /**
     * Cost to transport the shipment.  Applies to Invoice and Partial Invoice forms only. Required for Invoice forms and optional for Partial Invoice. Valid characters are 0-9 and "."  (Decimal point). Limit to 2 digit after the decimal. The maximum length of the field is 15 including "." and can hold up to 2 decimal places.
     *
     * @return string|null
     */
    public function getMonetaryValue() : ?string
    {
        return $this->monetaryValue;
    }
    /**
     * Cost to transport the shipment.  Applies to Invoice and Partial Invoice forms only. Required for Invoice forms and optional for Partial Invoice. Valid characters are 0-9 and "."  (Decimal point). Limit to 2 digit after the decimal. The maximum length of the field is 15 including "." and can hold up to 2 decimal places.
     *
     * @param string|null $monetaryValue
     *
     * @return self
     */
    public function setMonetaryValue(?string $monetaryValue) : self
    {
        $this->initialized['monetaryValue'] = true;
        $this->monetaryValue = $monetaryValue;
        return $this;
    }
}