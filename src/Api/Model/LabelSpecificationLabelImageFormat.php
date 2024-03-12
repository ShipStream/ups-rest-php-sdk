<?php

namespace ShipStream\Ups\Api\Model;

class LabelSpecificationLabelImageFormat extends \ArrayObject
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
     * Label print method code determines the format in which Labels are to be generated. For EPL2 formatted Labels use EPL, for SPL formatted Labels use SPL, for ZPL formatted Labels use ZPL and for image formats use GIF.  For shipments without return service the valid value is GIF, ZPL, EPL and SPL. For shipments with PRL return service, the valid values are EPL, ZPL, SPL and GIF. For UPS Premier Silver shipment only ZPL is supported.
     *
     * @var string
     */
    protected $code;
    /**
     * Description of the label image format code.
     *
     * @var string
     */
    protected $description;
    /**
     * Label print method code determines the format in which Labels are to be generated. For EPL2 formatted Labels use EPL, for SPL formatted Labels use SPL, for ZPL formatted Labels use ZPL and for image formats use GIF.  For shipments without return service the valid value is GIF, ZPL, EPL and SPL. For shipments with PRL return service, the valid values are EPL, ZPL, SPL and GIF. For UPS Premier Silver shipment only ZPL is supported.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Label print method code determines the format in which Labels are to be generated. For EPL2 formatted Labels use EPL, for SPL formatted Labels use SPL, for ZPL formatted Labels use ZPL and for image formats use GIF.  For shipments without return service the valid value is GIF, ZPL, EPL and SPL. For shipments with PRL return service, the valid values are EPL, ZPL, SPL and GIF. For UPS Premier Silver shipment only ZPL is supported.
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
     * Description of the label image format code.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the label image format code.
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