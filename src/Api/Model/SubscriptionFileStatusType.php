<?php

namespace ShipStream\Ups\Api\Model;

class SubscriptionFileStatusType extends \ArrayObject
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
    * Status types of subscription file. Valid values:
    - R – Read
    - U - Unread
    
    *
    * @var string
    */
    protected $code;
    /**
     * Description of a subscription file.
     *
     * @var string
     */
    protected $description;
    /**
    * Status types of subscription file. Valid values:
    - R – Read
    - U - Unread
    
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Status types of subscription file. Valid values:
    - R – Read
    - U - Unread
    
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
     * Description of a subscription file.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of a subscription file.
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