<?php

namespace ShipStream\Ups\Api\Model;

class InternationalFormsCN22Form extends \ArrayObject
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
    * Provide the valid values: 
    6 = 4X6
    1 = 8.5X11
     Required if the CN22 form container is present.
    *
    * @var string
    */
    protected $labelSize;
    /**
     * Number of label per page. Currently 1 per page is supported.  Required if the CN22 form container is present.
     *
     * @var string
     */
    protected $printsPerPage;
    /**
    * Valid Values are pdf, png, gif, zpl, star, epl2 and spl.
     Required if the CN22 form container is present.
    *
    * @var string
    */
    protected $labelPrintType;
    /**
    * Valid values: 
    1 = GIFT
    2 = DOCUMENTS
    3 = COMMERCIAL SAMPLE
    4 = OTHER  Required if the CN22 form container is present.
    *
    * @var string
    */
    protected $cN22Type;
    /**
     * Required if CN22Type is OTHER.  Required if the CN22 form container is present.
     *
     * @var string
     */
    protected $cN22OtherDescription;
    /**
     * String will replace default "Fold Here" text displayed on the label.
     *
     * @var string
     */
    protected $foldHereText;
    /**
     * 
     *
     * @var list<CN22FormCN22Content>
     */
    protected $cN22Content;
    /**
    * Provide the valid values: 
    6 = 4X6
    1 = 8.5X11
     Required if the CN22 form container is present.
    *
    * @return string
    */
    public function getLabelSize() : string
    {
        return $this->labelSize;
    }
    /**
    * Provide the valid values: 
    6 = 4X6
    1 = 8.5X11
     Required if the CN22 form container is present.
    *
    * @param string $labelSize
    *
    * @return self
    */
    public function setLabelSize(string $labelSize) : self
    {
        $this->initialized['labelSize'] = true;
        $this->labelSize = $labelSize;
        return $this;
    }
    /**
     * Number of label per page. Currently 1 per page is supported.  Required if the CN22 form container is present.
     *
     * @return string
     */
    public function getPrintsPerPage() : string
    {
        return $this->printsPerPage;
    }
    /**
     * Number of label per page. Currently 1 per page is supported.  Required if the CN22 form container is present.
     *
     * @param string $printsPerPage
     *
     * @return self
     */
    public function setPrintsPerPage(string $printsPerPage) : self
    {
        $this->initialized['printsPerPage'] = true;
        $this->printsPerPage = $printsPerPage;
        return $this;
    }
    /**
    * Valid Values are pdf, png, gif, zpl, star, epl2 and spl.
     Required if the CN22 form container is present.
    *
    * @return string
    */
    public function getLabelPrintType() : string
    {
        return $this->labelPrintType;
    }
    /**
    * Valid Values are pdf, png, gif, zpl, star, epl2 and spl.
     Required if the CN22 form container is present.
    *
    * @param string $labelPrintType
    *
    * @return self
    */
    public function setLabelPrintType(string $labelPrintType) : self
    {
        $this->initialized['labelPrintType'] = true;
        $this->labelPrintType = $labelPrintType;
        return $this;
    }
    /**
    * Valid values: 
    1 = GIFT
    2 = DOCUMENTS
    3 = COMMERCIAL SAMPLE
    4 = OTHER  Required if the CN22 form container is present.
    *
    * @return string
    */
    public function getCN22Type() : string
    {
        return $this->cN22Type;
    }
    /**
    * Valid values: 
    1 = GIFT
    2 = DOCUMENTS
    3 = COMMERCIAL SAMPLE
    4 = OTHER  Required if the CN22 form container is present.
    *
    * @param string $cN22Type
    *
    * @return self
    */
    public function setCN22Type(string $cN22Type) : self
    {
        $this->initialized['cN22Type'] = true;
        $this->cN22Type = $cN22Type;
        return $this;
    }
    /**
     * Required if CN22Type is OTHER.  Required if the CN22 form container is present.
     *
     * @return string
     */
    public function getCN22OtherDescription() : string
    {
        return $this->cN22OtherDescription;
    }
    /**
     * Required if CN22Type is OTHER.  Required if the CN22 form container is present.
     *
     * @param string $cN22OtherDescription
     *
     * @return self
     */
    public function setCN22OtherDescription(string $cN22OtherDescription) : self
    {
        $this->initialized['cN22OtherDescription'] = true;
        $this->cN22OtherDescription = $cN22OtherDescription;
        return $this;
    }
    /**
     * String will replace default "Fold Here" text displayed on the label.
     *
     * @return string
     */
    public function getFoldHereText() : string
    {
        return $this->foldHereText;
    }
    /**
     * String will replace default "Fold Here" text displayed on the label.
     *
     * @param string $foldHereText
     *
     * @return self
     */
    public function setFoldHereText(string $foldHereText) : self
    {
        $this->initialized['foldHereText'] = true;
        $this->foldHereText = $foldHereText;
        return $this;
    }
    /**
     * 
     *
     * @return list<CN22FormCN22Content>
     */
    public function getCN22Content() : array
    {
        return $this->cN22Content;
    }
    /**
     * 
     *
     * @param list<CN22FormCN22Content> $cN22Content
     *
     * @return self
     */
    public function setCN22Content(array $cN22Content) : self
    {
        $this->initialized['cN22Content'] = true;
        $this->cN22Content = $cN22Content;
        return $this;
    }
}