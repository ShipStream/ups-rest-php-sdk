<?php

namespace ShipStream\Ups\Api\Model;

class ChemicalReferenceDataResponseChemicalData extends \ArrayObject
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
     * Container to hold Chemical details.
     *
     * @var ChemicalDataChemicalDetail
     */
    protected $chemicalDetail;
    /**
     * Container to hold Proper Shipping Name Detail information.  It will be returned if applies for a given chemical record.
     *
     * @var ChemicalDataProperShippingNameDetail
     */
    protected $properShippingNameDetail;
    /**
     * 
     *
     * @var list<ChemicalDataPackageQuantityLimitDetail>
     */
    protected $packageQuantityLimitDetail;
    /**
     * Container to hold Chemical details.
     *
     * @return ChemicalDataChemicalDetail
     */
    public function getChemicalDetail() : ChemicalDataChemicalDetail
    {
        return $this->chemicalDetail;
    }
    /**
     * Container to hold Chemical details.
     *
     * @param ChemicalDataChemicalDetail $chemicalDetail
     *
     * @return self
     */
    public function setChemicalDetail(ChemicalDataChemicalDetail $chemicalDetail) : self
    {
        $this->initialized['chemicalDetail'] = true;
        $this->chemicalDetail = $chemicalDetail;
        return $this;
    }
    /**
     * Container to hold Proper Shipping Name Detail information.  It will be returned if applies for a given chemical record.
     *
     * @return ChemicalDataProperShippingNameDetail
     */
    public function getProperShippingNameDetail() : ChemicalDataProperShippingNameDetail
    {
        return $this->properShippingNameDetail;
    }
    /**
     * Container to hold Proper Shipping Name Detail information.  It will be returned if applies for a given chemical record.
     *
     * @param ChemicalDataProperShippingNameDetail $properShippingNameDetail
     *
     * @return self
     */
    public function setProperShippingNameDetail(ChemicalDataProperShippingNameDetail $properShippingNameDetail) : self
    {
        $this->initialized['properShippingNameDetail'] = true;
        $this->properShippingNameDetail = $properShippingNameDetail;
        return $this;
    }
    /**
     * 
     *
     * @return list<ChemicalDataPackageQuantityLimitDetail>
     */
    public function getPackageQuantityLimitDetail() : array
    {
        return $this->packageQuantityLimitDetail;
    }
    /**
     * 
     *
     * @param list<ChemicalDataPackageQuantityLimitDetail> $packageQuantityLimitDetail
     *
     * @return self
     */
    public function setPackageQuantityLimitDetail(array $packageQuantityLimitDetail) : self
    {
        $this->initialized['packageQuantityLimitDetail'] = true;
        $this->packageQuantityLimitDetail = $packageQuantityLimitDetail;
        return $this;
    }
}