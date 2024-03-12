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
    class SearchResultsGeocodeCandidateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\SearchResultsGeocodeCandidate';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\SearchResultsGeocodeCandidate';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\SearchResultsGeocodeCandidate();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('AddressKeyFormat', $data)) {
                $object->setAddressKeyFormat($this->denormalizer->denormalize($data['AddressKeyFormat'], 'ShipStream\\Ups\\Api\\Model\\GeocodeCandidateAddressKeyFormat', 'json', $context));
                unset($data['AddressKeyFormat']);
            }
            if (\array_key_exists('Geocode', $data)) {
                $object->setGeocode($this->denormalizer->denormalize($data['Geocode'], 'ShipStream\\Ups\\Api\\Model\\GeocodeCandidateGeocode', 'json', $context));
                unset($data['Geocode']);
            }
            if (\array_key_exists('LandmarkName', $data)) {
                $object->setLandmarkName($data['LandmarkName']);
                unset($data['LandmarkName']);
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
            $data['AddressKeyFormat'] = $this->normalizer->normalize($object->getAddressKeyFormat(), 'json', $context);
            $data['Geocode'] = $this->normalizer->normalize($object->getGeocode(), 'json', $context);
            if ($object->isInitialized('landmarkName') && null !== $object->getLandmarkName()) {
                $data['LandmarkName'] = $object->getLandmarkName();
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
            return ['ShipStream\\Ups\\Api\\Model\\SearchResultsGeocodeCandidate' => false];
        }
    }
} else {
    class SearchResultsGeocodeCandidateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\SearchResultsGeocodeCandidate';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\SearchResultsGeocodeCandidate';
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
            $object = new \ShipStream\Ups\Api\Model\SearchResultsGeocodeCandidate();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('AddressKeyFormat', $data)) {
                $object->setAddressKeyFormat($this->denormalizer->denormalize($data['AddressKeyFormat'], 'ShipStream\\Ups\\Api\\Model\\GeocodeCandidateAddressKeyFormat', 'json', $context));
                unset($data['AddressKeyFormat']);
            }
            if (\array_key_exists('Geocode', $data)) {
                $object->setGeocode($this->denormalizer->denormalize($data['Geocode'], 'ShipStream\\Ups\\Api\\Model\\GeocodeCandidateGeocode', 'json', $context));
                unset($data['Geocode']);
            }
            if (\array_key_exists('LandmarkName', $data)) {
                $object->setLandmarkName($data['LandmarkName']);
                unset($data['LandmarkName']);
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
            $data['AddressKeyFormat'] = $this->normalizer->normalize($object->getAddressKeyFormat(), 'json', $context);
            $data['Geocode'] = $this->normalizer->normalize($object->getGeocode(), 'json', $context);
            if ($object->isInitialized('landmarkName') && null !== $object->getLandmarkName()) {
                $data['LandmarkName'] = $object->getLandmarkName();
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
            return ['ShipStream\\Ups\\Api\\Model\\SearchResultsGeocodeCandidate' => false];
        }
    }
}