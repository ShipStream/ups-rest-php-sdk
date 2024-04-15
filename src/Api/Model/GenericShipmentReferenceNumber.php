<?php

namespace ShipStream\Ups\Api\Model;

class GenericShipmentReferenceNumber extends \ArrayObject
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
     * Not used.
     *
     * @var string|null
     */
    protected $barCodeIndicator;
    /**
     * Number tag.
     *
     * @var string|null
     */
    protected $number;
    /**
    * Reflects what will go on the label as the name of the reference. 
    For addition information, refer to the Service Codes table in the Appendix.
    *
    * @var string|null
    */
    protected $code;
    /**
     * Customer supplied reference number. Reference numbers are defined by the shipper and can contain any character string.
     *
     * @var string|null
     */
    protected $value;
    /**
     * Not used.
     *
     * @return string|null
     */
    public function getBarCodeIndicator() : ?string
    {
        return $this->barCodeIndicator;
    }
    /**
     * Not used.
     *
     * @param string|null $barCodeIndicator
     *
     * @return self
     */
    public function setBarCodeIndicator(?string $barCodeIndicator) : self
    {
        $this->initialized['barCodeIndicator'] = true;
        $this->barCodeIndicator = $barCodeIndicator;
        return $this;
    }
    /**
     * Number tag.
     *
     * @return string|null
     */
    public function getNumber() : ?string
    {
        return $this->number;
    }
    /**
     * Number tag.
     *
     * @param string|null $number
     *
     * @return self
     */
    public function setNumber(?string $number) : self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
    * Reflects what will go on the label as the name of the reference. 
    For addition information, refer to the Service Codes table in the Appendix.
    *
    * @return string|null
    */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
    * Reflects what will go on the label as the name of the reference. 
    For addition information, refer to the Service Codes table in the Appendix.
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
     * Customer supplied reference number. Reference numbers are defined by the shipper and can contain any character string.
     *
     * @return string|null
     */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
     * Customer supplied reference number. Reference numbers are defined by the shipper and can contain any character string.
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}