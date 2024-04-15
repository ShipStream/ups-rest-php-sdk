<?php

namespace ShipStream\Ups\Api\Model;

class FRSPaymentInformationType extends \ArrayObject
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
     * Payer Type code for FRS Rate request. Valid Values are: 01 = Prepaid 02 = FreightCollect 03 = BillThirdParty
     *
     * @var string|null
     */
    protected $code;
    /**
     * Text description of the code representing the GFP payment type.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Payer Type code for FRS Rate request. Valid Values are: 01 = Prepaid 02 = FreightCollect 03 = BillThirdParty
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Payer Type code for FRS Rate request. Valid Values are: 01 = Prepaid 02 = FreightCollect 03 = BillThirdParty
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
     * Text description of the code representing the GFP payment type.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Text description of the code representing the GFP payment type.
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