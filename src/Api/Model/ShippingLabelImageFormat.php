<?php

namespace ShipStream\Ups\Api\Model;

class ShippingLabelImageFormat extends \ArrayObject
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
     * Label image code that the labels are generated. Valid values: EPL = EPL2 SPL = SPL ZPL = ZPL GIF = gif images PNG = PNG images. Only EPL, SPL, ZPL and GIF are currently supported. For multi piece COD shipments, the label image format for the first package will always be a GIF for any form of label requested.
     *
     * @var string
     */
    protected $code;
    /**
     * Description of the image format.
     *
     * @var string
     */
    protected $description;
    /**
     * Label image code that the labels are generated. Valid values: EPL = EPL2 SPL = SPL ZPL = ZPL GIF = gif images PNG = PNG images. Only EPL, SPL, ZPL and GIF are currently supported. For multi piece COD shipments, the label image format for the first package will always be a GIF for any form of label requested.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Label image code that the labels are generated. Valid values: EPL = EPL2 SPL = SPL ZPL = ZPL GIF = gif images PNG = PNG images. Only EPL, SPL, ZPL and GIF are currently supported. For multi piece COD shipments, the label image format for the first package will always be a GIF for any form of label requested.
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
     * Description of the image format.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the image format.
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