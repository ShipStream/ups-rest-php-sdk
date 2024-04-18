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
     * @var string
     */
    protected $hTTPUserAgent;
    /**
     * The file format of the label and receipt. Defaults to HTML format if this node does not exist.
     *
     * @var LabelRecoveryLabelSpecificationLabelImageFormat
     */
    protected $labelImageFormat;
    /**
     * Container to hold Label Height and Width information.  Applicable if Label Image Code is ZPL, EPL and SPL. Ignored for other Label Image Code types.
     *
     * @var LabelRecoveryLabelSpecificationLabelStockSize
     */
    protected $labelStockSize;
    /**
     * Browser HTTPUserAgent String. This is the preferred way of identifying GIF image type to be generated.  Required if <Root node>/ LabelSpecification/LabelImageFormat/Code = Gif. Default to Mozilla/4.5 if this field is missing or has invalid value.
     *
     * @return string
     */
    public function getHTTPUserAgent() : string
    {
        return $this->hTTPUserAgent;
    }
    /**
     * Browser HTTPUserAgent String. This is the preferred way of identifying GIF image type to be generated.  Required if <Root node>/ LabelSpecification/LabelImageFormat/Code = Gif. Default to Mozilla/4.5 if this field is missing or has invalid value.
     *
     * @param string $hTTPUserAgent
     *
     * @return self
     */
    public function setHTTPUserAgent(string $hTTPUserAgent) : self
    {
        $this->initialized['hTTPUserAgent'] = true;
        $this->hTTPUserAgent = $hTTPUserAgent;
        return $this;
    }
    /**
     * The file format of the label and receipt. Defaults to HTML format if this node does not exist.
     *
     * @return LabelRecoveryLabelSpecificationLabelImageFormat
     */
    public function getLabelImageFormat() : LabelRecoveryLabelSpecificationLabelImageFormat
    {
        return $this->labelImageFormat;
    }
    /**
     * The file format of the label and receipt. Defaults to HTML format if this node does not exist.
     *
     * @param LabelRecoveryLabelSpecificationLabelImageFormat $labelImageFormat
     *
     * @return self
     */
    public function setLabelImageFormat(LabelRecoveryLabelSpecificationLabelImageFormat $labelImageFormat) : self
    {
        $this->initialized['labelImageFormat'] = true;
        $this->labelImageFormat = $labelImageFormat;
        return $this;
    }
    /**
     * Container to hold Label Height and Width information.  Applicable if Label Image Code is ZPL, EPL and SPL. Ignored for other Label Image Code types.
     *
     * @return LabelRecoveryLabelSpecificationLabelStockSize
     */
    public function getLabelStockSize() : LabelRecoveryLabelSpecificationLabelStockSize
    {
        return $this->labelStockSize;
    }
    /**
     * Container to hold Label Height and Width information.  Applicable if Label Image Code is ZPL, EPL and SPL. Ignored for other Label Image Code types.
     *
     * @param LabelRecoveryLabelSpecificationLabelStockSize $labelStockSize
     *
     * @return self
     */
    public function setLabelStockSize(LabelRecoveryLabelSpecificationLabelStockSize $labelStockSize) : self
    {
        $this->initialized['labelStockSize'] = true;
        $this->labelStockSize = $labelStockSize;
        return $this;
    }
}