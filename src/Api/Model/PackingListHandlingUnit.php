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
     * @var list<HandlingUnitCommodity>
     */
    protected $commodity;
    /**
     * Special instructions or special memo.
     *
     * @var string
     */
    protected $specialInstructions;
    /**
     * Total number of pieces.
     *
     * @var string
     */
    protected $totalNumberOfPieces;
    /**
     * Total weight of all the commodities.
     *
     * @var string
     */
    protected $totalWeight;
    /**
     * UnitOfMeasurement Container.
     *
     * @var HandlingUnitUnitOfMeasurement
     */
    protected $unitOfMeasurement;
    /**
     * Currency code. This value applies to the unit price of all the commodities.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * 
     *
     * @return list<HandlingUnitCommodity>
     */
    public function getCommodity() : array
    {
        return $this->commodity;
    }
    /**
     * 
     *
     * @param list<HandlingUnitCommodity> $commodity
     *
     * @return self
     */
    public function setCommodity(array $commodity) : self
    {
        $this->initialized['commodity'] = true;
        $this->commodity = $commodity;
        return $this;
    }
    /**
     * Special instructions or special memo.
     *
     * @return string
     */
    public function getSpecialInstructions() : string
    {
        return $this->specialInstructions;
    }
    /**
     * Special instructions or special memo.
     *
     * @param string $specialInstructions
     *
     * @return self
     */
    public function setSpecialInstructions(string $specialInstructions) : self
    {
        $this->initialized['specialInstructions'] = true;
        $this->specialInstructions = $specialInstructions;
        return $this;
    }
    /**
     * Total number of pieces.
     *
     * @return string
     */
    public function getTotalNumberOfPieces() : string
    {
        return $this->totalNumberOfPieces;
    }
    /**
     * Total number of pieces.
     *
     * @param string $totalNumberOfPieces
     *
     * @return self
     */
    public function setTotalNumberOfPieces(string $totalNumberOfPieces) : self
    {
        $this->initialized['totalNumberOfPieces'] = true;
        $this->totalNumberOfPieces = $totalNumberOfPieces;
        return $this;
    }
    /**
     * Total weight of all the commodities.
     *
     * @return string
     */
    public function getTotalWeight() : string
    {
        return $this->totalWeight;
    }
    /**
     * Total weight of all the commodities.
     *
     * @param string $totalWeight
     *
     * @return self
     */
    public function setTotalWeight(string $totalWeight) : self
    {
        $this->initialized['totalWeight'] = true;
        $this->totalWeight = $totalWeight;
        return $this;
    }
    /**
     * UnitOfMeasurement Container.
     *
     * @return HandlingUnitUnitOfMeasurement
     */
    public function getUnitOfMeasurement() : HandlingUnitUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * UnitOfMeasurement Container.
     *
     * @param HandlingUnitUnitOfMeasurement $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(HandlingUnitUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
    /**
     * Currency code. This value applies to the unit price of all the commodities.
     *
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }
    /**
     * Currency code. This value applies to the unit price of all the commodities.
     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(string $currencyCode) : self
    {
        $this->initialized['currencyCode'] = true;
        $this->currencyCode = $currencyCode;
        return $this;
    }
}