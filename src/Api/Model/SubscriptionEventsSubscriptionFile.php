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
}