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
     * Code type that the label image is to be generated in. Valid value returned is gif, pdf, zpl. Spl, epl2
     *
     * @var string|null
     */
    protected $code;
    /**
     * Code type that the label image is to be generated in. Valid value returned is gif, pdf, zpl. Spl, epl2
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Code type that the label image is to be generated in. Valid value returned is gif, pdf, zpl. Spl, epl2
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
}