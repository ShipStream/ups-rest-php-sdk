<?php

namespace ShipStream\Ups\Api\Model;

class FreightOptionsShipmentDetail extends \ArrayObject
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
     * Indicates hazardous materials
     *
     * @var string
     */
    protected $hazmatIndicator;
    /**
     * Pallet Details.
     *
     * @var ShipmentDetailPalletInformation
     */
    protected $palletInformation;
    /**
     * Indicates hazardous materials
     *
     * @return string
     */
    public function getHazmatIndicator() : string
    {
        return $this->hazmatIndicator;
    }
    /**
     * Indicates hazardous materials
     *
     * @param string $hazmatIndicator
     *
     * @return self
     */
    public function setHazmatIndicator(string $hazmatIndicator) : self
    {
        $this->initialized['hazmatIndicator'] = true;
        $this->hazmatIndicator = $hazmatIndicator;
        return $this;
    }
    /**
     * Pallet Details.
     *
     * @return ShipmentDetailPalletInformation
     */
    public function getPalletInformation() : ShipmentDetailPalletInformation
    {
        return $this->palletInformation;
    }
    /**
     * Pallet Details.
     *
     * @param ShipmentDetailPalletInformation $palletInformation
     *
     * @return self
     */
    public function setPalletInformation(ShipmentDetailPalletInformation $palletInformation) : self
    {
        $this->initialized['palletInformation'] = true;
        $this->palletInformation = $palletInformation;
        return $this;
    }
}