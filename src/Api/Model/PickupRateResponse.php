<?php

namespace ShipStream\Ups\Api\Model;

class PickupRateResponse extends \ArrayObject
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
     * @var PickupRateResponseResponse
     */
    protected $response;
    /**
     * The result of rating an on-callpickup.
     *
     * @var PickupRateResponseRateResult
     */
    protected $rateResult;
    /**
    * Indicates if the pickup address qualifies for WST (Weekend Service Territory). Returned if the pickup date is Saturday and subversion greater or equal to 1607. Valid Values:
    - Y = WST
    - N = Non-WST
    *
    * @var string
    */
    protected $weekendServiceTerritoryIndicator;
    /**
     * WeekendServiceTerritory Container.Returned if the  subversion greater or equal to 2007.
     *
     * @var PickupRateResponseWeekendServiceTerritory
     */
    protected $weekendServiceTerritory;
    /**
     * Response Container.
     *
     * @return PickupRateResponseResponse
     */
    public function getResponse() : PickupRateResponseResponse
    {
        return $this->response;
    }
    /**
     * Response Container.
     *
     * @param PickupRateResponseResponse $response
     *
     * @return self
     */
    public function setResponse(PickupRateResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * The result of rating an on-callpickup.
     *
     * @return PickupRateResponseRateResult
     */
    public function getRateResult() : PickupRateResponseRateResult
    {
        return $this->rateResult;
    }
    /**
     * The result of rating an on-callpickup.
     *
     * @param PickupRateResponseRateResult $rateResult
     *
     * @return self
     */
    public function setRateResult(PickupRateResponseRateResult $rateResult) : self
    {
        $this->initialized['rateResult'] = true;
        $this->rateResult = $rateResult;
        return $this;
    }
    /**
    * Indicates if the pickup address qualifies for WST (Weekend Service Territory). Returned if the pickup date is Saturday and subversion greater or equal to 1607. Valid Values:
    - Y = WST
    - N = Non-WST
    *
    * @return string
    */
    public function getWeekendServiceTerritoryIndicator() : string
    {
        return $this->weekendServiceTerritoryIndicator;
    }
    /**
    * Indicates if the pickup address qualifies for WST (Weekend Service Territory). Returned if the pickup date is Saturday and subversion greater or equal to 1607. Valid Values:
    - Y = WST
    - N = Non-WST
    *
    * @param string $weekendServiceTerritoryIndicator
    *
    * @return self
    */
    public function setWeekendServiceTerritoryIndicator(string $weekendServiceTerritoryIndicator) : self
    {
        $this->initialized['weekendServiceTerritoryIndicator'] = true;
        $this->weekendServiceTerritoryIndicator = $weekendServiceTerritoryIndicator;
        return $this;
    }
    /**
     * WeekendServiceTerritory Container.Returned if the  subversion greater or equal to 2007.
     *
     * @return PickupRateResponseWeekendServiceTerritory
     */
    public function getWeekendServiceTerritory() : PickupRateResponseWeekendServiceTerritory
    {
        return $this->weekendServiceTerritory;
    }
    /**
     * WeekendServiceTerritory Container.Returned if the  subversion greater or equal to 2007.
     *
     * @param PickupRateResponseWeekendServiceTerritory $weekendServiceTerritory
     *
     * @return self
     */
    public function setWeekendServiceTerritory(PickupRateResponseWeekendServiceTerritory $weekendServiceTerritory) : self
    {
        $this->initialized['weekendServiceTerritory'] = true;
        $this->weekendServiceTerritory = $weekendServiceTerritory;
        return $this;
    }
}