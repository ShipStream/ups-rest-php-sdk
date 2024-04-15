<?php

namespace ShipStream\Ups\Api\Model;

class RatedShipmentRatedPackage extends \ArrayObject
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
     * Base Service Charge Container.  These charges would be returned only when subversion is greater than or equal to 1701
     *
     * @var RatedPackageBaseServiceCharge|null
     */
    protected $baseServiceCharge;
    /**
     * Transportation Charges Container.
     *
     * @var RatedPackageTransportationCharges|null
     */
    protected $transportationCharges;
    /**
     * Service Options Charges Container.
     *
     * @var RatedPackageServiceOptionsCharges|null
     */
    protected $serviceOptionsCharges;
    /**
     * Total Charges Container.
     *
     * @var RatedPackageTotalCharges|null
     */
    protected $totalCharges;
    /**
     * The weight of the package in the rated Package.
     *
     * @var string|null
     */
    protected $weight;
    /**
     * Billing Weight Container.
     *
     * @var RatedPackageBillingWeight|null
     */
    protected $billingWeight;
    /**
     * 
     *
     * @var list<RatedPackageAccessorial>|null
     */
    protected $accessorial;
    /**
     * 
     *
     * @var list<RatedPackageItemizedCharges>|null
     */
    protected $itemizedCharges;
    /**
     * Negotiated Rates container.  These charges would be returned only when -1) subversion is greater than or equal to 16072) if negotiated rates were requested for GFP shipments and account number is eligible to receive negotiated rates.
     *
     * @var RatedPackageNegotiatedCharges|null
     */
    protected $negotiatedCharges;
    /**
     * SimpleRate will be returned if Simple Rate  present in request
     *
     * @var RatedPackageSimpleRate|null
     */
    protected $simpleRate;
    /**
     * 
     *
     * @var list<RatedPackageRateModifier>|null
     */
    protected $rateModifier;
    /**
     * Base Service Charge Container.  These charges would be returned only when subversion is greater than or equal to 1701
     *
     * @return RatedPackageBaseServiceCharge|null
     */
    public function getBaseServiceCharge() : ?RatedPackageBaseServiceCharge
    {
        return $this->baseServiceCharge;
    }
    /**
     * Base Service Charge Container.  These charges would be returned only when subversion is greater than or equal to 1701
     *
     * @param RatedPackageBaseServiceCharge|null $baseServiceCharge
     *
     * @return self
     */
    public function setBaseServiceCharge(?RatedPackageBaseServiceCharge $baseServiceCharge) : self
    {
        $this->initialized['baseServiceCharge'] = true;
        $this->baseServiceCharge = $baseServiceCharge;
        return $this;
    }
    /**
     * Transportation Charges Container.
     *
     * @return RatedPackageTransportationCharges|null
     */
    public function getTransportationCharges() : ?RatedPackageTransportationCharges
    {
        return $this->transportationCharges;
    }
    /**
     * Transportation Charges Container.
     *
     * @param RatedPackageTransportationCharges|null $transportationCharges
     *
     * @return self
     */
    public function setTransportationCharges(?RatedPackageTransportationCharges $transportationCharges) : self
    {
        $this->initialized['transportationCharges'] = true;
        $this->transportationCharges = $transportationCharges;
        return $this;
    }
    /**
     * Service Options Charges Container.
     *
     * @return RatedPackageServiceOptionsCharges|null
     */
    public function getServiceOptionsCharges() : ?RatedPackageServiceOptionsCharges
    {
        return $this->serviceOptionsCharges;
    }
    /**
     * Service Options Charges Container.
     *
     * @param RatedPackageServiceOptionsCharges|null $serviceOptionsCharges
     *
     * @return self
     */
    public function setServiceOptionsCharges(?RatedPackageServiceOptionsCharges $serviceOptionsCharges) : self
    {
        $this->initialized['serviceOptionsCharges'] = true;
        $this->serviceOptionsCharges = $serviceOptionsCharges;
        return $this;
    }
    /**
     * Total Charges Container.
     *
     * @return RatedPackageTotalCharges|null
     */
    public function getTotalCharges() : ?RatedPackageTotalCharges
    {
        return $this->totalCharges;
    }
    /**
     * Total Charges Container.
     *
     * @param RatedPackageTotalCharges|null $totalCharges
     *
     * @return self
     */
    public function setTotalCharges(?RatedPackageTotalCharges $totalCharges) : self
    {
        $this->initialized['totalCharges'] = true;
        $this->totalCharges = $totalCharges;
        return $this;
    }
    /**
     * The weight of the package in the rated Package.
     *
     * @return string|null
     */
    public function getWeight() : ?string
    {
        return $this->weight;
    }
    /**
     * The weight of the package in the rated Package.
     *
     * @param string|null $weight
     *
     * @return self
     */
    public function setWeight(?string $weight) : self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * Billing Weight Container.
     *
     * @return RatedPackageBillingWeight|null
     */
    public function getBillingWeight() : ?RatedPackageBillingWeight
    {
        return $this->billingWeight;
    }
    /**
     * Billing Weight Container.
     *
     * @param RatedPackageBillingWeight|null $billingWeight
     *
     * @return self
     */
    public function setBillingWeight(?RatedPackageBillingWeight $billingWeight) : self
    {
        $this->initialized['billingWeight'] = true;
        $this->billingWeight = $billingWeight;
        return $this;
    }
    /**
     * 
     *
     * @return list<RatedPackageAccessorial>|null
     */
    public function getAccessorial() : ?array
    {
        return $this->accessorial;
    }
    /**
     * 
     *
     * @param list<RatedPackageAccessorial>|null $accessorial
     *
     * @return self
     */
    public function setAccessorial(?array $accessorial) : self
    {
        $this->initialized['accessorial'] = true;
        $this->accessorial = $accessorial;
        return $this;
    }
    /**
     * 
     *
     * @return list<RatedPackageItemizedCharges>|null
     */
    public function getItemizedCharges() : ?array
    {
        return $this->itemizedCharges;
    }
    /**
     * 
     *
     * @param list<RatedPackageItemizedCharges>|null $itemizedCharges
     *
     * @return self
     */
    public function setItemizedCharges(?array $itemizedCharges) : self
    {
        $this->initialized['itemizedCharges'] = true;
        $this->itemizedCharges = $itemizedCharges;
        return $this;
    }
    /**
     * Negotiated Rates container.  These charges would be returned only when -1) subversion is greater than or equal to 16072) if negotiated rates were requested for GFP shipments and account number is eligible to receive negotiated rates.
     *
     * @return RatedPackageNegotiatedCharges|null
     */
    public function getNegotiatedCharges() : ?RatedPackageNegotiatedCharges
    {
        return $this->negotiatedCharges;
    }
    /**
     * Negotiated Rates container.  These charges would be returned only when -1) subversion is greater than or equal to 16072) if negotiated rates were requested for GFP shipments and account number is eligible to receive negotiated rates.
     *
     * @param RatedPackageNegotiatedCharges|null $negotiatedCharges
     *
     * @return self
     */
    public function setNegotiatedCharges(?RatedPackageNegotiatedCharges $negotiatedCharges) : self
    {
        $this->initialized['negotiatedCharges'] = true;
        $this->negotiatedCharges = $negotiatedCharges;
        return $this;
    }
    /**
     * SimpleRate will be returned if Simple Rate  present in request
     *
     * @return RatedPackageSimpleRate|null
     */
    public function getSimpleRate() : ?RatedPackageSimpleRate
    {
        return $this->simpleRate;
    }
    /**
     * SimpleRate will be returned if Simple Rate  present in request
     *
     * @param RatedPackageSimpleRate|null $simpleRate
     *
     * @return self
     */
    public function setSimpleRate(?RatedPackageSimpleRate $simpleRate) : self
    {
        $this->initialized['simpleRate'] = true;
        $this->simpleRate = $simpleRate;
        return $this;
    }
    /**
     * 
     *
     * @return list<RatedPackageRateModifier>|null
     */
    public function getRateModifier() : ?array
    {
        return $this->rateModifier;
    }
    /**
     * 
     *
     * @param list<RatedPackageRateModifier>|null $rateModifier
     *
     * @return self
     */
    public function setRateModifier(?array $rateModifier) : self
    {
        $this->initialized['rateModifier'] = true;
        $this->rateModifier = $rateModifier;
        return $this;
    }
}