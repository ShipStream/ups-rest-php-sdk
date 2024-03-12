<?php

namespace ShipStream\Ups\Api\Model;

class LabelRecoveryRequestRequest extends \ArrayObject
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
    * When UPS introduces new elements in the response that are not associated with new request elements, Subversion is used. This ensures backward compatibility.
    
    To get such elements you need to have the right Subversion. The value of the subversion is explained in the Response element Description.
    
    Format: YYMM = Year and month of the release.
    Example: 1701 = 2017 January  Supported values: 1701, 1707, 1903
    *
    * @var string
    */
    protected $subVersion;
    /**
     * Request option is no longer used.
     *
     * @var string
     */
    protected $requestOption;
    /**
     * Container that identifies transactions between client and server.
     *
     * @var LRRequestTransactionReference
     */
    protected $transactionReference;
    /**
    * When UPS introduces new elements in the response that are not associated with new request elements, Subversion is used. This ensures backward compatibility.
    
    To get such elements you need to have the right Subversion. The value of the subversion is explained in the Response element Description.
    
    Format: YYMM = Year and month of the release.
    Example: 1701 = 2017 January  Supported values: 1701, 1707, 1903
    *
    * @return string
    */
    public function getSubVersion() : string
    {
        return $this->subVersion;
    }
    /**
    * When UPS introduces new elements in the response that are not associated with new request elements, Subversion is used. This ensures backward compatibility.
    
    To get such elements you need to have the right Subversion. The value of the subversion is explained in the Response element Description.
    
    Format: YYMM = Year and month of the release.
    Example: 1701 = 2017 January  Supported values: 1701, 1707, 1903
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
     * Request option is no longer used.
     *
     * @return string
     */
    public function getRequestOption() : string
    {
        return $this->requestOption;
    }
    /**
     * Request option is no longer used.
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
     * Container that identifies transactions between client and server.
     *
     * @return LRRequestTransactionReference
     */
    public function getTransactionReference() : LRRequestTransactionReference
    {
        return $this->transactionReference;
    }
    /**
     * Container that identifies transactions between client and server.
     *
     * @param LRRequestTransactionReference $transactionReference
     *
     * @return self
     */
    public function setTransactionReference(LRRequestTransactionReference $transactionReference) : self
    {
        $this->initialized['transactionReference'] = true;
        $this->transactionReference = $transactionReference;
        return $this;
    }
}