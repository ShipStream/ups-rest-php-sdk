<?php

namespace ShipStream\Ups\Api\Model;

class RateShipmentPackage extends \ArrayObject
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
     * Packaging Type Container.  N/A
     *
     * @var PackagePackagingType|null
     */
    protected $packagingType;
    /**
     * Dimensions information container. Note: Currently dimensions are not applicable to Ground Freight Pricing.  Length + 2*(Width + Height) must be less than or equal to 165 IN or 330 CM. Required for Heavy Goods service. Package Dimension will be ignored for Simple Rate
     *
     * @var PackageDimensions|null
     */
    protected $dimensions;
    /**
     * Dimensional weight of shipment. Please visit ups.com for rules on calculating. There is one implied decimal place (e.g. 115 = 11.5).  If dimensions are provided, dimensional weight is ignored. For US/PR/CA shipments, dimensional weight is ignored
     *
     * @var PackageDimWeight|null
     */
    protected $dimWeight;
    /**
     * Container to hold package weight information.  Package weight is a required for Ground Freight Pricing shipments and Heavy Goods service. Package Weight will be ignored for Simple Rate.
     *
     * @var PackagePackageWeight|null
     */
    protected $packageWeight;
    /**
     * Container to hold the Commodity information.  It is required if the Ground Freight Pricing Shipment indicator is present in the request.
     *
     * @var PackageCommodity|null
     */
    protected $commodity;
    /**
     * This element does not require a value and if one is entered it will be ignored.  If present, it indicates the shipment will be categorized as a Large Package.
     *
     * @var string|null
     */
    protected $largePackageIndicator;
    /**
     * PackageServiceOptions container.  N/A
     *
     * @var RatePackagePackageServiceOptions|null
     */
    protected $packageServiceOptions;
    /**
     * A flag indicating if the packages require additional handling. True if AdditionalHandlingIndicator tag exists; false otherwise. Additional Handling indicator indicates it"s a non-corrugated package.  Empty Tag.
     *
     * @var string|null
     */
    protected $additionalHandlingIndicator;
    /**
     * SimpleRate Container
     *
     * @var PackageSimpleRate|null
     */
    protected $simpleRate;
    /**
     * UPS Premier  N/A
     *
     * @var RatePackageUPSPremier|null
     */
    protected $uPSPremier;
    /**
     * Presence/Absence Indicator. Any value inside is ignored. It indicates if packge is oversized.  Applicable for UPS Worldwide Economy DDU service
     *
     * @var string|null
     */
    protected $oversizeIndicator;
    /**
     * Presence/Absence Indicator. Any value inside is ignored. It indicates if packge is qualified for minimum billable weight.  Applicable for UPS Worldwide Economy DDU service
     *
     * @var string|null
     */
    protected $minimumBillableWeightIndicator;
    /**
     * Packaging Type Container.  N/A
     *
     * @return PackagePackagingType|null
     */
    public function getPackagingType() : ?PackagePackagingType
    {
        return $this->packagingType;
    }
    /**
     * Packaging Type Container.  N/A
     *
     * @param PackagePackagingType|null $packagingType
     *
     * @return self
     */
    public function setPackagingType(?PackagePackagingType $packagingType) : self
    {
        $this->initialized['packagingType'] = true;
        $this->packagingType = $packagingType;
        return $this;
    }
    /**
     * Dimensions information container. Note: Currently dimensions are not applicable to Ground Freight Pricing.  Length + 2*(Width + Height) must be less than or equal to 165 IN or 330 CM. Required for Heavy Goods service. Package Dimension will be ignored for Simple Rate
     *
     * @return PackageDimensions|null
     */
    public function getDimensions() : ?PackageDimensions
    {
        return $this->dimensions;
    }
    /**
     * Dimensions information container. Note: Currently dimensions are not applicable to Ground Freight Pricing.  Length + 2*(Width + Height) must be less than or equal to 165 IN or 330 CM. Required for Heavy Goods service. Package Dimension will be ignored for Simple Rate
     *
     * @param PackageDimensions|null $dimensions
     *
     * @return self
     */
    public function setDimensions(?PackageDimensions $dimensions) : self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
    /**
     * Dimensional weight of shipment. Please visit ups.com for rules on calculating. There is one implied decimal place (e.g. 115 = 11.5).  If dimensions are provided, dimensional weight is ignored. For US/PR/CA shipments, dimensional weight is ignored
     *
     * @return PackageDimWeight|null
     */
    public function getDimWeight() : ?PackageDimWeight
    {
        return $this->dimWeight;
    }
    /**
     * Dimensional weight of shipment. Please visit ups.com for rules on calculating. There is one implied decimal place (e.g. 115 = 11.5).  If dimensions are provided, dimensional weight is ignored. For US/PR/CA shipments, dimensional weight is ignored
     *
     * @param PackageDimWeight|null $dimWeight
     *
     * @return self
     */
    public function setDimWeight(?PackageDimWeight $dimWeight) : self
    {
        $this->initialized['dimWeight'] = true;
        $this->dimWeight = $dimWeight;
        return $this;
    }
    /**
     * Container to hold package weight information.  Package weight is a required for Ground Freight Pricing shipments and Heavy Goods service. Package Weight will be ignored for Simple Rate.
     *
     * @return PackagePackageWeight|null
     */
    public function getPackageWeight() : ?PackagePackageWeight
    {
        return $this->packageWeight;
    }
    /**
     * Container to hold package weight information.  Package weight is a required for Ground Freight Pricing shipments and Heavy Goods service. Package Weight will be ignored for Simple Rate.
     *
     * @param PackagePackageWeight|null $packageWeight
     *
     * @return self
     */
    public function setPackageWeight(?PackagePackageWeight $packageWeight) : self
    {
        $this->initialized['packageWeight'] = true;
        $this->packageWeight = $packageWeight;
        return $this;
    }
    /**
     * Container to hold the Commodity information.  It is required if the Ground Freight Pricing Shipment indicator is present in the request.
     *
     * @return PackageCommodity|null
     */
    public function getCommodity() : ?PackageCommodity
    {
        return $this->commodity;
    }
    /**
     * Container to hold the Commodity information.  It is required if the Ground Freight Pricing Shipment indicator is present in the request.
     *
     * @param PackageCommodity|null $commodity
     *
     * @return self
     */
    public function setCommodity(?PackageCommodity $commodity) : self
    {
        $this->initialized['commodity'] = true;
        $this->commodity = $commodity;
        return $this;
    }
    /**
     * This element does not require a value and if one is entered it will be ignored.  If present, it indicates the shipment will be categorized as a Large Package.
     *
     * @return string|null
     */
    public function getLargePackageIndicator() : ?string
    {
        return $this->largePackageIndicator;
    }
    /**
     * This element does not require a value and if one is entered it will be ignored.  If present, it indicates the shipment will be categorized as a Large Package.
     *
     * @param string|null $largePackageIndicator
     *
     * @return self
     */
    public function setLargePackageIndicator(?string $largePackageIndicator) : self
    {
        $this->initialized['largePackageIndicator'] = true;
        $this->largePackageIndicator = $largePackageIndicator;
        return $this;
    }
    /**
     * PackageServiceOptions container.  N/A
     *
     * @return RatePackagePackageServiceOptions|null
     */
    public function getPackageServiceOptions() : ?RatePackagePackageServiceOptions
    {
        return $this->packageServiceOptions;
    }
    /**
     * PackageServiceOptions container.  N/A
     *
     * @param RatePackagePackageServiceOptions|null $packageServiceOptions
     *
     * @return self
     */
    public function setPackageServiceOptions(?RatePackagePackageServiceOptions $packageServiceOptions) : self
    {
        $this->initialized['packageServiceOptions'] = true;
        $this->packageServiceOptions = $packageServiceOptions;
        return $this;
    }
    /**
     * A flag indicating if the packages require additional handling. True if AdditionalHandlingIndicator tag exists; false otherwise. Additional Handling indicator indicates it"s a non-corrugated package.  Empty Tag.
     *
     * @return string|null
     */
    public function getAdditionalHandlingIndicator() : ?string
    {
        return $this->additionalHandlingIndicator;
    }
    /**
     * A flag indicating if the packages require additional handling. True if AdditionalHandlingIndicator tag exists; false otherwise. Additional Handling indicator indicates it"s a non-corrugated package.  Empty Tag.
     *
     * @param string|null $additionalHandlingIndicator
     *
     * @return self
     */
    public function setAdditionalHandlingIndicator(?string $additionalHandlingIndicator) : self
    {
        $this->initialized['additionalHandlingIndicator'] = true;
        $this->additionalHandlingIndicator = $additionalHandlingIndicator;
        return $this;
    }
    /**
     * SimpleRate Container
     *
     * @return PackageSimpleRate|null
     */
    public function getSimpleRate() : ?PackageSimpleRate
    {
        return $this->simpleRate;
    }
    /**
     * SimpleRate Container
     *
     * @param PackageSimpleRate|null $simpleRate
     *
     * @return self
     */
    public function setSimpleRate(?PackageSimpleRate $simpleRate) : self
    {
        $this->initialized['simpleRate'] = true;
        $this->simpleRate = $simpleRate;
        return $this;
    }
    /**
     * UPS Premier  N/A
     *
     * @return RatePackageUPSPremier|null
     */
    public function getUPSPremier() : ?RatePackageUPSPremier
    {
        return $this->uPSPremier;
    }
    /**
     * UPS Premier  N/A
     *
     * @param RatePackageUPSPremier|null $uPSPremier
     *
     * @return self
     */
    public function setUPSPremier(?RatePackageUPSPremier $uPSPremier) : self
    {
        $this->initialized['uPSPremier'] = true;
        $this->uPSPremier = $uPSPremier;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. It indicates if packge is oversized.  Applicable for UPS Worldwide Economy DDU service
     *
     * @return string|null
     */
    public function getOversizeIndicator() : ?string
    {
        return $this->oversizeIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. It indicates if packge is oversized.  Applicable for UPS Worldwide Economy DDU service
     *
     * @param string|null $oversizeIndicator
     *
     * @return self
     */
    public function setOversizeIndicator(?string $oversizeIndicator) : self
    {
        $this->initialized['oversizeIndicator'] = true;
        $this->oversizeIndicator = $oversizeIndicator;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. It indicates if packge is qualified for minimum billable weight.  Applicable for UPS Worldwide Economy DDU service
     *
     * @return string|null
     */
    public function getMinimumBillableWeightIndicator() : ?string
    {
        return $this->minimumBillableWeightIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value inside is ignored. It indicates if packge is qualified for minimum billable weight.  Applicable for UPS Worldwide Economy DDU service
     *
     * @param string|null $minimumBillableWeightIndicator
     *
     * @return self
     */
    public function setMinimumBillableWeightIndicator(?string $minimumBillableWeightIndicator) : self
    {
        $this->initialized['minimumBillableWeightIndicator'] = true;
        $this->minimumBillableWeightIndicator = $minimumBillableWeightIndicator;
        return $this;
    }
}