<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentResultsFRSShipmentData extends \ArrayObject
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
     * Transportation charges container. Ground Freight Pricing transportation charges. These are only returned for Ground Freight Pricing enabled shipper account number when the user includes the FRSShipmentIndicator in the request.
     *
     * @var FRSShipmentDataTransportationCharges|null
     */
    protected $transportationCharges;
    /**
     * FreightDensityRate container for Density based rating.
     *
     * @var FRSShipmentDataFreightDensityRate|null
     */
    protected $freightDensityRate;
    /**
     * 
     *
     * @var list<FRSShipmentDataHandlingUnits>|null
     */
    protected $handlingUnits;
    /**
     * Transportation charges container. Ground Freight Pricing transportation charges. These are only returned for Ground Freight Pricing enabled shipper account number when the user includes the FRSShipmentIndicator in the request.
     *
     * @return FRSShipmentDataTransportationCharges|null
     */
    public function getTransportationCharges() : ?FRSShipmentDataTransportationCharges
    {
        return $this->transportationCharges;
    }
    /**
     * Transportation charges container. Ground Freight Pricing transportation charges. These are only returned for Ground Freight Pricing enabled shipper account number when the user includes the FRSShipmentIndicator in the request.
     *
     * @param FRSShipmentDataTransportationCharges|null $transportationCharges
     *
     * @return self
     */
    public function setTransportationCharges(?FRSShipmentDataTransportationCharges $transportationCharges) : self
    {
        $this->initialized['transportationCharges'] = true;
        $this->transportationCharges = $transportationCharges;
        return $this;
    }
    /**
     * FreightDensityRate container for Density based rating.
     *
     * @return FRSShipmentDataFreightDensityRate|null
     */
    public function getFreightDensityRate() : ?FRSShipmentDataFreightDensityRate
    {
        return $this->freightDensityRate;
    }
    /**
     * FreightDensityRate container for Density based rating.
     *
     * @param FRSShipmentDataFreightDensityRate|null $freightDensityRate
     *
     * @return self
     */
    public function setFreightDensityRate(?FRSShipmentDataFreightDensityRate $freightDensityRate) : self
    {
        $this->initialized['freightDensityRate'] = true;
        $this->freightDensityRate = $freightDensityRate;
        return $this;
    }
    /**
     * 
     *
     * @return list<FRSShipmentDataHandlingUnits>|null
     */
    public function getHandlingUnits() : ?array
    {
        return $this->handlingUnits;
    }
    /**
     * 
     *
     * @param list<FRSShipmentDataHandlingUnits>|null $handlingUnits
     *
     * @return self
     */
    public function setHandlingUnits(?array $handlingUnits) : self
    {
        $this->initialized['handlingUnits'] = true;
        $this->handlingUnits = $handlingUnits;
        return $this;
    }
}