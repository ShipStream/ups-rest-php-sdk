<?php

namespace ShipStream\Ups\Api\Model;

class LabelImageLabelImageFormat extends \ArrayObject
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
     * The format of a label image byte stream.  Code type that the label image is to be generated in. Valid value returned is GIF or PDF
     *
     * @var string
     */
    protected $code;
    /**
     * The format of a label image byte stream.  Code type that the label image is to be generated in. Valid value returned is GIF or PDF
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * The format of a label image byte stream.  Code type that the label image is to be generated in. Valid value returned is GIF or PDF
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
}