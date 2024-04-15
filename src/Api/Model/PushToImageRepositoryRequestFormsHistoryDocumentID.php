<?php

namespace ShipStream\Ups\Api\Model;

class PushToImageRepositoryRequestFormsHistoryDocumentID extends \ArrayObject
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
     * @var list<string>|null
     */
    protected $documentID;
    /**
     * DocumentID represents a document uploaded to Forms History.  N/A
     *
     * @return list<string>|null
     */
    public function getDocumentID() : ?array
    {
        return $this->documentID;
    }
    /**
     * DocumentID represents a document uploaded to Forms History.  N/A
     *
     * @param list<string>|null $documentID
     *
     * @return self
     */
    public function setDocumentID(?array $documentID) : self
    {
        $this->initialized['documentID'] = true;
        $this->documentID = $documentID;
        return $this;
    }
}