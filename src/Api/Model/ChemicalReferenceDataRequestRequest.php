<?php

namespace ShipStream\Ups\Api\Model;

class ChemicalReferenceDataRequestRequest extends \ArrayObject
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
     * 
     *
     * @var list<string>
     */
    protected $requestOption;
    /**
    * When UPS introduces new elements in the response that are not associated with new request elements, Subversion is used. This ensures backward compatibility.
    
    To get such elements you need to have the right Subversion. The value of the subversion is explained in the Response element Description.
    
    Format: YYMM = Year and month of the release.
    
    Example: 1801 = 2018 January  Supported values: 1801
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
     * 
     *
     * @return list<string>
     */
    public function getRequestOption() : array
    {
        return $this->requestOption;
    }
    /**
     * 
     *
     * @param list<string> $requestOption
     *
     * @return self
     */
    public function setRequestOption(array $requestOption) : self
    {
        $this->initialized['requestOption'] = true;
        $this->requestOption = $requestOption;
        return $this;
    }
    /**
    * When UPS introduces new elements in the response that are not associated with new request elements, Subversion is used. This ensures backward compatibility.
    
    To get such elements you need to have the right Subversion. The value of the subversion is explained in the Response element Description.
    
    Format: YYMM = Year and month of the release.
    
    Example: 1801 = 2018 January  Supported values: 1801
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
    
    Example: 1801 = 2018 January  Supported values: 1801
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