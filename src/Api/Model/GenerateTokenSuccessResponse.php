<?php

namespace ShipStream\Ups\Api\Model;

class GenerateTokenSuccessResponse extends \ArrayObject
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
     * @var string|null
     */
    protected $refreshTokenExpiresIn;
    /**
     * Status for requested refresh token.
     *
     * @var string|null
     */
    protected $refreshTokenStatus;
    /**
     * Type of requested access token
     *
     * @var string|null
     */
    protected $tokenType;
    /**
     * Issue time of requested token.
     *
     * @var string|null
     */
    protected $issuedAt;
    /**
     * Client id for requested token.
     *
     * @var string|null
     */
    protected $clientId;
    /**
     * Token to be used in API requests.
     *
     * @var string|null
     */
    protected $accessToken;
    /**
     * Refresh token to be used in refresh requests when obtaining new access token.
     *
     * @var string|null
     */
    protected $refreshToken;
    /**
     * Scope for requested token.
     *
     * @var string|null
     */
    protected $scope;
    /**
     * Time that refresh token was issued.
     *
     * @var string|null
     */
    protected $refreshTokenIssuedAt;
    /**
     * Expire time for requested token in seconds.
     *
     * @var string|null
     */
    protected $expiresIn;
    /**
     * Number of refreshes for requested token.
     *
     * @var string|null
     */
    protected $refreshCount;
    /**
     * Status for requested token.
     *
     * @var string|null
     */
    protected $status;
    /**
     * Expiration time for requested refresh token in seconds.
     *
     * @return string|null
     */
    public function getRefreshTokenExpiresIn() : ?string
    {
        return $this->refreshTokenExpiresIn;
    }
    /**
     * Expiration time for requested refresh token in seconds.
     *
     * @param string|null $refreshTokenExpiresIn
     *
     * @return self
     */
    public function setRefreshTokenExpiresIn(?string $refreshTokenExpiresIn) : self
    {
        $this->initialized['refreshTokenExpiresIn'] = true;
        $this->refreshTokenExpiresIn = $refreshTokenExpiresIn;
        return $this;
    }
    /**
     * Status for requested refresh token.
     *
     * @return string|null
     */
    public function getRefreshTokenStatus() : ?string
    {
        return $this->refreshTokenStatus;
    }
    /**
     * Status for requested refresh token.
     *
     * @param string|null $refreshTokenStatus
     *
     * @return self
     */
    public function setRefreshTokenStatus(?string $refreshTokenStatus) : self
    {
        $this->initialized['refreshTokenStatus'] = true;
        $this->refreshTokenStatus = $refreshTokenStatus;
        return $this;
    }
    /**
     * Type of requested access token
     *
     * @return string|null
     */
    public function getTokenType() : ?string
    {
        return $this->tokenType;
    }
    /**
     * Type of requested access token
     *
     * @param string|null $tokenType
     *
     * @return self
     */
    public function setTokenType(?string $tokenType) : self
    {
        $this->initialized['tokenType'] = true;
        $this->tokenType = $tokenType;
        return $this;
    }
    /**
     * Issue time of requested token.
     *
     * @return string|null
     */
    public function getIssuedAt() : ?string
    {
        return $this->issuedAt;
    }
    /**
     * Issue time of requested token.
     *
     * @param string|null $issuedAt
     *
     * @return self
     */
    public function setIssuedAt(?string $issuedAt) : self
    {
        $this->initialized['issuedAt'] = true;
        $this->issuedAt = $issuedAt;
        return $this;
    }
    /**
     * Client id for requested token.
     *
     * @return string|null
     */
    public function getClientId() : ?string
    {
        return $this->clientId;
    }
    /**
     * Client id for requested token.
     *
     * @param string|null $clientId
     *
     * @return self
     */
    public function setClientId(?string $clientId) : self
    {
        $this->initialized['clientId'] = true;
        $this->clientId = $clientId;
        return $this;
    }
    /**
     * Token to be used in API requests.
     *
     * @return string|null
     */
    public function getAccessToken() : ?string
    {
        return $this->accessToken;
    }
    /**
     * Token to be used in API requests.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setAccessToken(?string $accessToken) : self
    {
        $this->initialized['accessToken'] = true;
        $this->accessToken = $accessToken;
        return $this;
    }
    /**
     * Refresh token to be used in refresh requests when obtaining new access token.
     *
     * @return string|null
     */
    public function getRefreshToken() : ?string
    {
        return $this->refreshToken;
    }
    /**
     * Refresh token to be used in refresh requests when obtaining new access token.
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
    /**
     * Scope for requested token.
     *
     * @return string|null
     */
    public function getScope() : ?string
    {
        return $this->scope;
    }
    /**
     * Scope for requested token.
     *
     * @param string|null $scope
     *
     * @return self
     */
    public function setScope(?string $scope) : self
    {
        $this->initialized['scope'] = true;
        $this->scope = $scope;
        return $this;
    }
    /**
     * Time that refresh token was issued.
     *
     * @return string|null
     */
    public function getRefreshTokenIssuedAt() : ?string
    {
        return $this->refreshTokenIssuedAt;
    }
    /**
     * Time that refresh token was issued.
     *
     * @param string|null $refreshTokenIssuedAt
     *
     * @return self
     */
    public function setRefreshTokenIssuedAt(?string $refreshTokenIssuedAt) : self
    {
        $this->initialized['refreshTokenIssuedAt'] = true;
        $this->refreshTokenIssuedAt = $refreshTokenIssuedAt;
        return $this;
    }
    /**
     * Expire time for requested token in seconds.
     *
     * @return string|null
     */
    public function getExpiresIn() : ?string
    {
        return $this->expiresIn;
    }
    /**
     * Expire time for requested token in seconds.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setExpiresIn(?string $expiresIn) : self
    {
        $this->initialized['expiresIn'] = true;
        $this->expiresIn = $expiresIn;
        return $this;
    }
    /**
     * Number of refreshes for requested token.
     *
     * @return string|null
     */
    public function getRefreshCount() : ?string
    {
        return $this->refreshCount;
    }
    /**
     * Number of refreshes for requested token.
     *
     * @param string|null $refreshCount
     *
     * @return self
     */
    public function setRefreshCount(?string $refreshCount) : self
    {
        $this->initialized['refreshCount'] = true;
        $this->refreshCount = $refreshCount;
        return $this;
    }
    /**
     * Status for requested token.
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * Status for requested token.
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}