<?php

namespace ShipStream\Ups\Api\Model;

class ImagePrintFormat extends \ArrayObject
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
    * Print Format of the image contained in Documents Image.
    Valid values:  
    01 � Laser
    02 - Thermal
    *
    * @var string
    */
    protected $code;
    /**
     * Description of the print format of the image contained in Documents Image.
     *
     * @var string
     */
    protected $description;
    /**
    * Print Format of the image contained in Documents Image.
    Valid values:  
    01 � Laser
    02 - Thermal
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Print Format of the image contained in Documents Image.
    Valid values:  
    01 � Laser
    02 - Thermal
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
     * Description of the print format of the image contained in Documents Image.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the print format of the image contained in Documents Image.
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