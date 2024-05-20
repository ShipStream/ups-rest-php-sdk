<?php

namespace ShipStream\Ups\Api\Model;

class QuantumViewRequest extends \ArrayObject
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
     * Contains QuantumView request criteria components.
     *
     * @var QuantumViewRequestRequest
     */
    protected $request;
    /**
     * 
     *
     * @var list<QuantumViewRequestSubscriptionRequest>
     */
    protected $subscriptionRequest;
    /**
    * Bookmarks the file for next retrieval. It is a base64Encoded String. 
    It contains the combination of SubscriberID + SubscriptionName + File Name if the request is for all data. 
    It contains SubscriberID  if the request is for unread data. When a response comes back with a bookmark it indicates that there is more data. To fetch the remaining data, the requester should come back with the bookmark added to the original request.
    *
    * @var string
    */
    protected $bookmark;
    /**
     * Contains QuantumView request criteria components.
     *
     * @return QuantumViewRequestRequest
     */
    public function getRequest() : QuantumViewRequestRequest
    {
        return $this->request;
    }
    /**
     * Contains QuantumView request criteria components.
     *
     * @param QuantumViewRequestRequest $request
     *
     * @return self
     */
    public function setRequest(QuantumViewRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
     * 
     *
     * @return list<QuantumViewRequestSubscriptionRequest>
     */
    public function getSubscriptionRequest() : array
    {
        return $this->subscriptionRequest;
    }
    /**
     * 
     *
     * @param list<QuantumViewRequestSubscriptionRequest> $subscriptionRequest
     *
     * @return self
     */
    public function setSubscriptionRequest(array $subscriptionRequest) : self
    {
        $this->initialized['subscriptionRequest'] = true;
        $this->subscriptionRequest = $subscriptionRequest;
        return $this;
    }
    /**
    * Bookmarks the file for next retrieval. It is a base64Encoded String. 
    It contains the combination of SubscriberID + SubscriptionName + File Name if the request is for all data. 
    It contains SubscriberID  if the request is for unread data. When a response comes back with a bookmark it indicates that there is more data. To fetch the remaining data, the requester should come back with the bookmark added to the original request.
    *
    * @return string
    */
    public function getBookmark() : string
    {
        return $this->bookmark;
    }
    /**
    * Bookmarks the file for next retrieval. It is a base64Encoded String. 
    It contains the combination of SubscriberID + SubscriptionName + File Name if the request is for all data. 
    It contains SubscriberID  if the request is for unread data. When a response comes back with a bookmark it indicates that there is more data. To fetch the remaining data, the requester should come back with the bookmark added to the original request.
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