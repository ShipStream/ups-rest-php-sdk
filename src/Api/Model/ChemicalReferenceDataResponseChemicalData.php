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
     * @var ChemicalDataChemicalDetail|null
     */
    protected $chemicalDetail;
    /**
     * Container to hold Proper Shipping Name Detail information.  It will be returned if applies for a given chemical record.
     *
     * @var ChemicalDataProperShippingNameDetail|null
     */
    protected $properShippingNameDetail;
    /**
     * 
     *
     * @var list<ChemicalDataPackageQuantityLimitDetail>|null
     */
    protected $packageQuantityLimitDetail;
    /**
     * Container to hold Chemical details.
     *
     * @return ChemicalDataChemicalDetail|null
     */
    public function getChemicalDetail() : ?ChemicalDataChemicalDetail
    {
        return $this->chemicalDetail;
    }
    /**
     * Container to hold Chemical details.
     *
     * @param ChemicalDataChemicalDetail|null $chemicalDetail
     *
     * @return self
     */
    public function setChemicalDetail(?ChemicalDataChemicalDetail $chemicalDetail) : self
    {
        $this->initialized['chemicalDetail'] = true;
        $this->chemicalDetail = $chemicalDetail;
        return $this;
    }
    /**
     * Container to hold Proper Shipping Name Detail information.  It will be returned if applies for a given chemical record.
     *
     * @return ChemicalDataProperShippingNameDetail|null
     */
    public function getProperShippingNameDetail() : ?ChemicalDataProperShippingNameDetail
    {
        return $this->properShippingNameDetail;
    }
    /**
     * Container to hold Proper Shipping Name Detail information.  It will be returned if applies for a given chemical record.
     *
     * @param ChemicalDataProperShippingNameDetail|null $properShippingNameDetail
     *
     * @return self
     */
    public function setProperShippingNameDetail(?ChemicalDataProperShippingNameDetail $properShippingNameDetail) : self
    {
        $this->initialized['properShippingNameDetail'] = true;
        $this->properShippingNameDetail = $properShippingNameDetail;
        return $this;
    }
    /**
     * 
     *
     * @return list<ChemicalDataPackageQuantityLimitDetail>|null
     */
    public function getPackageQuantityLimitDetail() : ?array
    {
        return $this->packageQuantityLimitDetail;
    }
    /**
     * 
     *
     * @param list<ChemicalDataPackageQuantityLimitDetail>|null $packageQuantityLimitDetail
     *
     * @return self
     */
    public function setPackageQuantityLimitDetail(?array $packageQuantityLimitDetail) : self
    {
        $this->initialized['packageQuantityLimitDetail'] = true;
        $this->packageQuantityLimitDetail = $packageQuantityLimitDetail;
        return $this;
    }
}