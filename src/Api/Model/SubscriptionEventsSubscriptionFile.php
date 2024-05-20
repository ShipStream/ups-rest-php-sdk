<?php

namespace ShipStream\Ups\Api\Model;

class SubscriptionEventsSubscriptionFile extends \ArrayObject
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
    * File name belonging to specific subscription requested by user.
    Format: YYMMDD_HHmmssnnn
    *
    * @var string
    */
    protected $fileName;
    /**
     * Container that displays whether the file is read or unread.
     *
     * @var SubscriptionFileStatusType
     */
    protected $statusType;
    /**
     * Container represents all data that is relevant for the shipment, such as origin, destination, shipper, payment method etc. It will be returned when available.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<SubscriptionFileManifest>
     */
    protected $manifest;
    /**
     * Information about shipment's origin.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<SubscriptionFileOrigin>
     */
    protected $origin;
    /**
     * Shipment exception data.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<SubscriptionFileException>
     */
    protected $exception;
    /**
     * Container for delivery information.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<SubscriptionFileDelivery>
     */
    protected $delivery;
    /**
     * Container for generic record information.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var list<SubscriptionFileGeneric>
     */
    protected $generic;
    /**
    * File name belonging to specific subscription requested by user.
    Format: YYMMDD_HHmmssnnn
    *
    * @return string
    */
    public function getFileName() : string
    {
        return $this->fileName;
    }
    /**
    * File name belonging to specific subscription requested by user.
    Format: YYMMDD_HHmmssnnn
    *
    * @param string $fileName
    *
    * @return self
    */
    public function setFileName(string $fileName) : self
    {
        $this->initialized['fileName'] = true;
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * Container that displays whether the file is read or unread.
     *
     * @return SubscriptionFileStatusType
     */
    public function getStatusType() : SubscriptionFileStatusType
    {
        return $this->statusType;
    }
    /**
     * Container that displays whether the file is read or unread.
     *
     * @param SubscriptionFileStatusType $statusType
     *
     * @return self
     */
    public function setStatusType(SubscriptionFileStatusType $statusType) : self
    {
        $this->initialized['statusType'] = true;
        $this->statusType = $statusType;
        return $this;
    }
    /**
     * Container represents all data that is relevant for the shipment, such as origin, destination, shipper, payment method etc. It will be returned when available.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<SubscriptionFileManifest>
     */
    public function getManifest() : array
    {
        return $this->manifest;
    }
    /**
     * Container represents all data that is relevant for the shipment, such as origin, destination, shipper, payment method etc. It will be returned when available.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<SubscriptionFileManifest> $manifest
     *
     * @return self
     */
    public function setManifest(array $manifest) : self
    {
        $this->initialized['manifest'] = true;
        $this->manifest = $manifest;
        return $this;
    }
    /**
     * Information about shipment's origin.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<SubscriptionFileOrigin>
     */
    public function getOrigin() : array
    {
        return $this->origin;
    }
    /**
     * Information about shipment's origin.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<SubscriptionFileOrigin> $origin
     *
     * @return self
     */
    public function setOrigin(array $origin) : self
    {
        $this->initialized['origin'] = true;
        $this->origin = $origin;
        return $this;
    }
    /**
     * Shipment exception data.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<SubscriptionFileException>
     */
    public function getException() : array
    {
        return $this->exception;
    }
    /**
     * Shipment exception data.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<SubscriptionFileException> $exception
     *
     * @return self
     */
    public function setException(array $exception) : self
    {
        $this->initialized['exception'] = true;
        $this->exception = $exception;
        return $this;
    }
    /**
     * Container for delivery information.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<SubscriptionFileDelivery>
     */
    public function getDelivery() : array
    {
        return $this->delivery;
    }
    /**
     * Container for delivery information.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<SubscriptionFileDelivery> $delivery
     *
     * @return self
     */
    public function setDelivery(array $delivery) : self
    {
        $this->initialized['delivery'] = true;
        $this->delivery = $delivery;
        return $this;
    }
    /**
     * Container for generic record information.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return list<SubscriptionFileGeneric>
     */
    public function getGeneric() : array
    {
        return $this->generic;
    }
    /**
     * Container for generic record information.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param list<SubscriptionFileGeneric> $generic
     *
     * @return self
     */
    public function setGeneric(array $generic) : self
    {
        $this->initialized['generic'] = true;
        $this->generic = $generic;
        return $this;
    }
}