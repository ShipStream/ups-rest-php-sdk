<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentService extends \ArrayObject
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
    * Valid values: 
    01 = Next Day Air
    02 = 2nd Day Air
    03 = Ground
    07 = Express
    08 = Expedited
    11 = UPS Standard
    12 = 3 Day Select
    13 = Next Day Air Saver
    14 = UPS Next Day Air Early 17 = UPS Worldwide Economy DDU
    54 = Express Plus
    59 = 2nd Day Air A.M. 
    65 = UPS Saver
    M2 = First Class Mail
    M3 = Priority Mail
    M4 = Expedited MaiI Innovations
    M5 = Priority Mail Innovations
    M6 = Economy Mail Innovations M7 = MaiI Innovations (MI) Returns
    70 = UPS Access Point Economy
    71 = UPS Worldwide Express Freight Midday 72 = UPS Worldwide Economy DDP
    74 = UPS Express 12:00  75 = UPS Heavy Goods
    82 = UPS Today Standard
    83 = UPS Today Dedicated Courier
    84 = UPS Today Intercity
    85 = UPS Today Express
    86 = UPS Today Express Saver
    96 = UPS Worldwide Express Freight. 
    
    Note: Only service code 03 is used for Ground Freight Pricing shipments  The following Services are not available to return shipment: 13, 59, 82, 83, 84, 85, 86
    *
    * @var string
    */
    protected $code;
    /**
     * Description of the service code. Examples are Next Day Air, Worldwide Express, and Ground.
     *
     * @var string
     */
    protected $description;
    /**
    * Valid values: 
    01 = Next Day Air
    02 = 2nd Day Air
    03 = Ground
    07 = Express
    08 = Expedited
    11 = UPS Standard
    12 = 3 Day Select
    13 = Next Day Air Saver
    14 = UPS Next Day Air Early 17 = UPS Worldwide Economy DDU
    54 = Express Plus
    59 = 2nd Day Air A.M. 
    65 = UPS Saver
    M2 = First Class Mail
    M3 = Priority Mail
    M4 = Expedited MaiI Innovations
    M5 = Priority Mail Innovations
    M6 = Economy Mail Innovations M7 = MaiI Innovations (MI) Returns
    70 = UPS Access Point Economy
    71 = UPS Worldwide Express Freight Midday 72 = UPS Worldwide Economy DDP
    74 = UPS Express 12:00  75 = UPS Heavy Goods
    82 = UPS Today Standard
    83 = UPS Today Dedicated Courier
    84 = UPS Today Intercity
    85 = UPS Today Express
    86 = UPS Today Express Saver
    96 = UPS Worldwide Express Freight. 
    
    Note: Only service code 03 is used for Ground Freight Pricing shipments  The following Services are not available to return shipment: 13, 59, 82, 83, 84, 85, 86
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Valid values: 
    01 = Next Day Air
    02 = 2nd Day Air
    03 = Ground
    07 = Express
    08 = Expedited
    11 = UPS Standard
    12 = 3 Day Select
    13 = Next Day Air Saver
    14 = UPS Next Day Air Early 17 = UPS Worldwide Economy DDU
    54 = Express Plus
    59 = 2nd Day Air A.M. 
    65 = UPS Saver
    M2 = First Class Mail
    M3 = Priority Mail
    M4 = Expedited MaiI Innovations
    M5 = Priority Mail Innovations
    M6 = Economy Mail Innovations M7 = MaiI Innovations (MI) Returns
    70 = UPS Access Point Economy
    71 = UPS Worldwide Express Freight Midday 72 = UPS Worldwide Economy DDP
    74 = UPS Express 12:00  75 = UPS Heavy Goods
    82 = UPS Today Standard
    83 = UPS Today Dedicated Courier
    84 = UPS Today Intercity
    85 = UPS Today Express
    86 = UPS Today Express Saver
    96 = UPS Worldwide Express Freight. 
    
    Note: Only service code 03 is used for Ground Freight Pricing shipments  The following Services are not available to return shipment: 13, 59, 82, 83, 84, 85, 86
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
     * Description of the service code. Examples are Next Day Air, Worldwide Express, and Ground.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the service code. Examples are Next Day Air, Worldwide Express, and Ground.
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