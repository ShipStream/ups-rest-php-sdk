<?php

namespace ShipStream\Ups\Api\Model;

class PushToImageRepositoryRequest extends \ArrayObject
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
     * Contains Paperless Document API PushToImageRepository request criteria components.  N/A
     *
     * @var PushToImageRepositoryRequestRequest|null
     */
    protected $request;
    /**
     * The Shipper's UPS Account Number.  Your UPS Account Number must have 'Upload Forms Created Offline' enabled to use this webservice.
     *
     * @var string|null
     */
    protected $shipperNumber;
    /**
     * The container for DocumentID(s).  N/A
     *
     * @var PushToImageRepositoryRequestFormsHistoryDocumentID|null
     */
    protected $formsHistoryDocumentID;
    /**
     * FormsGroupID would be required in Push Request if user needs to update uploaded DocumentID(s) in Forms History.  N/A
     *
     * @var string|null
     */
    protected $formsGroupID;
    /**
     * Shipment Identifier is required for this request.  N/A
     *
     * @var string|null
     */
    protected $shipmentIdentifier;
    /**
     * The date and time of the processed shipment. Required only for small package shipments. The valid format is yyyy-MM-dd-HH.mm.ss  N/A
     *
     * @var string|null
     */
    protected $shipmentDateAndTime;
    /**
     * Valid values are: 1 = small package, 2 = freight.  N/A
     *
     * @var string|null
     */
    protected $shipmentType;
    /**
     * PRQ Confirmation being specified by client. Required for freight shipments.  N/A
     *
     * @var string|null
     */
    protected $pRQConfirmationNumber;
    /**
     * UPS Tracking Number associated with this shipment. Required only for small package shipment.  N/A
     *
     * @var list<string>|null
     */
    protected $trackingNumber;
    /**
     * Contains Paperless Document API PushToImageRepository request criteria components.  N/A
     *
     * @return PushToImageRepositoryRequestRequest|null
     */
    public function getRequest() : ?PushToImageRepositoryRequestRequest
    {
        return $this->request;
    }
    /**
     * Contains Paperless Document API PushToImageRepository request criteria components.  N/A
     *
     * @param PushToImageRepositoryRequestRequest|null $request
     *
     * @return self
     */
    public function setRequest(?PushToImageRepositoryRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
     * The Shipper's UPS Account Number.  Your UPS Account Number must have 'Upload Forms Created Offline' enabled to use this webservice.
     *
     * @return string|null
     */
    public function getShipperNumber() : ?string
    {
        return $this->shipperNumber;
    }
    /**
     * The Shipper's UPS Account Number.  Your UPS Account Number must have 'Upload Forms Created Offline' enabled to use this webservice.
     *
     * @param string|null $shipperNumber
     *
     * @return self
     */
    public function setShipperNumber(?string $shipperNumber) : self
    {
        $this->initialized['shipperNumber'] = true;
        $this->shipperNumber = $shipperNumber;
        return $this;
    }
    /**
     * The container for DocumentID(s).  N/A
     *
     * @return PushToImageRepositoryRequestFormsHistoryDocumentID|null
     */
    public function getFormsHistoryDocumentID() : ?PushToImageRepositoryRequestFormsHistoryDocumentID
    {
        return $this->formsHistoryDocumentID;
    }
    /**
     * The container for DocumentID(s).  N/A
     *
     * @param PushToImageRepositoryRequestFormsHistoryDocumentID|null $formsHistoryDocumentID
     *
     * @return self
     */
    public function setFormsHistoryDocumentID(?PushToImageRepositoryRequestFormsHistoryDocumentID $formsHistoryDocumentID) : self
    {
        $this->initialized['formsHistoryDocumentID'] = true;
        $this->formsHistoryDocumentID = $formsHistoryDocumentID;
        return $this;
    }
    /**
     * FormsGroupID would be required in Push Request if user needs to update uploaded DocumentID(s) in Forms History.  N/A
     *
     * @return string|null
     */
    public function getFormsGroupID() : ?string
    {
        return $this->formsGroupID;
    }
    /**
     * FormsGroupID would be required in Push Request if user needs to update uploaded DocumentID(s) in Forms History.  N/A
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
    /**
     * Shipment Identifier is required for this request.  N/A
     *
     * @return string|null
     */
    public function getShipmentIdentifier() : ?string
    {
        return $this->shipmentIdentifier;
    }
    /**
     * Shipment Identifier is required for this request.  N/A
     *
     * @param string|null $shipmentIdentifier
     *
     * @return self
     */
    public function setShipmentIdentifier(?string $shipmentIdentifier) : self
    {
        $this->initialized['shipmentIdentifier'] = true;
        $this->shipmentIdentifier = $shipmentIdentifier;
        return $this;
    }
    /**
     * The date and time of the processed shipment. Required only for small package shipments. The valid format is yyyy-MM-dd-HH.mm.ss  N/A
     *
     * @return string|null
     */
    public function getShipmentDateAndTime() : ?string
    {
        return $this->shipmentDateAndTime;
    }
    /**
     * The date and time of the processed shipment. Required only for small package shipments. The valid format is yyyy-MM-dd-HH.mm.ss  N/A
     *
     * @param string|null $shipmentDateAndTime
     *
     * @return self
     */
    public function setShipmentDateAndTime(?string $shipmentDateAndTime) : self
    {
        $this->initialized['shipmentDateAndTime'] = true;
        $this->shipmentDateAndTime = $shipmentDateAndTime;
        return $this;
    }
    /**
     * Valid values are: 1 = small package, 2 = freight.  N/A
     *
     * @return string|null
     */
    public function getShipmentType() : ?string
    {
        return $this->shipmentType;
    }
    /**
     * Valid values are: 1 = small package, 2 = freight.  N/A
     *
     * @param string|null $shipmentType
     *
     * @return self
     */
    public function setShipmentType(?string $shipmentType) : self
    {
        $this->initialized['shipmentType'] = true;
        $this->shipmentType = $shipmentType;
        return $this;
    }
    /**
     * PRQ Confirmation being specified by client. Required for freight shipments.  N/A
     *
     * @return string|null
     */
    public function getPRQConfirmationNumber() : ?string
    {
        return $this->pRQConfirmationNumber;
    }
    /**
     * PRQ Confirmation being specified by client. Required for freight shipments.  N/A
     *
     * @param string|null $pRQConfirmationNumber
     *
     * @return self
     */
    public function setPRQConfirmationNumber(?string $pRQConfirmationNumber) : self
    {
        $this->initialized['pRQConfirmationNumber'] = true;
        $this->pRQConfirmationNumber = $pRQConfirmationNumber;
        return $this;
    }
    /**
     * UPS Tracking Number associated with this shipment. Required only for small package shipment.  N/A
     *
     * @return list<string>|null
     */
    public function getTrackingNumber() : ?array
    {
        return $this->trackingNumber;
    }
    /**
     * UPS Tracking Number associated with this shipment. Required only for small package shipment.  N/A
     *
     * @param list<string>|null $trackingNumber
     *
     * @return self
     */
    public function setTrackingNumber(?array $trackingNumber) : self
    {
        $this->initialized['trackingNumber'] = true;
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
}