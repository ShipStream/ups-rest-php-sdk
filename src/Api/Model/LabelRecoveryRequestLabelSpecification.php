<?php

namespace ShipStream\Ups\Api\Model;

class LabelRecoveryRequestLabelSpecification extends \ArrayObject
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
     * Browser HTTPUserAgent String. This is the preferred way of identifying GIF image type to be generated.  Required if <Root node>/ LabelSpecification/LabelImageFormat/Code = Gif. Default to Mozilla/4.5 if this field is missing or has invalid value.
     *
     * @var string|null
     */
    protected $hTTPUserAgent;
    /**
     * LabelImageFormat Container.
     *
     * @var LabelSpecificationLabelImageFormat|null
     */
    protected $labelImageFormat;
    /**
     * Container for the EPL2, ZPL or SPL label size.  Valid for EPL2, ZPL and SPL Labels.
     *
     * @var LabelSpecificationLabelStockSize|null
     */
    protected $labelStockSize;
    /**
     * Browser HTTPUserAgent String. This is the preferred way of identifying GIF image type to be generated.  Required if <Root node>/ LabelSpecification/LabelImageFormat/Code = Gif. Default to Mozilla/4.5 if this field is missing or has invalid value.
     *
     * @return string|null
     */
    public function getHTTPUserAgent() : ?string
    {
        return $this->hTTPUserAgent;
    }
    /**
     * Browser HTTPUserAgent String. This is the preferred way of identifying GIF image type to be generated.  Required if <Root node>/ LabelSpecification/LabelImageFormat/Code = Gif. Default to Mozilla/4.5 if this field is missing or has invalid value.
     *
     * @param string|null $hTTPUserAgent
     *
     * @return self
     */
    public function setHTTPUserAgent(?string $hTTPUserAgent) : self
    {
        $this->initialized['hTTPUserAgent'] = true;
        $this->hTTPUserAgent = $hTTPUserAgent;
        return $this;
    }
    /**
     * LabelImageFormat Container.
     *
     * @return LabelSpecificationLabelImageFormat|null
     */
    public function getLabelImageFormat() : ?LabelSpecificationLabelImageFormat
    {
        return $this->labelImageFormat;
    }
    /**
     * LabelImageFormat Container.
     *
     * @param LabelSpecificationLabelImageFormat|null $labelImageFormat
     *
     * @return self
     */
    public function setLabelImageFormat(?LabelSpecificationLabelImageFormat $labelImageFormat) : self
    {
        $this->initialized['labelImageFormat'] = true;
        $this->labelImageFormat = $labelImageFormat;
        return $this;
    }
    /**
     * Container for the EPL2, ZPL or SPL label size.  Valid for EPL2, ZPL and SPL Labels.
     *
     * @return LabelSpecificationLabelStockSize|null
     */
    public function getLabelStockSize() : ?LabelSpecificationLabelStockSize
    {
        return $this->labelStockSize;
    }
    /**
     * Container for the EPL2, ZPL or SPL label size.  Valid for EPL2, ZPL and SPL Labels.
     *
     * @param LabelSpecificationLabelStockSize|null $labelStockSize
     *
     * @return self
     */
    public function setLabelStockSize(?LabelSpecificationLabelStockSize $labelStockSize) : self
    {
        $this->initialized['labelStockSize'] = true;
        $this->labelStockSize = $labelStockSize;
        return $this;
    }
}