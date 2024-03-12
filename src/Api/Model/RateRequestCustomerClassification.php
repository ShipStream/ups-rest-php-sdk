<?php

namespace ShipStream\Ups\Api\Model;

class RateRequestCustomerClassification extends \ArrayObject
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
     * Customer classification code.  Valid values:00 -  Rates Associated with Shipper Number01 -  Daily Rates04 -  Retail Rates05 - Regional Rates06 - General List Rates53 -  Standard List RatesLength is not validated.If customer classification code is not a valid value please refer to Rate Types Table on page 11.
     *
     * @var string
     */
    protected $code;
    /**
     * Customer classification description of the code above.  Ignored if provided in the Request. Length is not validated.
     *
     * @var string
     */
    protected $description;
    /**
     * Customer classification code.  Valid values:00 -  Rates Associated with Shipper Number01 -  Daily Rates04 -  Retail Rates05 - Regional Rates06 - General List Rates53 -  Standard List RatesLength is not validated.If customer classification code is not a valid value please refer to Rate Types Table on page 11.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Customer classification code.  Valid values:00 -  Rates Associated with Shipper Number01 -  Daily Rates04 -  Retail Rates05 - Regional Rates06 - General List Rates53 -  Standard List RatesLength is not validated.If customer classification code is not a valid value please refer to Rate Types Table on page 11.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Customer classification description of the code above.  Ignored if provided in the Request. Length is not validated.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Customer classification description of the code above.  Ignored if provided in the Request. Length is not validated.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}