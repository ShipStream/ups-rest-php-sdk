<?php

namespace ShipStream\Ups\Api\Model;

class ChemicalReferenceDataResponse extends \ArrayObject
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
     * Contains Dangerous Goods Utility Chemical Reference Data response components.
     *
     * @var ChemicalReferenceDataResponseResponse
     */
    protected $response;
    /**
     * 
     *
     * @var list<ChemicalReferenceDataResponseChemicalData>
     */
    protected $chemicalData;
    /**
     * Contains Dangerous Goods Utility Chemical Reference Data response components.
     *
     * @return ChemicalReferenceDataResponseResponse
     */
    public function getResponse() : ChemicalReferenceDataResponseResponse
    {
        return $this->response;
    }
    /**
     * Contains Dangerous Goods Utility Chemical Reference Data response components.
     *
     * @param ChemicalReferenceDataResponseResponse $response
     *
     * @return self
     */
    public function setResponse(ChemicalReferenceDataResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * 
     *
     * @return list<ChemicalReferenceDataResponseChemicalData>
     */
    public function getChemicalData() : array
    {
        return $this->chemicalData;
    }
    /**
     * 
     *
     * @param list<ChemicalReferenceDataResponseChemicalData> $chemicalData
     *
     * @return self
     */
    public function setChemicalData(array $chemicalData) : self
    {
        $this->initialized['chemicalData'] = true;
        $this->chemicalData = $chemicalData;
        return $this;
    }
}