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
class DeliveryInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\DeliveryInformation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\DeliveryInformation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\DeliveryInformation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($data['location']);
            unset($data['location']);
        }
        if (\array_key_exists('receivedBy', $data)) {
            $object->setReceivedBy($data['receivedBy']);
            unset($data['receivedBy']);
        }
        if (\array_key_exists('signature', $data)) {
            $object->setSignature($this->denormalizer->denormalize($data['signature'], \ShipStream\Ups\Api\Model\Signature::class, 'json', $context));
            unset($data['signature']);
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
        if ($data->isInitialized('location') && null !== $data->getLocation()) {
            $dataArray['location'] = $data->getLocation();
        }
        if ($data->isInitialized('receivedBy') && null !== $data->getReceivedBy()) {
            $dataArray['receivedBy'] = $data->getReceivedBy();
        }
        if ($data->isInitialized('signature') && null !== $data->getSignature()) {
            $dataArray['signature'] = $this->normalizer->normalize($data->getSignature(), 'json', $context);
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
        return [\ShipStream\Ups\Api\Model\DeliveryInformation::class => false];
    }
}