<?php

namespace ShipStream\Ups\Api\Model;

class LandedCostResponseShipmentPerfStats extends \ArrayObject
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
     * Time taken through the abstraction layer in milliseconds
     *
     * @var string|null
     */
    protected $absLayerTime;
    /**
     * Request completed time
     *
     * @var string|null
     */
    protected $fulfillTime;
    /**
     * Request receipt time
     *
     * @var string|null
     */
    protected $receiptTime;
    /**
     * Time taken through the abstraction layer in milliseconds
     *
     * @return string|null
     */
    public function getAbsLayerTime() : ?string
    {
        return $this->absLayerTime;
    }
    /**
     * Time taken through the abstraction layer in milliseconds
     *
     * @param string|null $absLayerTime
     *
     * @return self
     */
    public function setAbsLayerTime(?string $absLayerTime) : self
    {
        $this->initialized['absLayerTime'] = true;
        $this->absLayerTime = $absLayerTime;
        return $this;
    }
    /**
     * Request completed time
     *
     * @return string|null
     */
    public function getFulfillTime() : ?string
    {
        return $this->fulfillTime;
    }
    /**
     * Request completed time
     *
     * @param string|null $fulfillTime
     *
     * @return self
     */
    public function setFulfillTime(?string $fulfillTime) : self
    {
        $this->initialized['fulfillTime'] = true;
        $this->fulfillTime = $fulfillTime;
        return $this;
    }
    /**
     * Request receipt time
     *
     * @return string|null
     */
    public function getReceiptTime() : ?string
    {
        return $this->receiptTime;
    }
    /**
     * Request receipt time
     *
     * @param string|null $receiptTime
     *
     * @return self
     */
    public function setReceiptTime(?string $receiptTime) : self
    {
        $this->initialized['receiptTime'] = true;
        $this->receiptTime = $receiptTime;
        return $this;
    }
}