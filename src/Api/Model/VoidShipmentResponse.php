<?php

namespace ShipStream\Ups\Api\Model;

class VoidShipmentResponse extends \ArrayObject
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
     * Response Container.
     *
     * @var VoidShipmentResponseResponse|null
     */
    protected $response;
    /**
     * Container for the Summary Result
     *
     * @var VoidShipmentResponseSummaryResult|null
     */
    protected $summaryResult;
    /**
     * 
     *
     * @var list<VoidShipmentResponsePackageLevelResult>|null
     */
    protected $packageLevelResult;
    /**
     * Response Container.
     *
     * @return VoidShipmentResponseResponse|null
     */
    public function getResponse() : ?VoidShipmentResponseResponse
    {
        return $this->response;
    }
    /**
     * Response Container.
     *
     * @param VoidShipmentResponseResponse|null $response
     *
     * @return self
     */
    public function setResponse(?VoidShipmentResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * Container for the Summary Result
     *
     * @return VoidShipmentResponseSummaryResult|null
     */
    public function getSummaryResult() : ?VoidShipmentResponseSummaryResult
    {
        return $this->summaryResult;
    }
    /**
     * Container for the Summary Result
     *
     * @param VoidShipmentResponseSummaryResult|null $summaryResult
     *
     * @return self
     */
    public function setSummaryResult(?VoidShipmentResponseSummaryResult $summaryResult) : self
    {
        $this->initialized['summaryResult'] = true;
        $this->summaryResult = $summaryResult;
        return $this;
    }
    /**
     * 
     *
     * @return list<VoidShipmentResponsePackageLevelResult>|null
     */
    public function getPackageLevelResult() : ?array
    {
        return $this->packageLevelResult;
    }
    /**
     * 
     *
     * @param list<VoidShipmentResponsePackageLevelResult>|null $packageLevelResult
     *
     * @return self
     */
    public function setPackageLevelResult(?array $packageLevelResult) : self
    {
        $this->initialized['packageLevelResult'] = true;
        $this->packageLevelResult = $packageLevelResult;
        return $this;
    }
}