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
     * @var string|null
     */
    protected $hazmatIndicator;
    /**
     * Pallet Details.
     *
     * @var ShipmentDetailPalletInformation|null
     */
    protected $palletInformation;
    /**
     * Indicates hazardous materials
     *
     * @return string|null
     */
    public function getHazmatIndicator() : ?string
    {
        return $this->hazmatIndicator;
    }
    /**
     * Indicates hazardous materials
     *
     * @param string|null $hazmatIndicator
     *
     * @return self
     */
    public function setHazmatIndicator(?string $hazmatIndicator) : self
    {
        $this->initialized['hazmatIndicator'] = true;
        $this->hazmatIndicator = $hazmatIndicator;
        return $this;
    }
    /**
     * Pallet Details.
     *
     * @return ShipmentDetailPalletInformation|null
     */
    public function getPalletInformation() : ?ShipmentDetailPalletInformation
    {
        return $this->palletInformation;
    }
    /**
     * Pallet Details.
     *
     * @param ShipmentDetailPalletInformation|null $palletInformation
     *
     * @return self
     */
    public function setPalletInformation(?ShipmentDetailPalletInformation $palletInformation) : self
    {
        $this->initialized['palletInformation'] = true;
        $this->palletInformation = $palletInformation;
        return $this;
    }
}