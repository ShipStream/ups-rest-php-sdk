<?php

namespace ShipStream\Ups\Api\Model;

class LandedCostRequest extends \ArrayObject
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
     * Specifies the currency of transaction or purchase.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * Unique transaction ID for the request.
     *
     * @var string|null
     */
    protected $transID;
    /**
     * This is the optional flag to indicate that partial landed cost  calculations are acceptable to be used by upstream systems. When set to �false�, the system will return an error when at least  one commodity in the shipment is invalid (all or none); no results  will be sent back for that request. When set to �true�, the system will return partial calculations  when applicable Valid values: true = Partial Landed Cost result will return false = All or No result will return - (default)
     *
     * @var bool|null
     */
    protected $allowPartialLandedCostResult;
    /**
     * Version number of the instance that processed this request. This must match the major number of the corresponding ICD version.
     *
     * @var int|null
     */
    protected $alversion;
    /**
     * Every Landed Cost request must be based on a shipment.
     *
     * @var LandedCostRequestShipment|null
     */
    protected $shipment;
    /**
     * Specifies the currency of transaction or purchase.
     *
     * @return string|null
     */
    public function getCurrencyCode() : ?string
    {
        return $this->currencyCode;
    }
    /**
     * Specifies the currency of transaction or purchase.
     *
     * @param string|null $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode) : self
    {
        $this->initialized['currencyCode'] = true;
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * Unique transaction ID for the request.
     *
     * @return string|null
     */
    public function getTransID() : ?string
    {
        return $this->transID;
    }
    /**
     * Unique transaction ID for the request.
     *
     * @param string|null $transID
     *
     * @return self
     */
    public function setTransID(?string $transID) : self
    {
        $this->initialized['transID'] = true;
        $this->transID = $transID;
        return $this;
    }
    /**
     * This is the optional flag to indicate that partial landed cost  calculations are acceptable to be used by upstream systems. When set to �false�, the system will return an error when at least  one commodity in the shipment is invalid (all or none); no results  will be sent back for that request. When set to �true�, the system will return partial calculations  when applicable Valid values: true = Partial Landed Cost result will return false = All or No result will return - (default)
     *
     * @return bool|null
     */
    public function getAllowPartialLandedCostResult() : ?bool
    {
        return $this->allowPartialLandedCostResult;
    }
    /**
     * This is the optional flag to indicate that partial landed cost  calculations are acceptable to be used by upstream systems. When set to �false�, the system will return an error when at least  one commodity in the shipment is invalid (all or none); no results  will be sent back for that request. When set to �true�, the system will return partial calculations  when applicable Valid values: true = Partial Landed Cost result will return false = All or No result will return - (default)
     *
     * @param bool|null $allowPartialLandedCostResult
     *
     * @return self
     */
    public function setAllowPartialLandedCostResult(?bool $allowPartialLandedCostResult) : self
    {
        $this->initialized['allowPartialLandedCostResult'] = true;
        $this->allowPartialLandedCostResult = $allowPartialLandedCostResult;
        return $this;
    }
    /**
     * Version number of the instance that processed this request. This must match the major number of the corresponding ICD version.
     *
     * @return int|null
     */
    public function getAlversion() : ?int
    {
        return $this->alversion;
    }
    /**
     * Version number of the instance that processed this request. This must match the major number of the corresponding ICD version.
     *
     * @param int|null $alversion
     *
     * @return self
     */
    public function setAlversion(?int $alversion) : self
    {
        $this->initialized['alversion'] = true;
        $this->alversion = $alversion;
        return $this;
    }
    /**
     * Every Landed Cost request must be based on a shipment.
     *
     * @return LandedCostRequestShipment|null
     */
    public function getShipment() : ?LandedCostRequestShipment
    {
        return $this->shipment;
    }
    /**
     * Every Landed Cost request must be based on a shipment.
     *
     * @param LandedCostRequestShipment|null $shipment
     *
     * @return self
     */
    public function setShipment(?LandedCostRequestShipment $shipment) : self
    {
        $this->initialized['shipment'] = true;
        $this->shipment = $shipment;
        return $this;
    }
}