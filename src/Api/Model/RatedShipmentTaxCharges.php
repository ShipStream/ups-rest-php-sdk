<?php

namespace ShipStream\Ups\Api\Model;

class RatedShipmentTaxCharges extends \ArrayObject
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
     * Tax Type code. The code represents the type of Tax applied to a shipment. Please refer to Appendix I for possible Tax Type codes.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Tax Monetary Value represent the Tax amount.  Valid values are from 0 to 99999999999999.99
     *
     * @var string|null
     */
    protected $monetaryValue;
    /**
     * Tax Type code. The code represents the type of Tax applied to a shipment. Please refer to Appendix I for possible Tax Type codes.
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * Tax Type code. The code represents the type of Tax applied to a shipment. Please refer to Appendix I for possible Tax Type codes.
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Tax Monetary Value represent the Tax amount.  Valid values are from 0 to 99999999999999.99
     *
     * @return string|null
     */
    public function getMonetaryValue() : ?string
    {
        return $this->monetaryValue;
    }
    /**
     * Tax Monetary Value represent the Tax amount.  Valid values are from 0 to 99999999999999.99
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