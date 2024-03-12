<?php

namespace ShipStream\Ups\Api\Model;

class LabelResultsMailInnovationsLabelImage extends \ArrayObject
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
     * @var MailInnovationsLabelImageLabelImageFormat
     */
    protected $labelImageFormat;
    /**
     * Base 64 encoded graphic image.
     *
     * @var string
     */
    protected $graphicImage;
    /**
     * Base 64 encoded html browser image rendering software. This is only returned for GIF image formats.
     *
     * @var string
     */
    protected $hTMLImage;
    /**
     * PDF-417 is a two-dimensional barcode, which can store up to about 1,800 printable ASCII characters or 1,100 binary characters per symbol. The symbol is rectangular. The PDF417 image will be returned when the shipment is trans-border and the service option is one of the following: Standard, Express Saver or Express Plus.  The image is Base 64 encoded and only returned for GIF image format
     *
     * @var string
     */
    protected $pDF417;
    /**
     * Base 64 encoded graphic image of the Warsaw text and signature box.  EPL2, ZPL and SPL labels. The image will be returned for non-US based shipments. One image will be given per shipment and it will be in the first PackageResults container.
     *
     * @var string
     */
    protected $internationalSignatureGraphicImage;
    /**
    * This is only returned if the label link is requested to be returned and only at the first package result  Applicable for following types of shipments:
    Print/Electronic Return Label
    *
    * @var string
    */
    protected $uRL;
    /**
     * The format of a label image byte stream.
     *
     * @return MailInnovationsLabelImageLabelImageFormat
     */
    public function getLabelImageFormat() : MailInnovationsLabelImageLabelImageFormat
    {
        return $this->labelImageFormat;
    }
    /**
     * The format of a label image byte stream.
     *
     * @param MailInnovationsLabelImageLabelImageFormat $labelImageFormat
     *
     * @return self
     */
    public function setLabelImageFormat(MailInnovationsLabelImageLabelImageFormat $labelImageFormat) : self
    {
        $this->initialized['labelImageFormat'] = true;
        $this->labelImageFormat = $labelImageFormat;
        return $this;
    }
    /**
     * Base 64 encoded graphic image.
     *
     * @return string
     */
    public function getGraphicImage() : string
    {
        return $this->graphicImage;
    }
    /**
     * Base 64 encoded graphic image.
     *
     * @param string $graphicImage
     *
     * @return self
     */
    public function setGraphicImage(string $graphicImage) : self
    {
        $this->initialized['graphicImage'] = true;
        $this->graphicImage = $graphicImage;
        return $this;
    }
    /**
     * Base 64 encoded html browser image rendering software. This is only returned for GIF image formats.
     *
     * @return string
     */
    public function getHTMLImage() : string
    {
        return $this->hTMLImage;
    }
    /**
     * Base 64 encoded html browser image rendering software. This is only returned for GIF image formats.
     *
     * @param string $hTMLImage
     *
     * @return self
     */
    public function setHTMLImage(string $hTMLImage) : self
    {
        $this->initialized['hTMLImage'] = true;
        $this->hTMLImage = $hTMLImage;
        return $this;
    }
    /**
     * PDF-417 is a two-dimensional barcode, which can store up to about 1,800 printable ASCII characters or 1,100 binary characters per symbol. The symbol is rectangular. The PDF417 image will be returned when the shipment is trans-border and the service option is one of the following: Standard, Express Saver or Express Plus.  The image is Base 64 encoded and only returned for GIF image format
     *
     * @return string
     */
    public function getPDF417() : string
    {
        return $this->pDF417;
    }
    /**
     * PDF-417 is a two-dimensional barcode, which can store up to about 1,800 printable ASCII characters or 1,100 binary characters per symbol. The symbol is rectangular. The PDF417 image will be returned when the shipment is trans-border and the service option is one of the following: Standard, Express Saver or Express Plus.  The image is Base 64 encoded and only returned for GIF image format
     *
     * @param string $pDF417
     *
     * @return self
     */
    public function setPDF417(string $pDF417) : self
    {
        $this->initialized['pDF417'] = true;
        $this->pDF417 = $pDF417;
        return $this;
    }
    /**
     * Base 64 encoded graphic image of the Warsaw text and signature box.  EPL2, ZPL and SPL labels. The image will be returned for non-US based shipments. One image will be given per shipment and it will be in the first PackageResults container.
     *
     * @return string
     */
    public function getInternationalSignatureGraphicImage() : string
    {
        return $this->internationalSignatureGraphicImage;
    }
    /**
     * Base 64 encoded graphic image of the Warsaw text and signature box.  EPL2, ZPL and SPL labels. The image will be returned for non-US based shipments. One image will be given per shipment and it will be in the first PackageResults container.
     *
     * @param string $internationalSignatureGraphicImage
     *
     * @return self
     */
    public function setInternationalSignatureGraphicImage(string $internationalSignatureGraphicImage) : self
    {
        $this->initialized['internationalSignatureGraphicImage'] = true;
        $this->internationalSignatureGraphicImage = $internationalSignatureGraphicImage;
        return $this;
    }
    /**
    * This is only returned if the label link is requested to be returned and only at the first package result  Applicable for following types of shipments:
    Print/Electronic Return Label
    *
    * @return string
    */
    public function getURL() : string
    {
        return $this->uRL;
    }
    /**
    * This is only returned if the label link is requested to be returned and only at the first package result  Applicable for following types of shipments:
    Print/Electronic Return Label
    *
    * @param string $uRL
    *
    * @return self
    */
    public function setURL(string $uRL) : self
    {
        $this->initialized['uRL'] = true;
        $this->uRL = $uRL;
        return $this;
    }
}