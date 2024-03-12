<?php

namespace ShipStream\Ups\Api\Model;

class PickupCreationRequestFreightOptions extends \ArrayObject
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
     * Supports various optional indicators
     *
     * @var FreightOptionsShipmentServiceOptions
     */
    protected $shipmentServiceOptions;
    /**
     * Origin SLIC. This will be obtained from submitting a pickup service center request. See PickupGetFacilitiesServiceCenterRequest.
     *
     * @var string
     */
    protected $originServiceCenterCode;
    /**
     * Country or territory of Service Center SLIC chosen to drop off.
     *
     * @var string
     */
    protected $originServiceCountryCode;
    /**
     * Destination Address Container.
     *
     * @var FreightOptionsDestinationAddress
     */
    protected $destinationAddress;
    /**
     * Refers to the ShipmentDetail Container under Freight Options
     *
     * @var FreightOptionsShipmentDetail
     */
    protected $shipmentDetail;
    /**
     * Supports various optional indicators
     *
     * @return FreightOptionsShipmentServiceOptions
     */
    public function getShipmentServiceOptions() : FreightOptionsShipmentServiceOptions
    {
        return $this->shipmentServiceOptions;
    }
    /**
     * Supports various optional indicators
     *
     * @param FreightOptionsShipmentServiceOptions $shipmentServiceOptions
     *
     * @return self
     */
    public function setShipmentServiceOptions(FreightOptionsShipmentServiceOptions $shipmentServiceOptions) : self
    {
        $this->initialized['shipmentServiceOptions'] = true;
        $this->shipmentServiceOptions = $shipmentServiceOptions;
        return $this;
    }
    /**
     * Origin SLIC. This will be obtained from submitting a pickup service center request. See PickupGetFacilitiesServiceCenterRequest.
     *
     * @return string
     */
    public function getOriginServiceCenterCode() : string
    {
        return $this->originServiceCenterCode;
    }
    /**
     * Origin SLIC. This will be obtained from submitting a pickup service center request. See PickupGetFacilitiesServiceCenterRequest.
     *
     * @param string $originServiceCenterCode
     *
     * @return self
     */
    public function setOriginServiceCenterCode(string $originServiceCenterCode) : self
    {
        $this->initialized['originServiceCenterCode'] = true;
        $this->originServiceCenterCode = $originServiceCenterCode;
        return $this;
    }
    /**
     * Country or territory of Service Center SLIC chosen to drop off.
     *
     * @return string
     */
    public function getOriginServiceCountryCode() : string
    {
        return $this->originServiceCountryCode;
    }
    /**
     * Country or territory of Service Center SLIC chosen to drop off.
     *
     * @param string $originServiceCountryCode
     *
     * @return self
     */
    public function setOriginServiceCountryCode(string $originServiceCountryCode) : self
    {
        $this->initialized['originServiceCountryCode'] = true;
        $this->originServiceCountryCode = $originServiceCountryCode;
        return $this;
    }
    /**
     * Destination Address Container.
     *
     * @return FreightOptionsDestinationAddress
     */
    public function getDestinationAddress() : FreightOptionsDestinationAddress
    {
        return $this->destinationAddress;
    }
    /**
     * Destination Address Container.
     *
     * @param FreightOptionsDestinationAddress $destinationAddress
     *
     * @return self
     */
    public function setDestinationAddress(FreightOptionsDestinationAddress $destinationAddress) : self
    {
        $this->initialized['destinationAddress'] = true;
        $this->destinationAddress = $destinationAddress;
        return $this;
    }
    /**
     * Refers to the ShipmentDetail Container under Freight Options
     *
     * @return FreightOptionsShipmentDetail
     */
    public function getShipmentDetail() : FreightOptionsShipmentDetail
    {
        return $this->shipmentDetail;
    }
    /**
     * Refers to the ShipmentDetail Container under Freight Options
     *
     * @param FreightOptionsShipmentDetail $shipmentDetail
     *
     * @return self
     */
    public function setShipmentDetail(FreightOptionsShipmentDetail $shipmentDetail) : self
    {
        $this->initialized['shipmentDetail'] = true;
        $this->shipmentDetail = $shipmentDetail;
        return $this;
    }
}