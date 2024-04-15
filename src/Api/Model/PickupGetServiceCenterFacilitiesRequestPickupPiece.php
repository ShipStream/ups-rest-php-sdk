<?php

namespace ShipStream\Ups\Api\Model;

class PickupGetServiceCenterFacilitiesRequestPickupPiece extends \ArrayObject
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
    * The service code.
    96 = WWEF  Required for WWEF shipments.
    *
    * @var string|null
    */
    protected $serviceCode;
    /**
    * The container type
    03 = PALLET  Required for WWEF shipments.
    *
    * @var string|null
    */
    protected $containerCode;
    /**
    * The service code.
    96 = WWEF  Required for WWEF shipments.
    *
    * @return string|null
    */
    public function getServiceCode() : ?string
    {
        return $this->serviceCode;
    }
    /**
    * The service code.
    96 = WWEF  Required for WWEF shipments.
    *
    * @param string|null $serviceCode
    *
    * @return self
    */
    public function setServiceCode(?string $serviceCode) : self
    {
        $this->initialized['serviceCode'] = true;
        $this->serviceCode = $serviceCode;
        return $this;
    }
    /**
    * The container type
    03 = PALLET  Required for WWEF shipments.
    *
    * @return string|null
    */
    public function getContainerCode() : ?string
    {
        return $this->containerCode;
    }
    /**
    * The container type
    03 = PALLET  Required for WWEF shipments.
    *
    * @param string|null $containerCode
    *
    * @return self
    */
    public function setContainerCode(?string $containerCode) : self
    {
        $this->initialized['containerCode'] = true;
        $this->containerCode = $containerCode;
        return $this;
    }
}