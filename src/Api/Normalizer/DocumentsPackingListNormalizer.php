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
class DocumentsPackingListNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\DocumentsPackingList::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\DocumentsPackingList::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\DocumentsPackingList();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ShipFrom', $data)) {
            $object->setShipFrom($this->denormalizer->denormalize($data['ShipFrom'], \ShipStream\Ups\Api\Model\PackingListShipFrom::class, 'json', $context));
            unset($data['ShipFrom']);
        }
        if (\array_key_exists('ShipTo', $data)) {
            $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], \ShipStream\Ups\Api\Model\PackingListShipTo::class, 'json', $context));
            unset($data['ShipTo']);
        }
        if (\array_key_exists('Reference', $data)) {
            $values = [];
            foreach ($data['Reference'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\PackingListReference::class, 'json', $context);
            }
            $object->setReference($values);
            unset($data['Reference']);
        }
        if (\array_key_exists('HandlingUnit', $data)) {
            $object->setHandlingUnit($this->denormalizer->denormalize($data['HandlingUnit'], \ShipStream\Ups\Api\Model\PackingListHandlingUnit::class, 'json', $context));
            unset($data['HandlingUnit']);
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
        if ($data->isInitialized('shipFrom') && null !== $data->getShipFrom()) {
            $dataArray['ShipFrom'] = $this->normalizer->normalize($data->getShipFrom(), 'json', $context);
        }
        if ($data->isInitialized('shipTo') && null !== $data->getShipTo()) {
            $dataArray['ShipTo'] = $this->normalizer->normalize($data->getShipTo(), 'json', $context);
        }
        if ($data->isInitialized('reference') && null !== $data->getReference()) {
            $values = [];
            foreach ($data->getReference() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['Reference'] = $values;
        }
        if ($data->isInitialized('handlingUnit') && null !== $data->getHandlingUnit()) {
            $dataArray['HandlingUnit'] = $this->normalizer->normalize($data->getHandlingUnit(), 'json', $context);
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
        return [\ShipStream\Ups\Api\Model\DocumentsPackingList::class => false];
    }
}