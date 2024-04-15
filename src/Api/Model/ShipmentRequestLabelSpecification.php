<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentRequestLabelSpecification extends \ArrayObject
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
     * LabelImageFormat Container.
     *
     * @var LabelSpecificationLabelImageFormat|null
     */
    protected $labelImageFormat;
    /**
     * Browser HTTPUserAgent String. This is the preferred way of identifying GIF image type to be generated.  Required if /ShipmentRequest/LabelSpecificationLabelSpecification/LabelImageFormat/Code = Gif. Default to Mozilla/4.5 if this field is missing or has invalid value.
     *
     * @var string|null
     */
    protected $hTTPUserAgent;
    /**
     * Container for the EPL2, ZPL or SPL label size.  Valid for EPL2, ZPL and SPL Labels.
     *
     * @var LabelSpecificationLabelStockSize|null
     */
    protected $labelStockSize;
    /**
     * 
     *
     * @var list<LabelSpecificationInstruction>|null
     */
    protected $instruction;
    /**
    * Language character set expected on label.
    Valid values:
    dan = Danish (Latin-1)
    nld = Dutch (Latin-1)
    fin = Finnish (Latin-1)
    fra = French (Latin-1)
    deu = German (Latin-1)
    itl = Italian (Latin-1)
    nor = Norwegian (Latin-1)
    pol  = Polish (Latin-2)
    por = Poruguese (Latin-1)
    spa = Spanish (Latin-1) 
    swe = Swedish (Latin-1) 
    ces = Czech (Latin-2)
    hun = Hungarian (Latin-2)
    slk = Slovak (Latin-2)
    rus = Russian (Cyrillic)
    tur = Turkish (Latin-5)
    ron = Romanian (Latin-2)
    bul = Bulgarian (Latin-2)
    est = Estonian (Latin-2)
    ell = Greek (Latin-2)
    lav = Latvian (Latin-2)
    lit = Lithuanian (Latin-2)
    eng = English (Latin-1)  Default is English (Latin-1).
    *
    * @var string|null
    */
    protected $characterSet;
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
     * Browser HTTPUserAgent String. This is the preferred way of identifying GIF image type to be generated.  Required if /ShipmentRequest/LabelSpecificationLabelSpecification/LabelImageFormat/Code = Gif. Default to Mozilla/4.5 if this field is missing or has invalid value.
     *
     * @return string|null
     */
    public function getHTTPUserAgent() : ?string
    {
        return $this->hTTPUserAgent;
    }
    /**
     * Browser HTTPUserAgent String. This is the preferred way of identifying GIF image type to be generated.  Required if /ShipmentRequest/LabelSpecificationLabelSpecification/LabelImageFormat/Code = Gif. Default to Mozilla/4.5 if this field is missing or has invalid value.
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
    /**
     * 
     *
     * @return list<LabelSpecificationInstruction>|null
     */
    public function getInstruction() : ?array
    {
        return $this->instruction;
    }
    /**
     * 
     *
     * @param list<LabelSpecificationInstruction>|null $instruction
     *
     * @return self
     */
    public function setInstruction(?array $instruction) : self
    {
        $this->initialized['instruction'] = true;
        $this->instruction = $instruction;
        return $this;
    }
    /**
    * Language character set expected on label.
    Valid values:
    dan = Danish (Latin-1)
    nld = Dutch (Latin-1)
    fin = Finnish (Latin-1)
    fra = French (Latin-1)
    deu = German (Latin-1)
    itl = Italian (Latin-1)
    nor = Norwegian (Latin-1)
    pol  = Polish (Latin-2)
    por = Poruguese (Latin-1)
    spa = Spanish (Latin-1) 
    swe = Swedish (Latin-1) 
    ces = Czech (Latin-2)
    hun = Hungarian (Latin-2)
    slk = Slovak (Latin-2)
    rus = Russian (Cyrillic)
    tur = Turkish (Latin-5)
    ron = Romanian (Latin-2)
    bul = Bulgarian (Latin-2)
    est = Estonian (Latin-2)
    ell = Greek (Latin-2)
    lav = Latvian (Latin-2)
    lit = Lithuanian (Latin-2)
    eng = English (Latin-1)  Default is English (Latin-1).
    *
    * @return string|null
    */
    public function getCharacterSet() : ?string
    {
        return $this->characterSet;
    }
    /**
    * Language character set expected on label.
    Valid values:
    dan = Danish (Latin-1)
    nld = Dutch (Latin-1)
    fin = Finnish (Latin-1)
    fra = French (Latin-1)
    deu = German (Latin-1)
    itl = Italian (Latin-1)
    nor = Norwegian (Latin-1)
    pol  = Polish (Latin-2)
    por = Poruguese (Latin-1)
    spa = Spanish (Latin-1) 
    swe = Swedish (Latin-1) 
    ces = Czech (Latin-2)
    hun = Hungarian (Latin-2)
    slk = Slovak (Latin-2)
    rus = Russian (Cyrillic)
    tur = Turkish (Latin-5)
    ron = Romanian (Latin-2)
    bul = Bulgarian (Latin-2)
    est = Estonian (Latin-2)
    ell = Greek (Latin-2)
    lav = Latvian (Latin-2)
    lit = Lithuanian (Latin-2)
    eng = English (Latin-1)  Default is English (Latin-1).
    *
    * @param string|null $characterSet
    *
    * @return self
    */
    public function setCharacterSet(?string $characterSet) : self
    {
        $this->initialized['characterSet'] = true;
        $this->characterSet = $characterSet;
        return $this;
    }
}