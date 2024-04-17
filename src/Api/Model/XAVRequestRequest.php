<?php

namespace ShipStream\Ups\Api\Model;

class XAVRequestRequest extends \ArrayObject
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
     * Not Used.
     *
     * @var string
     */
    protected $subVersion;
    /**
    * Identifies the optional processing to be performed. If not present or invalid value then an error will be sent back.
    
    Valid values:
    
    - 1 - Address Validation
    - 2 - Address Classification
    - 3 - Address Validation and Address Classification.
    
    For a list of valid values, refer to Address Validation API Supported Countries or Territories in the Appendix.
    
    *
    * @var string
    */
    protected $requestOption;
    /**
     * TransactionReference identifies transactions between client and server.
     *
     * @var RequestTransactionReference
     */
    protected $transactionReference;
    /**
     * Not Used.
     *
     * @return string
     */
    public function getSubVersion() : string
    {
        return $this->subVersion;
    }
    /**
     * Not Used.
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
    * Identifies the optional processing to be performed. If not present or invalid value then an error will be sent back.
    
    Valid values:
    
    - 1 - Address Validation
    - 2 - Address Classification
    - 3 - Address Validation and Address Classification.
    
    For a list of valid values, refer to Address Validation API Supported Countries or Territories in the Appendix.
    
    *
    * @return string
    */
    public function getRequestOption() : string
    {
        return $this->requestOption;
    }
    /**
    * Identifies the optional processing to be performed. If not present or invalid value then an error will be sent back.
    
    Valid values:
    
    - 1 - Address Validation
    - 2 - Address Classification
    - 3 - Address Validation and Address Classification.
    
    For a list of valid values, refer to Address Validation API Supported Countries or Territories in the Appendix.
    
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