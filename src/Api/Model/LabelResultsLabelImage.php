<?php

namespace ShipStream\Ups\Api\Model;

class LabelResultsLabelImage extends \ArrayObject
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
     * The format of a label image byte stream.
     *
     * @var LabelImageLabelImageFormat|null
     */
    protected $labelImageFormat;
    /**
     * Base 64 encoded graphic image.
     *
     * @var string|null
     */
    protected $graphicImage;
    /**
     * Base 64 encoded html browser image rendering software. This is only returned for GIF image formats.
     *
     * @var string|null
     */
    protected $hTMLImage;
    /**
    * PDF-417 is a two-dimensional barcode, which can store up to about 1,800 printable ASCII characters or 1,100 binary characters per symbol. The symbol is rectangular. 
    
    The PDF417 image will be returned when the shipment is trans-border and the service option is one of the following: Standard Express, Saver Express Plus. The image is Base 64 encoded and only returned for GIF image format.
    *
    * @var string|null
    */
    protected $pDF417;
    /**
     * Base 64 encoded graphic image of the Warsaw text and signature box.
     *
     * @var string|null
     */
    protected $internationalSignatureGraphicImage;
    /**
    * This is only returned if the label link is requested to be returned and only at the first package result  Applicable for following types of shipments:
    Print/Electronic Return Label
    Print/Electronic Import Control Label
    Forward shipment except for Mail Innovations Forward
    *
    * @var string|null
    */
    protected $uRL;
    /**
     * The format of a label image byte stream.
     *
     * @return LabelImageLabelImageFormat|null
     */
    public function getLabelImageFormat() : ?LabelImageLabelImageFormat
    {
        return $this->labelImageFormat;
    }
    /**
     * The format of a label image byte stream.
     *
     * @param LabelImageLabelImageFormat|null $labelImageFormat
     *
     * @return self
     */
    public function setLabelImageFormat(?LabelImageLabelImageFormat $labelImageFormat) : self
    {
        $this->initialized['labelImageFormat'] = true;
        $this->labelImageFormat = $labelImageFormat;
        return $this;
    }
    /**
     * Base 64 encoded graphic image.
     *
     * @return string|null
     */
    public function getGraphicImage() : ?string
    {
        return $this->graphicImage;
    }
    /**
     * Base 64 encoded graphic image.
     *
     * @param string|null $graphicImage
     *
     * @return self
     */
    public function setGraphicImage(?string $graphicImage) : self
    {
        $this->initialized['graphicImage'] = true;
        $this->graphicImage = $graphicImage;
        return $this;
    }
    /**
     * Base 64 encoded html browser image rendering software. This is only returned for GIF image formats.
     *
     * @return string|null
     */
    public function getHTMLImage() : ?string
    {
        return $this->hTMLImage;
    }
    /**
     * Base 64 encoded html browser image rendering software. This is only returned for GIF image formats.
     *
     * @param string|null $hTMLImage
     *
     * @return self
     */
    public function setHTMLImage(?string $hTMLImage) : self
    {
        $this->initialized['hTMLImage'] = true;
        $this->hTMLImage = $hTMLImage;
        return $this;
    }
    /**
    * PDF-417 is a two-dimensional barcode, which can store up to about 1,800 printable ASCII characters or 1,100 binary characters per symbol. The symbol is rectangular. 
    
    The PDF417 image will be returned when the shipment is trans-border and the service option is one of the following: Standard Express, Saver Express Plus. The image is Base 64 encoded and only returned for GIF image format.
    *
    * @return string|null
    */
    public function getPDF417() : ?string
    {
        return $this->pDF417;
    }
    /**
    * PDF-417 is a two-dimensional barcode, which can store up to about 1,800 printable ASCII characters or 1,100 binary characters per symbol. The symbol is rectangular. 
    
    The PDF417 image will be returned when the shipment is trans-border and the service option is one of the following: Standard Express, Saver Express Plus. The image is Base 64 encoded and only returned for GIF image format.
    *
    * @param string|null $pDF417
    *
    * @return self
    */
    public function setPDF417(?string $pDF417) : self
    {
        $this->initialized['pDF417'] = true;
        $this->pDF417 = $pDF417;
        return $this;
    }
    /**
     * Base 64 encoded graphic image of the Warsaw text and signature box.
     *
     * @return string|null
     */
    public function getInternationalSignatureGraphicImage() : ?string
    {
        return $this->internationalSignatureGraphicImage;
    }
    /**
     * Base 64 encoded graphic image of the Warsaw text and signature box.
     *
     * @param string|null $internationalSignatureGraphicImage
     *
     * @return self
     */
    public function setInternationalSignatureGraphicImage(?string $internationalSignatureGraphicImage) : self
    {
        $this->initialized['internationalSignatureGraphicImage'] = true;
        $this->internationalSignatureGraphicImage = $internationalSignatureGraphicImage;
        return $this;
    }
    /**
    * This is only returned if the label link is requested to be returned and only at the first package result  Applicable for following types of shipments:
    Print/Electronic Return Label
    Print/Electronic Import Control Label
    Forward shipment except for Mail Innovations Forward
    *
    * @return string|null
    */
    public function getURL() : ?string
    {
        return $this->uRL;
    }
    /**
    * This is only returned if the label link is requested to be returned and only at the first package result  Applicable for following types of shipments:
    Print/Electronic Return Label
    Print/Electronic Import Control Label
    Forward shipment except for Mail Innovations Forward
    *
    * @param string|null $uRL
    *
    * @return self
    */
    public function setURL(?string $uRL) : self
    {
        $this->initialized['uRL'] = true;
        $this->uRL = $uRL;
        return $this;
    }
}