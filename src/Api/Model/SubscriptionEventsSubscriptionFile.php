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
    * @var string|null
    */
    protected $fileName;
    /**
     * Container that displays whether the file is read or unread.
     *
     * @var SubscriptionFileStatusType|null
     */
    protected $statusType;
    /**
     * 
     *
     * @var list<SubscriptionFileManifest>|null
     */
    protected $manifest;
    /**
     * 
     *
     * @var list<SubscriptionFileOrigin>|null
     */
    protected $origin;
    /**
     * 
     *
     * @var list<SubscriptionFileException>|null
     */
    protected $exception;
    /**
     * 
     *
     * @var list<SubscriptionFileDelivery>|null
     */
    protected $delivery;
    /**
     * 
     *
     * @var list<SubscriptionFileGeneric>|null
     */
    protected $generic;
    /**
    * File name belonging to specific subscription requested by user.
    Format: YYMMDD_HHmmssnnn
    *
    * @return string|null
    */
    public function getFileName() : ?string
    {
        return $this->fileName;
    }
    /**
    * File name belonging to specific subscription requested by user.
    Format: YYMMDD_HHmmssnnn
    *
    * @param string|null $fileName
    *
    * @return self
    */
    public function setFileName(?string $fileName) : self
    {
        $this->initialized['fileName'] = true;
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * Container that displays whether the file is read or unread.
     *
     * @return SubscriptionFileStatusType|null
     */
    public function getStatusType() : ?SubscriptionFileStatusType
    {
        return $this->statusType;
    }
    /**
     * Container that displays whether the file is read or unread.
     *
     * @param SubscriptionFileStatusType|null $statusType
     *
     * @return self
     */
    public function setStatusType(?SubscriptionFileStatusType $statusType) : self
    {
        $this->initialized['statusType'] = true;
        $this->statusType = $statusType;
        return $this;
    }
    /**
     * 
     *
     * @return list<SubscriptionFileManifest>|null
     */
    public function getManifest() : ?array
    {
        return $this->manifest;
    }
    /**
     * 
     *
     * @param list<SubscriptionFileManifest>|null $manifest
     *
     * @return self
     */
    public function setManifest(?array $manifest) : self
    {
        $this->initialized['manifest'] = true;
        $this->manifest = $manifest;
        return $this;
    }
    /**
     * 
     *
     * @return list<SubscriptionFileOrigin>|null
     */
    public function getOrigin() : ?array
    {
        return $this->origin;
    }
    /**
     * 
     *
     * @param list<SubscriptionFileOrigin>|null $origin
     *
     * @return self
     */
    public function setOrigin(?array $origin) : self
    {
        $this->initialized['origin'] = true;
        $this->origin = $origin;
        return $this;
    }
    /**
     * 
     *
     * @return list<SubscriptionFileException>|null
     */
    public function getException() : ?array
    {
        return $this->exception;
    }
    /**
     * 
     *
     * @param list<SubscriptionFileException>|null $exception
     *
     * @return self
     */
    public function setException(?array $exception) : self
    {
        $this->initialized['exception'] = true;
        $this->exception = $exception;
        return $this;
    }
    /**
     * 
     *
     * @return list<SubscriptionFileDelivery>|null
     */
    public function getDelivery() : ?array
    {
        return $this->delivery;
    }
    /**
     * 
     *
     * @param list<SubscriptionFileDelivery>|null $delivery
     *
     * @return self
     */
    public function setDelivery(?array $delivery) : self
    {
        $this->initialized['delivery'] = true;
        $this->delivery = $delivery;
        return $this;
    }
    /**
     * 
     *
     * @return list<SubscriptionFileGeneric>|null
     */
    public function getGeneric() : ?array
    {
        return $this->generic;
    }
    /**
     * 
     *
     * @param list<SubscriptionFileGeneric>|null $generic
     *
     * @return self
     */
    public function setGeneric(?array $generic) : self
    {
        $this->initialized['generic'] = true;
        $this->generic = $generic;
        return $this;
    }
}