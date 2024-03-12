<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentServiceOptionsReturnService extends \ArrayObject
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
     * Code for type of Return shipment. Valid values are:'2' = UPS Print and Mail Return Label '3' =UPS One-Attempt Return Label'5' = UPS Three Attempt Return Label'8' = UPS Electronic Return Label'9' = UPS Print Return Label'10' = UPS Exchange Print Return Label                            '11' = UPS Pack & Collect Service 1-Attempt Box 1 '12' = UPS Pack & Collect Service 1-Attempt Box 2 '13' = UPS Pack & Collect Service 1-Attempt Box 3 '14' = UPS Pack & Collect Service 1-Attempt Box 4 '15' = UPS Pack & Collect Service 1-Attempt Box 5 '16' = UPS Pack & Collect Service 3-Attempt Box 1 '17' = UPS Pack & Collect Service 3-Attempt Box 2 '18' = UPS Pack & Collect Service 3-Attempt Box 3 '19' = UPS Pack & Collect Service 3-Attempt Box 4 '20' = UPS Pack & Collect Service 3-Attempt Box 5  10 = UPS Exchange Print Return Label and 5 = UPS Three Attempt Return Label are not valid for UPS WorldWide Express Freight and UPS Worldwide Express Freight Midday Services. 3 = UPS One-Attempt Return Label is not valid return service with UPS Premium Care accessorial.
     *
     * @var string
     */
    protected $code;
    /**
     * Description for type of Return Service.
     *
     * @var string
     */
    protected $description;
    /**
     * Code for type of Return shipment. Valid values are:'2' = UPS Print and Mail Return Label '3' =UPS One-Attempt Return Label'5' = UPS Three Attempt Return Label'8' = UPS Electronic Return Label'9' = UPS Print Return Label'10' = UPS Exchange Print Return Label                            '11' = UPS Pack & Collect Service 1-Attempt Box 1 '12' = UPS Pack & Collect Service 1-Attempt Box 2 '13' = UPS Pack & Collect Service 1-Attempt Box 3 '14' = UPS Pack & Collect Service 1-Attempt Box 4 '15' = UPS Pack & Collect Service 1-Attempt Box 5 '16' = UPS Pack & Collect Service 3-Attempt Box 1 '17' = UPS Pack & Collect Service 3-Attempt Box 2 '18' = UPS Pack & Collect Service 3-Attempt Box 3 '19' = UPS Pack & Collect Service 3-Attempt Box 4 '20' = UPS Pack & Collect Service 3-Attempt Box 5  10 = UPS Exchange Print Return Label and 5 = UPS Three Attempt Return Label are not valid for UPS WorldWide Express Freight and UPS Worldwide Express Freight Midday Services. 3 = UPS One-Attempt Return Label is not valid return service with UPS Premium Care accessorial.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Code for type of Return shipment. Valid values are:'2' = UPS Print and Mail Return Label '3' =UPS One-Attempt Return Label'5' = UPS Three Attempt Return Label'8' = UPS Electronic Return Label'9' = UPS Print Return Label'10' = UPS Exchange Print Return Label                            '11' = UPS Pack & Collect Service 1-Attempt Box 1 '12' = UPS Pack & Collect Service 1-Attempt Box 2 '13' = UPS Pack & Collect Service 1-Attempt Box 3 '14' = UPS Pack & Collect Service 1-Attempt Box 4 '15' = UPS Pack & Collect Service 1-Attempt Box 5 '16' = UPS Pack & Collect Service 3-Attempt Box 1 '17' = UPS Pack & Collect Service 3-Attempt Box 2 '18' = UPS Pack & Collect Service 3-Attempt Box 3 '19' = UPS Pack & Collect Service 3-Attempt Box 4 '20' = UPS Pack & Collect Service 3-Attempt Box 5  10 = UPS Exchange Print Return Label and 5 = UPS Three Attempt Return Label are not valid for UPS WorldWide Express Freight and UPS Worldwide Express Freight Midday Services. 3 = UPS One-Attempt Return Label is not valid return service with UPS Premium Care accessorial.
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
     * Description for type of Return Service.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description for type of Return Service.
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