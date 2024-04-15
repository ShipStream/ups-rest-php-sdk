<?php

namespace ShipStream\Ups\Api\Model;

class ManifestPackage extends \ArrayObject
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
     * 
     *
     * @var list<PackageActivity>|null
     */
    protected $activity;
    /**
     * Description of package merchandise.
     *
     * @var string|null
     */
    protected $description;
    /**
    * Container tag for package dimension information. 
    Length + 2 * (Width + Height) must be less than or equal to 130 IN or 330 CM.
    *
    * @var ManifestPackageDimensions|null
    */
    protected $dimensions;
    /**
     * Container tag for package dimensional weight.
     *
     * @var PackageDimensionalWeight|null
     */
    protected $dimensionalWeight;
    /**
     * Container tag for package weight. Required when the package type is not UPS Letter.
     *
     * @var ManifestPackagePackageWeight|null
     */
    protected $packageWeight;
    /**
     * Values for LargePackage are:1 - Oversize 1,� 2 - Oversize 2,� 4 - Large package
     *
     * @var string|null
     */
    protected $largePackage;
    /**
     * Package's tracking number.
     *
     * @var string|null
     */
    protected $trackingNumber;
    /**
     * Container tag for information about the package-level reference number.
     *
     * @var ManifestPackageReferenceNumber|null
     */
    protected $referenceNumber;
    /**
     * Defines service options used for the package(s).
     *
     * @var ManifestPackagePackageServiceOptions|null
     */
    protected $packageServiceOptions;
    /**
     * Presence of the tag indicates UPSPremiumCare applies to this package
     *
     * @var string|null
     */
    protected $uPSPremiumCareIndicator;
    /**
     * 
     *
     * @return list<PackageActivity>|null
     */
    public function getActivity() : ?array
    {
        return $this->activity;
    }
    /**
     * 
     *
     * @param list<PackageActivity>|null $activity
     *
     * @return self
     */
    public function setActivity(?array $activity) : self
    {
        $this->initialized['activity'] = true;
        $this->activity = $activity;
        return $this;
    }
    /**
     * Description of package merchandise.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Description of package merchandise.
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
    * Container tag for package dimension information. 
    Length + 2 * (Width + Height) must be less than or equal to 130 IN or 330 CM.
    *
    * @return ManifestPackageDimensions|null
    */
    public function getDimensions() : ?ManifestPackageDimensions
    {
        return $this->dimensions;
    }
    /**
    * Container tag for package dimension information. 
    Length + 2 * (Width + Height) must be less than or equal to 130 IN or 330 CM.
    *
    * @param ManifestPackageDimensions|null $dimensions
    *
    * @return self
    */
    public function setDimensions(?ManifestPackageDimensions $dimensions) : self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
    /**
     * Container tag for package dimensional weight.
     *
     * @return PackageDimensionalWeight|null
     */
    public function getDimensionalWeight() : ?PackageDimensionalWeight
    {
        return $this->dimensionalWeight;
    }
    /**
     * Container tag for package dimensional weight.
     *
     * @param PackageDimensionalWeight|null $dimensionalWeight
     *
     * @return self
     */
    public function setDimensionalWeight(?PackageDimensionalWeight $dimensionalWeight) : self
    {
        $this->initialized['dimensionalWeight'] = true;
        $this->dimensionalWeight = $dimensionalWeight;
        return $this;
    }
    /**
     * Container tag for package weight. Required when the package type is not UPS Letter.
     *
     * @return ManifestPackagePackageWeight|null
     */
    public function getPackageWeight() : ?ManifestPackagePackageWeight
    {
        return $this->packageWeight;
    }
    /**
     * Container tag for package weight. Required when the package type is not UPS Letter.
     *
     * @param ManifestPackagePackageWeight|null $packageWeight
     *
     * @return self
     */
    public function setPackageWeight(?ManifestPackagePackageWeight $packageWeight) : self
    {
        $this->initialized['packageWeight'] = true;
        $this->packageWeight = $packageWeight;
        return $this;
    }
    /**
     * Values for LargePackage are:1 - Oversize 1,� 2 - Oversize 2,� 4 - Large package
     *
     * @return string|null
     */
    public function getLargePackage() : ?string
    {
        return $this->largePackage;
    }
    /**
     * Values for LargePackage are:1 - Oversize 1,� 2 - Oversize 2,� 4 - Large package
     *
     * @param string|null $largePackage
     *
     * @return self
     */
    public function setLargePackage(?string $largePackage) : self
    {
        $this->initialized['largePackage'] = true;
        $this->largePackage = $largePackage;
        return $this;
    }
    /**
     * Package's tracking number.
     *
     * @return string|null
     */
    public function getTrackingNumber() : ?string
    {
        return $this->trackingNumber;
    }
    /**
     * Package's tracking number.
     *
     * @param string|null $trackingNumber
     *
     * @return self
     */
    public function setTrackingNumber(?string $trackingNumber) : self
    {
        $this->initialized['trackingNumber'] = true;
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Container tag for information about the package-level reference number.
     *
     * @return ManifestPackageReferenceNumber|null
     */
    public function getReferenceNumber() : ?ManifestPackageReferenceNumber
    {
        return $this->referenceNumber;
    }
    /**
     * Container tag for information about the package-level reference number.
     *
     * @param ManifestPackageReferenceNumber|null $referenceNumber
     *
     * @return self
     */
    public function setReferenceNumber(?ManifestPackageReferenceNumber $referenceNumber) : self
    {
        $this->initialized['referenceNumber'] = true;
        $this->referenceNumber = $referenceNumber;
        return $this;
    }
    /**
     * Defines service options used for the package(s).
     *
     * @return ManifestPackagePackageServiceOptions|null
     */
    public function getPackageServiceOptions() : ?ManifestPackagePackageServiceOptions
    {
        return $this->packageServiceOptions;
    }
    /**
     * Defines service options used for the package(s).
     *
     * @param ManifestPackagePackageServiceOptions|null $packageServiceOptions
     *
     * @return self
     */
    public function setPackageServiceOptions(?ManifestPackagePackageServiceOptions $packageServiceOptions) : self
    {
        $this->initialized['packageServiceOptions'] = true;
        $this->packageServiceOptions = $packageServiceOptions;
        return $this;
    }
    /**
     * Presence of the tag indicates UPSPremiumCare applies to this package
     *
     * @return string|null
     */
    public function getUPSPremiumCareIndicator() : ?string
    {
        return $this->uPSPremiumCareIndicator;
    }
    /**
     * Presence of the tag indicates UPSPremiumCare applies to this package
     *
     * @param string|null $uPSPremiumCareIndicator
     *
     * @return self
     */
    public function setUPSPremiumCareIndicator(?string $uPSPremiumCareIndicator) : self
    {
        $this->initialized['uPSPremiumCareIndicator'] = true;
        $this->uPSPremiumCareIndicator = $uPSPremiumCareIndicator;
        return $this;
    }
}