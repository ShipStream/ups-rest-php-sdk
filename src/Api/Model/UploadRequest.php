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
     * Contains Paperless Document API upload request criteria components.  N/A
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
     * The container for User Created Form. The container holds the file. Total number of allowed files per shipment is 13.  N/A
     *
     * @var UploadRequestUserCreatedForm
     */
    protected $userCreatedForm;
    /**
     * Contains Paperless Document API upload request criteria components.  N/A
     *
     * @return UploadRequestRequest
     */
    public function getRequest() : UploadRequestRequest
    {
        return $this->request;
    }
    /**
     * Contains Paperless Document API upload request criteria components.  N/A
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
     * The container for User Created Form. The container holds the file. Total number of allowed files per shipment is 13.  N/A
     *
     * @return UploadRequestUserCreatedForm
     */
    public function getUserCreatedForm() : UploadRequestUserCreatedForm
    {
        return $this->userCreatedForm;
    }
    /**
     * The container for User Created Form. The container holds the file. Total number of allowed files per shipment is 13.  N/A
     *
     * @param UploadRequestUserCreatedForm $userCreatedForm
     *
     * @return self
     */
    public function setUserCreatedForm(UploadRequestUserCreatedForm $userCreatedForm) : self
    {
        $this->initialized['userCreatedForm'] = true;
        $this->userCreatedForm = $userCreatedForm;
        return $this;
    }
}