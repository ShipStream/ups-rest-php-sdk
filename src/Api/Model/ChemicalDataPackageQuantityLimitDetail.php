<?php

namespace ShipStream\Ups\Api\Model;

class ChemicalDataPackageQuantityLimitDetail extends \ArrayObject
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
    * The type of package quantity limit.   It will be returned if applies for a given chemical record.
    
    Valid values:
    CAO - Cargo Aircraft Only
    LTD QTY - Limited Quantity
    GND - Ground
    PAX - Passenger Aircraft
    COMAT CAO - Company Material CAO
    COMAT LTD - Company Material LTD
    COMAT PAX - Company Material PAX
    *
    * @var string|null
    */
    protected $packageQuantityLimitTypeCode;
    /**
     * The numerical value of the mass capacity of the regulated good.  It will be returned if applies for a given chemical record.
     *
     * @var string|null
     */
    protected $quantity;
    /**
    * The unit of measure used for the mass capacity of the regulated good.
     It will be returned if applies for a given chemical record. Example: ml, L, g, mg, kg, cylinder, pound, pint, quart, gallon, ounce etc.
    *
    * @var string|null
    */
    protected $uOM;
    /**
     * The packing instructions related to the chemical record.  It will be returned if applies for a given chemical record.
     *
     * @var string|null
     */
    protected $packagingInstructionCode;
    /**
    * The type of package quantity limit.   It will be returned if applies for a given chemical record.
    
    Valid values:
    CAO - Cargo Aircraft Only
    LTD QTY - Limited Quantity
    GND - Ground
    PAX - Passenger Aircraft
    COMAT CAO - Company Material CAO
    COMAT LTD - Company Material LTD
    COMAT PAX - Company Material PAX
    *
    * @return string|null
    */
    public function getPackageQuantityLimitTypeCode() : ?string
    {
        return $this->packageQuantityLimitTypeCode;
    }
    /**
    * The type of package quantity limit.   It will be returned if applies for a given chemical record.
    
    Valid values:
    CAO - Cargo Aircraft Only
    LTD QTY - Limited Quantity
    GND - Ground
    PAX - Passenger Aircraft
    COMAT CAO - Company Material CAO
    COMAT LTD - Company Material LTD
    COMAT PAX - Company Material PAX
    *
    * @param string|null $packageQuantityLimitTypeCode
    *
    * @return self
    */
    public function setPackageQuantityLimitTypeCode(?string $packageQuantityLimitTypeCode) : self
    {
        $this->initialized['packageQuantityLimitTypeCode'] = true;
        $this->packageQuantityLimitTypeCode = $packageQuantityLimitTypeCode;
        return $this;
    }
    /**
     * The numerical value of the mass capacity of the regulated good.  It will be returned if applies for a given chemical record.
     *
     * @return string|null
     */
    public function getQuantity() : ?string
    {
        return $this->quantity;
    }
    /**
     * The numerical value of the mass capacity of the regulated good.  It will be returned if applies for a given chemical record.
     *
     * @param string|null $quantity
     *
     * @return self
     */
    public function setQuantity(?string $quantity) : self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
    * The unit of measure used for the mass capacity of the regulated good.
     It will be returned if applies for a given chemical record. Example: ml, L, g, mg, kg, cylinder, pound, pint, quart, gallon, ounce etc.
    *
    * @return string|null
    */
    public function getUOM() : ?string
    {
        return $this->uOM;
    }
    /**
    * The unit of measure used for the mass capacity of the regulated good.
     It will be returned if applies for a given chemical record. Example: ml, L, g, mg, kg, cylinder, pound, pint, quart, gallon, ounce etc.
    *
    * @param string|null $uOM
    *
    * @return self
    */
    public function setUOM(?string $uOM) : self
    {
        $this->initialized['uOM'] = true;
        $this->uOM = $uOM;
        return $this;
    }
    /**
     * The packing instructions related to the chemical record.  It will be returned if applies for a given chemical record.
     *
     * @return string|null
     */
    public function getPackagingInstructionCode() : ?string
    {
        return $this->packagingInstructionCode;
    }
    /**
     * The packing instructions related to the chemical record.  It will be returned if applies for a given chemical record.
     *
     * @param string|null $packagingInstructionCode
     *
     * @return self
     */
    public function setPackagingInstructionCode(?string $packagingInstructionCode) : self
    {
        $this->initialized['packagingInstructionCode'] = true;
        $this->packagingInstructionCode = $packagingInstructionCode;
        return $this;
    }
}