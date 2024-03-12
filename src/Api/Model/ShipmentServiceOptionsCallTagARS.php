<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentServiceOptionsCallTagARS extends \ArrayObject
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
     * A reference number associated with the Call Tag service. Required if CallTagARS/Code is 1.
     *
     * @var string
     */
    protected $number;
    /**
    * The type of Call Tag service. 
    Valid values:
    00 - No return service
    01 - UPS Call Tag Service
    02 - UPS Print and Mail
    03 - 1 UPS Pickup Attempt
    04 - UPS Print Return Label
    05 - Online Call Tag (3 UPS Pickup Attempts)
    06 - UPS Electronic Return Label
    08 - UPS Returns on the Web
    *
    * @var string
    */
    protected $code;
    /**
     * A reference number associated with the Call Tag service. Required if CallTagARS/Code is 1.
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * A reference number associated with the Call Tag service. Required if CallTagARS/Code is 1.
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number) : self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
    * The type of Call Tag service. 
    Valid values:
    00 - No return service
    01 - UPS Call Tag Service
    02 - UPS Print and Mail
    03 - 1 UPS Pickup Attempt
    04 - UPS Print Return Label
    05 - Online Call Tag (3 UPS Pickup Attempts)
    06 - UPS Electronic Return Label
    08 - UPS Returns on the Web
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * The type of Call Tag service. 
    Valid values:
    00 - No return service
    01 - UPS Call Tag Service
    02 - UPS Print and Mail
    03 - 1 UPS Pickup Attempt
    04 - UPS Print Return Label
    05 - Online Call Tag (3 UPS Pickup Attempts)
    06 - UPS Electronic Return Label
    08 - UPS Returns on the Web
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
}