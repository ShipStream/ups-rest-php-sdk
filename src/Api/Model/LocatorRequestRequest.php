<?php

namespace ShipStream\Ups\Api\Model;

class LocatorRequestRequest extends \ArrayObject
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
     * TransactionReference identifies transactions between client and server.
     *
     * @var RequestTransactionReference
     */
    protected $transactionReference;
    /**
    * Indicates the action to be taken by the XML service. 
    The only valid value is 'Locator'.
    *
    * @var string
    */
    protected $requestAction;
    /**
    * Indicates the type of request.
    Valid values:
    1-Locations (Drop Locations and Will call locations)
    8-All available Additional Services
    16-All available Program Types
    24-All available Additional Services and Program types
    32-All available Retail Locations
    40-All available Retail Locations and Additional Services 
    48-All available Retail Locations and Program Types 
    56-All available Retail Locations, Additional Services and Program Types 
    64-Search for UPS Access Point Locations.
    *
    * @var string
    */
    protected $requestOption;
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
    /**
    * Indicates the action to be taken by the XML service. 
    The only valid value is 'Locator'.
    *
    * @return string
    */
    public function getRequestAction() : string
    {
        return $this->requestAction;
    }
    /**
    * Indicates the action to be taken by the XML service. 
    The only valid value is 'Locator'.
    *
    * @param string $requestAction
    *
    * @return self
    */
    public function setRequestAction(string $requestAction) : self
    {
        $this->initialized['requestAction'] = true;
        $this->requestAction = $requestAction;
        return $this;
    }
    /**
    * Indicates the type of request.
    Valid values:
    1-Locations (Drop Locations and Will call locations)
    8-All available Additional Services
    16-All available Program Types
    24-All available Additional Services and Program types
    32-All available Retail Locations
    40-All available Retail Locations and Additional Services 
    48-All available Retail Locations and Program Types 
    56-All available Retail Locations, Additional Services and Program Types 
    64-Search for UPS Access Point Locations.
    *
    * @return string
    */
    public function getRequestOption() : string
    {
        return $this->requestOption;
    }
    /**
    * Indicates the type of request.
    Valid values:
    1-Locations (Drop Locations and Will call locations)
    8-All available Additional Services
    16-All available Program Types
    24-All available Additional Services and Program types
    32-All available Retail Locations
    40-All available Retail Locations and Additional Services 
    48-All available Retail Locations and Program Types 
    56-All available Retail Locations, Additional Services and Program Types 
    64-Search for UPS Access Point Locations.
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
}