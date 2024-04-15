<?php

namespace ShipStream\Ups\Api\Model;

class RequestTransactionReference extends \ArrayObject
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
     * The CustomerContext Information which will be echoed during response.
     *
     * @var string|null
     */
    protected $customerContext;
    /**
     * The CustomerContext Information which will be echoed during response.
     *
     * @return string|null
     */
    public function getCustomerContext() : ?string
    {
        return $this->customerContext;
    }
    /**
     * The CustomerContext Information which will be echoed during response.
     *
     * @param string|null $customerContext
     *
     * @return self
     */
    public function setCustomerContext(?string $customerContext) : self
    {
        $this->initialized['customerContext'] = true;
        $this->customerContext = $customerContext;
        return $this;
    }
}