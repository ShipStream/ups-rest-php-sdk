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
     * The container image format.   Applicable only for ShipmentResponse and ShipAcceptResponse.
     *
     * @var ShippingLabelImageFormat|null
     */
    protected $imageFormat;
    /**
     * Base 64 encoded graphic image.   Applicable only for ShipmentResponse and ShipAcceptResponse.
     *
     * @var string|null
     */
    protected $graphicImage;
    /**
     * Base 64 encoded graphic image.  Applicable only for ShipmentResponse and ShipAcceptResponse for Mail Innovations CN22 Combination Forward Label with more than 3 commodities.
     *
     * @var list<string>|null
     */
    protected $graphicImagePart;
    /**
     * Base 64 encoded graphic image of the Warsaw text and signature box. EPL2, ZPL and SPL labels. The image will be returned for non-US based shipments. One image will be given per shipment and it will be in the first PackageResults container.   Applicable only for ShipmentResponse and ShipAcceptResponse.
     *
     * @var string|null
     */
    protected $internationalSignatureGraphicImage;
    /**
     * Base 64 encoded html browser image rendering software. This is only returned for gif and png image formats.   Applicable only for ShipmentResponse and ShipAcceptResponse.
     *
     * @var string|null
     */
    protected $hTMLImage;
    /**
     * PDF-417 is a two-dimensional barcode, which can store up to about 1,800 printable ASCII characters or 1,100 binary characters per symbol. The symbol is rectangular. The image is Base 64 encoded and returned if the LabelImageFormat code is GIF. Shipment with PRL return service only. Applicable only for ShipmentResponse and ShipAcceptResponse.
     *
     * @var string|null
     */
    protected $pDF417;
    /**
     * The container image format.   Applicable only for ShipmentResponse and ShipAcceptResponse.
     *
     * @return ShippingLabelImageFormat|null
     */
    public function getImageFormat() : ?ShippingLabelImageFormat
    {
        return $this->imageFormat;
    }
    /**
     * The container image format.   Applicable only for ShipmentResponse and ShipAcceptResponse.
     *
     * @param ShippingLabelImageFormat|null $imageFormat
     *
     * @return self
     */
    public function setImageFormat(?ShippingLabelImageFormat $imageFormat) : self
    {
        $this->initialized['imageFormat'] = true;
        $this->imageFormat = $imageFormat;
        return $this;
    }
    /**
     * Base 64 encoded graphic image.   Applicable only for ShipmentResponse and ShipAcceptResponse.
     *
     * @return string|null
     */
    public function getGraphicImage() : ?string
    {
        return $this->graphicImage;
    }
    /**
     * Base 64 encoded graphic image.   Applicable only for ShipmentResponse and ShipAcceptResponse.
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
     * Base 64 encoded graphic image.  Applicable only for ShipmentResponse and ShipAcceptResponse for Mail Innovations CN22 Combination Forward Label with more than 3 commodities.
     *
     * @return list<string>|null
     */
    public function getGraphicImagePart() : ?array
    {
        return $this->graphicImagePart;
    }
    /**
     * Base 64 encoded graphic image.  Applicable only for ShipmentResponse and ShipAcceptResponse for Mail Innovations CN22 Combination Forward Label with more than 3 commodities.
     *
     * @param list<string>|null $graphicImagePart
     *
     * @return self
     */
    public function setGraphicImagePart(?array $graphicImagePart) : self
    {
        $this->initialized['graphicImagePart'] = true;
        $this->graphicImagePart = $graphicImagePart;
        return $this;
    }
    /**
     * Base 64 encoded graphic image of the Warsaw text and signature box. EPL2, ZPL and SPL labels. The image will be returned for non-US based shipments. One image will be given per shipment and it will be in the first PackageResults container.   Applicable only for ShipmentResponse and ShipAcceptResponse.
     *
     * @return string|null
     */
    public function getInternationalSignatureGraphicImage() : ?string
    {
        return $this->internationalSignatureGraphicImage;
    }
    /**
     * Base 64 encoded graphic image of the Warsaw text and signature box. EPL2, ZPL and SPL labels. The image will be returned for non-US based shipments. One image will be given per shipment and it will be in the first PackageResults container.   Applicable only for ShipmentResponse and ShipAcceptResponse.
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
     * Base 64 encoded html browser image rendering software. This is only returned for gif and png image formats.   Applicable only for ShipmentResponse and ShipAcceptResponse.
     *
     * @return string|null
     */
    public function getHTMLImage() : ?string
    {
        return $this->hTMLImage;
    }
    /**
     * Base 64 encoded html browser image rendering software. This is only returned for gif and png image formats.   Applicable only for ShipmentResponse and ShipAcceptResponse.
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
     * PDF-417 is a two-dimensional barcode, which can store up to about 1,800 printable ASCII characters or 1,100 binary characters per symbol. The symbol is rectangular. The image is Base 64 encoded and returned if the LabelImageFormat code is GIF. Shipment with PRL return service only. Applicable only for ShipmentResponse and ShipAcceptResponse.
     *
     * @return string|null
     */
    public function getPDF417() : ?string
    {
        return $this->pDF417;
    }
    /**
     * PDF-417 is a two-dimensional barcode, which can store up to about 1,800 printable ASCII characters or 1,100 binary characters per symbol. The symbol is rectangular. The image is Base 64 encoded and returned if the LabelImageFormat code is GIF. Shipment with PRL return service only. Applicable only for ShipmentResponse and ShipAcceptResponse.
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
}