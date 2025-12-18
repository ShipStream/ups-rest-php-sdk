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
class SubscriptionEventsSubscriptionFileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\SubscriptionEventsSubscriptionFile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\SubscriptionEventsSubscriptionFile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\SubscriptionEventsSubscriptionFile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('FileName', $data)) {
            $object->setFileName($data['FileName']);
            unset($data['FileName']);
        }
        if (\array_key_exists('StatusType', $data)) {
            $object->setStatusType($this->denormalizer->denormalize($data['StatusType'], \ShipStream\Ups\Api\Model\SubscriptionFileStatusType::class, 'json', $context));
            unset($data['StatusType']);
        }
        if (\array_key_exists('Manifest', $data)) {
            $values = [];
            foreach ($data['Manifest'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\SubscriptionFileManifest::class, 'json', $context);
            }
            $object->setManifest($values);
            unset($data['Manifest']);
        }
        if (\array_key_exists('Origin', $data)) {
            $values_1 = [];
            foreach ($data['Origin'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \ShipStream\Ups\Api\Model\SubscriptionFileOrigin::class, 'json', $context);
            }
            $object->setOrigin($values_1);
            unset($data['Origin']);
        }
        if (\array_key_exists('Exception', $data)) {
            $values_2 = [];
            foreach ($data['Exception'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \ShipStream\Ups\Api\Model\SubscriptionFileException::class, 'json', $context);
            }
            $object->setException($values_2);
            unset($data['Exception']);
        }
        if (\array_key_exists('Delivery', $data)) {
            $values_3 = [];
            foreach ($data['Delivery'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \ShipStream\Ups\Api\Model\SubscriptionFileDelivery::class, 'json', $context);
            }
            $object->setDelivery($values_3);
            unset($data['Delivery']);
        }
        if (\array_key_exists('Generic', $data)) {
            $values_4 = [];
            foreach ($data['Generic'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \ShipStream\Ups\Api\Model\SubscriptionFileGeneric::class, 'json', $context);
            }
            $object->setGeneric($values_4);
            unset($data['Generic']);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['FileName'] = $data->getFileName();
        $dataArray['StatusType'] = $this->normalizer->normalize($data->getStatusType(), 'json', $context);
        if ($data->isInitialized('manifest') && null !== $data->getManifest()) {
            $values = [];
            foreach ($data->getManifest() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['Manifest'] = $values;
        }
        if ($data->isInitialized('origin') && null !== $data->getOrigin()) {
            $values_1 = [];
            foreach ($data->getOrigin() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['Origin'] = $values_1;
        }
        if ($data->isInitialized('exception') && null !== $data->getException()) {
            $values_2 = [];
            foreach ($data->getException() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['Exception'] = $values_2;
        }
        if ($data->isInitialized('delivery') && null !== $data->getDelivery()) {
            $values_3 = [];
            foreach ($data->getDelivery() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['Delivery'] = $values_3;
        }
        if ($data->isInitialized('generic') && null !== $data->getGeneric()) {
            $values_4 = [];
            foreach ($data->getGeneric() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['Generic'] = $values_4;
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\SubscriptionEventsSubscriptionFile::class => false];
    }
}