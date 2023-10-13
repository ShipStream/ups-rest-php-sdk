<?php

namespace ShipStream\Ups\Api\Model;

class LandedCostRequestRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Indicates the action to be taken by the service. Only valid value is: LandedCost.
     *
     * @var string
     */
    protected $requestAction;
    /**
     * Indicates the action to be taken by the service. Only valid value is: LandedCost.
     *
     * @return string
     */
    public function getRequestAction() : string
    {
        return $this->requestAction;
    }
    /**
     * Indicates the action to be taken by the service. Only valid value is: LandedCost.
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
}