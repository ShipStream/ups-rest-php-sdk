<?php

namespace ShipStream\Ups\Api\Model;

class RatedShipmentFRSShipmentData extends \ArrayObject
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
     * Transportation charges container. Ground Freight Pricing transportation charges. These are only returned for Ground Freight Pricing enabled shipper account number when the user includes the FRSShipmentIndicator in the request.
     *
     * @var FRSShipmentDataTransportationCharges
     */
    protected $transportationCharges;
    /**
     * FreightDensityRate container for Density based rating.
     *
     * @var FRSShipmentDataFreightDensityRate
     */
    protected $freightDensityRate;
    /**
     * 
     *
     * @var FRSShipmentDataHandlingUnits[]
     */
    protected $handlingUnits;
    /**
     * Transportation charges container. Ground Freight Pricing transportation charges. These are only returned for Ground Freight Pricing enabled shipper account number when the user includes the FRSShipmentIndicator in the request.
     *
     * @return FRSShipmentDataTransportationCharges
     */
    public function getTransportationCharges() : FRSShipmentDataTransportationCharges
    {
        return $this->transportationCharges;
    }
    /**
     * Transportation charges container. Ground Freight Pricing transportation charges. These are only returned for Ground Freight Pricing enabled shipper account number when the user includes the FRSShipmentIndicator in the request.
     *
     * @param FRSShipmentDataTransportationCharges $transportationCharges
     *
     * @return self
     */
    public function setTransportationCharges(FRSShipmentDataTransportationCharges $transportationCharges) : self
    {
        $this->initialized['transportationCharges'] = true;
        $this->transportationCharges = $transportationCharges;
        return $this;
    }
    /**
     * FreightDensityRate container for Density based rating.
     *
     * @return FRSShipmentDataFreightDensityRate
     */
    public function getFreightDensityRate() : FRSShipmentDataFreightDensityRate
    {
        return $this->freightDensityRate;
    }
    /**
     * FreightDensityRate container for Density based rating.
     *
     * @param FRSShipmentDataFreightDensityRate $freightDensityRate
     *
     * @return self
     */
    public function setFreightDensityRate(FRSShipmentDataFreightDensityRate $freightDensityRate) : self
    {
        $this->initialized['freightDensityRate'] = true;
        $this->freightDensityRate = $freightDensityRate;
        return $this;
    }
    /**
     * 
     *
     * @return FRSShipmentDataHandlingUnits[]
     */
    public function getHandlingUnits() : array
    {
        return $this->handlingUnits;
    }
    /**
     * 
     *
     * @param FRSShipmentDataHandlingUnits[] $handlingUnits
     *
     * @return self
     */
    public function setHandlingUnits(array $handlingUnits) : self
    {
        $this->initialized['handlingUnits'] = true;
        $this->handlingUnits = $handlingUnits;
        return $this;
    }
}