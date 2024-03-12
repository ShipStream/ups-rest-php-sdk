<?php

namespace ShipStream\Ups\Api\Model;

class ServiceSearchServiceCode extends \ArrayObject
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
    * Code indicating the different services. Valid values are:
    01-Ground.
    02-Air.
    03-Express
    04-Standard
    05-International (Only avialable July 17)
    *
    * @var string
    */
    protected $code;
    /**
    * Code indicating the different services. Valid values are:
    01-Ground.
    02-Air.
    03-Express
    04-Standard
    05-International (Only avialable July 17)
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Code indicating the different services. Valid values are:
    01-Ground.
    02-Air.
    03-Express
    04-Standard
    05-International (Only avialable July 17)
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