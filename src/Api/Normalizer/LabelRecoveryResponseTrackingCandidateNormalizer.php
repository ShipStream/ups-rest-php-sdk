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
class LabelRecoveryResponseTrackingCandidateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\LabelRecoveryResponseTrackingCandidate::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\LabelRecoveryResponseTrackingCandidate::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\LabelRecoveryResponseTrackingCandidate();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('TrackingNumber', $data)) {
            $object->setTrackingNumber($data['TrackingNumber']);
            unset($data['TrackingNumber']);
        }
        if (\array_key_exists('DestinationPostalCode', $data)) {
            $object->setDestinationPostalCode($data['DestinationPostalCode']);
            unset($data['DestinationPostalCode']);
        }
        if (\array_key_exists('DestinationCountryCode', $data)) {
            $object->setDestinationCountryCode($data['DestinationCountryCode']);
            unset($data['DestinationCountryCode']);
        }
        if (\array_key_exists('PickupDateRange', $data)) {
            $object->setPickupDateRange($this->denormalizer->denormalize($data['PickupDateRange'], \ShipStream\Ups\Api\Model\TrackingCandidatePickupDateRange::class, 'json', $context));
            unset($data['PickupDateRange']);
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
        $dataArray['TrackingNumber'] = $data->getTrackingNumber();
        if ($data->isInitialized('destinationPostalCode') && null !== $data->getDestinationPostalCode()) {
            $dataArray['DestinationPostalCode'] = $data->getDestinationPostalCode();
        }
        if ($data->isInitialized('destinationCountryCode') && null !== $data->getDestinationCountryCode()) {
            $dataArray['DestinationCountryCode'] = $data->getDestinationCountryCode();
        }
        if ($data->isInitialized('pickupDateRange') && null !== $data->getPickupDateRange()) {
            $dataArray['PickupDateRange'] = $this->normalizer->normalize($data->getPickupDateRange(), 'json', $context);
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
        return [\ShipStream\Ups\Api\Model\LabelRecoveryResponseTrackingCandidate::class => false];
    }
}