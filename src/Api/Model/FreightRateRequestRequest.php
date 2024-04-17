<?php

namespace ShipStream\Ups\Api\Model;

class FreightRateRequestRequest extends \ArrayObject
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
     * Valid Value: 1 = Ground
     *
     * @var string
     */
    protected $requestOption;
    /**
    * When UPS introduces new elements in the response that are not associated with new request elements, Subversion is used. This ensures backward compatibility.
    
    To get such elements you need to have the right Subversion. The value of the subversion is explained in the Response element Description.
    
    Example: Itemized Charges are returned only when the Subversion element is present and greater than or equal to '1601'. 
    
    Format: YYMM = Year and month of the release.
    Example: 1601 = 2016 January
    Supported values: 1601, 1607, 1701, 1707
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
     * Valid Value: 1 = Ground
     *
     * @return string
     */
    public function getRequestOption() : string
    {
        return $this->requestOption;
    }
    /**
     * Valid Value: 1 = Ground
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
    * When UPS introduces new elements in the response that are not associated with new request elements, Subversion is used. This ensures backward compatibility.
    
    To get such elements you need to have the right Subversion. The value of the subversion is explained in the Response element Description.
    
    Example: Itemized Charges are returned only when the Subversion element is present and greater than or equal to '1601'. 
    
    Format: YYMM = Year and month of the release.
    Example: 1601 = 2016 January
    Supported values: 1601, 1607, 1701, 1707
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
    
    Example: Itemized Charges are returned only when the Subversion element is present and greater than or equal to '1601'. 
    
    Format: YYMM = Year and month of the release.
    Example: 1601 = 2016 January
    Supported values: 1601, 1607, 1701, 1707
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