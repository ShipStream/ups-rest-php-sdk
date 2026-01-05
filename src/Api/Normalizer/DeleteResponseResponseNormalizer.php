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
class DeleteResponseResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\DeleteResponseResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\DeleteResponseResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\DeleteResponseResponse();
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
        if (\array_key_exists('TransactionReference', $data)) {
            $object->setTransactionReference($this->denormalizer->denormalize($data['TransactionReference'], \ShipStream\Ups\Api\Model\ResponseTransactionReference::class, 'json', $context));
            unset($data['TransactionReference']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        if ($data->isInitialized('transactionReference') && null !== $data->getTransactionReference()) {
            $dataArray['TransactionReference'] = $this->normalizer->normalize($data->getTransactionReference(), 'json', $context);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\DeleteResponseResponse::class => false];
    }
}