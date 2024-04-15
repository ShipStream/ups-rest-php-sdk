<?php

namespace ShipStream\Ups\Api\Model;

class InternationalFormsOtherCharges extends \ArrayObject
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
     * The Monetary value of Other Charges.  Applies to Invoice and Partial Invoice forms only. Required for Invoice forms and optional for Partial Invoice. Valid characters are 0-9 and "." (Decimal point). Limit to 2 digit after the decimal. The maximum length of the field is 15 including "." and can hold up to 2 decimal places.
     *
     * @var string|null
     */
    protected $monetaryValue;
    /**
     * Description of what the other charges are for.  Applies to Invoice and Partial Invoice forms only. Required for Complete Invoice and Optional for Partial Invoice forms.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The Monetary value of Other Charges.  Applies to Invoice and Partial Invoice forms only. Required for Invoice forms and optional for Partial Invoice. Valid characters are 0-9 and "." (Decimal point). Limit to 2 digit after the decimal. The maximum length of the field is 15 including "." and can hold up to 2 decimal places.
     *
     * @return string|null
     */
    public function getMonetaryValue() : ?string
    {
        return $this->monetaryValue;
    }
    /**
     * The Monetary value of Other Charges.  Applies to Invoice and Partial Invoice forms only. Required for Invoice forms and optional for Partial Invoice. Valid characters are 0-9 and "." (Decimal point). Limit to 2 digit after the decimal. The maximum length of the field is 15 including "." and can hold up to 2 decimal places.
     *
     * @param string|null $monetaryValue
     *
     * @return self
     */
    public function setMonetaryValue(?string $monetaryValue) : self
    {
        $this->initialized['monetaryValue'] = true;
        $this->monetaryValue = $monetaryValue;
        return $this;
    }
    /**
     * Description of what the other charges are for.  Applies to Invoice and Partial Invoice forms only. Required for Complete Invoice and Optional for Partial Invoice forms.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Description of what the other charges are for.  Applies to Invoice and Partial Invoice forms only. Required for Complete Invoice and Optional for Partial Invoice forms.
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