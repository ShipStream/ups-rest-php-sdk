<?php

namespace ShipStream\Ups\Api\Model;

class UploadResponse extends \ArrayObject
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
     * @var UploadResponseResponse|null
     */
    protected $response;
    /**
     * The container for DocumentID(s).  N/A
     *
     * @var UploadResponseFormsHistoryDocumentID|null
     */
    protected $formsHistoryDocumentID;
    /**
     * Response container.
     *
     * @return UploadResponseResponse|null
     */
    public function getResponse() : ?UploadResponseResponse
    {
        return $this->response;
    }
    /**
     * Response container.
     *
     * @param UploadResponseResponse|null $response
     *
     * @return self
     */
    public function setResponse(?UploadResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * The container for DocumentID(s).  N/A
     *
     * @return UploadResponseFormsHistoryDocumentID|null
     */
    public function getFormsHistoryDocumentID() : ?UploadResponseFormsHistoryDocumentID
    {
        return $this->formsHistoryDocumentID;
    }
    /**
     * The container for DocumentID(s).  N/A
     *
     * @param UploadResponseFormsHistoryDocumentID|null $formsHistoryDocumentID
     *
     * @return self
     */
    public function setFormsHistoryDocumentID(?UploadResponseFormsHistoryDocumentID $formsHistoryDocumentID) : self
    {
        $this->initialized['formsHistoryDocumentID'] = true;
        $this->formsHistoryDocumentID = $formsHistoryDocumentID;
        return $this;
    }
}