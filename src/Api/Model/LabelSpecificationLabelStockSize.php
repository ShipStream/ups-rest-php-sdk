<?php

namespace ShipStream\Ups\Api\Model;

class LabelSpecificationLabelStockSize extends \ArrayObject
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
     * Height of the label image. For IN, use whole inches.  For EPL2, ZPL and SPL Labels. Only valid values are 6 or 8. Note: Label Image will only scale up to 4 X 6, even when requesting 4 X 8.
     *
     * @var string
     */
    protected $height;
    /**
     * Width of the label image. For IN, use whole inches.  For EPL2, ZPL and SPL Labels. Valid value is 4. Note: Label Image will only scale up to 4 X 6, even when requesting 4 X 8.
     *
     * @var string
     */
    protected $width;
    /**
     * Height of the label image. For IN, use whole inches.  For EPL2, ZPL and SPL Labels. Only valid values are 6 or 8. Note: Label Image will only scale up to 4 X 6, even when requesting 4 X 8.
     *
     * @return string
     */
    public function getHeight() : string
    {
        return $this->height;
    }
    /**
     * Height of the label image. For IN, use whole inches.  For EPL2, ZPL and SPL Labels. Only valid values are 6 or 8. Note: Label Image will only scale up to 4 X 6, even when requesting 4 X 8.
     *
     * @param string $height
     *
     * @return self
     */
    public function setHeight(string $height) : self
    {
        $this->initialized['height'] = true;
        $this->height = $height;
        return $this;
    }
    /**
     * Width of the label image. For IN, use whole inches.  For EPL2, ZPL and SPL Labels. Valid value is 4. Note: Label Image will only scale up to 4 X 6, even when requesting 4 X 8.
     *
     * @return string
     */
    public function getWidth() : string
    {
        return $this->width;
    }
    /**
     * Width of the label image. For IN, use whole inches.  For EPL2, ZPL and SPL Labels. Valid value is 4. Note: Label Image will only scale up to 4 X 6, even when requesting 4 X 8.
     *
     * @param string $width
     *
     * @return self
     */
    public function setWidth(string $width) : self
    {
        $this->initialized['width'] = true;
        $this->width = $width;
        return $this;
    }
}