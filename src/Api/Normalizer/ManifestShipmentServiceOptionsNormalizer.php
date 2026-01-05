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
class ManifestShipmentServiceOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ManifestShipmentServiceOptions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ManifestShipmentServiceOptions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ManifestShipmentServiceOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('SaturdayPickup', $data)) {
            $object->setSaturdayPickup($data['SaturdayPickup']);
            unset($data['SaturdayPickup']);
        }
        if (\array_key_exists('SaturdayDelivery', $data)) {
            $object->setSaturdayDelivery($data['SaturdayDelivery']);
            unset($data['SaturdayDelivery']);
        }
        if (\array_key_exists('CallTagARS', $data)) {
            $object->setCallTagARS($this->denormalizer->denormalize($data['CallTagARS'], \ShipStream\Ups\Api\Model\ShipmentServiceOptionsCallTagARS::class, 'json', $context));
            unset($data['CallTagARS']);
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
        $dataArray['SaturdayPickup'] = $data->getSaturdayPickup();
        $dataArray['SaturdayDelivery'] = $data->getSaturdayDelivery();
        if ($data->isInitialized('callTagARS') && null !== $data->getCallTagARS()) {
            $dataArray['CallTagARS'] = $this->normalizer->normalize($data->getCallTagARS(), 'json', $context);
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
        return [\ShipStream\Ups\Api\Model\ManifestShipmentServiceOptions::class => false];
    }
}