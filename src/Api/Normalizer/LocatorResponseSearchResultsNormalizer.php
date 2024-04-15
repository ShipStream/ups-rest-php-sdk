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
    class LocatorResponseSearchResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\LocatorResponseSearchResults';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LocatorResponseSearchResults';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\LocatorResponseSearchResults();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('GeocodeCandidate', $data) && $data['GeocodeCandidate'] !== null) {
                $values = [];
                foreach ($data['GeocodeCandidate'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\SearchResultsGeocodeCandidate', 'json', $context);
                }
                $object->setGeocodeCandidate($values);
                unset($data['GeocodeCandidate']);
            }
            elseif (\array_key_exists('GeocodeCandidate', $data) && $data['GeocodeCandidate'] === null) {
                $object->setGeocodeCandidate(null);
            }
            if (\array_key_exists('Disclaimer', $data) && $data['Disclaimer'] !== null) {
                $values_1 = [];
                foreach ($data['Disclaimer'] as $value_1) {
                    $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value_1 as $key => $value_2) {
                        $values_2[$key] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $object->setDisclaimer($values_1);
                unset($data['Disclaimer']);
            }
            elseif (\array_key_exists('Disclaimer', $data) && $data['Disclaimer'] === null) {
                $object->setDisclaimer(null);
            }
            if (\array_key_exists('DropLocation', $data) && $data['DropLocation'] !== null) {
                $object->setDropLocation($this->denormalizer->denormalize($data['DropLocation'], 'ShipStream\\Ups\\Api\\Model\\SearchResultsDropLocation', 'json', $context));
                unset($data['DropLocation']);
            }
            elseif (\array_key_exists('DropLocation', $data) && $data['DropLocation'] === null) {
                $object->setDropLocation(null);
            }
            if (\array_key_exists('AvailableLocationAttributes', $data) && $data['AvailableLocationAttributes'] !== null) {
                $values_3 = [];
                foreach ($data['AvailableLocationAttributes'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'ShipStream\\Ups\\Api\\Model\\SearchResultsAvailableLocationAttributes', 'json', $context);
                }
                $object->setAvailableLocationAttributes($values_3);
                unset($data['AvailableLocationAttributes']);
            }
            elseif (\array_key_exists('AvailableLocationAttributes', $data) && $data['AvailableLocationAttributes'] === null) {
                $object->setAvailableLocationAttributes(null);
            }
            if (\array_key_exists('ActiveAvailableAccessPointIndicator', $data) && $data['ActiveAvailableAccessPointIndicator'] !== null) {
                $object->setActiveAvailableAccessPointIndicator($data['ActiveAvailableAccessPointIndicator']);
                unset($data['ActiveAvailableAccessPointIndicator']);
            }
            elseif (\array_key_exists('ActiveAvailableAccessPointIndicator', $data) && $data['ActiveAvailableAccessPointIndicator'] === null) {
                $object->setActiveAvailableAccessPointIndicator(null);
            }
            foreach ($data as $key_1 => $value_4) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_4;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('geocodeCandidate') && null !== $object->getGeocodeCandidate()) {
                $values = [];
                foreach ($object->getGeocodeCandidate() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['GeocodeCandidate'] = $values;
            }
            if ($object->isInitialized('disclaimer') && null !== $object->getDisclaimer()) {
                $values_1 = [];
                foreach ($object->getDisclaimer() as $value_1) {
                    $values_2 = [];
                    foreach ($value_1 as $key => $value_2) {
                        $values_2[$key] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $data['Disclaimer'] = $values_1;
            }
            if ($object->isInitialized('dropLocation') && null !== $object->getDropLocation()) {
                $data['DropLocation'] = $this->normalizer->normalize($object->getDropLocation(), 'json', $context);
            }
            if ($object->isInitialized('availableLocationAttributes') && null !== $object->getAvailableLocationAttributes()) {
                $values_3 = [];
                foreach ($object->getAvailableLocationAttributes() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['AvailableLocationAttributes'] = $values_3;
            }
            if ($object->isInitialized('activeAvailableAccessPointIndicator') && null !== $object->getActiveAvailableAccessPointIndicator()) {
                $data['ActiveAvailableAccessPointIndicator'] = $object->getActiveAvailableAccessPointIndicator();
            }
            foreach ($object as $key_1 => $value_4) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\LocatorResponseSearchResults' => false];
        }
    }
} else {
    class LocatorResponseSearchResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\LocatorResponseSearchResults';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LocatorResponseSearchResults';
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
            $object = new \ShipStream\Ups\Api\Model\LocatorResponseSearchResults();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('GeocodeCandidate', $data) && $data['GeocodeCandidate'] !== null) {
                $values = [];
                foreach ($data['GeocodeCandidate'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\SearchResultsGeocodeCandidate', 'json', $context);
                }
                $object->setGeocodeCandidate($values);
                unset($data['GeocodeCandidate']);
            }
            elseif (\array_key_exists('GeocodeCandidate', $data) && $data['GeocodeCandidate'] === null) {
                $object->setGeocodeCandidate(null);
            }
            if (\array_key_exists('Disclaimer', $data) && $data['Disclaimer'] !== null) {
                $values_1 = [];
                foreach ($data['Disclaimer'] as $value_1) {
                    $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value_1 as $key => $value_2) {
                        $values_2[$key] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $object->setDisclaimer($values_1);
                unset($data['Disclaimer']);
            }
            elseif (\array_key_exists('Disclaimer', $data) && $data['Disclaimer'] === null) {
                $object->setDisclaimer(null);
            }
            if (\array_key_exists('DropLocation', $data) && $data['DropLocation'] !== null) {
                $object->setDropLocation($this->denormalizer->denormalize($data['DropLocation'], 'ShipStream\\Ups\\Api\\Model\\SearchResultsDropLocation', 'json', $context));
                unset($data['DropLocation']);
            }
            elseif (\array_key_exists('DropLocation', $data) && $data['DropLocation'] === null) {
                $object->setDropLocation(null);
            }
            if (\array_key_exists('AvailableLocationAttributes', $data) && $data['AvailableLocationAttributes'] !== null) {
                $values_3 = [];
                foreach ($data['AvailableLocationAttributes'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'ShipStream\\Ups\\Api\\Model\\SearchResultsAvailableLocationAttributes', 'json', $context);
                }
                $object->setAvailableLocationAttributes($values_3);
                unset($data['AvailableLocationAttributes']);
            }
            elseif (\array_key_exists('AvailableLocationAttributes', $data) && $data['AvailableLocationAttributes'] === null) {
                $object->setAvailableLocationAttributes(null);
            }
            if (\array_key_exists('ActiveAvailableAccessPointIndicator', $data) && $data['ActiveAvailableAccessPointIndicator'] !== null) {
                $object->setActiveAvailableAccessPointIndicator($data['ActiveAvailableAccessPointIndicator']);
                unset($data['ActiveAvailableAccessPointIndicator']);
            }
            elseif (\array_key_exists('ActiveAvailableAccessPointIndicator', $data) && $data['ActiveAvailableAccessPointIndicator'] === null) {
                $object->setActiveAvailableAccessPointIndicator(null);
            }
            foreach ($data as $key_1 => $value_4) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_4;
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
            if ($object->isInitialized('geocodeCandidate') && null !== $object->getGeocodeCandidate()) {
                $values = [];
                foreach ($object->getGeocodeCandidate() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['GeocodeCandidate'] = $values;
            }
            if ($object->isInitialized('disclaimer') && null !== $object->getDisclaimer()) {
                $values_1 = [];
                foreach ($object->getDisclaimer() as $value_1) {
                    $values_2 = [];
                    foreach ($value_1 as $key => $value_2) {
                        $values_2[$key] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $data['Disclaimer'] = $values_1;
            }
            if ($object->isInitialized('dropLocation') && null !== $object->getDropLocation()) {
                $data['DropLocation'] = $this->normalizer->normalize($object->getDropLocation(), 'json', $context);
            }
            if ($object->isInitialized('availableLocationAttributes') && null !== $object->getAvailableLocationAttributes()) {
                $values_3 = [];
                foreach ($object->getAvailableLocationAttributes() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['AvailableLocationAttributes'] = $values_3;
            }
            if ($object->isInitialized('activeAvailableAccessPointIndicator') && null !== $object->getActiveAvailableAccessPointIndicator()) {
                $data['ActiveAvailableAccessPointIndicator'] = $object->getActiveAvailableAccessPointIndicator();
            }
            foreach ($object as $key_1 => $value_4) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\LocatorResponseSearchResults' => false];
        }
    }
}