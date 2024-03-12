<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentDeliveryTimeInformation extends \ArrayObject
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
     * Valid values are:02 - Document only 03 - Non-Document04 - WWEF Pallet07 - Domestic PalletIf 04 is included, Worldwide Express Freight and UPS Worldwide Express Freight Midday services (if applicable) will be included in the response.
     *
     * @var string
     */
    protected $packageBillType;
    /**
     * Pickup container.
     *
     * @var DeliveryTimeInformationPickup
     */
    protected $pickup;
    /**
     * 
     *
     * @var DeliveryTimeInformationReturnContractServices[]
     */
    protected $returnContractServices;
    /**
     * Valid values are:02 - Document only 03 - Non-Document04 - WWEF Pallet07 - Domestic PalletIf 04 is included, Worldwide Express Freight and UPS Worldwide Express Freight Midday services (if applicable) will be included in the response.
     *
     * @return string
     */
    public function getPackageBillType() : string
    {
        return $this->packageBillType;
    }
    /**
     * Valid values are:02 - Document only 03 - Non-Document04 - WWEF Pallet07 - Domestic PalletIf 04 is included, Worldwide Express Freight and UPS Worldwide Express Freight Midday services (if applicable) will be included in the response.
     *
     * @param string $packageBillType
     *
     * @return self
     */
    public function setPackageBillType(string $packageBillType) : self
    {
        $this->initialized['packageBillType'] = true;
        $this->packageBillType = $packageBillType;
        return $this;
    }
    /**
     * Pickup container.
     *
     * @return DeliveryTimeInformationPickup
     */
    public function getPickup() : DeliveryTimeInformationPickup
    {
        return $this->pickup;
    }
    /**
     * Pickup container.
     *
     * @param DeliveryTimeInformationPickup $pickup
     *
     * @return self
     */
    public function setPickup(DeliveryTimeInformationPickup $pickup) : self
    {
        $this->initialized['pickup'] = true;
        $this->pickup = $pickup;
        return $this;
    }
    /**
     * 
     *
     * @return DeliveryTimeInformationReturnContractServices[]
     */
    public function getReturnContractServices() : array
    {
        return $this->returnContractServices;
    }
    /**
     * 
     *
     * @param DeliveryTimeInformationReturnContractServices[] $returnContractServices
     *
     * @return self
     */
    public function setReturnContractServices(array $returnContractServices) : self
    {
        $this->initialized['returnContractServices'] = true;
        $this->returnContractServices = $returnContractServices;
        return $this;
    }
}