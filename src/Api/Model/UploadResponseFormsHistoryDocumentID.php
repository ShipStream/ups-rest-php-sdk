<?php

namespace ShipStream\Ups\Api\Model;

class UploadResponseFormsHistoryDocumentID extends \ArrayObject
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
     * DocumentID represents a document uploaded to Forms History.  N/A
     *
     * @var string|null
     */
    protected $documentID;
    /**
     * DocumentID represents a document uploaded to Forms History.  N/A
     *
     * @return string|null
     */
    public function getDocumentID() : ?string
    {
        return $this->documentID;
    }
    /**
     * DocumentID represents a document uploaded to Forms History.  N/A
     *
     * @param string|null $documentID
     *
     * @return self
     */
    public function setDocumentID(?string $documentID) : self
    {
        $this->initialized['documentID'] = true;
        $this->documentID = $documentID;
        return $this;
    }
}