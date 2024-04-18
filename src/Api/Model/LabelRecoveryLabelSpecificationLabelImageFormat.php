<?php

namespace ShipStream\Ups\Api\Model;

class LabelRecoveryLabelSpecificationLabelImageFormat extends \ArrayObject
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
    * File type that the label is to be generated in. Valid values are:
    - GIF -- label is in HTML format.
    - PDF -- label is in PDF format.
    - ZPL -- Thermal label in ZPL format.
    - EPL -- Thermal label in EPL2 format.
    - SPL -- Thermal label in SPL format.
    
    Default is GIF
    
    *
    * @var string
    */
    protected $code;
    /**
     * Description of the label image format code.
     *
     * @var string
     */
    protected $description;
    /**
    * File type that the label is to be generated in. Valid values are:
    - GIF -- label is in HTML format.
    - PDF -- label is in PDF format.
    - ZPL -- Thermal label in ZPL format.
    - EPL -- Thermal label in EPL2 format.
    - SPL -- Thermal label in SPL format.
    
    Default is GIF
    
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * File type that the label is to be generated in. Valid values are:
    - GIF -- label is in HTML format.
    - PDF -- label is in PDF format.
    - ZPL -- Thermal label in ZPL format.
    - EPL -- Thermal label in EPL2 format.
    - SPL -- Thermal label in SPL format.
    
    Default is GIF
    
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
     * Description of the label image format code.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the label image format code.
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