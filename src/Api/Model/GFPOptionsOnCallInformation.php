<?php

namespace ShipStream\Ups\Api\Model;

class GFPOptionsOnCallInformation extends \ArrayObject
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
     * The presence of OnCallPickupIndicator is to request on call pickup fee in response
     *
     * @var string
     */
    protected $onCallPickupIndicator;
    /**
     * The presence of OnCallPickupIndicator is to request on call pickup fee in response
     *
     * @return string
     */
    public function getOnCallPickupIndicator() : string
    {
        return $this->onCallPickupIndicator;
    }
    /**
     * The presence of OnCallPickupIndicator is to request on call pickup fee in response
     *
     * @param string $onCallPickupIndicator
     *
     * @return self
     */
    public function setOnCallPickupIndicator(string $onCallPickupIndicator) : self
    {
        $this->initialized['onCallPickupIndicator'] = true;
        $this->onCallPickupIndicator = $onCallPickupIndicator;
        return $this;
    }
}