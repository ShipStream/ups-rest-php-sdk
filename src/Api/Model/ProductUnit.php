<?php

namespace ShipStream\Ups\Api\Model;

class ProductUnit extends \ArrayObject
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
     * Total quantity of each commodity to be shipped, measured in the units specified in the Unit of Measure field.  Required for Invoice forms and optional for Partial Invoice. Must be numeric. Valid characters are 0-9.
     *
     * @var string
     */
    protected $number;
    /**
     * Container tag for the Unit of measurement for the commodity.  Required for Invoice forms and optional for Partial Invoice.
     *
     * @var UnitUnitOfMeasurement
     */
    protected $unitOfMeasurement;
    /**
     * Monetary amount used to specify the worth or price of the commodity. Amount should be greater than zero.  Applies to Invoice and Partial Invoice form. Required for Invoice forms and optional for Partial Invoice. Amount should be greater than zero.  Valid characters are 0-9 and. (Decimal point). Limit to 6 digits after the decimal. The maximum length of the field is 19 including '.' and can hold up to 6 decimal places.(#####.######, ######.#####, #######.####, ########.###, #########.##,##########.#,############). The value of this product  and the other products should be such that the invoice line total which is the sum of ( number*values) of all products should not exceed 9999999999999999.99
     *
     * @var string
     */
    protected $value;
    /**
     * Total quantity of each commodity to be shipped, measured in the units specified in the Unit of Measure field.  Required for Invoice forms and optional for Partial Invoice. Must be numeric. Valid characters are 0-9.
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * Total quantity of each commodity to be shipped, measured in the units specified in the Unit of Measure field.  Required for Invoice forms and optional for Partial Invoice. Must be numeric. Valid characters are 0-9.
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number) : self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * Container tag for the Unit of measurement for the commodity.  Required for Invoice forms and optional for Partial Invoice.
     *
     * @return UnitUnitOfMeasurement
     */
    public function getUnitOfMeasurement() : UnitUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * Container tag for the Unit of measurement for the commodity.  Required for Invoice forms and optional for Partial Invoice.
     *
     * @param UnitUnitOfMeasurement $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(UnitUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
    /**
     * Monetary amount used to specify the worth or price of the commodity. Amount should be greater than zero.  Applies to Invoice and Partial Invoice form. Required for Invoice forms and optional for Partial Invoice. Amount should be greater than zero.  Valid characters are 0-9 and. (Decimal point). Limit to 6 digits after the decimal. The maximum length of the field is 19 including '.' and can hold up to 6 decimal places.(#####.######, ######.#####, #######.####, ########.###, #########.##,##########.#,############). The value of this product  and the other products should be such that the invoice line total which is the sum of ( number*values) of all products should not exceed 9999999999999999.99
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * Monetary amount used to specify the worth or price of the commodity. Amount should be greater than zero.  Applies to Invoice and Partial Invoice form. Required for Invoice forms and optional for Partial Invoice. Amount should be greater than zero.  Valid characters are 0-9 and. (Decimal point). Limit to 6 digits after the decimal. The maximum length of the field is 19 including '.' and can hold up to 6 decimal places.(#####.######, ######.#####, #######.####, ########.###, #########.##,##########.#,############). The value of this product  and the other products should be such that the invoice line total which is the sum of ( number*values) of all products should not exceed 9999999999999999.99
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}