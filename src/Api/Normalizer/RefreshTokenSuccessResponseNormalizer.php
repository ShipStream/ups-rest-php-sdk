<?php

namespace ShipStream\Ups\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ShipStream\Ups\Api\Runtime\Normalizer\CheckArray;
use ShipStream\Ups\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null, array $context = []) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\RefreshTokenSuccessResponse';
    }
    public function supportsNormalization($data, $format = null, array $context = []) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\RefreshTokenSuccessResponse';
    }
    /**
     * @return mixed
     */
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
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize(mixed $object, ?string $format = null, array $context = []): \ArrayObject|array|string|int|float|bool|null
    {
        $data = [];
        if ($object->isInitialized('refreshTokenExpiresIn') && null !== $object->getRefreshTokenExpiresIn()) {
            $data['refresh_token_expires_in'] = $object->getRefreshTokenExpiresIn();
        }
        if ($object->isInitialized('refreshTokenStatus') && null !== $object->getRefreshTokenStatus()) {
            $data['refresh_token_status'] = $object->getRefreshTokenStatus();
        }
        if ($object->isInitialized('tokenType') && null !== $object->getTokenType()) {
            $data['token_type'] = $object->getTokenType();
        }
        if ($object->isInitialized('issuedAt') && null !== $object->getIssuedAt()) {
            $data['issued_at'] = $object->getIssuedAt();
        }
        if ($object->isInitialized('clientId') && null !== $object->getClientId()) {
            $data['client_id'] = $object->getClientId();
        }
        if ($object->isInitialized('accessToken') && null !== $object->getAccessToken()) {
            $data['access_token'] = $object->getAccessToken();
        }
        if ($object->isInitialized('refreshToken') && null !== $object->getRefreshToken()) {
            $data['refresh_token'] = $object->getRefreshToken();
        }
        if ($object->isInitialized('scope') && null !== $object->getScope()) {
            $data['scope'] = $object->getScope();
        }
        if ($object->isInitialized('refreshTokenIssuedAt') && null !== $object->getRefreshTokenIssuedAt()) {
            $data['refresh_token_issued_at'] = $object->getRefreshTokenIssuedAt();
        }
        if ($object->isInitialized('expiresIn') && null !== $object->getExpiresIn()) {
            $data['expires_in'] = $object->getExpiresIn();
        }
        if ($object->isInitialized('refreshCount') && null !== $object->getRefreshCount()) {
            $data['refresh_count'] = $object->getRefreshCount();
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('ShipStream\\Ups\\Api\\Model\\RefreshTokenSuccessResponse' => false);
    }
}