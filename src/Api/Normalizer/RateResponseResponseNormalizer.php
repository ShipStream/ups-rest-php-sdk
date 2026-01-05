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
class RateResponseResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\RateResponseResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\RateResponseResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\RateResponseResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ResponseStatus', $data)) {
            $object->setResponseStatus($this->denormalizer->denormalize($data['ResponseStatus'], \ShipStream\Ups\Api\Model\ResponseResponseStatus::class, 'json', $context));
            unset($data['ResponseStatus']);
        }
        if (\array_key_exists('Alert', $data)) {
            $values = [];
            foreach ($data['Alert'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\ResponseAlert::class, 'json', $context);
            }
            $object->setAlert($values);
            unset($data['Alert']);
        }
        if (\array_key_exists('AlertDetail', $data)) {
            $values_1 = [];
            foreach ($data['AlertDetail'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \ShipStream\Ups\Api\Model\ResponseAlertDetail::class, 'json', $context);
            }
            $object->setAlertDetail($values_1);
            unset($data['AlertDetail']);
        }
        if (\array_key_exists('TransactionReference', $data)) {
            $object->setTransactionReference($this->denormalizer->denormalize($data['TransactionReference'], \ShipStream\Ups\Api\Model\ResponseTransactionReference::class, 'json', $context));
            unset($data['TransactionReference']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['ResponseStatus'] = $this->normalizer->normalize($data->getResponseStatus(), 'json', $context);
        if ($data->isInitialized('alert') && null !== $data->getAlert()) {
            $values = [];
            foreach ($data->getAlert() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['Alert'] = $values;
        }
        if ($data->isInitialized('alertDetail') && null !== $data->getAlertDetail()) {
            $values_1 = [];
            foreach ($data->getAlertDetail() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['AlertDetail'] = $values_1;
        }
        if ($data->isInitialized('transactionReference') && null !== $data->getTransactionReference()) {
            $dataArray['TransactionReference'] = $this->normalizer->normalize($data->getTransactionReference(), 'json', $context);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\RateResponseResponse::class => false];
    }
}