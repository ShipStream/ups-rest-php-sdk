<?php

namespace ShipStream\Ups\Api\Model;

class SecurityV1OauthTokenPostBody extends \ArrayObject
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
     * Valid values: authorization_code
     *
     * @var string
     */
    protected $grantType = 'authorization_code';
    /**
     * Authorization code from the UPS login system.
     *
     * @var string
     */
    protected $code;
    /**
     * Callback URL for the requesting application.
     *
     * @var string
     */
    protected $redirectUri;
    /**
     * Valid values: authorization_code
     *
     * @return string
     */
    public function getGrantType() : string
    {
        return $this->grantType;
    }
    /**
     * Valid values: authorization_code
     *
     * @param string $grantType
     *
     * @return self
     */
    public function setGrantType(string $grantType) : self
    {
        $this->initialized['grantType'] = true;
        $this->grantType = $grantType;
        return $this;
    }
    /**
     * Authorization code from the UPS login system.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Authorization code from the UPS login system.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Callback URL for the requesting application.
     *
     * @return string
     */
    public function getRedirectUri() : string
    {
        return $this->redirectUri;
    }
    /**
     * Callback URL for the requesting application.
     *
     * @param string $redirectUri
     *
     * @return self
     */
    public function setRedirectUri(string $redirectUri) : self
    {
        $this->initialized['redirectUri'] = true;
        $this->redirectUri = $redirectUri;
        return $this;
    }
}