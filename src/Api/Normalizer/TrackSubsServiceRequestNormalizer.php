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
    class TrackSubsServiceRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\TrackSubsServiceRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\TrackSubsServiceRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\TrackSubsServiceRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('locale', $data)) {
                $object->setLocale($data['locale']);
                unset($data['locale']);
            }
            if (\array_key_exists('countryCode', $data)) {
                $object->setCountryCode($data['countryCode']);
                unset($data['countryCode']);
            }
            if (\array_key_exists('trackingNumberList', $data)) {
                $values = [];
                foreach ($data['trackingNumberList'] as $value) {
                    $values[] = $value;
                }
                $object->setTrackingNumberList($values);
                unset($data['trackingNumberList']);
            }
            if (\array_key_exists('scanPreference', $data)) {
                $values_1 = [];
                foreach ($data['scanPreference'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setScanPreference($values_1);
                unset($data['scanPreference']);
            }
            if (\array_key_exists('destination', $data)) {
                $object->setDestination($this->denormalizer->denormalize($data['destination'], 'ShipStream\\Ups\\Api\\Model\\Destination', 'json', $context));
                unset($data['destination']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['locale'] = $object->getLocale();
            $data['countryCode'] = $object->getCountryCode();
            $values = [];
            foreach ($object->getTrackingNumberList() as $value) {
                $values[] = $value;
            }
            $data['trackingNumberList'] = $values;
            if ($object->isInitialized('scanPreference') && null !== $object->getScanPreference()) {
                $values_1 = [];
                foreach ($object->getScanPreference() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['scanPreference'] = $values_1;
            }
            $data['destination'] = $this->normalizer->normalize($object->getDestination(), 'json', $context);
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\TrackSubsServiceRequest' => false];
        }
    }
} else {
    class TrackSubsServiceRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\TrackSubsServiceRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\TrackSubsServiceRequest';
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
            $object = new \ShipStream\Ups\Api\Model\TrackSubsServiceRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('locale', $data)) {
                $object->setLocale($data['locale']);
                unset($data['locale']);
            }
            if (\array_key_exists('countryCode', $data)) {
                $object->setCountryCode($data['countryCode']);
                unset($data['countryCode']);
            }
            if (\array_key_exists('trackingNumberList', $data)) {
                $values = [];
                foreach ($data['trackingNumberList'] as $value) {
                    $values[] = $value;
                }
                $object->setTrackingNumberList($values);
                unset($data['trackingNumberList']);
            }
            if (\array_key_exists('scanPreference', $data)) {
                $values_1 = [];
                foreach ($data['scanPreference'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setScanPreference($values_1);
                unset($data['scanPreference']);
            }
            if (\array_key_exists('destination', $data)) {
                $object->setDestination($this->denormalizer->denormalize($data['destination'], 'ShipStream\\Ups\\Api\\Model\\Destination', 'json', $context));
                unset($data['destination']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            $data['locale'] = $object->getLocale();
            $data['countryCode'] = $object->getCountryCode();
            $values = [];
            foreach ($object->getTrackingNumberList() as $value) {
                $values[] = $value;
            }
            $data['trackingNumberList'] = $values;
            if ($object->isInitialized('scanPreference') && null !== $object->getScanPreference()) {
                $values_1 = [];
                foreach ($object->getScanPreference() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['scanPreference'] = $values_1;
            }
            $data['destination'] = $this->normalizer->normalize($object->getDestination(), 'json', $context);
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\TrackSubsServiceRequest' => false];
        }
    }
}