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
     * Handling Unit for Density based rating container.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<FRSShipmentDataHandlingUnits>
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
     * Handling Unit for Density based rating container.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<FRSShipmentDataHandlingUnits>
     */
    public function getHandlingUnits() : array
    {
        return $this->handlingUnits;
    }
    /**
     * Handling Unit for Density based rating container.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<FRSShipmentDataHandlingUnits> $handlingUnits
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