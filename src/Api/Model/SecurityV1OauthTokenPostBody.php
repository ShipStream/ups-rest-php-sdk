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
     * Valid values: authorization_code, client_credentials
     *
     * @var string|null
     */
    protected $grantType = 'authorization_code';
    /**
     * Authorization code from the UPS login system.
     *
     * @var string|null
     */
    protected $code;
    /**
     * Callback URL for the requesting application.
     *
     * @var string|null
     */
    protected $redirectUri;
    /**
     * Valid values: authorization_code, client_credentials
     *
     * @return string|null
     */
    public function getGrantType() : ?string
    {
        return $this->grantType;
    }
    /**
     * Valid values: authorization_code, client_credentials
     *
     * @param string|null $grantType
     *
     * @return self
     */
    public function setGrantType(?string $grantType) : self
    {
        $this->initialized['grantType'] = true;
        $this->grantType = $grantType;
        return $this;
    }
    /**
     * Authorization code from the UPS login system.
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Authorization code from the UPS login system.
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Callback URL for the requesting application.
     *
     * @return string|null
     */
    public function getRedirectUri() : ?string
    {
        return $this->redirectUri;
    }
    /**
     * Callback URL for the requesting application.
     *
     * @param string|null $redirectUri
     *
     * @return self
     */
    public function setRedirectUri(?string $redirectUri) : self
    {
        $this->initialized['redirectUri'] = true;
        $this->redirectUri = $redirectUri;
        return $this;
    }
}