<?php

namespace ShipStream\Ups\Api\Model;

class PushToImageRepositoryRequestRequest extends \ArrayObject
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
     * Enables the user to specify optional processing. Currently, there is no optional process in Paperless Document API.  N/A
     *
     * @var string|null
     */
    protected $requestOption;
    /**
     * Not Used.
     *
     * @var string|null
     */
    protected $subVersion;
    /**
     * TransactionReference identifies transactions between client and server.
     *
     * @var RequestTransactionReference|null
     */
    protected $transactionReference;
    /**
     * Enables the user to specify optional processing. Currently, there is no optional process in Paperless Document API.  N/A
     *
     * @return string|null
     */
    public function getRequestOption() : ?string
    {
        return $this->requestOption;
    }
    /**
     * Enables the user to specify optional processing. Currently, there is no optional process in Paperless Document API.  N/A
     *
     * @param string|null $requestOption
     *
     * @return self
     */
    public function setRequestOption(?string $requestOption) : self
    {
        $this->initialized['requestOption'] = true;
        $this->requestOption = $requestOption;
        return $this;
    }
    /**
     * Not Used.
     *
     * @return string|null
     */
    public function getSubVersion() : ?string
    {
        return $this->subVersion;
    }
    /**
     * Not Used.
     *
     * @param string|null $subVersion
     *
     * @return self
     */
    public function setSubVersion(?string $subVersion) : self
    {
        $this->initialized['subVersion'] = true;
        $this->subVersion = $subVersion;
        return $this;
    }
    /**
     * TransactionReference identifies transactions between client and server.
     *
     * @return RequestTransactionReference|null
     */
    public function getTransactionReference() : ?RequestTransactionReference
    {
        return $this->transactionReference;
    }
    /**
     * TransactionReference identifies transactions between client and server.
     *
     * @param RequestTransactionReference|null $transactionReference
     *
     * @return self
     */
    public function setTransactionReference(?RequestTransactionReference $transactionReference) : self
    {
        $this->initialized['transactionReference'] = true;
        $this->transactionReference = $transactionReference;
        return $this;
    }
}