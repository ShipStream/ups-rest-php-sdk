<?php

namespace ShipStream\Ups\Api\Model;

class AcceptanceAuditPreCheckRequestShipment extends \ArrayObject
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
     * Shipper's six digit account number.  Your UPS Account Number must have correct Dangerous goods contract to successfully use this Webservice.
     *
     * @var string|null
     */
    protected $shipperNumber;
    /**
     * Ship From address container.
     *
     * @var AcceptanceAuditPreCheckShipmentShipFromAddress|null
     */
    protected $shipFromAddress;
    /**
     * Ship To address container.
     *
     * @var AcceptanceAuditPreCheckShipmentShipToAddress|null
     */
    protected $shipToAddress;
    /**
     * Service Container.
     *
     * @var ShipmentService|null
     */
    protected $service;
    /**
    * The Regulatory set associated with every regulated shipment. It must be same across the shipment. Not required when the CommodityRegulatedLevelCode is EQ.  Valid values: ADR, 49CFR, IATA.
    
    ADR = Europe to Europe Ground Movement
    49CFR = HazMat regulated by US Dept. of Transportation within the U.S. or ground shipments to Canada   
    IATA= Worldwide Air movement.
    *
    * @var string|null
    */
    protected $regulationSet;
    /**
     * 
     *
     * @var list<AcceptanceAuditPreCheckShipmentPackage>|null
     */
    protected $package;
    /**
     * Shipper's six digit account number.  Your UPS Account Number must have correct Dangerous goods contract to successfully use this Webservice.
     *
     * @return string|null
     */
    public function getShipperNumber() : ?string
    {
        return $this->shipperNumber;
    }
    /**
     * Shipper's six digit account number.  Your UPS Account Number must have correct Dangerous goods contract to successfully use this Webservice.
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
     * Ship From address container.
     *
     * @return AcceptanceAuditPreCheckShipmentShipFromAddress|null
     */
    public function getShipFromAddress() : ?AcceptanceAuditPreCheckShipmentShipFromAddress
    {
        return $this->shipFromAddress;
    }
    /**
     * Ship From address container.
     *
     * @param AcceptanceAuditPreCheckShipmentShipFromAddress|null $shipFromAddress
     *
     * @return self
     */
    public function setShipFromAddress(?AcceptanceAuditPreCheckShipmentShipFromAddress $shipFromAddress) : self
    {
        $this->initialized['shipFromAddress'] = true;
        $this->shipFromAddress = $shipFromAddress;
        return $this;
    }
    /**
     * Ship To address container.
     *
     * @return AcceptanceAuditPreCheckShipmentShipToAddress|null
     */
    public function getShipToAddress() : ?AcceptanceAuditPreCheckShipmentShipToAddress
    {
        return $this->shipToAddress;
    }
    /**
     * Ship To address container.
     *
     * @param AcceptanceAuditPreCheckShipmentShipToAddress|null $shipToAddress
     *
     * @return self
     */
    public function setShipToAddress(?AcceptanceAuditPreCheckShipmentShipToAddress $shipToAddress) : self
    {
        $this->initialized['shipToAddress'] = true;
        $this->shipToAddress = $shipToAddress;
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
    * The Regulatory set associated with every regulated shipment. It must be same across the shipment. Not required when the CommodityRegulatedLevelCode is EQ.  Valid values: ADR, 49CFR, IATA.
    
    ADR = Europe to Europe Ground Movement
    49CFR = HazMat regulated by US Dept. of Transportation within the U.S. or ground shipments to Canada   
    IATA= Worldwide Air movement.
    *
    * @return string|null
    */
    public function getRegulationSet() : ?string
    {
        return $this->regulationSet;
    }
    /**
    * The Regulatory set associated with every regulated shipment. It must be same across the shipment. Not required when the CommodityRegulatedLevelCode is EQ.  Valid values: ADR, 49CFR, IATA.
    
    ADR = Europe to Europe Ground Movement
    49CFR = HazMat regulated by US Dept. of Transportation within the U.S. or ground shipments to Canada   
    IATA= Worldwide Air movement.
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
     * @return list<AcceptanceAuditPreCheckShipmentPackage>|null
     */
    public function getPackage() : ?array
    {
        return $this->package;
    }
    /**
     * 
     *
     * @param list<AcceptanceAuditPreCheckShipmentPackage>|null $package
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