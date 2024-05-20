<?php

namespace ShipStream\Ups\Api\Model;

class PackageResultsNegotiatedCharges extends \ArrayObject
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
    * Negotiated Itemized Accessorial and SurCharges.
    
    Negotiated itemized charges are only returned for certain contract-only shipments as well as Worldwide Express Freight, Ground Freight Pricing, and Hazmat movements. Negotiated Itemized Accessorial and Sur Charges are returned only when the subversion element is present and greater than or equal to 1607.
    
    Package level itemized charges are only returned for US domestic movements
    
    **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
    
    *
    * @var list<NegotiatedChargesItemizedCharges>
    */
    protected $itemizedCharges;
    /**
    * Negotiated Itemized Accessorial and SurCharges.
    
    Negotiated itemized charges are only returned for certain contract-only shipments as well as Worldwide Express Freight, Ground Freight Pricing, and Hazmat movements. Negotiated Itemized Accessorial and Sur Charges are returned only when the subversion element is present and greater than or equal to 1607.
    
    Package level itemized charges are only returned for US domestic movements
    
    **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
    
    *
    * @return list<NegotiatedChargesItemizedCharges>
    */
    public function getItemizedCharges() : array
    {
        return $this->itemizedCharges;
    }
    /**
    * Negotiated Itemized Accessorial and SurCharges.
    
    Negotiated itemized charges are only returned for certain contract-only shipments as well as Worldwide Express Freight, Ground Freight Pricing, and Hazmat movements. Negotiated Itemized Accessorial and Sur Charges are returned only when the subversion element is present and greater than or equal to 1607.
    
    Package level itemized charges are only returned for US domestic movements
    
    **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
    
    *
    * @param list<NegotiatedChargesItemizedCharges> $itemizedCharges
    *
    * @return self
    */
    public function setItemizedCharges(array $itemizedCharges) : self
    {
        $this->initialized['itemizedCharges'] = true;
        $this->itemizedCharges = $itemizedCharges;
        return $this;
    }
}