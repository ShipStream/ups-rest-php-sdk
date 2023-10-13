<?php

namespace ShipStream\Ups\Authentication;

use DateTime;
use DateTimeZone;

class AccessToken
{
    protected string $clientId;

    protected string $accessToken;

    protected int $issuedAt;

    protected int $expiresIn;

    protected ?string $refreshToken = null;

    protected int $refreshTokenIssuedAt = 0;

    protected int $refreshTokenExpiresIn = 0;

    public function getClientId(): string
    {
        return $this->clientId;
    }

    public function setClientId(string $clientId): self
    {
        $this->clientId = $clientId;
        return $this;
    }

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    public function setAccessToken(string $accessToken): self
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    public function getIssuedAt(): int
    {
        return $this->issuedAt;
    }

    public function setIssuedAt(int $issuedAt): self
    {
        $this->issuedAt = $issuedAt;
        return $this;
    }

    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }

    public function setExpiresIn(int $expiresIn): self
    {
        $this->expiresIn = $expiresIn;
        return $this;
    }

    public function getRefreshToken(): ?string
    {
        return $this->refreshToken;
    }

    public function setRefreshToken(?string $refreshToken): self
    {
        $this->refreshToken = $refreshToken;
        return $this;
    }

    public function getRefreshTokenIssuedAt(): int
    {
        return $this->refreshTokenIssuedAt;
    }

    public function setRefreshTokenIssuedAt(int $refreshTokenIssuedAt): self
    {
        $this->refreshTokenIssuedAt = $refreshTokenIssuedAt;
        return $this;
    }

    public function getRefreshTokenExpiresIn(): int
    {
        return $this->refreshTokenExpiresIn;
    }

    public function setRefreshTokenExpiresIn(int $expiresAt): self
    {
        $this->refreshTokenExpiresIn = $expiresAt;
        return $this;
    }

    public function hasAccessTokenExpired(): bool
    {
        $now = new DateTime('now', new DateTimeZone('UTC'));
        // Avoid access token expiring mid-request by marking it as expired 60s before.
        return ($this->getIssuedAt() + $this->getExpiresIn() - 60) < $now->getTimestamp();
    }

    public function hasRefreshTokenExpired(): bool
    {
        $now = new DateTime('now', new DateTimeZone('UTC'));
        return ($this->getRefreshTokenIssuedAt() + $this->getRefreshTokenExpiresIn()) < $now->getTimestamp();
    }

    public function isRefreshable(): bool
    {
        return $this->getRefreshToken() && ! $this->hasRefreshTokenExpired();
    }
}
