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
class ShipmentReferenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ShipmentReference::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ShipmentReference::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ShipmentReference();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Number', $data)) {
            $object->setNumber($this->denormalizer->denormalize($data['Number'], \ShipStream\Ups\Api\Model\ReferenceNumber::class, 'json', $context));
            unset($data['Number']);
        }
        if (\array_key_exists('BarCodeIndicator', $data)) {
            $object->setBarCodeIndicator($data['BarCodeIndicator']);
            unset($data['BarCodeIndicator']);
        }
        if (\array_key_exists('NumberOfCartons', $data)) {
            $object->setNumberOfCartons($data['NumberOfCartons']);
            unset($data['NumberOfCartons']);
        }
        if (\array_key_exists('Weight', $data)) {
            $object->setWeight($this->denormalizer->denormalize($data['Weight'], \ShipStream\Ups\Api\Model\ReferenceWeight::class, 'json', $context));
            unset($data['Weight']);
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
        $dataArray['Number'] = $this->normalizer->normalize($data->getNumber(), 'json', $context);
        if ($data->isInitialized('barCodeIndicator') && null !== $data->getBarCodeIndicator()) {
            $dataArray['BarCodeIndicator'] = $data->getBarCodeIndicator();
        }
        if ($data->isInitialized('numberOfCartons') && null !== $data->getNumberOfCartons()) {
            $dataArray['NumberOfCartons'] = $data->getNumberOfCartons();
        }
        if ($data->isInitialized('weight') && null !== $data->getWeight()) {
            $dataArray['Weight'] = $this->normalizer->normalize($data->getWeight(), 'json', $context);
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
        return [\ShipStream\Ups\Api\Model\ShipmentReference::class => false];
    }
}