<?php

namespace ShipStream\Ups\Api\Model;

class PickupGetPoliticalDivision1ListResponse extends \ArrayObject
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
     * Response Container.
     *
     * @var PickupGetPoliticalDivision1ListResponseResponse
     */
    protected $response;
    /**
     * The Political Division 1/State Field.
     *
     * @var list<string>
     */
    protected $politicalDivision1;
    /**
     * Response Container.
     *
     * @return PickupGetPoliticalDivision1ListResponseResponse
     */
    public function getResponse() : PickupGetPoliticalDivision1ListResponseResponse
    {
        return $this->response;
    }
    /**
     * Response Container.
     *
     * @param PickupGetPoliticalDivision1ListResponseResponse $response
     *
     * @return self
     */
    public function setResponse(PickupGetPoliticalDivision1ListResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * The Political Division 1/State Field.
     *
     * @return list<string>
     */
    public function getPoliticalDivision1() : array
    {
        return $this->politicalDivision1;
    }
    /**
     * The Political Division 1/State Field.
     *
     * @param list<string> $politicalDivision1
     *
     * @return self
     */
    public function setPoliticalDivision1(array $politicalDivision1) : self
    {
        $this->initialized['politicalDivision1'] = true;
        $this->politicalDivision1 = $politicalDivision1;
        return $this;
    }
}