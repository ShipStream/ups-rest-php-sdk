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
     * Code representing the format in which the forms are generated. Valid values: PDF = pdf, PNG = png Code for the type of Graphic Image for the High Value Report. Applicable only for ShipmentResponse and ShipAcceptResponse. Valid values: EPL = EPL2 (when user requests label in EPL2 format) SPL = SPL (when user requests label in SPL format) ZPL = ZPL (when user requests label in ZPL format) HTML= HTML (when user requests label in HTML format) 
     *
     * @var string|null
     */
    protected $code;
    /**
     * Description of the image format.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Code representing the format in which the forms are generated. Valid values: PDF = pdf, PNG = png Code for the type of Graphic Image for the High Value Report. Applicable only for ShipmentResponse and ShipAcceptResponse. Valid values: EPL = EPL2 (when user requests label in EPL2 format) SPL = SPL (when user requests label in SPL format) ZPL = ZPL (when user requests label in ZPL format) HTML= HTML (when user requests label in HTML format) 
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Code representing the format in which the forms are generated. Valid values: PDF = pdf, PNG = png Code for the type of Graphic Image for the High Value Report. Applicable only for ShipmentResponse and ShipAcceptResponse. Valid values: EPL = EPL2 (when user requests label in EPL2 format) SPL = SPL (when user requests label in SPL format) ZPL = ZPL (when user requests label in ZPL format) HTML= HTML (when user requests label in HTML format) 
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Description of the image format.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Description of the image format.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}