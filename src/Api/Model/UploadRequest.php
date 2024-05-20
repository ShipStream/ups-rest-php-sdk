<?php

namespace ShipStream\Ups\Api\Model;

class UploadRequest extends \ArrayObject
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
     * Contains Paperless Document API upload request criteria components.
     *
     * @var UploadRequestRequest
     */
    protected $request;
    /**
     * The Shipper's UPS Account Number.  Your UPS Account Number must have 'Upload Forms Created Offline' enabled to use this webservice.
     *
     * @var string
     */
    protected $shipperNumber;
    /**
     * 
     *
     * @var list<UploadRequestUserCreatedForm>
     */
    protected $userCreatedForm;
    /**
     * Contains Paperless Document API upload request criteria components.
     *
     * @return UploadRequestRequest
     */
    public function getRequest() : UploadRequestRequest
    {
        return $this->request;
    }
    /**
     * Contains Paperless Document API upload request criteria components.
     *
     * @param UploadRequestRequest $request
     *
     * @return self
     */
    public function setRequest(UploadRequestRequest $request) : self
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
     * 
     *
     * @return list<UploadRequestUserCreatedForm>
     */
    public function getUserCreatedForm() : array
    {
        return $this->userCreatedForm;
    }
    /**
     * 
     *
     * @param list<UploadRequestUserCreatedForm> $userCreatedForm
     *
     * @return self
     */
    public function setUserCreatedForm(array $userCreatedForm) : self
    {
        $this->initialized['userCreatedForm'] = true;
        $this->userCreatedForm = $userCreatedForm;
        return $this;
    }
}