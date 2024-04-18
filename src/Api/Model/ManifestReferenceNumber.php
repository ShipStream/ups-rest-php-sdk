<?php

namespace ShipStream\Ups\Api\Model;

class ManifestReferenceNumber extends \ArrayObject
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
     * Number tag.
     *
     * @var string
     */
    protected $number;
    /**
     * Reflects what will go on the label as the name of the reference. For additional information, refer to the Reference Codes table in the Appendix.
     *
     * @var string
     */
    protected $code;
    /**
     * Customer supplied reference number. Reference numbers are defined by the shipper and can contain any character string.
     *
     * @var string
     */
    protected $value;
    /**
     * Number tag.
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * Number tag.
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
     * Reflects what will go on the label as the name of the reference. For additional information, refer to the Reference Codes table in the Appendix.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Reflects what will go on the label as the name of the reference. For additional information, refer to the Reference Codes table in the Appendix.
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
     * Customer supplied reference number. Reference numbers are defined by the shipper and can contain any character string.
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * Customer supplied reference number. Reference numbers are defined by the shipper and can contain any character string.
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