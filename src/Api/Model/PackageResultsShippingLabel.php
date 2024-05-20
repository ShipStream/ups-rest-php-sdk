<?php

namespace ShipStream\Ups\Api\Model;

class PackageResultsShippingLabel extends \ArrayObject
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
     * The container image format.
     *
     * @var ShippingLabelImageFormat
     */
    protected $imageFormat;
    /**
     * Base 64 encoded graphic image.
     *
     * @var string
     */
    protected $graphicImage;
    /**
     * Base 64 encoded graphic image. Applicable only for Mail Innovations CN22 Combination Forward Label with more than 3 commodities.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<string>
     */
    protected $graphicImagePart;
    /**
     * Base 64 encoded graphic image of the Warsaw text and signature box. EPL2, ZPL and SPL labels. The image will be returned for non-US based shipments. One image will be given per shipment and it will be in the first PackageResults container.
     *
     * @var string
     */
    protected $internationalSignatureGraphicImage;
    /**
     * Base 64 encoded html browser image rendering software. This is only returned for gif and png image formats.
     *
     * @var string
     */
    protected $hTMLImage;
    /**
     * PDF-417 is a two-dimensional barcode, which can store up to about 1,800 printable ASCII characters or 1,100 binary characters per symbol. The symbol is rectangular. The image is Base 64 encoded and returned if the LabelImageFormat code is GIF. Shipment with PRL return service only.
     *
     * @var string
     */
    protected $pDF417;
    /**
     * The container image format.
     *
     * @return ShippingLabelImageFormat
     */
    public function getImageFormat() : ShippingLabelImageFormat
    {
        return $this->imageFormat;
    }
    /**
     * The container image format.
     *
     * @param ShippingLabelImageFormat $imageFormat
     *
     * @return self
     */
    public function setImageFormat(ShippingLabelImageFormat $imageFormat) : self
    {
        $this->initialized['imageFormat'] = true;
        $this->imageFormat = $imageFormat;
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
     * Base 64 encoded graphic image. Applicable only for Mail Innovations CN22 Combination Forward Label with more than 3 commodities.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<string>
     */
    public function getGraphicImagePart() : array
    {
        return $this->graphicImagePart;
    }
    /**
     * Base 64 encoded graphic image. Applicable only for Mail Innovations CN22 Combination Forward Label with more than 3 commodities.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<string> $graphicImagePart
     *
     * @return self
     */
    public function setGraphicImagePart(array $graphicImagePart) : self
    {
        $this->initialized['graphicImagePart'] = true;
        $this->graphicImagePart = $graphicImagePart;
        return $this;
    }
    /**
     * Base 64 encoded graphic image of the Warsaw text and signature box. EPL2, ZPL and SPL labels. The image will be returned for non-US based shipments. One image will be given per shipment and it will be in the first PackageResults container.
     *
     * @return string
     */
    public function getInternationalSignatureGraphicImage() : string
    {
        return $this->internationalSignatureGraphicImage;
    }
    /**
     * Base 64 encoded graphic image of the Warsaw text and signature box. EPL2, ZPL and SPL labels. The image will be returned for non-US based shipments. One image will be given per shipment and it will be in the first PackageResults container.
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
     * Base 64 encoded html browser image rendering software. This is only returned for gif and png image formats.
     *
     * @return string
     */
    public function getHTMLImage() : string
    {
        return $this->hTMLImage;
    }
    /**
     * Base 64 encoded html browser image rendering software. This is only returned for gif and png image formats.
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
     * PDF-417 is a two-dimensional barcode, which can store up to about 1,800 printable ASCII characters or 1,100 binary characters per symbol. The symbol is rectangular. The image is Base 64 encoded and returned if the LabelImageFormat code is GIF. Shipment with PRL return service only.
     *
     * @return string
     */
    public function getPDF417() : string
    {
        return $this->pDF417;
    }
    /**
     * PDF-417 is a two-dimensional barcode, which can store up to about 1,800 printable ASCII characters or 1,100 binary characters per symbol. The symbol is rectangular. The image is Base 64 encoded and returned if the LabelImageFormat code is GIF. Shipment with PRL return service only.
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
}