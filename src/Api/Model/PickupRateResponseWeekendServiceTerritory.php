<?php

namespace ShipStream\Ups\Api\Model;

class PickupRateResponseWeekendServiceTerritory extends \ArrayObject
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
    * Indicates if the pickup address qualifies for WST (Weekend Service Territory). Returned if the pickup date is Saturday and subversion greater or equal to 2007.                                                                                                                                                                                                                          Valid Values:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    Y = Saturday WST
    N = Non-Saturday WST
    *
    * @var string|null
    */
    protected $satWST;
    /**
    * Indicates if the pickup address qualifies for WST (Weekend Service Territory). Returned if the pickup date is Sunday and subversion greater or equal to 2007.                                                                                                                                                                                                                          Valid Values:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    Y = Sunday WST
    N = Non-Sunday WST
    *
    * @var string|null
    */
    protected $sunWST;
    /**
    * Indicates if the pickup address qualifies for WST (Weekend Service Territory). Returned if the pickup date is Saturday and subversion greater or equal to 2007.                                                                                                                                                                                                                          Valid Values:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    Y = Saturday WST
    N = Non-Saturday WST
    *
    * @return string|null
    */
    public function getSatWST() : ?string
    {
        return $this->satWST;
    }
    /**
    * Indicates if the pickup address qualifies for WST (Weekend Service Territory). Returned if the pickup date is Saturday and subversion greater or equal to 2007.                                                                                                                                                                                                                          Valid Values:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    Y = Saturday WST
    N = Non-Saturday WST
    *
    * @param string|null $satWST
    *
    * @return self
    */
    public function setSatWST(?string $satWST) : self
    {
        $this->initialized['satWST'] = true;
        $this->satWST = $satWST;
        return $this;
    }
    /**
    * Indicates if the pickup address qualifies for WST (Weekend Service Territory). Returned if the pickup date is Sunday and subversion greater or equal to 2007.                                                                                                                                                                                                                          Valid Values:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    Y = Sunday WST
    N = Non-Sunday WST
    *
    * @return string|null
    */
    public function getSunWST() : ?string
    {
        return $this->sunWST;
    }
    /**
    * Indicates if the pickup address qualifies for WST (Weekend Service Territory). Returned if the pickup date is Sunday and subversion greater or equal to 2007.                                                                                                                                                                                                                          Valid Values:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    Y = Sunday WST
    N = Non-Sunday WST
    *
    * @param string|null $sunWST
    *
    * @return self
    */
    public function setSunWST(?string $sunWST) : self
    {
        $this->initialized['sunWST'] = true;
        $this->sunWST = $sunWST;
        return $this;
    }
}