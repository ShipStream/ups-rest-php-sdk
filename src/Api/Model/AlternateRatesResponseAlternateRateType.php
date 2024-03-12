<?php

namespace ShipStream\Ups\Api\Model;

class AlternateRatesResponseAlternateRateType extends \ArrayObject
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
    * Code for the Alternate Rate Type.
    1 = LTL only 
    2 = GFP only 
    3 = GFP and LTL
    *
    * @var string
    */
    protected $code;
    /**
     * Alternate Rate Type description.
     *
     * @var string
     */
    protected $description;
    /**
    * Code for the Alternate Rate Type.
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
    * Code for the Alternate Rate Type.
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
     * Alternate Rate Type description.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Alternate Rate Type description.
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