<?php

namespace ShipStream\Ups\Api\Model;

class PackingListHandlingUnit extends \ArrayObject
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
     * @var list<HandlingUnitCommodity>|null
     */
    protected $commodity;
    /**
     * Special instructions or special memo.
     *
     * @var string|null
     */
    protected $specialInstructions;
    /**
     * Total number of pieces.
     *
     * @var string|null
     */
    protected $totalNumberOfPieces;
    /**
     * Total weight of all the commodities.
     *
     * @var string|null
     */
    protected $totalWeight;
    /**
     * UnitOfMeasurement Container.
     *
     * @var HandlingUnitUnitOfMeasurement|null
     */
    protected $unitOfMeasurement;
    /**
     * Currency code. This value applies to the unit price of all the commodities.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * 
     *
     * @return list<HandlingUnitCommodity>|null
     */
    public function getCommodity() : ?array
    {
        return $this->commodity;
    }
    /**
     * 
     *
     * @param list<HandlingUnitCommodity>|null $commodity
     *
     * @return self
     */
    public function setCommodity(?array $commodity) : self
    {
        $this->initialized['commodity'] = true;
        $this->commodity = $commodity;
        return $this;
    }
    /**
     * Special instructions or special memo.
     *
     * @return string|null
     */
    public function getSpecialInstructions() : ?string
    {
        return $this->specialInstructions;
    }
    /**
     * Special instructions or special memo.
     *
     * @param string|null $specialInstructions
     *
     * @return self
     */
    public function setSpecialInstructions(?string $specialInstructions) : self
    {
        $this->initialized['specialInstructions'] = true;
        $this->specialInstructions = $specialInstructions;
        return $this;
    }
    /**
     * Total number of pieces.
     *
     * @return string|null
     */
    public function getTotalNumberOfPieces() : ?string
    {
        return $this->totalNumberOfPieces;
    }
    /**
     * Total number of pieces.
     *
     * @param string|null $totalNumberOfPieces
     *
     * @return self
     */
    public function setTotalNumberOfPieces(?string $totalNumberOfPieces) : self
    {
        $this->initialized['totalNumberOfPieces'] = true;
        $this->totalNumberOfPieces = $totalNumberOfPieces;
        return $this;
    }
    /**
     * Total weight of all the commodities.
     *
     * @return string|null
     */
    public function getTotalWeight() : ?string
    {
        return $this->totalWeight;
    }
    /**
     * Total weight of all the commodities.
     *
     * @param string|null $totalWeight
     *
     * @return self
     */
    public function setTotalWeight(?string $totalWeight) : self
    {
        $this->initialized['totalWeight'] = true;
        $this->totalWeight = $totalWeight;
        return $this;
    }
    /**
     * UnitOfMeasurement Container.
     *
     * @return HandlingUnitUnitOfMeasurement|null
     */
    public function getUnitOfMeasurement() : ?HandlingUnitUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * UnitOfMeasurement Container.
     *
     * @param HandlingUnitUnitOfMeasurement|null $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(?HandlingUnitUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
    /**
     * Currency code. This value applies to the unit price of all the commodities.
     *
     * @return string|null
     */
    public function getCurrencyCode() : ?string
    {
        return $this->currencyCode;
    }
    /**
     * Currency code. This value applies to the unit price of all the commodities.
     *
     * @param string|null $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode) : self
    {
        $this->initialized['currencyCode'] = true;
        $this->currencyCode = $currencyCode;
        return $this;
    }
}