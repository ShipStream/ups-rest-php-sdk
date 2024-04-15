<?php

namespace ShipStream\Ups\Api\Model;

class PushToImageRepositoryResponse extends \ArrayObject
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
     * Response container.
     *
     * @var PushToImageRepositoryResponseResponse|null
     */
    protected $response;
    /**
     * FormsGroupID is a consolidated ID representing one or multiple DocumentID(s).  N/A
     *
     * @var string|null
     */
    protected $formsGroupID;
    /**
     * Response container.
     *
     * @return PushToImageRepositoryResponseResponse|null
     */
    public function getResponse() : ?PushToImageRepositoryResponseResponse
    {
        return $this->response;
    }
    /**
     * Response container.
     *
     * @param PushToImageRepositoryResponseResponse|null $response
     *
     * @return self
     */
    public function setResponse(?PushToImageRepositoryResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * FormsGroupID is a consolidated ID representing one or multiple DocumentID(s).  N/A
     *
     * @return string|null
     */
    public function getFormsGroupID() : ?string
    {
        return $this->formsGroupID;
    }
    /**
     * FormsGroupID is a consolidated ID representing one or multiple DocumentID(s).  N/A
     *
     * @param string|null $formsGroupID
     *
     * @return self
     */
    public function setFormsGroupID(?string $formsGroupID) : self
    {
        $this->initialized['formsGroupID'] = true;
        $this->formsGroupID = $formsGroupID;
        return $this;
    }
}