<?php

namespace ShipStream\Ups\Api\Model;

class PackagePackaging extends \ArrayObject
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
    * Package types. Values are: 
    01 = UPS Letter 
    02 = Customer Supplied Package 
    03 = Tube 
    04 = PAK 
    21 = UPS Express Box 
    24 = UPS 25KG Box 
    25 = UPS 10KG Box 
    30 = Pallet 
    2a = Small Express Box 
    2b = Medium Express Box 
    2c = Large Express Box 
    56 = Flats 
    57 = Parcels 
    58 = BPM 
    59 = First Class 
    60 = Priority 
    61 = Machineables 
    62 = Irregulars 
    63 = Parcel Post 
    64 = BPM Parcel
    65 = Media Mail 
    66 = BPM Flat 
    67 = Standard Flat.  
    Note: Only packaging type code 02 is applicable to Ground Freight Pricing.
     Package type 24, or 25 is only allowed for shipment without return service. Packaging type must be valid for all the following: ShipTo country or territory, ShipFrom country or territory, a shipment going from ShipTo country or territory to ShipFrom country or territory, all Accessorials at both the shipment and package level, and the shipment service type. UPS will not accept raw wood pallets and please refer the UPS packaging guidelines for pallets on UPS.com.
    *
    * @var string
    */
    protected $code;
    /**
     * Description of packaging type. Examples are letter, customer supplied, express box.
     *
     * @var string
     */
    protected $description;
    /**
    * Package types. Values are: 
    01 = UPS Letter 
    02 = Customer Supplied Package 
    03 = Tube 
    04 = PAK 
    21 = UPS Express Box 
    24 = UPS 25KG Box 
    25 = UPS 10KG Box 
    30 = Pallet 
    2a = Small Express Box 
    2b = Medium Express Box 
    2c = Large Express Box 
    56 = Flats 
    57 = Parcels 
    58 = BPM 
    59 = First Class 
    60 = Priority 
    61 = Machineables 
    62 = Irregulars 
    63 = Parcel Post 
    64 = BPM Parcel
    65 = Media Mail 
    66 = BPM Flat 
    67 = Standard Flat.  
    Note: Only packaging type code 02 is applicable to Ground Freight Pricing.
     Package type 24, or 25 is only allowed for shipment without return service. Packaging type must be valid for all the following: ShipTo country or territory, ShipFrom country or territory, a shipment going from ShipTo country or territory to ShipFrom country or territory, all Accessorials at both the shipment and package level, and the shipment service type. UPS will not accept raw wood pallets and please refer the UPS packaging guidelines for pallets on UPS.com.
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Package types. Values are: 
    01 = UPS Letter 
    02 = Customer Supplied Package 
    03 = Tube 
    04 = PAK 
    21 = UPS Express Box 
    24 = UPS 25KG Box 
    25 = UPS 10KG Box 
    30 = Pallet 
    2a = Small Express Box 
    2b = Medium Express Box 
    2c = Large Express Box 
    56 = Flats 
    57 = Parcels 
    58 = BPM 
    59 = First Class 
    60 = Priority 
    61 = Machineables 
    62 = Irregulars 
    63 = Parcel Post 
    64 = BPM Parcel
    65 = Media Mail 
    66 = BPM Flat 
    67 = Standard Flat.  
    Note: Only packaging type code 02 is applicable to Ground Freight Pricing.
     Package type 24, or 25 is only allowed for shipment without return service. Packaging type must be valid for all the following: ShipTo country or territory, ShipFrom country or territory, a shipment going from ShipTo country or territory to ShipFrom country or territory, all Accessorials at both the shipment and package level, and the shipment service type. UPS will not accept raw wood pallets and please refer the UPS packaging guidelines for pallets on UPS.com.
    *
    * @param string $code
    *
    * @return self
    */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Description of packaging type. Examples are letter, customer supplied, express box.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of packaging type. Examples are letter, customer supplied, express box.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}