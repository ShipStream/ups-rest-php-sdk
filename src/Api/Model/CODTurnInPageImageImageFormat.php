<?php

namespace ShipStream\Ups\Api\Model;

class CODTurnInPageImageImageFormat extends \ArrayObject
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
    * Format code of the generated COD Turn In Page.
    
    Valid values:
    - HTML = HTML format.
    
    Only HTML format is supported for COD Turn In Page.
    
    *
    * @var string
    */
    protected $code;
    /**
     * Description of the form image format code.
     *
     * @var string
     */
    protected $description;
    /**
    * Format code of the generated COD Turn In Page.
    
    Valid values:
    - HTML = HTML format.
    
    Only HTML format is supported for COD Turn In Page.
    
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Format code of the generated COD Turn In Page.
    
    Valid values:
    - HTML = HTML format.
    
    Only HTML format is supported for COD Turn In Page.
    
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
     * Description of the form image format code.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the form image format code.
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