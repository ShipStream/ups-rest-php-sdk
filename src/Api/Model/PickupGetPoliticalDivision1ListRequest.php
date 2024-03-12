<?php

namespace ShipStream\Ups\Api\Model;

class PickupGetPoliticalDivision1ListRequest extends \ArrayObject
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
     * Common element for all services
     *
     * @var PickupGetPoliticalDivision1ListRequestRequest
     */
    protected $request;
    /**
     * Specifies the country for which the list of Political Division 1 will be returned if available.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Common element for all services
     *
     * @return PickupGetPoliticalDivision1ListRequestRequest
     */
    public function getRequest() : PickupGetPoliticalDivision1ListRequestRequest
    {
        return $this->request;
    }
    /**
     * Common element for all services
     *
     * @param PickupGetPoliticalDivision1ListRequestRequest $request
     *
     * @return self
     */
    public function setRequest(PickupGetPoliticalDivision1ListRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
     * Specifies the country for which the list of Political Division 1 will be returned if available.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * Specifies the country for which the list of Political Division 1 will be returned if available.
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode) : self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
}