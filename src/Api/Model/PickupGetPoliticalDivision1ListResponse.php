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
     * @var PickupGetPoliticalDivision1ListResponseResponse|null
     */
    protected $response;
    /**
     * The Political Division 1/State Field.
     *
     * @var list<string>|null
     */
    protected $politicalDivision1;
    /**
     * Response Container.
     *
     * @return PickupGetPoliticalDivision1ListResponseResponse|null
     */
    public function getResponse() : ?PickupGetPoliticalDivision1ListResponseResponse
    {
        return $this->response;
    }
    /**
     * Response Container.
     *
     * @param PickupGetPoliticalDivision1ListResponseResponse|null $response
     *
     * @return self
     */
    public function setResponse(?PickupGetPoliticalDivision1ListResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * The Political Division 1/State Field.
     *
     * @return list<string>|null
     */
    public function getPoliticalDivision1() : ?array
    {
        return $this->politicalDivision1;
    }
    /**
     * The Political Division 1/State Field.
     *
     * @param list<string>|null $politicalDivision1
     *
     * @return self
     */
    public function setPoliticalDivision1(?array $politicalDivision1) : self
    {
        $this->initialized['politicalDivision1'] = true;
        $this->politicalDivision1 = $politicalDivision1;
        return $this;
    }
}