<?php

namespace ShipStream\Ups\Api\Model;

class RateRequestPickupType extends \ArrayObject
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
     * Pickup Type Code.  Valid values: 01 - Daily Pickup (Default - used when an invalid pickup type code is provided)03 - Customer Counter06 - One Time Pickup19 - Letter Center20 - Air Service CenterLength is not validated. When negotiated rates are requested, 07 (onCallAir) will be ignored.Refer to the Rate Types Table in the Appendix for rate type based on Pickup Type and Customer Classification Code.
     *
     * @var string
     */
    protected $code;
    /**
     * Pickup Type Description.  Ignored if provided in the Request.
     *
     * @var string
     */
    protected $description;
    /**
     * Pickup Type Code.  Valid values: 01 - Daily Pickup (Default - used when an invalid pickup type code is provided)03 - Customer Counter06 - One Time Pickup19 - Letter Center20 - Air Service CenterLength is not validated. When negotiated rates are requested, 07 (onCallAir) will be ignored.Refer to the Rate Types Table in the Appendix for rate type based on Pickup Type and Customer Classification Code.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Pickup Type Code.  Valid values: 01 - Daily Pickup (Default - used when an invalid pickup type code is provided)03 - Customer Counter06 - One Time Pickup19 - Letter Center20 - Air Service CenterLength is not validated. When negotiated rates are requested, 07 (onCallAir) will be ignored.Refer to the Rate Types Table in the Appendix for rate type based on Pickup Type and Customer Classification Code.
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
     * Pickup Type Description.  Ignored if provided in the Request.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Pickup Type Description.  Ignored if provided in the Request.
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