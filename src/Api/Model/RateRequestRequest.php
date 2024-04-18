<?php

namespace ShipStream\Ups\Api\Model;

class RateRequestRequest extends \ArrayObject
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
    * Used to define the request type. Valid Values:
    - Rate = The server rates (The default Request option is Rate if a Request Option is not provided).
    - Shop = The server validates the shipment, and returns rates for all UPS products from the ShipFrom to the ShipTo addresses.
    - Ratetimeintransit = The server rates with transit time information
    - Shoptimeintransit = The server validates the shipment, and returns rates and transit times for all UPS products from the ShipFrom to the ShipTo addresses.
    
    Rate is the only valid request option for UPS Ground Freight Pricing requests.
    
    *
    * @var string
    */
    protected $requestOption;
    /**
     * Indicates Rate API to display the new release features in Rate API response based on Rate release. See the What's New section for the latest Rate release. Supported values: 1601, 1607, 1701, 1707, 2108, 2205
     *
     * @var string
     */
    protected $subVersion;
    /**
     * TransactionReference identifies transactions between client and server.
     *
     * @var RequestTransactionReference
     */
    protected $transactionReference;
    /**
    * Used to define the request type. Valid Values:
    - Rate = The server rates (The default Request option is Rate if a Request Option is not provided).
    - Shop = The server validates the shipment, and returns rates for all UPS products from the ShipFrom to the ShipTo addresses.
    - Ratetimeintransit = The server rates with transit time information
    - Shoptimeintransit = The server validates the shipment, and returns rates and transit times for all UPS products from the ShipFrom to the ShipTo addresses.
    
    Rate is the only valid request option for UPS Ground Freight Pricing requests.
    
    *
    * @return string
    */
    public function getRequestOption() : string
    {
        return $this->requestOption;
    }
    /**
    * Used to define the request type. Valid Values:
    - Rate = The server rates (The default Request option is Rate if a Request Option is not provided).
    - Shop = The server validates the shipment, and returns rates for all UPS products from the ShipFrom to the ShipTo addresses.
    - Ratetimeintransit = The server rates with transit time information
    - Shoptimeintransit = The server validates the shipment, and returns rates and transit times for all UPS products from the ShipFrom to the ShipTo addresses.
    
    Rate is the only valid request option for UPS Ground Freight Pricing requests.
    
    *
    * @param string $requestOption
    *
    * @return self
    */
    public function setRequestOption(string $requestOption) : self
    {
        $this->initialized['requestOption'] = true;
        $this->requestOption = $requestOption;
        return $this;
    }
    /**
     * Indicates Rate API to display the new release features in Rate API response based on Rate release. See the What's New section for the latest Rate release. Supported values: 1601, 1607, 1701, 1707, 2108, 2205
     *
     * @return string
     */
    public function getSubVersion() : string
    {
        return $this->subVersion;
    }
    /**
     * Indicates Rate API to display the new release features in Rate API response based on Rate release. See the What's New section for the latest Rate release. Supported values: 1601, 1607, 1701, 1707, 2108, 2205
     *
     * @param string $subVersion
     *
     * @return self
     */
    public function setSubVersion(string $subVersion) : self
    {
        $this->initialized['subVersion'] = true;
        $this->subVersion = $subVersion;
        return $this;
    }
    /**
     * TransactionReference identifies transactions between client and server.
     *
     * @return RequestTransactionReference
     */
    public function getTransactionReference() : RequestTransactionReference
    {
        return $this->transactionReference;
    }
    /**
     * TransactionReference identifies transactions between client and server.
     *
     * @param RequestTransactionReference $transactionReference
     *
     * @return self
     */
    public function setTransactionReference(RequestTransactionReference $transactionReference) : self
    {
        $this->initialized['transactionReference'] = true;
        $this->transactionReference = $transactionReference;
        return $this;
    }
}