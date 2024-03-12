<?php

namespace ShipStream\Ups\Api\Model;

class QuantumViewResponse extends \ArrayObject
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
     * Contains Errors information tags along with the success/fail status of the QuantumView request.
     *
     * @var QuantumViewResponseResponse
     */
    protected $response;
    /**
     * The event that a user receives echoing Subscriber ID and information for subscription event, which is a subset of Tracking information specific to either packages coming or packages going, after subscription request is made, if the user requests for XML format.
     *
     * @var QuantumViewResponseQuantumViewEvents
     */
    protected $quantumViewEvents;
    /**
     * Bookmarks the file for next retrieval, It is a base64Encoded String. It contains the combination of SubscriberID + SubscriptionName + File Name if the request is for all data. It contains SubscriberID if the request is for unread data. When a response comes back with a bookmark it indicates that there is more data. To fetch the remaining data, the requester should come back with the bookmark added to the original request.
     *
     * @var string
     */
    protected $bookmark;
    /**
     * Contains Errors information tags along with the success/fail status of the QuantumView request.
     *
     * @return QuantumViewResponseResponse
     */
    public function getResponse() : QuantumViewResponseResponse
    {
        return $this->response;
    }
    /**
     * Contains Errors information tags along with the success/fail status of the QuantumView request.
     *
     * @param QuantumViewResponseResponse $response
     *
     * @return self
     */
    public function setResponse(QuantumViewResponseResponse $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * The event that a user receives echoing Subscriber ID and information for subscription event, which is a subset of Tracking information specific to either packages coming or packages going, after subscription request is made, if the user requests for XML format.
     *
     * @return QuantumViewResponseQuantumViewEvents
     */
    public function getQuantumViewEvents() : QuantumViewResponseQuantumViewEvents
    {
        return $this->quantumViewEvents;
    }
    /**
     * The event that a user receives echoing Subscriber ID and information for subscription event, which is a subset of Tracking information specific to either packages coming or packages going, after subscription request is made, if the user requests for XML format.
     *
     * @param QuantumViewResponseQuantumViewEvents $quantumViewEvents
     *
     * @return self
     */
    public function setQuantumViewEvents(QuantumViewResponseQuantumViewEvents $quantumViewEvents) : self
    {
        $this->initialized['quantumViewEvents'] = true;
        $this->quantumViewEvents = $quantumViewEvents;
        return $this;
    }
    /**
     * Bookmarks the file for next retrieval, It is a base64Encoded String. It contains the combination of SubscriberID + SubscriptionName + File Name if the request is for all data. It contains SubscriberID if the request is for unread data. When a response comes back with a bookmark it indicates that there is more data. To fetch the remaining data, the requester should come back with the bookmark added to the original request.
     *
     * @return string
     */
    public function getBookmark() : string
    {
        return $this->bookmark;
    }
    /**
     * Bookmarks the file for next retrieval, It is a base64Encoded String. It contains the combination of SubscriberID + SubscriptionName + File Name if the request is for all data. It contains SubscriberID if the request is for unread data. When a response comes back with a bookmark it indicates that there is more data. To fetch the remaining data, the requester should come back with the bookmark added to the original request.
     *
     * @param string $bookmark
     *
     * @return self
     */
    public function setBookmark(string $bookmark) : self
    {
        $this->initialized['bookmark'] = true;
        $this->bookmark = $bookmark;
        return $this;
    }
}