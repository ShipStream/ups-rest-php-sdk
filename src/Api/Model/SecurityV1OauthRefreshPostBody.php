<?php

namespace ShipStream\Ups\Api\Model;

class SecurityV1OauthRefreshPostBody extends \ArrayObject
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
     * Valid values: refresh_token
     *
     * @var string|null
     */
    protected $grantType = 'refresh_token';
    /**
     * Refresh token from GenerateToken operation
     *
     * @var string|null
     */
    protected $refreshToken;
    /**
     * Valid values: refresh_token
     *
     * @return string|null
     */
    public function getGrantType() : ?string
    {
        return $this->grantType;
    }
    /**
     * Valid values: refresh_token
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
     * Refresh token from GenerateToken operation
     *
     * @return string|null
     */
    public function getRefreshToken() : ?string
    {
        return $this->refreshToken;
    }
    /**
     * Refresh token from GenerateToken operation
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setRefreshToken(?string $refreshToken) : self
    {
        $this->initialized['refreshToken'] = true;
        $this->refreshToken = $refreshToken;
        return $this;
    }
}