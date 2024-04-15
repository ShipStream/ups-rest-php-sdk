<?php

namespace ShipStream\Ups\Api\Model;

class AccessPointInformationAccessPointStatus extends \ArrayObject
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
    * Valid status values are: 
    01-Active-available
    06-Suspended
    07-Active-unavailable
    08-Terminated
    *
    * @var string|null
    */
    protected $code;
    /**
     * Description of status code.
     *
     * @var string|null
     */
    protected $description;
    /**
    * Valid status values are: 
    01-Active-available
    06-Suspended
    07-Active-unavailable
    08-Terminated
    *
    * @return string|null
    */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
    * Valid status values are: 
    01-Active-available
    06-Suspended
    07-Active-unavailable
    08-Terminated
    *
    * @param string|null $code
    *
    * @return self
    */
    public function setCode(?string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Description of status code.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Description of status code.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}