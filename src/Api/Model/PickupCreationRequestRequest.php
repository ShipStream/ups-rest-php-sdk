<?php

namespace ShipStream\Ups\Api\Model;

class PickupCreationRequestRequest extends \ArrayObject
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
    
    To get such elements you need to have the right Subversion. The value of the subversion is explained in the Response element Description. Supported values: 1607, 1707,2007
    
    Example: Itemized Charges are returned only when the Subversion element is present and greater than or equal to '1601'. 
    
    Format: YYMM = Year and month of the release.
    Example: 1601 = 2016 January
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
    * When UPS introduces new elements in the response that are not associated with new request elements, Subversion is used. This ensures backward compatibility.
    
    To get such elements you need to have the right Subversion. The value of the subversion is explained in the Response element Description. Supported values: 1607, 1707,2007
    
    Example: Itemized Charges are returned only when the Subversion element is present and greater than or equal to '1601'. 
    
    Format: YYMM = Year and month of the release.
    Example: 1601 = 2016 January
    *
    * @return string
    */
    public function getSubVersion() : string
    {
        return $this->subVersion;
    }
    /**
    * When UPS introduces new elements in the response that are not associated with new request elements, Subversion is used. This ensures backward compatibility.
    
    To get such elements you need to have the right Subversion. The value of the subversion is explained in the Response element Description. Supported values: 1607, 1707,2007
    
    Example: Itemized Charges are returned only when the Subversion element is present and greater than or equal to '1601'. 
    
    Format: YYMM = Year and month of the release.
    Example: 1601 = 2016 January
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