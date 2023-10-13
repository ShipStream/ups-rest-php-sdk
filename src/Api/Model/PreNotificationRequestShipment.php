<?php

namespace ShipStream\Ups\Api\Model;

class PreNotificationRequestShipment extends \ArrayObject
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
     * Shipper�s six digit account number.
     *
     * @var string
     */
    protected $shipperNumber;
    /**
     * 1Z Number of the first package in the shipment.
     *
     * @var string
     */
    protected $shipmentIdentificationNumber;
    /**
     * Ship To address container.
     *
     * @var ShipmentShipToAddress
     */
    protected $shipToAddress;
    /**
     * Ship From address container.
     *
     * @var ShipmentShipFromAddress
     */
    protected $shipFromAddress;
    /**
     * Date of the On Call Air Pickup. Format is YYYYMMDD
     *
     * @var string
     */
    protected $pickupDate;
    /**
     * UPS service type.
     *
     * @var ShipmentService
     */
    protected $service;
    /**
    * The Regulatory set associated with every regulated shipment. It must be same across the shipment. Valid values are:                                                                                                                                                                                                                                                                                                         ADR � European Agreement concerning the International Carriage of Dangerous Goods by Road. 
    49CFR � Title 49 of the United States Code of Federal Regulations.  
    IATA � International Air Transport Association (IATA) Dangerous Goods Regulations.
    *
    * @var string
    */
    protected $regulationSet;
    /**
     * 
     *
     * @var ShipmentPackage[]
     */
    protected $package;
    /**
     * Shipper�s six digit account number.
     *
     * @return string
     */
    public function getShipperNumber() : string
    {
        return $this->shipperNumber;
    }
    /**
     * Shipper�s six digit account number.
     *
     * @param string $shipperNumber
     *
     * @return self
     */
    public function setShipperNumber(string $shipperNumber) : self
    {
        $this->initialized['shipperNumber'] = true;
        $this->shipperNumber = $shipperNumber;
        return $this;
    }
    /**
     * 1Z Number of the first package in the shipment.
     *
     * @return string
     */
    public function getShipmentIdentificationNumber() : string
    {
        return $this->shipmentIdentificationNumber;
    }
    /**
     * 1Z Number of the first package in the shipment.
     *
     * @param string $shipmentIdentificationNumber
     *
     * @return self
     */
    public function setShipmentIdentificationNumber(string $shipmentIdentificationNumber) : self
    {
        $this->initialized['shipmentIdentificationNumber'] = true;
        $this->shipmentIdentificationNumber = $shipmentIdentificationNumber;
        return $this;
    }
    /**
     * Ship To address container.
     *
     * @return ShipmentShipToAddress
     */
    public function getShipToAddress() : ShipmentShipToAddress
    {
        return $this->shipToAddress;
    }
    /**
     * Ship To address container.
     *
     * @param ShipmentShipToAddress $shipToAddress
     *
     * @return self
     */
    public function setShipToAddress(ShipmentShipToAddress $shipToAddress) : self
    {
        $this->initialized['shipToAddress'] = true;
        $this->shipToAddress = $shipToAddress;
        return $this;
    }
    /**
     * Ship From address container.
     *
     * @return ShipmentShipFromAddress
     */
    public function getShipFromAddress() : ShipmentShipFromAddress
    {
        return $this->shipFromAddress;
    }
    /**
     * Ship From address container.
     *
     * @param ShipmentShipFromAddress $shipFromAddress
     *
     * @return self
     */
    public function setShipFromAddress(ShipmentShipFromAddress $shipFromAddress) : self
    {
        $this->initialized['shipFromAddress'] = true;
        $this->shipFromAddress = $shipFromAddress;
        return $this;
    }
    /**
     * Date of the On Call Air Pickup. Format is YYYYMMDD
     *
     * @return string
     */
    public function getPickupDate() : string
    {
        return $this->pickupDate;
    }
    /**
     * Date of the On Call Air Pickup. Format is YYYYMMDD
     *
     * @param string $pickupDate
     *
     * @return self
     */
    public function setPickupDate(string $pickupDate) : self
    {
        $this->initialized['pickupDate'] = true;
        $this->pickupDate = $pickupDate;
        return $this;
    }
    /**
     * UPS service type.
     *
     * @return ShipmentService
     */
    public function getService() : ShipmentService
    {
        return $this->service;
    }
    /**
     * UPS service type.
     *
     * @param ShipmentService $service
     *
     * @return self
     */
    public function setService(ShipmentService $service) : self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
    /**
    * The Regulatory set associated with every regulated shipment. It must be same across the shipment. Valid values are:                                                                                                                                                                                                                                                                                                         ADR � European Agreement concerning the International Carriage of Dangerous Goods by Road. 
    49CFR � Title 49 of the United States Code of Federal Regulations.  
    IATA � International Air Transport Association (IATA) Dangerous Goods Regulations.
    *
    * @return string
    */
    public function getRegulationSet() : string
    {
        return $this->regulationSet;
    }
    /**
    * The Regulatory set associated with every regulated shipment. It must be same across the shipment. Valid values are:                                                                                                                                                                                                                                                                                                         ADR � European Agreement concerning the International Carriage of Dangerous Goods by Road. 
    49CFR � Title 49 of the United States Code of Federal Regulations.  
    IATA � International Air Transport Association (IATA) Dangerous Goods Regulations.
    *
    * @param string $regulationSet
    *
    * @return self
    */
    public function setRegulationSet(string $regulationSet) : self
    {
        $this->initialized['regulationSet'] = true;
        $this->regulationSet = $regulationSet;
        return $this;
    }
    /**
     * 
     *
     * @return ShipmentPackage[]
     */
    public function getPackage() : array
    {
        return $this->package;
    }
    /**
     * 
     *
     * @param ShipmentPackage[] $package
     *
     * @return self
     */
    public function setPackage(array $package) : self
    {
        $this->initialized['package'] = true;
        $this->package = $package;
        return $this;
    }
}