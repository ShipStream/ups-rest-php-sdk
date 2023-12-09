<?php

namespace ShipStream\Ups\Api\Model;

class AcceptanceAuditPreCheckRequestShipment extends \ArrayObject
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
     * Shipper's six digit account number.  Your UPS Account Number must have correct Dangerous goods contract to successfully use this Webservice.
     *
     * @var string
     */
    protected $shipperNumber;
    /**
     * Ship From address container.
     *
     * @var ShipmentShipFromAddress
     */
    protected $shipFromAddress;
    /**
     * Ship To address container.
     *
     * @var ShipmentShipToAddress
     */
    protected $shipToAddress;
    /**
     * Service Container.
     *
     * @var ShipmentService
     */
    protected $service;
    /**
    * The Regulatory set associated with every regulated shipment. It must be same across the shipment. Not required when the CommodityRegulatedLevelCode is EQ.  Valid values: ADR, 49CFR, IATA.
    
    ADR = Europe to Europe Ground Movement
    49CFR = HazMat regulated by US Dept. of Transportation within the U.S. or ground shipments to Canada   
    IATA= Worldwide Air movement.
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
     * Shipper's six digit account number.  Your UPS Account Number must have correct Dangerous goods contract to successfully use this Webservice.
     *
     * @return string
     */
    public function getShipperNumber() : string
    {
        return $this->shipperNumber;
    }
    /**
     * Shipper's six digit account number.  Your UPS Account Number must have correct Dangerous goods contract to successfully use this Webservice.
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
     * Service Container.
     *
     * @return ShipmentService
     */
    public function getService() : ShipmentService
    {
        return $this->service;
    }
    /**
     * Service Container.
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
    * The Regulatory set associated with every regulated shipment. It must be same across the shipment. Not required when the CommodityRegulatedLevelCode is EQ.  Valid values: ADR, 49CFR, IATA.
    
    ADR = Europe to Europe Ground Movement
    49CFR = HazMat regulated by US Dept. of Transportation within the U.S. or ground shipments to Canada   
    IATA= Worldwide Air movement.
    *
    * @return string
    */
    public function getRegulationSet() : string
    {
        return $this->regulationSet;
    }
    /**
    * The Regulatory set associated with every regulated shipment. It must be same across the shipment. Not required when the CommodityRegulatedLevelCode is EQ.  Valid values: ADR, 49CFR, IATA.
    
    ADR = Europe to Europe Ground Movement
    49CFR = HazMat regulated by US Dept. of Transportation within the U.S. or ground shipments to Canada   
    IATA= Worldwide Air movement.
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