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
class QuantumViewEventsSubscriptionEventsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\QuantumViewEventsSubscriptionEvents::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\QuantumViewEventsSubscriptionEvents::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\QuantumViewEventsSubscriptionEvents();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
            unset($data['Name']);
        }
        if (\array_key_exists('Number', $data)) {
            $object->setNumber($data['Number']);
            unset($data['Number']);
        }
        if (\array_key_exists('SubscriptionStatus', $data)) {
            $object->setSubscriptionStatus($this->denormalizer->denormalize($data['SubscriptionStatus'], \ShipStream\Ups\Api\Model\SubscriptionEventsSubscriptionStatus::class, 'json', $context));
            unset($data['SubscriptionStatus']);
        }
        if (\array_key_exists('DateRange', $data)) {
            $object->setDateRange($this->denormalizer->denormalize($data['DateRange'], \ShipStream\Ups\Api\Model\SubscriptionEventsDateRange::class, 'json', $context));
            unset($data['DateRange']);
        }
        if (\array_key_exists('SubscriptionFile', $data)) {
            $values = [];
            foreach ($data['SubscriptionFile'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\SubscriptionEventsSubscriptionFile::class, 'json', $context);
            }
            $object->setSubscriptionFile($values);
            unset($data['SubscriptionFile']);
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
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['Name'] = $data->getName();
        }
        if ($data->isInitialized('number') && null !== $data->getNumber()) {
            $dataArray['Number'] = $data->getNumber();
        }
        $dataArray['SubscriptionStatus'] = $this->normalizer->normalize($data->getSubscriptionStatus(), 'json', $context);
        if ($data->isInitialized('dateRange') && null !== $data->getDateRange()) {
            $dataArray['DateRange'] = $this->normalizer->normalize($data->getDateRange(), 'json', $context);
        }
        if ($data->isInitialized('subscriptionFile') && null !== $data->getSubscriptionFile()) {
            $values = [];
            foreach ($data->getSubscriptionFile() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['SubscriptionFile'] = $values;
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
        return [\ShipStream\Ups\Api\Model\QuantumViewEventsSubscriptionEvents::class => false];
    }
}