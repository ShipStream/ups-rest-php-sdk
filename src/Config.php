<?php

namespace ShipStream\Ups;

use InvalidArgumentException;

final class Config
{
    public const BASE_URL_PRODUCTION = 'https://onlinetools.ups.com/';
    public const BASE_URL_TESTING = 'https://wwwcie.ups.com/';
    public const BASE_PATH = '/api';

    private bool $useTestingEnvironment;

    private string $clientId;

    private string $clientSecret;

    private string $redirectUri;

    private ?string $merchantId;

    /**
     * @throws InvalidArgumentException
     */
    public function __construct(array $config)
    {
        if (empty($config['client_id'])) {
            throw new InvalidArgumentException('Missing required parameter: client_id');
        }
        if (empty($config['client_secret'])) {
            throw new InvalidArgumentException('Missing required parameter: client_secret');
        }
        $this->useTestingEnvironment = $config['use_testing_environment'] ?? false;
        $this->clientId = $config['client_id'];
        $this->clientSecret = $config['client_secret'];
        $this->redirectUri = $config['redirect_uri'] ?? '';
        $this->merchantId = $config['merchant_id'] ?? null;
    }

    public function getEnvironmentBaseUrl(): string
    {
        return $this->getUseTestingEnvironment() ? self::BASE_URL_TESTING : self::BASE_URL_PRODUCTION;
    }

    public function getUseTestingEnvironment(): bool
    {
        return $this->useTestingEnvironment;
    }

    public function getClientId(): string
    {
        return $this->clientId;
    }

    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }

    public function getRedirectUri(): string
    {
        return (string)$this->redirectUri;
    }

    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }
}
