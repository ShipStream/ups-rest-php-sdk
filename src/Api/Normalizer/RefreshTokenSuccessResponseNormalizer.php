<?php

namespace ShipStream\Ups\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ShipStream\Ups\Api\Runtime\Normalizer\CheckArray;
use ShipStream\Ups\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class RefreshTokenSuccessResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\RefreshTokenSuccessResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\RefreshTokenSuccessResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\RefreshTokenSuccessResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('refresh_token_expires_in', $data)) {
            $object->setRefreshTokenExpiresIn($data['refresh_token_expires_in']);
            unset($data['refresh_token_expires_in']);
        }
        if (\array_key_exists('refresh_token_status', $data)) {
            $object->setRefreshTokenStatus($data['refresh_token_status']);
            unset($data['refresh_token_status']);
        }
        if (\array_key_exists('token_type', $data)) {
            $object->setTokenType($data['token_type']);
            unset($data['token_type']);
        }
        if (\array_key_exists('issued_at', $data)) {
            $object->setIssuedAt($data['issued_at']);
            unset($data['issued_at']);
        }
        if (\array_key_exists('client_id', $data)) {
            $object->setClientId($data['client_id']);
            unset($data['client_id']);
        }
        if (\array_key_exists('access_token', $data)) {
            $object->setAccessToken($data['access_token']);
            unset($data['access_token']);
        }
        if (\array_key_exists('refresh_token', $data)) {
            $object->setRefreshToken($data['refresh_token']);
            unset($data['refresh_token']);
        }
        if (\array_key_exists('scope', $data)) {
            $object->setScope($data['scope']);
            unset($data['scope']);
        }
        if (\array_key_exists('refresh_token_issued_at', $data)) {
            $object->setRefreshTokenIssuedAt($data['refresh_token_issued_at']);
            unset($data['refresh_token_issued_at']);
        }
        if (\array_key_exists('expires_in', $data)) {
            $object->setExpiresIn($data['expires_in']);
            unset($data['expires_in']);
        }
        if (\array_key_exists('refresh_count', $data)) {
            $object->setRefreshCount($data['refresh_count']);
            unset($data['refresh_count']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('refreshTokenExpiresIn') && null !== $data->getRefreshTokenExpiresIn()) {
            $dataArray['refresh_token_expires_in'] = $data->getRefreshTokenExpiresIn();
        }
        if ($data->isInitialized('refreshTokenStatus') && null !== $data->getRefreshTokenStatus()) {
            $dataArray['refresh_token_status'] = $data->getRefreshTokenStatus();
        }
        if ($data->isInitialized('tokenType') && null !== $data->getTokenType()) {
            $dataArray['token_type'] = $data->getTokenType();
        }
        if ($data->isInitialized('issuedAt') && null !== $data->getIssuedAt()) {
            $dataArray['issued_at'] = $data->getIssuedAt();
        }
        if ($data->isInitialized('clientId') && null !== $data->getClientId()) {
            $dataArray['client_id'] = $data->getClientId();
        }
        if ($data->isInitialized('accessToken') && null !== $data->getAccessToken()) {
            $dataArray['access_token'] = $data->getAccessToken();
        }
        if ($data->isInitialized('refreshToken') && null !== $data->getRefreshToken()) {
            $dataArray['refresh_token'] = $data->getRefreshToken();
        }
        if ($data->isInitialized('scope') && null !== $data->getScope()) {
            $dataArray['scope'] = $data->getScope();
        }
        if ($data->isInitialized('refreshTokenIssuedAt') && null !== $data->getRefreshTokenIssuedAt()) {
            $dataArray['refresh_token_issued_at'] = $data->getRefreshTokenIssuedAt();
        }
        if ($data->isInitialized('expiresIn') && null !== $data->getExpiresIn()) {
            $dataArray['expires_in'] = $data->getExpiresIn();
        }
        if ($data->isInitialized('refreshCount') && null !== $data->getRefreshCount()) {
            $dataArray['refresh_count'] = $data->getRefreshCount();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\RefreshTokenSuccessResponse::class => false];
    }
}