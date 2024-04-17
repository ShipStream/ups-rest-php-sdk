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
     * Time taken through the abstraction layer in milliseconds.
     *
     * @var string
     */
    protected $absLayerTime;
    /**
     * Time taken to complete the request.
     *
     * @var string
     */
    protected $fulfillTime;
    /**
     * Time taken to receive the request.
     *
     * @var string
     */
    protected $receiptTime;
    /**
     * Time taken through the abstraction layer in milliseconds.
     *
     * @return string
     */
    public function getAbsLayerTime() : string
    {
        return $this->absLayerTime;
    }
    /**
     * Time taken through the abstraction layer in milliseconds.
     *
     * @param string $absLayerTime
     *
     * @return self
     */
    public function setAbsLayerTime(string $absLayerTime) : self
    {
        $this->initialized['absLayerTime'] = true;
        $this->absLayerTime = $absLayerTime;
        return $this;
    }
    /**
     * Time taken to complete the request.
     *
     * @return string
     */
    public function getFulfillTime() : string
    {
        return $this->fulfillTime;
    }
    /**
     * Time taken to complete the request.
     *
     * @param string $fulfillTime
     *
     * @return self
     */
    public function setFulfillTime(string $fulfillTime) : self
    {
        $this->initialized['fulfillTime'] = true;
        $this->fulfillTime = $fulfillTime;
        return $this;
    }
    /**
     * Time taken to receive the request.
     *
     * @return string
     */
    public function getReceiptTime() : string
    {
        return $this->receiptTime;
    }
    /**
     * Time taken to receive the request.
     *
     * @param string $receiptTime
     *
     * @return self
     */
    public function setReceiptTime(string $receiptTime) : self
    {
        $this->initialized['receiptTime'] = true;
        $this->receiptTime = $receiptTime;
        return $this;
    }
}