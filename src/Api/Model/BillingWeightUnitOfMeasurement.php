<?php

namespace ShipStream\Ups\Api\Model;

class BillingWeightUnitOfMeasurement extends \ArrayObject
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
     * Code of the billing weight measurement units. Values are: KGS or LBS.
     *
     * @var string
     */
    protected $code;
    /**
     * Description of the billing weight measurement units.
     *
     * @var string
     */
    protected $description;
    /**
     * Code of the billing weight measurement units. Values are: KGS or LBS.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Code of the billing weight measurement units. Values are: KGS or LBS.
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
     * Description of the billing weight measurement units.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the billing weight measurement units.
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