<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentPackage extends \ArrayObject
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
     * Merchandise description of package.  Required for shipment with return service.
     *
     * @var string
     */
    protected $description;
    /**
     * Description of articles & special marks. Applicable for Air Freight only
     *
     * @var string
     */
    protected $palletDescription;
    /**
     * Number of Pieces. Applicable for Air Freight only
     *
     * @var string
     */
    protected $numOfPieces;
    /**
     * Unit price of the commodity. Applicable for Air Freight only  Limit to 2 digit after the decimal. The maximum length of the field is 12 including '.' and can hold up to 2 decimal place. (e.g. 999999999.99)
     *
     * @var string
     */
    protected $unitPrice;
    /**
     * Packaging container.  Container for Packaging Type.
     *
     * @var PackagePackaging
     */
    protected $packaging;
    /**
     * Dimensions information container. Note: Currently dimensions are not applicable to Ground Freight Pricing.  Length + 2*(Width + Height) must be less than or equal to 165 IN or 330 CM. Required for Heavy Goods service. Package Dimension will be ignored for Simple Rate
     *
     * @var PackageDimensions
     */
    protected $dimensions;
    /**
     * Dimensional weight of shipment. Please visit ups.com for rules on calculating. There is one implied decimal place (e.g. 115 = 11.5).  If dimensions are provided, dimensional weight is ignored. For US/PR/CA shipments, dimensional weight is ignored
     *
     * @var PackageDimWeight
     */
    protected $dimWeight;
    /**
     * Container to hold package weight information.  Package weight is a required for Ground Freight Pricing shipments and Heavy Goods service. Package Weight will be ignored for Simple Rate.
     *
     * @var PackagePackageWeight
     */
    protected $packageWeight;
    /**
    * Presence of the indicator mentions that the package is Large Package.
    
    This is an empty tag, any value inside is ignored.
    *
    * @var string
    */
    protected $largePackageIndicator;
    /**
     * Presence/Absence Indicator. Any value is ignored. If present, indicates that the package is over size.   Applicable for UPS Worldwide Economy DDU service.
     *
     * @var string
     */
    protected $oversizeIndicator;
    /**
     * Presence/Absence Indicator. Any value is ignored. If present, indicates that the package is qualified for minimum billable weight.   Applicable for UPS Worldwide Economy DDU service.
     *
     * @var string
     */
    protected $minimumBillableWeightIndicator;
    /**
     * 
     *
     * @var list<PackageReferenceNumber>
     */
    protected $referenceNumber;
    /**
     * Additional Handling Required. The presence indicates additional handling is required, the absence indicates no additional handling is required. Additional Handling indicator indicates it's a non-corrugated package.
     *
     * @var string
     */
    protected $additionalHandlingIndicator;
    /**
     * SimpleRate Container
     *
     * @var PackageSimpleRate
     */
    protected $simpleRate;
    /**
     * UPS Premier Container.
     *
     * @var PackageUPSPremier
     */
    protected $uPSPremier;
    /**
     * Package Service Options container.
     *
     * @var PackagePackageServiceOptions
     */
    protected $packageServiceOptions;
    /**
     * Container to hold the Commodity information.  It is required if the Ground Freight Pricing Shipment indicator is present in the request.
     *
     * @var PackageCommodity
     */
    protected $commodity;
    /**
     * Required when number of hazmat containers in a package is greater than 1. It indicates whether all the hazmat materials are kept in a single box or multiple boxes.  Required when number of hazmat container in a package is greater than 1.
     *
     * @var PackageHazMatPackageInformation
     */
    protected $hazMatPackageInformation;
    /**
     * Merchandise description of package.  Required for shipment with return service.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Merchandise description of package.  Required for shipment with return service.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Description of articles & special marks. Applicable for Air Freight only
     *
     * @return string
     */
    public function getPalletDescription() : string
    {
        return $this->palletDescription;
    }
    /**
     * Description of articles & special marks. Applicable for Air Freight only
     *
     * @param string $palletDescription
     *
     * @return self
     */
    public function setPalletDescription(string $palletDescription) : self
    {
        $this->initialized['palletDescription'] = true;
        $this->palletDescription = $palletDescription;
        return $this;
    }
    /**
     * Number of Pieces. Applicable for Air Freight only
     *
     * @return string
     */
    public function getNumOfPieces() : string
    {
        return $this->numOfPieces;
    }
    /**
     * Number of Pieces. Applicable for Air Freight only
     *
     * @param string $numOfPieces
     *
     * @return self
     */
    public function setNumOfPieces(string $numOfPieces) : self
    {
        $this->initialized['numOfPieces'] = true;
        $this->numOfPieces = $numOfPieces;
        return $this;
    }
    /**
     * Unit price of the commodity. Applicable for Air Freight only  Limit to 2 digit after the decimal. The maximum length of the field is 12 including '.' and can hold up to 2 decimal place. (e.g. 999999999.99)
     *
     * @return string
     */
    public function getUnitPrice() : string
    {
        return $this->unitPrice;
    }
    /**
     * Unit price of the commodity. Applicable for Air Freight only  Limit to 2 digit after the decimal. The maximum length of the field is 12 including '.' and can hold up to 2 decimal place. (e.g. 999999999.99)
     *
     * @param string $unitPrice
     *
     * @return self
     */
    public function setUnitPrice(string $unitPrice) : self
    {
        $this->initialized['unitPrice'] = true;
        $this->unitPrice = $unitPrice;
        return $this;
    }
    /**
     * Packaging container.  Container for Packaging Type.
     *
     * @return PackagePackaging
     */
    public function getPackaging() : PackagePackaging
    {
        return $this->packaging;
    }
    /**
     * Packaging container.  Container for Packaging Type.
     *
     * @param PackagePackaging $packaging
     *
     * @return self
     */
    public function setPackaging(PackagePackaging $packaging) : self
    {
        $this->initialized['packaging'] = true;
        $this->packaging = $packaging;
        return $this;
    }
    /**
     * Dimensions information container. Note: Currently dimensions are not applicable to Ground Freight Pricing.  Length + 2*(Width + Height) must be less than or equal to 165 IN or 330 CM. Required for Heavy Goods service. Package Dimension will be ignored for Simple Rate
     *
     * @return PackageDimensions
     */
    public function getDimensions() : PackageDimensions
    {
        return $this->dimensions;
    }
    /**
     * Dimensions information container. Note: Currently dimensions are not applicable to Ground Freight Pricing.  Length + 2*(Width + Height) must be less than or equal to 165 IN or 330 CM. Required for Heavy Goods service. Package Dimension will be ignored for Simple Rate
     *
     * @param PackageDimensions $dimensions
     *
     * @return self
     */
    public function setDimensions(PackageDimensions $dimensions) : self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
    /**
     * Dimensional weight of shipment. Please visit ups.com for rules on calculating. There is one implied decimal place (e.g. 115 = 11.5).  If dimensions are provided, dimensional weight is ignored. For US/PR/CA shipments, dimensional weight is ignored
     *
     * @return PackageDimWeight
     */
    public function getDimWeight() : PackageDimWeight
    {
        return $this->dimWeight;
    }
    /**
     * Dimensional weight of shipment. Please visit ups.com for rules on calculating. There is one implied decimal place (e.g. 115 = 11.5).  If dimensions are provided, dimensional weight is ignored. For US/PR/CA shipments, dimensional weight is ignored
     *
     * @param PackageDimWeight $dimWeight
     *
     * @return self
     */
    public function setDimWeight(PackageDimWeight $dimWeight) : self
    {
        $this->initialized['dimWeight'] = true;
        $this->dimWeight = $dimWeight;
        return $this;
    }
    /**
     * Container to hold package weight information.  Package weight is a required for Ground Freight Pricing shipments and Heavy Goods service. Package Weight will be ignored for Simple Rate.
     *
     * @return PackagePackageWeight
     */
    public function getPackageWeight() : PackagePackageWeight
    {
        return $this->packageWeight;
    }
    /**
     * Container to hold package weight information.  Package weight is a required for Ground Freight Pricing shipments and Heavy Goods service. Package Weight will be ignored for Simple Rate.
     *
     * @param PackagePackageWeight $packageWeight
     *
     * @return self
     */
    public function setPackageWeight(PackagePackageWeight $packageWeight) : self
    {
        $this->initialized['packageWeight'] = true;
        $this->packageWeight = $packageWeight;
        return $this;
    }
    /**
    * Presence of the indicator mentions that the package is Large Package.
    
    This is an empty tag, any value inside is ignored.
    *
    * @return string
    */
    public function getLargePackageIndicator() : string
    {
        return $this->largePackageIndicator;
    }
    /**
    * Presence of the indicator mentions that the package is Large Package.
    
    This is an empty tag, any value inside is ignored.
    *
    * @param string $largePackageIndicator
    *
    * @return self
    */
    public function setLargePackageIndicator(string $largePackageIndicator) : self
    {
        $this->initialized['largePackageIndicator'] = true;
        $this->largePackageIndicator = $largePackageIndicator;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value is ignored. If present, indicates that the package is over size.   Applicable for UPS Worldwide Economy DDU service.
     *
     * @return string
     */
    public function getOversizeIndicator() : string
    {
        return $this->oversizeIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value is ignored. If present, indicates that the package is over size.   Applicable for UPS Worldwide Economy DDU service.
     *
     * @param string $oversizeIndicator
     *
     * @return self
     */
    public function setOversizeIndicator(string $oversizeIndicator) : self
    {
        $this->initialized['oversizeIndicator'] = true;
        $this->oversizeIndicator = $oversizeIndicator;
        return $this;
    }
    /**
     * Presence/Absence Indicator. Any value is ignored. If present, indicates that the package is qualified for minimum billable weight.   Applicable for UPS Worldwide Economy DDU service.
     *
     * @return string
     */
    public function getMinimumBillableWeightIndicator() : string
    {
        return $this->minimumBillableWeightIndicator;
    }
    /**
     * Presence/Absence Indicator. Any value is ignored. If present, indicates that the package is qualified for minimum billable weight.   Applicable for UPS Worldwide Economy DDU service.
     *
     * @param string $minimumBillableWeightIndicator
     *
     * @return self
     */
    public function setMinimumBillableWeightIndicator(string $minimumBillableWeightIndicator) : self
    {
        $this->initialized['minimumBillableWeightIndicator'] = true;
        $this->minimumBillableWeightIndicator = $minimumBillableWeightIndicator;
        return $this;
    }
    /**
     * 
     *
     * @return list<PackageReferenceNumber>
     */
    public function getReferenceNumber() : array
    {
        return $this->referenceNumber;
    }
    /**
     * 
     *
     * @param list<PackageReferenceNumber> $referenceNumber
     *
     * @return self
     */
    public function setReferenceNumber(array $referenceNumber) : self
    {
        $this->initialized['referenceNumber'] = true;
        $this->referenceNumber = $referenceNumber;
        return $this;
    }
    /**
     * Additional Handling Required. The presence indicates additional handling is required, the absence indicates no additional handling is required. Additional Handling indicator indicates it's a non-corrugated package.
     *
     * @return string
     */
    public function getAdditionalHandlingIndicator() : string
    {
        return $this->additionalHandlingIndicator;
    }
    /**
     * Additional Handling Required. The presence indicates additional handling is required, the absence indicates no additional handling is required. Additional Handling indicator indicates it's a non-corrugated package.
     *
     * @param string $additionalHandlingIndicator
     *
     * @return self
     */
    public function setAdditionalHandlingIndicator(string $additionalHandlingIndicator) : self
    {
        $this->initialized['additionalHandlingIndicator'] = true;
        $this->additionalHandlingIndicator = $additionalHandlingIndicator;
        return $this;
    }
    /**
     * SimpleRate Container
     *
     * @return PackageSimpleRate
     */
    public function getSimpleRate() : PackageSimpleRate
    {
        return $this->simpleRate;
    }
    /**
     * SimpleRate Container
     *
     * @param PackageSimpleRate $simpleRate
     *
     * @return self
     */
    public function setSimpleRate(PackageSimpleRate $simpleRate) : self
    {
        $this->initialized['simpleRate'] = true;
        $this->simpleRate = $simpleRate;
        return $this;
    }
    /**
     * UPS Premier Container.
     *
     * @return PackageUPSPremier
     */
    public function getUPSPremier() : PackageUPSPremier
    {
        return $this->uPSPremier;
    }
    /**
     * UPS Premier Container.
     *
     * @param PackageUPSPremier $uPSPremier
     *
     * @return self
     */
    public function setUPSPremier(PackageUPSPremier $uPSPremier) : self
    {
        $this->initialized['uPSPremier'] = true;
        $this->uPSPremier = $uPSPremier;
        return $this;
    }
    /**
     * Package Service Options container.
     *
     * @return PackagePackageServiceOptions
     */
    public function getPackageServiceOptions() : PackagePackageServiceOptions
    {
        return $this->packageServiceOptions;
    }
    /**
     * Package Service Options container.
     *
     * @param PackagePackageServiceOptions $packageServiceOptions
     *
     * @return self
     */
    public function setPackageServiceOptions(PackagePackageServiceOptions $packageServiceOptions) : self
    {
        $this->initialized['packageServiceOptions'] = true;
        $this->packageServiceOptions = $packageServiceOptions;
        return $this;
    }
    /**
     * Container to hold the Commodity information.  It is required if the Ground Freight Pricing Shipment indicator is present in the request.
     *
     * @return PackageCommodity
     */
    public function getCommodity() : PackageCommodity
    {
        return $this->commodity;
    }
    /**
     * Container to hold the Commodity information.  It is required if the Ground Freight Pricing Shipment indicator is present in the request.
     *
     * @param PackageCommodity $commodity
     *
     * @return self
     */
    public function setCommodity(PackageCommodity $commodity) : self
    {
        $this->initialized['commodity'] = true;
        $this->commodity = $commodity;
        return $this;
    }
    /**
     * Required when number of hazmat containers in a package is greater than 1. It indicates whether all the hazmat materials are kept in a single box or multiple boxes.  Required when number of hazmat container in a package is greater than 1.
     *
     * @return PackageHazMatPackageInformation
     */
    public function getHazMatPackageInformation() : PackageHazMatPackageInformation
    {
        return $this->hazMatPackageInformation;
    }
    /**
     * Required when number of hazmat containers in a package is greater than 1. It indicates whether all the hazmat materials are kept in a single box or multiple boxes.  Required when number of hazmat container in a package is greater than 1.
     *
     * @param PackageHazMatPackageInformation $hazMatPackageInformation
     *
     * @return self
     */
    public function setHazMatPackageInformation(PackageHazMatPackageInformation $hazMatPackageInformation) : self
    {
        $this->initialized['hazMatPackageInformation'] = true;
        $this->hazMatPackageInformation = $hazMatPackageInformation;
        return $this;
    }
}