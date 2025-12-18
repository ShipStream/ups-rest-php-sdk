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
class ActivityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\Activity::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\Activity::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\Activity();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('date', $data)) {
            $object->setDate($data['date']);
            unset($data['date']);
        }
        if (\array_key_exists('gmtDate', $data)) {
            $object->setGmtDate($data['gmtDate']);
            unset($data['gmtDate']);
        }
        if (\array_key_exists('gmtOffset', $data)) {
            $object->setGmtOffset($data['gmtOffset']);
            unset($data['gmtOffset']);
        }
        if (\array_key_exists('gmtTime', $data)) {
            $object->setGmtTime($data['gmtTime']);
            unset($data['gmtTime']);
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($this->denormalizer->denormalize($data['location'], \ShipStream\Ups\Api\Model\Location::class, 'json', $context));
            unset($data['location']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($this->denormalizer->denormalize($data['status'], \ShipStream\Ups\Api\Model\Status::class, 'json', $context));
            unset($data['status']);
        }
        if (\array_key_exists('time', $data)) {
            $object->setTime($data['time']);
            unset($data['time']);
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
        if ($data->isInitialized('date') && null !== $data->getDate()) {
            $dataArray['date'] = $data->getDate();
        }
        if ($data->isInitialized('gmtDate') && null !== $data->getGmtDate()) {
            $dataArray['gmtDate'] = $data->getGmtDate();
        }
        if ($data->isInitialized('gmtOffset') && null !== $data->getGmtOffset()) {
            $dataArray['gmtOffset'] = $data->getGmtOffset();
        }
        if ($data->isInitialized('gmtTime') && null !== $data->getGmtTime()) {
            $dataArray['gmtTime'] = $data->getGmtTime();
        }
        if ($data->isInitialized('location') && null !== $data->getLocation()) {
            $dataArray['location'] = $this->normalizer->normalize($data->getLocation(), 'json', $context);
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $this->normalizer->normalize($data->getStatus(), 'json', $context);
        }
        if ($data->isInitialized('time') && null !== $data->getTime()) {
            $dataArray['time'] = $data->getTime();
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
        return [\ShipStream\Ups\Api\Model\Activity::class => false];
    }
}