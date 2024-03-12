<?php

namespace ShipStream\Ups\Api\Model;

class GenericFailureNotification extends \ArrayObject
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
     * Email address that failed when an attempt was made to send email to the customer
     *
     * @var string
     */
    protected $failedEmailAddress;
    /**
     * Failure notification code information describing code.
     *
     * @var FailureNotificationFailureNotificationCode
     */
    protected $failureNotificationCode;
    /**
     * Email address that failed when an attempt was made to send email to the customer
     *
     * @return string
     */
    public function getFailedEmailAddress() : string
    {
        return $this->failedEmailAddress;
    }
    /**
     * Email address that failed when an attempt was made to send email to the customer
     *
     * @param string $failedEmailAddress
     *
     * @return self
     */
    public function setFailedEmailAddress(string $failedEmailAddress) : self
    {
        $this->initialized['failedEmailAddress'] = true;
        $this->failedEmailAddress = $failedEmailAddress;
        return $this;
    }
    /**
     * Failure notification code information describing code.
     *
     * @return FailureNotificationFailureNotificationCode
     */
    public function getFailureNotificationCode() : FailureNotificationFailureNotificationCode
    {
        return $this->failureNotificationCode;
    }
    /**
     * Failure notification code information describing code.
     *
     * @param FailureNotificationFailureNotificationCode $failureNotificationCode
     *
     * @return self
     */
    public function setFailureNotificationCode(FailureNotificationFailureNotificationCode $failureNotificationCode) : self
    {
        $this->initialized['failureNotificationCode'] = true;
        $this->failureNotificationCode = $failureNotificationCode;
        return $this;
    }
}