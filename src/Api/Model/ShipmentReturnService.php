<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentReturnService extends \ArrayObject
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
    * Return Service types:
    - 2 = UPS Print and Mail (PNM)
    - 3 = UPS Return Service 1-Attempt (RS1)
    - 5 = UPS Return Service 3-Attempt (RS3)
    - 8 = UPS Electronic Return Label (ERL)
    - 9 = UPS Print Return Label (PRL)
    - 10 = UPS Exchange Print Return Label
    - 11 = UPS Pack & Collect Service 1-Attempt Box 1
    - 12 = UPS Pack & Collect Service 1-Attempt Box 2
    - 13 = UPS Pack & Collect Service 1-Attempt Box 3
    - 14 = UPS Pack & Collect Service 1-Attempt Box 4
    - 15 = UPS Pack & Collect Service 1-Attempt Box 5
    - 16 = UPS Pack & Collect Service 3-Attempt Box 1
    - 17 = UPS Pack & Collect Service 3-Attempt Box 2
    - 18 = UPS Pack & Collect Service 3-Attempt Box 3
    - 19 = UPS Pack & Collect Service 3-Attempt Box 4
    - 20 = UPS Pack & Collect Service 3-Attempt Box 5
    
    *
    * @var string
    */
    protected $code;
    /**
     * Return Service description.
     *
     * @var string
     */
    protected $description;
    /**
    * Return Service types:
    - 2 = UPS Print and Mail (PNM)
    - 3 = UPS Return Service 1-Attempt (RS1)
    - 5 = UPS Return Service 3-Attempt (RS3)
    - 8 = UPS Electronic Return Label (ERL)
    - 9 = UPS Print Return Label (PRL)
    - 10 = UPS Exchange Print Return Label
    - 11 = UPS Pack & Collect Service 1-Attempt Box 1
    - 12 = UPS Pack & Collect Service 1-Attempt Box 2
    - 13 = UPS Pack & Collect Service 1-Attempt Box 3
    - 14 = UPS Pack & Collect Service 1-Attempt Box 4
    - 15 = UPS Pack & Collect Service 1-Attempt Box 5
    - 16 = UPS Pack & Collect Service 3-Attempt Box 1
    - 17 = UPS Pack & Collect Service 3-Attempt Box 2
    - 18 = UPS Pack & Collect Service 3-Attempt Box 3
    - 19 = UPS Pack & Collect Service 3-Attempt Box 4
    - 20 = UPS Pack & Collect Service 3-Attempt Box 5
    
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Return Service types:
    - 2 = UPS Print and Mail (PNM)
    - 3 = UPS Return Service 1-Attempt (RS1)
    - 5 = UPS Return Service 3-Attempt (RS3)
    - 8 = UPS Electronic Return Label (ERL)
    - 9 = UPS Print Return Label (PRL)
    - 10 = UPS Exchange Print Return Label
    - 11 = UPS Pack & Collect Service 1-Attempt Box 1
    - 12 = UPS Pack & Collect Service 1-Attempt Box 2
    - 13 = UPS Pack & Collect Service 1-Attempt Box 3
    - 14 = UPS Pack & Collect Service 1-Attempt Box 4
    - 15 = UPS Pack & Collect Service 1-Attempt Box 5
    - 16 = UPS Pack & Collect Service 3-Attempt Box 1
    - 17 = UPS Pack & Collect Service 3-Attempt Box 2
    - 18 = UPS Pack & Collect Service 3-Attempt Box 3
    - 19 = UPS Pack & Collect Service 3-Attempt Box 4
    - 20 = UPS Pack & Collect Service 3-Attempt Box 5
    
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
     * Return Service description.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Return Service description.
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