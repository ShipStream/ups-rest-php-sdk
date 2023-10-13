<?php

namespace ShipStream\Ups\Api\Model;

class ManifestPackage extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var PackageActivity[]
     */
    protected $activity;
    /**
     * Description of package merchandise.
     *
     * @var string
     */
    protected $description;
    /**
     * Dimensions information container. Note: Currently dimensions are not applicable to Ground Freight Pricing.  Length + 2*(Width + Height) must be less than or equal to 165 IN or 330 CM. Required for Heavy Goods service. Package Dimension will be ignored for Simple Rate
     *
     * @var PackageDimensions
     */
    protected $dimensions;
    /**
     * Container tag for package dimensional weight.
     *
     * @var PackageDimensionalWeight
     */
    protected $dimensionalWeight;
    /**
     * Container to hold package weight information.  Package weight is a required for Ground Freight Pricing shipments and Heavy Goods service. Package Weight will be ignored for Simple Rate.
     *
     * @var PackagePackageWeight
     */
    protected $packageWeight;
    /**
     * Values for LargePackage are:1 - Oversize 1,� 2 - Oversize 2,� 4 - Large package
     *
     * @var string
     */
    protected $largePackage;
    /**
     * Package's tracking number.
     *
     * @var string
     */
    protected $trackingNumber;
    /**
    * Package reference number information container.  For Mail Innovation shipments, up to 3 reference numbers are supported. If 5 reference numbers are specified (CostCenter, PackageID, and 3 ReferenceNumbers) the 3 desigated by the ReferenceNumber container will not be visible on 4x6 label supported by the API. These additional reference numbers are only be visible on the 4x8 label..
    
    For non-Mail Innovation shipments only the first 2 reference numbers will be visible on labels.
    *
    * @var PackageReferenceNumber
    */
    protected $referenceNumber;
    /**
     * Package Service Options container.
     *
     * @var PackagePackageServiceOptions
     */
    protected $packageServiceOptions;
    /**
     * Presence of the tag indicates UPSPremiumCare applies to this package
     *
     * @var string
     */
    protected $uPSPremiumCareIndicator;
    /**
     * 
     *
     * @return PackageActivity[]
     */
    public function getActivity() : array
    {
        return $this->activity;
    }
    /**
     * 
     *
     * @param PackageActivity[] $activity
     *
     * @return self
     */
    public function setActivity(array $activity) : self
    {
        $this->initialized['activity'] = true;
        $this->activity = $activity;
        return $this;
    }
    /**
     * Description of package merchandise.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of package merchandise.
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
     * Container tag for package dimensional weight.
     *
     * @return PackageDimensionalWeight
     */
    public function getDimensionalWeight() : PackageDimensionalWeight
    {
        return $this->dimensionalWeight;
    }
    /**
     * Container tag for package dimensional weight.
     *
     * @param PackageDimensionalWeight $dimensionalWeight
     *
     * @return self
     */
    public function setDimensionalWeight(PackageDimensionalWeight $dimensionalWeight) : self
    {
        $this->initialized['dimensionalWeight'] = true;
        $this->dimensionalWeight = $dimensionalWeight;
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
     * Values for LargePackage are:1 - Oversize 1,� 2 - Oversize 2,� 4 - Large package
     *
     * @return string
     */
    public function getLargePackage() : string
    {
        return $this->largePackage;
    }
    /**
     * Values for LargePackage are:1 - Oversize 1,� 2 - Oversize 2,� 4 - Large package
     *
     * @param string $largePackage
     *
     * @return self
     */
    public function setLargePackage(string $largePackage) : self
    {
        $this->initialized['largePackage'] = true;
        $this->largePackage = $largePackage;
        return $this;
    }
    /**
     * Package's tracking number.
     *
     * @return string
     */
    public function getTrackingNumber() : string
    {
        return $this->trackingNumber;
    }
    /**
     * Package's tracking number.
     *
     * @param string $trackingNumber
     *
     * @return self
     */
    public function setTrackingNumber(string $trackingNumber) : self
    {
        $this->initialized['trackingNumber'] = true;
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
    /**
    * Package reference number information container.  For Mail Innovation shipments, up to 3 reference numbers are supported. If 5 reference numbers are specified (CostCenter, PackageID, and 3 ReferenceNumbers) the 3 desigated by the ReferenceNumber container will not be visible on 4x6 label supported by the API. These additional reference numbers are only be visible on the 4x8 label..
    
    For non-Mail Innovation shipments only the first 2 reference numbers will be visible on labels.
    *
    * @return PackageReferenceNumber
    */
    public function getReferenceNumber() : PackageReferenceNumber
    {
        return $this->referenceNumber;
    }
    /**
    * Package reference number information container.  For Mail Innovation shipments, up to 3 reference numbers are supported. If 5 reference numbers are specified (CostCenter, PackageID, and 3 ReferenceNumbers) the 3 desigated by the ReferenceNumber container will not be visible on 4x6 label supported by the API. These additional reference numbers are only be visible on the 4x8 label..
    
    For non-Mail Innovation shipments only the first 2 reference numbers will be visible on labels.
    *
    * @param PackageReferenceNumber $referenceNumber
    *
    * @return self
    */
    public function setReferenceNumber(PackageReferenceNumber $referenceNumber) : self
    {
        $this->initialized['referenceNumber'] = true;
        $this->referenceNumber = $referenceNumber;
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
     * Presence of the tag indicates UPSPremiumCare applies to this package
     *
     * @return string
     */
    public function getUPSPremiumCareIndicator() : string
    {
        return $this->uPSPremiumCareIndicator;
    }
    /**
     * Presence of the tag indicates UPSPremiumCare applies to this package
     *
     * @param string $uPSPremiumCareIndicator
     *
     * @return self
     */
    public function setUPSPremiumCareIndicator(string $uPSPremiumCareIndicator) : self
    {
        $this->initialized['uPSPremiumCareIndicator'] = true;
        $this->uPSPremiumCareIndicator = $uPSPremiumCareIndicator;
        return $this;
    }
}