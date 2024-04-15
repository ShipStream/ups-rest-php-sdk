<?php

namespace ShipStream\Ups\Api\Model;

class PackingListInfoPackageAssociated extends \ArrayObject
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
     * Package number the product should be allocated to ont he packing list.  Required for packaging list and Air Freight Packing list.
     *
     * @var string|null
     */
    protected $packageNumber;
    /**
     * Amount of Product associated with a package.  Required for packaging list and Air Freight Packing list.
     *
     * @var string|null
     */
    protected $productAmount;
    /**
     * Product Note.
     *
     * @var string|null
     */
    protected $productNote;
    /**
     * Package number the product should be allocated to ont he packing list.  Required for packaging list and Air Freight Packing list.
     *
     * @return string|null
     */
    public function getPackageNumber() : ?string
    {
        return $this->packageNumber;
    }
    /**
     * Package number the product should be allocated to ont he packing list.  Required for packaging list and Air Freight Packing list.
     *
     * @param string|null $packageNumber
     *
     * @return self
     */
    public function setPackageNumber(?string $packageNumber) : self
    {
        $this->initialized['packageNumber'] = true;
        $this->packageNumber = $packageNumber;
        return $this;
    }
    /**
     * Amount of Product associated with a package.  Required for packaging list and Air Freight Packing list.
     *
     * @return string|null
     */
    public function getProductAmount() : ?string
    {
        return $this->productAmount;
    }
    /**
     * Amount of Product associated with a package.  Required for packaging list and Air Freight Packing list.
     *
     * @param string|null $productAmount
     *
     * @return self
     */
    public function setProductAmount(?string $productAmount) : self
    {
        $this->initialized['productAmount'] = true;
        $this->productAmount = $productAmount;
        return $this;
    }
    /**
     * Product Note.
     *
     * @return string|null
     */
    public function getProductNote() : ?string
    {
        return $this->productNote;
    }
    /**
     * Product Note.
     *
     * @param string|null $productNote
     *
     * @return self
     */
    public function setProductNote(?string $productNote) : self
    {
        $this->initialized['productNote'] = true;
        $this->productNote = $productNote;
        return $this;
    }
}