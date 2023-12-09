<?php

namespace ShipStream\Ups\Api\Model;

class SubscriptionEventsSubscriptionFile extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
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
     * 
     *
     * @var SubscriptionFileManifest[]
     */
    protected $manifest;
    /**
     * 
     *
     * @var SubscriptionFileOrigin[]
     */
    protected $origin;
    /**
     * 
     *
     * @var SubscriptionFileException[]
     */
    protected $exception;
    /**
     * 
     *
     * @var SubscriptionFileDelivery[]
     */
    protected $delivery;
    /**
     * 
     *
     * @var SubscriptionFileGeneric[]
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
     * 
     *
     * @return SubscriptionFileManifest[]
     */
    public function getManifest() : array
    {
        return $this->manifest;
    }
    /**
     * 
     *
     * @param SubscriptionFileManifest[] $manifest
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
     * 
     *
     * @return SubscriptionFileOrigin[]
     */
    public function getOrigin() : array
    {
        return $this->origin;
    }
    /**
     * 
     *
     * @param SubscriptionFileOrigin[] $origin
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
     * 
     *
     * @return SubscriptionFileException[]
     */
    public function getException() : array
    {
        return $this->exception;
    }
    /**
     * 
     *
     * @param SubscriptionFileException[] $exception
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
     * 
     *
     * @return SubscriptionFileDelivery[]
     */
    public function getDelivery() : array
    {
        return $this->delivery;
    }
    /**
     * 
     *
     * @param SubscriptionFileDelivery[] $delivery
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
     * 
     *
     * @return SubscriptionFileGeneric[]
     */
    public function getGeneric() : array
    {
        return $this->generic;
    }
    /**
     * 
     *
     * @param SubscriptionFileGeneric[] $generic
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