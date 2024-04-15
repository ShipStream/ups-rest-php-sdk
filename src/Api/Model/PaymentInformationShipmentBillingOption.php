<?php

namespace ShipStream\Ups\Api\Model;

class PaymentInformationShipmentBillingOption extends \ArrayObject
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
    * Billing Option Code.
    Valid values:
    10 - Prepaid
    30 - Bill to Third Party
    40 - Freight Collect
    *
    * @var string|null
    */
    protected $code;
    /**
     * Billing Option Description.
     *
     * @var string|null
     */
    protected $description;
    /**
    * Billing Option Code.
    Valid values:
    10 - Prepaid
    30 - Bill to Third Party
    40 - Freight Collect
    *
    * @return string|null
    */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
    * Billing Option Code.
    Valid values:
    10 - Prepaid
    30 - Bill to Third Party
    40 - Freight Collect
    *
    * @param string|null $code
    *
    * @return self
    */
    public function setCode(?string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Billing Option Description.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Billing Option Description.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}