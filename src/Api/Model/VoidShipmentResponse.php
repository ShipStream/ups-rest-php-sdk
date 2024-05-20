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
     * @var VoidShipmentResponseResponse
     */
    protected $response;
    /**
     * Container for the Summary Result
     *
     * @var VoidShipmentResponseSummaryResult
     */
    protected $summaryResult;
    /**
     * Contains the Package Level Results.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<VoidShipmentResponsePackageLevelResult>
     */
    protected $packageLevelResult;
    /**
     * Response Container.
     *
     * @return VoidShipmentResponseResponse
     */
    public function getResponse() : VoidShipmentResponseResponse
    {
        return $this->response;
    }
    /**
     * Response Container.
     *
     * @param VoidShipmentResponseResponse $response
     *
     * @return self
     */
    public function setResponse(VoidShipmentResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * Container for the Summary Result
     *
     * @return VoidShipmentResponseSummaryResult
     */
    public function getSummaryResult() : VoidShipmentResponseSummaryResult
    {
        return $this->summaryResult;
    }
    /**
     * Container for the Summary Result
     *
     * @param VoidShipmentResponseSummaryResult $summaryResult
     *
     * @return self
     */
    public function setSummaryResult(VoidShipmentResponseSummaryResult $summaryResult) : self
    {
        $this->initialized['summaryResult'] = true;
        $this->summaryResult = $summaryResult;
        return $this;
    }
    /**
     * Contains the Package Level Results.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<VoidShipmentResponsePackageLevelResult>
     */
    public function getPackageLevelResult() : array
    {
        return $this->packageLevelResult;
    }
    /**
     * Contains the Package Level Results.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<VoidShipmentResponsePackageLevelResult> $packageLevelResult
     *
     * @return self
     */
    public function setPackageLevelResult(array $packageLevelResult) : self
    {
        $this->initialized['packageLevelResult'] = true;
        $this->packageLevelResult = $packageLevelResult;
        return $this;
    }
}