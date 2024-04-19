<?php

namespace ShipStream\Ups\Api\Model;

class DeleteRequest extends \ArrayObject
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
     * Contains Paperless Document API deleted request criteria components.
     *
     * @var DeleteRequestRequest
     */
    protected $request;
    /**
     * The Shipper's UPS Account Number.  Your UPS Account Number must have 'Upload Forms Created Offline' enabled to use this webservice.
     *
     * @var string
     */
    protected $shipperNumber;
    /**
     * DocumentId representing uploaded document to Forms History.  Only one DocumentID will be accepted for delete request.
     *
     * @var string
     */
    protected $documentID;
    /**
     * Contains Paperless Document API deleted request criteria components.
     *
     * @return DeleteRequestRequest
     */
    public function getRequest() : DeleteRequestRequest
    {
        return $this->request;
    }
    /**
     * Contains Paperless Document API deleted request criteria components.
     *
     * @param DeleteRequestRequest $request
     *
     * @return self
     */
    public function setRequest(DeleteRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
     * The Shipper's UPS Account Number.  Your UPS Account Number must have 'Upload Forms Created Offline' enabled to use this webservice.
     *
     * @return string
     */
    public function getShipperNumber() : string
    {
        return $this->shipperNumber;
    }
    /**
     * The Shipper's UPS Account Number.  Your UPS Account Number must have 'Upload Forms Created Offline' enabled to use this webservice.
     *
     * @param string $shipperNumber
     *
     * @return self
     */
    public function setShipperNumber(string $shipperNumber) : self
    {
        $this->initialized['shipperNumber'] = true;
        $this->shipperNumber = $shipperNumber;
        return $this;
    }
    /**
     * DocumentId representing uploaded document to Forms History.  Only one DocumentID will be accepted for delete request.
     *
     * @return string
     */
    public function getDocumentID() : string
    {
        return $this->documentID;
    }
    /**
     * DocumentId representing uploaded document to Forms History.  Only one DocumentID will be accepted for delete request.
     *
     * @param string $documentID
     *
     * @return self
     */
    public function setDocumentID(string $documentID) : self
    {
        $this->initialized['documentID'] = true;
        $this->documentID = $documentID;
        return $this;
    }
}