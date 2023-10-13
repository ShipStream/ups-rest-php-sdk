<?php

namespace ShipStream\Ups\Api\Model;

class PushToImageRepositoryResponse extends \ArrayObject
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
     * Response container.
     *
     * @var PushToImageRepositoryResponseResponse
     */
    protected $response;
    /**
     * FormsGroupID is a consolidated ID representing one or multiple DocumentID(s).  N/A
     *
     * @var string
     */
    protected $formsGroupID;
    /**
     * Response container.
     *
     * @return PushToImageRepositoryResponseResponse
     */
    public function getResponse() : PushToImageRepositoryResponseResponse
    {
        return $this->response;
    }
    /**
     * Response container.
     *
     * @param PushToImageRepositoryResponseResponse $response
     *
     * @return self
     */
    public function setResponse(PushToImageRepositoryResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * FormsGroupID is a consolidated ID representing one or multiple DocumentID(s).  N/A
     *
     * @return string
     */
    public function getFormsGroupID() : string
    {
        return $this->formsGroupID;
    }
    /**
     * FormsGroupID is a consolidated ID representing one or multiple DocumentID(s).  N/A
     *
     * @param string $formsGroupID
     *
     * @return self
     */
    public function setFormsGroupID(string $formsGroupID) : self
    {
        $this->initialized['formsGroupID'] = true;
        $this->formsGroupID = $formsGroupID;
        return $this;
    }
}