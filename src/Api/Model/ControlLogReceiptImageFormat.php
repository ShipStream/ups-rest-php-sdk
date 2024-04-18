<?php

namespace ShipStream\Ups\Api\Model;

class ControlLogReceiptImageFormat extends \ArrayObject
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
    * Code for the type of Graphic Image for the High Value Report.
    
    Valid values:
    - EPL = EPL2 (when user requests label in EPL2 format)
    - SPL = SPL (when user requests label in SPL format)
    - ZPL = ZPL (when user requests label in ZPL format)
    - HTML= HTML (when user requests label in HTML format)
    
    *
    * @var string
    */
    protected $code;
    /**
     * Description of the format code.
     *
     * @var string
     */
    protected $description;
    /**
    * Code for the type of Graphic Image for the High Value Report.
    
    Valid values:
    - EPL = EPL2 (when user requests label in EPL2 format)
    - SPL = SPL (when user requests label in SPL format)
    - ZPL = ZPL (when user requests label in ZPL format)
    - HTML= HTML (when user requests label in HTML format)
    
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Code for the type of Graphic Image for the High Value Report.
    
    Valid values:
    - EPL = EPL2 (when user requests label in EPL2 format)
    - SPL = SPL (when user requests label in SPL format)
    - ZPL = ZPL (when user requests label in ZPL format)
    - HTML= HTML (when user requests label in HTML format)
    
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
     * Description of the format code.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the format code.
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