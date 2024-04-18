<?php

namespace ShipStream\Ups\Api\Model;

class PackageSimpleRate extends \ArrayObject
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
    * SimpleRate code.  Valid Values
    - XS =  Extra Small
    - S =  Small
    - M = Medium
    - L = Large
    - XL = Extra Large
    
    *
    * @var string
    */
    protected $code;
    /**
     * Simple Rate description of the code above.  Currently ignored if provided in the Request. Length is not validated.
     *
     * @var string
     */
    protected $description;
    /**
    * SimpleRate code.  Valid Values
    - XS =  Extra Small
    - S =  Small
    - M = Medium
    - L = Large
    - XL = Extra Large
    
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * SimpleRate code.  Valid Values
    - XS =  Extra Small
    - S =  Small
    - M = Medium
    - L = Large
    - XL = Extra Large
    
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
     * Simple Rate description of the code above.  Currently ignored if provided in the Request. Length is not validated.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Simple Rate description of the code above.  Currently ignored if provided in the Request. Length is not validated.
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