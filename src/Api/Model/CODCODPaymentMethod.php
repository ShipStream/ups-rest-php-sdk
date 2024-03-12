<?php

namespace ShipStream\Ups\Api\Model;

class CODCODPaymentMethod extends \ArrayObject
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
    * The code associated with the COD payment method for the shipment service options.
    Valid values:
    M - Company Check
    R - Certified Check
    *
    * @var string
    */
    protected $code;
    /**
     * A text description of the code for the COD payment method associated with the shipment service options.
     *
     * @var string
     */
    protected $description;
    /**
    * The code associated with the COD payment method for the shipment service options.
    Valid values:
    M - Company Check
    R - Certified Check
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * The code associated with the COD payment method for the shipment service options.
    Valid values:
    M - Company Check
    R - Certified Check
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
     * A text description of the code for the COD payment method associated with the shipment service options.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * A text description of the code for the COD payment method associated with the shipment service options.
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