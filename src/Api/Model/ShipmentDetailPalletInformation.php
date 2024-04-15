<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentDetailPalletInformation extends \ArrayObject
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
     * Dimensions of largest pallet
     *
     * @var PalletInformationDimensions|null
     */
    protected $dimensions;
    /**
     * Dimensions of largest pallet
     *
     * @return PalletInformationDimensions|null
     */
    public function getDimensions() : ?PalletInformationDimensions
    {
        return $this->dimensions;
    }
    /**
     * Dimensions of largest pallet
     *
     * @param PalletInformationDimensions|null $dimensions
     *
     * @return self
     */
    public function setDimensions(?PalletInformationDimensions $dimensions) : self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
}