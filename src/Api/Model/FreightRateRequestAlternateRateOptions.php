<?php

namespace ShipStream\Ups\Api\Model;

class FreightRateRequestAlternateRateOptions extends \ArrayObject
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
    * Code for the alternate rate type requested. 
    Valid values:
    1 = LTL only 
    2 = GFP only
    3 = GFP and LTL
    *
    * @var string
    */
    protected $code;
    /**
     * Description of the alternate rate type requested above.
     *
     * @var string
     */
    protected $description;
    /**
    * Code for the alternate rate type requested. 
    Valid values:
    1 = LTL only 
    2 = GFP only
    3 = GFP and LTL
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Code for the alternate rate type requested. 
    Valid values:
    1 = LTL only 
    2 = GFP only
    3 = GFP and LTL
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
     * Description of the alternate rate type requested above.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the alternate rate type requested above.
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