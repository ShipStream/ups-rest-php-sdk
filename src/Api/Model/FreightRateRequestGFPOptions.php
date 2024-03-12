<?php

namespace ShipStream\Ups\Api\Model;

class FreightRateRequestGFPOptions extends \ArrayObject
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
     * Indicator for GFP accessorial rate indicator.
     *
     * @var string
     */
    protected $gPFAccesorialRateIndicator;
    /**
     * Container for On-Call related elements
     *
     * @var GFPOptionsOnCallInformation
     */
    protected $onCallInformation;
    /**
     * Indicator for GFP accessorial rate indicator.
     *
     * @return string
     */
    public function getGPFAccesorialRateIndicator() : string
    {
        return $this->gPFAccesorialRateIndicator;
    }
    /**
     * Indicator for GFP accessorial rate indicator.
     *
     * @param string $gPFAccesorialRateIndicator
     *
     * @return self
     */
    public function setGPFAccesorialRateIndicator(string $gPFAccesorialRateIndicator) : self
    {
        $this->initialized['gPFAccesorialRateIndicator'] = true;
        $this->gPFAccesorialRateIndicator = $gPFAccesorialRateIndicator;
        return $this;
    }
    /**
     * Container for On-Call related elements
     *
     * @return GFPOptionsOnCallInformation
     */
    public function getOnCallInformation() : GFPOptionsOnCallInformation
    {
        return $this->onCallInformation;
    }
    /**
     * Container for On-Call related elements
     *
     * @param GFPOptionsOnCallInformation $onCallInformation
     *
     * @return self
     */
    public function setOnCallInformation(GFPOptionsOnCallInformation $onCallInformation) : self
    {
        $this->initialized['onCallInformation'] = true;
        $this->onCallInformation = $onCallInformation;
        return $this;
    }
}