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
     * @var string|null
     */
    protected $description;
    /**
     * Description of articles & special marks. Applicable for Air Freight only
     *
     * @var string|null
     */
    protected $palletDescription;
    /**
     * Number of Pieces. Applicable for Air Freight only
     *
     * @var string|null
     */
    protected $numOfPieces;
    /**
     * Unit price of the commodity. Applicable for Air Freight only  Limit to 2 digit after the decimal. The maximum length of the field is 12 including "." and can hold up to 2 decimal place. (e.g. 999999999.99)
     *
     * @var string|null
     */
    protected $unitPrice;
    /**
     * Packaging container.  Container for Packaging Type.
     *
     * @var PackagePackaging|null
     */
    protected $packaging;
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
    * Presence of the indicator mentions that the package is Large Package.
    
    This is an empty tag, any value inside is ignored.
    *
    * @var string|null
    */
    protected $largePackageIndicator;
    /**
     * 
     *
     * @var list<PackageReferenceNumber>|null
     */
    protected $referenceNumber;
    /**
     * Additional Handling Required. The presence indicates additional handling is required, the absence indicates no additional handling is required. Additional Handling indicator indicates it's a non-corrugated package.
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
     * UPS Premier Container.
     *
     * @var PackageUPSPremier|null
     */
    protected $uPSPremier;
    /**
     * Package Service Options container.
     *
     * @var PackagePackageServiceOptions|null
     */
    protected $packageServiceOptions;
    /**
     * Container to hold the Commodity information.  It is required if the Ground Freight Pricing Shipment indicator is present in the request.
     *
     * @var PackageCommodity|null
     */
    protected $commodity;
    /**
     * Required when number of hazmat containers in a package is greater than 1. It indicates whether all the hazmat materials are kept in a single box or multiple boxes.  Required when number of hazmat container in a package is greater than 1.
     *
     * @var PackageHazMatPackageInformation|null
     */
    protected $hazMatPackageInformation;
    /**
     * Merchandise description of package.  Required for shipment with return service.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Merchandise description of package.  Required for shipment with return service.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Description of articles & special marks. Applicable for Air Freight only
     *
     * @return string|null
     */
    public function getPalletDescription() : ?string
    {
        return $this->palletDescription;
    }
    /**
     * Description of articles & special marks. Applicable for Air Freight only
     *
     * @param string|null $palletDescription
     *
     * @return self
     */
    public function setPalletDescription(?string $palletDescription) : self
    {
        $this->initialized['palletDescription'] = true;
        $this->palletDescription = $palletDescription;
        return $this;
    }
    /**
     * Number of Pieces. Applicable for Air Freight only
     *
     * @return string|null
     */
    public function getNumOfPieces() : ?string
    {
        return $this->numOfPieces;
    }
    /**
     * Number of Pieces. Applicable for Air Freight only
     *
     * @param string|null $numOfPieces
     *
     * @return self
     */
    public function setNumOfPieces(?string $numOfPieces) : self
    {
        $this->initialized['numOfPieces'] = true;
        $this->numOfPieces = $numOfPieces;
        return $this;
    }
    /**
     * Unit price of the commodity. Applicable for Air Freight only  Limit to 2 digit after the decimal. The maximum length of the field is 12 including "." and can hold up to 2 decimal place. (e.g. 999999999.99)
     *
     * @return string|null
     */
    public function getUnitPrice() : ?string
    {
        return $this->unitPrice;
    }
    /**
     * Unit price of the commodity. Applicable for Air Freight only  Limit to 2 digit after the decimal. The maximum length of the field is 12 including "." and can hold up to 2 decimal place. (e.g. 999999999.99)
     *
     * @param string|null $unitPrice
     *
     * @return self
     */
    public function setUnitPrice(?string $unitPrice) : self
    {
        $this->initialized['unitPrice'] = true;
        $this->unitPrice = $unitPrice;
        return $this;
    }
    /**
     * Packaging container.  Container for Packaging Type.
     *
     * @return PackagePackaging|null
     */
    public function getPackaging() : ?PackagePackaging
    {
        return $this->packaging;
    }
    /**
     * Packaging container.  Container for Packaging Type.
     *
     * @param PackagePackaging|null $packaging
     *
     * @return self
     */
    public function setPackaging(?PackagePackaging $packaging) : self
    {
        $this->initialized['packaging'] = true;
        $this->packaging = $packaging;
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
    * Presence of the indicator mentions that the package is Large Package.
    
    This is an empty tag, any value inside is ignored.
    *
    * @return string|null
    */
    public function getLargePackageIndicator() : ?string
    {
        return $this->largePackageIndicator;
    }
    /**
    * Presence of the indicator mentions that the package is Large Package.
    
    This is an empty tag, any value inside is ignored.
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
     * 
     *
     * @return list<PackageReferenceNumber>|null
     */
    public function getReferenceNumber() : ?array
    {
        return $this->referenceNumber;
    }
    /**
     * 
     *
     * @param list<PackageReferenceNumber>|null $referenceNumber
     *
     * @return self
     */
    public function setReferenceNumber(?array $referenceNumber) : self
    {
        $this->initialized['referenceNumber'] = true;
        $this->referenceNumber = $referenceNumber;
        return $this;
    }
    /**
     * Additional Handling Required. The presence indicates additional handling is required, the absence indicates no additional handling is required. Additional Handling indicator indicates it's a non-corrugated package.
     *
     * @return string|null
     */
    public function getAdditionalHandlingIndicator() : ?string
    {
        return $this->additionalHandlingIndicator;
    }
    /**
     * Additional Handling Required. The presence indicates additional handling is required, the absence indicates no additional handling is required. Additional Handling indicator indicates it's a non-corrugated package.
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
     * UPS Premier Container.
     *
     * @return PackageUPSPremier|null
     */
    public function getUPSPremier() : ?PackageUPSPremier
    {
        return $this->uPSPremier;
    }
    /**
     * UPS Premier Container.
     *
     * @param PackageUPSPremier|null $uPSPremier
     *
     * @return self
     */
    public function setUPSPremier(?PackageUPSPremier $uPSPremier) : self
    {
        $this->initialized['uPSPremier'] = true;
        $this->uPSPremier = $uPSPremier;
        return $this;
    }
    /**
     * Package Service Options container.
     *
     * @return PackagePackageServiceOptions|null
     */
    public function getPackageServiceOptions() : ?PackagePackageServiceOptions
    {
        return $this->packageServiceOptions;
    }
    /**
     * Package Service Options container.
     *
     * @param PackagePackageServiceOptions|null $packageServiceOptions
     *
     * @return self
     */
    public function setPackageServiceOptions(?PackagePackageServiceOptions $packageServiceOptions) : self
    {
        $this->initialized['packageServiceOptions'] = true;
        $this->packageServiceOptions = $packageServiceOptions;
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
     * Required when number of hazmat containers in a package is greater than 1. It indicates whether all the hazmat materials are kept in a single box or multiple boxes.  Required when number of hazmat container in a package is greater than 1.
     *
     * @return PackageHazMatPackageInformation|null
     */
    public function getHazMatPackageInformation() : ?PackageHazMatPackageInformation
    {
        return $this->hazMatPackageInformation;
    }
    /**
     * Required when number of hazmat containers in a package is greater than 1. It indicates whether all the hazmat materials are kept in a single box or multiple boxes.  Required when number of hazmat container in a package is greater than 1.
     *
     * @param PackageHazMatPackageInformation|null $hazMatPackageInformation
     *
     * @return self
     */
    public function setHazMatPackageInformation(?PackageHazMatPackageInformation $hazMatPackageInformation) : self
    {
        $this->initialized['hazMatPackageInformation'] = true;
        $this->hazMatPackageInformation = $hazMatPackageInformation;
        return $this;
    }
}