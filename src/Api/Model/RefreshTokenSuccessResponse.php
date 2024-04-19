<?php

namespace ShipStream\Ups\Api\Model;

class RefreshTokenSuccessResponse extends \ArrayObject
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
     * Expiration time for requested refresh token in seconds.
     *
     * @var string
     */
    protected $refreshTokenExpiresIn;
    /**
     * Status for requested refresh token.
     *
     * @var string
     */
    protected $refreshTokenStatus;
    /**
     * Type for requested token.
     *
     * @var string
     */
    protected $tokenType;
    /**
     * Issue time for requested token in milliseconds.
     *
     * @var string
     */
    protected $issuedAt;
    /**
     * Client id for requested token.
     *
     * @var string
     */
    protected $clientId;
    /**
     * Token to be used in API requests.
     *
     * @var string
     */
    protected $accessToken;
    /**
     * Token to be used in refresh requests.
     *
     * @var string
     */
    protected $refreshToken;
    /**
     * Scope for requested token.
     *
     * @var string
     */
    protected $scope;
    /**
     * Issue time for requested refresh token in milliseconds.
     *
     * @var string
     */
    protected $refreshTokenIssuedAt;
    /**
     * Expiration time for requested access token in seconds.
     *
     * @var string
     */
    protected $expiresIn;
    /**
     * Number of refreshes for requested token.
     *
     * @var string
     */
    protected $refreshCount;
    /**
     * Status for requested token.
     *
     * @var string
     */
    protected $status;
    /**
     * Expiration time for requested refresh token in seconds.
     *
     * @return string
     */
    public function getRefreshTokenExpiresIn() : string
    {
        return $this->refreshTokenExpiresIn;
    }
    /**
     * Expiration time for requested refresh token in seconds.
     *
     * @param string $refreshTokenExpiresIn
     *
     * @return self
     */
    public function setRefreshTokenExpiresIn(string $refreshTokenExpiresIn) : self
    {
        $this->initialized['refreshTokenExpiresIn'] = true;
        $this->refreshTokenExpiresIn = $refreshTokenExpiresIn;
        return $this;
    }
    /**
     * Status for requested refresh token.
     *
     * @return string
     */
    public function getRefreshTokenStatus() : string
    {
        return $this->refreshTokenStatus;
    }
    /**
     * Status for requested refresh token.
     *
     * @param string $refreshTokenStatus
     *
     * @return self
     */
    public function setRefreshTokenStatus(string $refreshTokenStatus) : self
    {
        $this->initialized['refreshTokenStatus'] = true;
        $this->refreshTokenStatus = $refreshTokenStatus;
        return $this;
    }
    /**
     * Type for requested token.
     *
     * @return string
     */
    public function getTokenType() : string
    {
        return $this->tokenType;
    }
    /**
     * Type for requested token.
     *
     * @param string $tokenType
     *
     * @return self
     */
    public function setTokenType(string $tokenType) : self
    {
        $this->initialized['tokenType'] = true;
        $this->tokenType = $tokenType;
        return $this;
    }
    /**
     * Issue time for requested token in milliseconds.
     *
     * @return string
     */
    public function getIssuedAt() : string
    {
        return $this->issuedAt;
    }
    /**
     * Issue time for requested token in milliseconds.
     *
     * @param string $issuedAt
     *
     * @return self
     */
    public function setIssuedAt(string $issuedAt) : self
    {
        $this->initialized['issuedAt'] = true;
        $this->issuedAt = $issuedAt;
        return $this;
    }
    /**
     * Client id for requested token.
     *
     * @return string
     */
    public function getClientId() : string
    {
        return $this->clientId;
    }
    /**
     * Client id for requested token.
     *
     * @param string $clientId
     *
     * @return self
     */
    public function setClientId(string $clientId) : self
    {
        $this->initialized['clientId'] = true;
        $this->clientId = $clientId;
        return $this;
    }
    /**
     * Token to be used in API requests.
     *
     * @return string
     */
    public function getAccessToken() : string
    {
        return $this->accessToken;
    }
    /**
     * Token to be used in API requests.
     *
     * @param string $accessToken
     *
     * @return self
     */
    public function setAccessToken(string $accessToken) : self
    {
        $this->initialized['accessToken'] = true;
        $this->accessToken = $accessToken;
        return $this;
    }
    /**
     * Token to be used in refresh requests.
     *
     * @return string
     */
    public function getRefreshToken() : string
    {
        return $this->refreshToken;
    }
    /**
     * Token to be used in refresh requests.
     *
     * @param string $refreshToken
     *
     * @return self
     */
    public function setRefreshToken(string $refreshToken) : self
    {
        $this->initialized['refreshToken'] = true;
        $this->refreshToken = $refreshToken;
        return $this;
    }
    /**
     * Scope for requested token.
     *
     * @return string
     */
    public function getScope() : string
    {
        return $this->scope;
    }
    /**
     * Scope for requested token.
     *
     * @param string $scope
     *
     * @return self
     */
    public function setScope(string $scope) : self
    {
        $this->initialized['scope'] = true;
        $this->scope = $scope;
        return $this;
    }
    /**
     * Issue time for requested refresh token in milliseconds.
     *
     * @return string
     */
    public function getRefreshTokenIssuedAt() : string
    {
        return $this->refreshTokenIssuedAt;
    }
    /**
     * Issue time for requested refresh token in milliseconds.
     *
     * @param string $refreshTokenIssuedAt
     *
     * @return self
     */
    public function setRefreshTokenIssuedAt(string $refreshTokenIssuedAt) : self
    {
        $this->initialized['refreshTokenIssuedAt'] = true;
        $this->refreshTokenIssuedAt = $refreshTokenIssuedAt;
        return $this;
    }
    /**
     * Expiration time for requested access token in seconds.
     *
     * @return string
     */
    public function getExpiresIn() : string
    {
        return $this->expiresIn;
    }
    /**
     * Expiration time for requested access token in seconds.
     *
     * @param string $expiresIn
     *
     * @return self
     */
    public function setExpiresIn(string $expiresIn) : self
    {
        $this->initialized['expiresIn'] = true;
        $this->expiresIn = $expiresIn;
        return $this;
    }
    /**
     * Number of refreshes for requested token.
     *
     * @return string
     */
    public function getRefreshCount() : string
    {
        return $this->refreshCount;
    }
    /**
     * Number of refreshes for requested token.
     *
     * @param string $refreshCount
     *
     * @return self
     */
    public function setRefreshCount(string $refreshCount) : self
    {
        $this->initialized['refreshCount'] = true;
        $this->refreshCount = $refreshCount;
        return $this;
    }
    /**
     * Status for requested token.
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * Status for requested token.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}