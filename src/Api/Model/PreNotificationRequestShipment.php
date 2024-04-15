<?php

namespace ShipStream\Ups\Api\Model;

class PreNotificationRequestShipment extends \ArrayObject
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
     * Shipper's six digit account number.
     *
     * @var string|null
     */
    protected $shipperNumber;
    /**
     * 1Z Number of the first package in the shipment.
     *
     * @var string|null
     */
    protected $shipmentIdentificationNumber;
    /**
     * Ship To address container.
     *
     * @var PreNotificationShipmentShipToAddress|null
     */
    protected $shipToAddress;
    /**
     * Ship From address container.
     *
     * @var PreNotificationShipmentShipFromAddress|null
     */
    protected $shipFromAddress;
    /**
     * Date of the On Call Air Pickup. Format is YYYYMMDD
     *
     * @var string|null
     */
    protected $pickupDate;
    /**
     * Service Container.
     *
     * @var ShipmentService|null
     */
    protected $service;
    /**
    * The Regulatory set associated with every regulated shipment. It must be same across the shipment. Valid values are: ADR - European Agreement concerning the International Carriage of Dangerous Goods by Road. 
    49CFR - Title 49 of the United States Code of Federal Regulations.  
    IATA - International Air Transport Association (IATA) Dangerous Goods Regulations.
    *
    * @var string|null
    */
    protected $regulationSet;
    /**
     * 
     *
     * @var list<PreNotificationShipmentPackage>|null
     */
    protected $package;
    /**
     * Shipper's six digit account number.
     *
     * @return string|null
     */
    public function getShipperNumber() : ?string
    {
        return $this->shipperNumber;
    }
    /**
     * Shipper's six digit account number.
     *
     * @param string|null $shipperNumber
     *
     * @return self
     */
    public function setShipperNumber(?string $shipperNumber) : self
    {
        $this->initialized['shipperNumber'] = true;
        $this->shipperNumber = $shipperNumber;
        return $this;
    }
    /**
     * 1Z Number of the first package in the shipment.
     *
     * @return string|null
     */
    public function getShipmentIdentificationNumber() : ?string
    {
        return $this->shipmentIdentificationNumber;
    }
    /**
     * 1Z Number of the first package in the shipment.
     *
     * @param string|null $shipmentIdentificationNumber
     *
     * @return self
     */
    public function setShipmentIdentificationNumber(?string $shipmentIdentificationNumber) : self
    {
        $this->initialized['shipmentIdentificationNumber'] = true;
        $this->shipmentIdentificationNumber = $shipmentIdentificationNumber;
        return $this;
    }
    /**
     * Ship To address container.
     *
     * @return PreNotificationShipmentShipToAddress|null
     */
    public function getShipToAddress() : ?PreNotificationShipmentShipToAddress
    {
        return $this->shipToAddress;
    }
    /**
     * Ship To address container.
     *
     * @param PreNotificationShipmentShipToAddress|null $shipToAddress
     *
     * @return self
     */
    public function setShipToAddress(?PreNotificationShipmentShipToAddress $shipToAddress) : self
    {
        $this->initialized['shipToAddress'] = true;
        $this->shipToAddress = $shipToAddress;
        return $this;
    }
    /**
     * Ship From address container.
     *
     * @return PreNotificationShipmentShipFromAddress|null
     */
    public function getShipFromAddress() : ?PreNotificationShipmentShipFromAddress
    {
        return $this->shipFromAddress;
    }
    /**
     * Ship From address container.
     *
     * @param PreNotificationShipmentShipFromAddress|null $shipFromAddress
     *
     * @return self
     */
    public function setShipFromAddress(?PreNotificationShipmentShipFromAddress $shipFromAddress) : self
    {
        $this->initialized['shipFromAddress'] = true;
        $this->shipFromAddress = $shipFromAddress;
        return $this;
    }
    /**
     * Date of the On Call Air Pickup. Format is YYYYMMDD
     *
     * @return string|null
     */
    public function getPickupDate() : ?string
    {
        return $this->pickupDate;
    }
    /**
     * Date of the On Call Air Pickup. Format is YYYYMMDD
     *
     * @param string|null $pickupDate
     *
     * @return self
     */
    public function setPickupDate(?string $pickupDate) : self
    {
        $this->initialized['pickupDate'] = true;
        $this->pickupDate = $pickupDate;
        return $this;
    }
    /**
     * Service Container.
     *
     * @return ShipmentService|null
     */
    public function getService() : ?ShipmentService
    {
        return $this->service;
    }
    /**
     * Service Container.
     *
     * @param ShipmentService|null $service
     *
     * @return self
     */
    public function setService(?ShipmentService $service) : self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
    /**
    * The Regulatory set associated with every regulated shipment. It must be same across the shipment. Valid values are: ADR - European Agreement concerning the International Carriage of Dangerous Goods by Road. 
    49CFR - Title 49 of the United States Code of Federal Regulations.  
    IATA - International Air Transport Association (IATA) Dangerous Goods Regulations.
    *
    * @return string|null
    */
    public function getRegulationSet() : ?string
    {
        return $this->regulationSet;
    }
    /**
    * The Regulatory set associated with every regulated shipment. It must be same across the shipment. Valid values are: ADR - European Agreement concerning the International Carriage of Dangerous Goods by Road. 
    49CFR - Title 49 of the United States Code of Federal Regulations.  
    IATA - International Air Transport Association (IATA) Dangerous Goods Regulations.
    *
    * @param string|null $regulationSet
    *
    * @return self
    */
    public function setRegulationSet(?string $regulationSet) : self
    {
        $this->initialized['regulationSet'] = true;
        $this->regulationSet = $regulationSet;
        return $this;
    }
    /**
     * 
     *
     * @return list<PreNotificationShipmentPackage>|null
     */
    public function getPackage() : ?array
    {
        return $this->package;
    }
    /**
     * 
     *
     * @param list<PreNotificationShipmentPackage>|null $package
     *
     * @return self
     */
    public function setPackage(?array $package) : self
    {
        $this->initialized['package'] = true;
        $this->package = $package;
        return $this;
    }
}