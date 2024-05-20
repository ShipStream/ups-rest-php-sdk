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
     * DocumentID represents a document uploaded to Forms History.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<string>
     */
    protected $documentID;
    /**
     * DocumentID represents a document uploaded to Forms History.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<string>
     */
    public function getDocumentID() : array
    {
        return $this->documentID;
    }
    /**
     * DocumentID represents a document uploaded to Forms History.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<string> $documentID
     *
     * @return self
     */
    public function setDocumentID(array $documentID) : self
    {
        $this->initialized['documentID'] = true;
        $this->documentID = $documentID;
        return $this;
    }
}