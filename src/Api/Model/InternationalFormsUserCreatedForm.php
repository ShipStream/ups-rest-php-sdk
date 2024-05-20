<?php

namespace ShipStream\Ups\Api\Model;

class InternationalFormsUserCreatedForm extends \ArrayObject
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
     *
     * @var list<string>
     */
    protected $documentID;
    /**
     * DocumentID represents a document uploaded to Forms History.
     *
     * @return list<string>
     */
    public function getDocumentID() : array
    {
        return $this->documentID;
    }
    /**
     * DocumentID represents a document uploaded to Forms History.
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