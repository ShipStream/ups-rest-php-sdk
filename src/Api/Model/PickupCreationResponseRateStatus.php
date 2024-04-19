<?php

namespace ShipStream\Ups\Api\Model;

class PickupCreationResponseRateStatus extends \ArrayObject
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
    * The rating status.
    - 01 = Rate available
    - 02 = Rate not available
    - 03 = Rate not apply
    - 04 = Rate not requested
    
    - If 01 is returned, then OnCallPickupRateResult will also be returned with rate details.
    - If 02 is returned, then OnCallPickupRateResult will not be returned.
    - If 03 is returned, then OnCallPickupRateResult will not be returned. The rate option is not appliable to this return pickup. The requester will not be charged.
    - If 04 is returned, then OnCallPickupRateResult will not be returned. The requester did not ask for rating this on-callpickup.
    *
    * @var string
    */
    protected $code;
    /**
     * The matching description of rating status code (see above).
     *
     * @var string
     */
    protected $description;
    /**
    * The rating status.
    - 01 = Rate available
    - 02 = Rate not available
    - 03 = Rate not apply
    - 04 = Rate not requested
    
    - If 01 is returned, then OnCallPickupRateResult will also be returned with rate details.
    - If 02 is returned, then OnCallPickupRateResult will not be returned.
    - If 03 is returned, then OnCallPickupRateResult will not be returned. The rate option is not appliable to this return pickup. The requester will not be charged.
    - If 04 is returned, then OnCallPickupRateResult will not be returned. The requester did not ask for rating this on-callpickup.
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * The rating status.
    - 01 = Rate available
    - 02 = Rate not available
    - 03 = Rate not apply
    - 04 = Rate not requested
    
    - If 01 is returned, then OnCallPickupRateResult will also be returned with rate details.
    - If 02 is returned, then OnCallPickupRateResult will not be returned.
    - If 03 is returned, then OnCallPickupRateResult will not be returned. The rate option is not appliable to this return pickup. The requester will not be charged.
    - If 04 is returned, then OnCallPickupRateResult will not be returned. The requester did not ask for rating this on-callpickup.
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
     * The matching description of rating status code (see above).
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The matching description of rating status code (see above).
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