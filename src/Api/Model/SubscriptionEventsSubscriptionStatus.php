<?php

namespace ShipStream\Ups\Api\Model;

class SubscriptionEventsSubscriptionStatus extends \ArrayObject
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
    * Status types of subscription. Valid values:
    - UN – Unknown
    - AT – Activate
    - P – Pending
    - A –Active
    - I – Inactive
    - S - Suspended
    
    *
    * @var string
    */
    protected $code;
    /**
    * Description of a subscription. 
    Valid values: 
    - Unknown (Unknown subscription status)
    - Activate (Ready for the user to activate the subscription)
    - Pending (In the process of waiting for privilege requests authorization)
    - Active (The subscription is in good standing and is active.)
    - Inactive (The subscriber puts the subscription on hold.)
    - Suspended (UPS disables the subscription.)
    *
    * @var string
    */
    protected $description;
    /**
    * Status types of subscription. Valid values:
    - UN – Unknown
    - AT – Activate
    - P – Pending
    - A –Active
    - I – Inactive
    - S - Suspended
    
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Status types of subscription. Valid values:
    - UN – Unknown
    - AT – Activate
    - P – Pending
    - A –Active
    - I – Inactive
    - S - Suspended
    
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
    * Description of a subscription. 
    Valid values: 
    - Unknown (Unknown subscription status)
    - Activate (Ready for the user to activate the subscription)
    - Pending (In the process of waiting for privilege requests authorization)
    - Active (The subscription is in good standing and is active.)
    - Inactive (The subscriber puts the subscription on hold.)
    - Suspended (UPS disables the subscription.)
    *
    * @return string
    */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
    * Description of a subscription. 
    Valid values: 
    - Unknown (Unknown subscription status)
    - Activate (Ready for the user to activate the subscription)
    - Pending (In the process of waiting for privilege requests authorization)
    - Active (The subscription is in good standing and is active.)
    - Inactive (The subscriber puts the subscription on hold.)
    - Suspended (UPS disables the subscription.)
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