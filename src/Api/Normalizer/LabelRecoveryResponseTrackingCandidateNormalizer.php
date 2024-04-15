<?php

namespace ShipStream\Ups\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ShipStream\Ups\Api\Runtime\Normalizer\CheckArray;
use ShipStream\Ups\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class LabelRecoveryResponseTrackingCandidateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponseTrackingCandidate';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponseTrackingCandidate';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
            if (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] !== null) {
                $object->setTrackingNumber($data['TrackingNumber']);
                unset($data['TrackingNumber']);
            }
            elseif (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] === null) {
                $object->setTrackingNumber(null);
            }
            if (\array_key_exists('DestinationPostalCode', $data) && $data['DestinationPostalCode'] !== null) {
                $object->setDestinationPostalCode($data['DestinationPostalCode']);
                unset($data['DestinationPostalCode']);
            }
            elseif (\array_key_exists('DestinationPostalCode', $data) && $data['DestinationPostalCode'] === null) {
                $object->setDestinationPostalCode(null);
            }
            if (\array_key_exists('DestinationCountryCode', $data) && $data['DestinationCountryCode'] !== null) {
                $object->setDestinationCountryCode($data['DestinationCountryCode']);
                unset($data['DestinationCountryCode']);
            }
            elseif (\array_key_exists('DestinationCountryCode', $data) && $data['DestinationCountryCode'] === null) {
                $object->setDestinationCountryCode(null);
            }
            if (\array_key_exists('PickupDateRange', $data) && $data['PickupDateRange'] !== null) {
                $object->setPickupDateRange($this->denormalizer->denormalize($data['PickupDateRange'], 'ShipStream\\Ups\\Api\\Model\\TrackingCandidatePickupDateRange', 'json', $context));
                unset($data['PickupDateRange']);
            }
            elseif (\array_key_exists('PickupDateRange', $data) && $data['PickupDateRange'] === null) {
                $object->setPickupDateRange(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['TrackingNumber'] = $object->getTrackingNumber();
            if ($object->isInitialized('destinationPostalCode') && null !== $object->getDestinationPostalCode()) {
                $data['DestinationPostalCode'] = $object->getDestinationPostalCode();
            }
            if ($object->isInitialized('destinationCountryCode') && null !== $object->getDestinationCountryCode()) {
                $data['DestinationCountryCode'] = $object->getDestinationCountryCode();
            }
            if ($object->isInitialized('pickupDateRange') && null !== $object->getPickupDateRange()) {
                $data['PickupDateRange'] = $this->normalizer->normalize($object->getPickupDateRange(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponseTrackingCandidate' => false];
        }
    }
} else {
    class LabelRecoveryResponseTrackingCandidateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponseTrackingCandidate';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponseTrackingCandidate';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
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
            if (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] !== null) {
                $object->setTrackingNumber($data['TrackingNumber']);
                unset($data['TrackingNumber']);
            }
            elseif (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] === null) {
                $object->setTrackingNumber(null);
            }
            if (\array_key_exists('DestinationPostalCode', $data) && $data['DestinationPostalCode'] !== null) {
                $object->setDestinationPostalCode($data['DestinationPostalCode']);
                unset($data['DestinationPostalCode']);
            }
            elseif (\array_key_exists('DestinationPostalCode', $data) && $data['DestinationPostalCode'] === null) {
                $object->setDestinationPostalCode(null);
            }
            if (\array_key_exists('DestinationCountryCode', $data) && $data['DestinationCountryCode'] !== null) {
                $object->setDestinationCountryCode($data['DestinationCountryCode']);
                unset($data['DestinationCountryCode']);
            }
            elseif (\array_key_exists('DestinationCountryCode', $data) && $data['DestinationCountryCode'] === null) {
                $object->setDestinationCountryCode(null);
            }
            if (\array_key_exists('PickupDateRange', $data) && $data['PickupDateRange'] !== null) {
                $object->setPickupDateRange($this->denormalizer->denormalize($data['PickupDateRange'], 'ShipStream\\Ups\\Api\\Model\\TrackingCandidatePickupDateRange', 'json', $context));
                unset($data['PickupDateRange']);
            }
            elseif (\array_key_exists('PickupDateRange', $data) && $data['PickupDateRange'] === null) {
                $object->setPickupDateRange(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['TrackingNumber'] = $object->getTrackingNumber();
            if ($object->isInitialized('destinationPostalCode') && null !== $object->getDestinationPostalCode()) {
                $data['DestinationPostalCode'] = $object->getDestinationPostalCode();
            }
            if ($object->isInitialized('destinationCountryCode') && null !== $object->getDestinationCountryCode()) {
                $data['DestinationCountryCode'] = $object->getDestinationCountryCode();
            }
            if ($object->isInitialized('pickupDateRange') && null !== $object->getPickupDateRange()) {
                $data['PickupDateRange'] = $this->normalizer->normalize($object->getPickupDateRange(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponseTrackingCandidate' => false];
        }
    }
}