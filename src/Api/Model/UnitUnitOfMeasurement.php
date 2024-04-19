<?php

namespace ShipStream\Ups\Api\Model;

class UnitUnitOfMeasurement extends \ArrayObject
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
    * Code for the Unit of measurement of the commodity units.  Required for Invoice forms and optional for Partial Invoice.
    
    Refer to Product Unit of Measure Codes in the Appendix for valid values.
    
    *
    * @var string
    */
    protected $code;
    /**
     * The Unit of Measure if OTH (Other) is entered as the UnitOfMeasurement code.  Applies to Invoice and Partial Invoice forms.  Conditionally Required for the Invoice and Partial Invoice form if OTH is entered as the units UnitOfMeasurement Code.
     *
     * @var string
     */
    protected $description;
    /**
    * Code for the Unit of measurement of the commodity units.  Required for Invoice forms and optional for Partial Invoice.
    
    Refer to Product Unit of Measure Codes in the Appendix for valid values.
    
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Code for the Unit of measurement of the commodity units.  Required for Invoice forms and optional for Partial Invoice.
    
    Refer to Product Unit of Measure Codes in the Appendix for valid values.
    
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
     * The Unit of Measure if OTH (Other) is entered as the UnitOfMeasurement code.  Applies to Invoice and Partial Invoice forms.  Conditionally Required for the Invoice and Partial Invoice form if OTH is entered as the units UnitOfMeasurement Code.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The Unit of Measure if OTH (Other) is entered as the UnitOfMeasurement code.  Applies to Invoice and Partial Invoice forms.  Conditionally Required for the Invoice and Partial Invoice form if OTH is entered as the units UnitOfMeasurement Code.
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