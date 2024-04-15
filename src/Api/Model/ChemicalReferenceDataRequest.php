<?php

namespace ShipStream\Ups\Api\Model;

class ChemicalReferenceDataRequest extends \ArrayObject
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
     * Contains Chemical Reference Data request criteria components.
     *
     * @var ChemicalReferenceDataRequestRequest|null
     */
    protected $request;
    /**
     * This is the ID number (UN/NA/ID) for the specified commodity. UN/NA/ID Identification Number assigned to the specified regulated good. (Include the UN/NA/ID as part of the entry).  At least one of the information - IDNumber or ProperShippingName should be provided to retrieve Chemical Reference Data.
     *
     * @var string|null
     */
    protected $iDNumber;
    /**
     * The Proper Shipping Name assigned by ADR, CFR or IATA.   At least one of the information - IDNumber or ProperShippingName should be provided to retrieve Chemical Reference Data.
     *
     * @var string|null
     */
    protected $properShippingName;
    /**
     * Shipper's six digit account number.  Your UPS Account Number must have correct Dangerous goods contract to successfully use this Webservice.
     *
     * @var string|null
     */
    protected $shipperNumber;
    /**
     * Contains Chemical Reference Data request criteria components.
     *
     * @return ChemicalReferenceDataRequestRequest|null
     */
    public function getRequest() : ?ChemicalReferenceDataRequestRequest
    {
        return $this->request;
    }
    /**
     * Contains Chemical Reference Data request criteria components.
     *
     * @param ChemicalReferenceDataRequestRequest|null $request
     *
     * @return self
     */
    public function setRequest(?ChemicalReferenceDataRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
     * This is the ID number (UN/NA/ID) for the specified commodity. UN/NA/ID Identification Number assigned to the specified regulated good. (Include the UN/NA/ID as part of the entry).  At least one of the information - IDNumber or ProperShippingName should be provided to retrieve Chemical Reference Data.
     *
     * @return string|null
     */
    public function getIDNumber() : ?string
    {
        return $this->iDNumber;
    }
    /**
     * This is the ID number (UN/NA/ID) for the specified commodity. UN/NA/ID Identification Number assigned to the specified regulated good. (Include the UN/NA/ID as part of the entry).  At least one of the information - IDNumber or ProperShippingName should be provided to retrieve Chemical Reference Data.
     *
     * @param string|null $iDNumber
     *
     * @return self
     */
    public function setIDNumber(?string $iDNumber) : self
    {
        $this->initialized['iDNumber'] = true;
        $this->iDNumber = $iDNumber;
        return $this;
    }
    /**
     * The Proper Shipping Name assigned by ADR, CFR or IATA.   At least one of the information - IDNumber or ProperShippingName should be provided to retrieve Chemical Reference Data.
     *
     * @return string|null
     */
    public function getProperShippingName() : ?string
    {
        return $this->properShippingName;
    }
    /**
     * The Proper Shipping Name assigned by ADR, CFR or IATA.   At least one of the information - IDNumber or ProperShippingName should be provided to retrieve Chemical Reference Data.
     *
     * @param string|null $properShippingName
     *
     * @return self
     */
    public function setProperShippingName(?string $properShippingName) : self
    {
        $this->initialized['properShippingName'] = true;
        $this->properShippingName = $properShippingName;
        return $this;
    }
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
}