<?php

namespace ShipStream\Ups\Api\Model;

class Destination extends \ArrayObject
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
    * It is an HTTP-based callback end point that is exposed by the client to receive event notification. This endpoint must be operational arround the clock to ensure no event notifications are missed.
    If this endpoint is not continuously available, incoming events will be lost.
    
    *
    * @var string|null
    */
    protected $url;
    /**
     * It is an open-entry field that indicates type of credentials supported by the client.
     *
     * @var string|null
     */
    protected $credentialType;
    /**
     * It is an opaque string meant for client authentication. If for any reason this credential changes then any event notification will fail until a new subscription is made.
     *
     * @var string|null
     */
    protected $credential;
    /**
    * It is an HTTP-based callback end point that is exposed by the client to receive event notification. This endpoint must be operational arround the clock to ensure no event notifications are missed.
    If this endpoint is not continuously available, incoming events will be lost.
    
    *
    * @return string|null
    */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
    * It is an HTTP-based callback end point that is exposed by the client to receive event notification. This endpoint must be operational arround the clock to ensure no event notifications are missed.
    If this endpoint is not continuously available, incoming events will be lost.
    
    *
    * @param string|null $url
    *
    * @return self
    */
    public function setUrl(?string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * It is an open-entry field that indicates type of credentials supported by the client.
     *
     * @return string|null
     */
    public function getCredentialType() : ?string
    {
        return $this->credentialType;
    }
    /**
     * It is an open-entry field that indicates type of credentials supported by the client.
     *
     * @param string|null $credentialType
     *
     * @return self
     */
    public function setCredentialType(?string $credentialType) : self
    {
        $this->initialized['credentialType'] = true;
        $this->credentialType = $credentialType;
        return $this;
    }
    /**
     * It is an opaque string meant for client authentication. If for any reason this credential changes then any event notification will fail until a new subscription is made.
     *
     * @return string|null
     */
    public function getCredential() : ?string
    {
        return $this->credential;
    }
    /**
     * It is an opaque string meant for client authentication. If for any reason this credential changes then any event notification will fail until a new subscription is made.
     *
     * @param string|null $credential
     *
     * @return self
     */
    public function setCredential(?string $credential) : self
    {
        $this->initialized['credential'] = true;
        $this->credential = $credential;
        return $this;
    }
}