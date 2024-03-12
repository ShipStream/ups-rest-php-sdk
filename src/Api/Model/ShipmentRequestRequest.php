<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentRequestRequest extends \ArrayObject
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
    * Optional Processing.  
    
    Note: Full address validation is not performed. Therefore, it is the responsibility of the Shipping Tool User to ensure the address entered is correct to avoid an address correction fee.  Valid values:
    nonvalidate = No street level address validation would be performed, but Postal Code/State combination validation would still be performed.
    
    validate = No street level address validation would be performed, but City/State/Postal Code/ combination validation would still be performed.
    *
    * @var string
    */
    protected $requestOption;
    /**
    * When UPS introduces new elements in the response that are not associated with new request elements, Subversion is used. This ensures backward compatibility.
    
    To get such elements you need to have the right Subversion. The value of the subversion is explained in the Response element Description.
    
    Example: Itemized Charges are returned only when the Subversion element is present and greater than or equal to 1601. 
    
    Format: YYMM = Year and month of the release.
    
    Example: 1607 = 2016 July  Supported values: 1601, 1607, 1701, 1707, 1801, 1807, 2108, 2205
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
    * Optional Processing.  
    
    Note: Full address validation is not performed. Therefore, it is the responsibility of the Shipping Tool User to ensure the address entered is correct to avoid an address correction fee.  Valid values:
    nonvalidate = No street level address validation would be performed, but Postal Code/State combination validation would still be performed.
    
    validate = No street level address validation would be performed, but City/State/Postal Code/ combination validation would still be performed.
    *
    * @return string
    */
    public function getRequestOption() : string
    {
        return $this->requestOption;
    }
    /**
    * Optional Processing.  
    
    Note: Full address validation is not performed. Therefore, it is the responsibility of the Shipping Tool User to ensure the address entered is correct to avoid an address correction fee.  Valid values:
    nonvalidate = No street level address validation would be performed, but Postal Code/State combination validation would still be performed.
    
    validate = No street level address validation would be performed, but City/State/Postal Code/ combination validation would still be performed.
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
    
    Example: Itemized Charges are returned only when the Subversion element is present and greater than or equal to 1601. 
    
    Format: YYMM = Year and month of the release.
    
    Example: 1607 = 2016 July  Supported values: 1601, 1607, 1701, 1707, 1801, 1807, 2108, 2205
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
    
    Example: Itemized Charges are returned only when the Subversion element is present and greater than or equal to 1601. 
    
    Format: YYMM = Year and month of the release.
    
    Example: 1607 = 2016 July  Supported values: 1601, 1607, 1701, 1707, 1801, 1807, 2108, 2205
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