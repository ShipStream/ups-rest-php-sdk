<?php

namespace ShipStream\Ups\Api\Model;

class AcceptanceAuditPreCheckRequestRequest extends \ArrayObject
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
    * Enables the user to specify optional processing. 
    
    Currently, there is no optional process in Dangerous Goods Utility WS.
    *
    * @var string
    */
    protected $requestOption;
    /**
     * Not Used.
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
    * Enables the user to specify optional processing. 
    
    Currently, there is no optional process in Dangerous Goods Utility WS.
    *
    * @return string
    */
    public function getRequestOption() : string
    {
        return $this->requestOption;
    }
    /**
    * Enables the user to specify optional processing. 
    
    Currently, there is no optional process in Dangerous Goods Utility WS.
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