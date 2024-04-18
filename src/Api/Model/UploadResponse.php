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
     * @var UploadResponseResponse
     */
    protected $response;
    /**
     * The container for DocumentID(s).
     *
     * @var UploadResponseFormsHistoryDocumentID
     */
    protected $formsHistoryDocumentID;
    /**
     * Response container.
     *
     * @return UploadResponseResponse
     */
    public function getResponse() : UploadResponseResponse
    {
        return $this->response;
    }
    /**
     * Response container.
     *
     * @param UploadResponseResponse $response
     *
     * @return self
     */
    public function setResponse(UploadResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * The container for DocumentID(s).
     *
     * @return UploadResponseFormsHistoryDocumentID
     */
    public function getFormsHistoryDocumentID() : UploadResponseFormsHistoryDocumentID
    {
        return $this->formsHistoryDocumentID;
    }
    /**
     * The container for DocumentID(s).
     *
     * @param UploadResponseFormsHistoryDocumentID $formsHistoryDocumentID
     *
     * @return self
     */
    public function setFormsHistoryDocumentID(UploadResponseFormsHistoryDocumentID $formsHistoryDocumentID) : self
    {
        $this->initialized['formsHistoryDocumentID'] = true;
        $this->formsHistoryDocumentID = $formsHistoryDocumentID;
        return $this;
    }
}