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
    class AcceptanceAuditPreCheckShipmentShipToAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckShipmentShipToAddress';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckShipmentShipToAddress';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckShipmentShipToAddress();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('AddressLine', $data) && $data['AddressLine'] !== null) {
                $object->setAddressLine($data['AddressLine']);
                unset($data['AddressLine']);
            }
            elseif (\array_key_exists('AddressLine', $data) && $data['AddressLine'] === null) {
                $object->setAddressLine(null);
            }
            if (\array_key_exists('City', $data) && $data['City'] !== null) {
                $object->setCity($data['City']);
                unset($data['City']);
            }
            elseif (\array_key_exists('City', $data) && $data['City'] === null) {
                $object->setCity(null);
            }
            if (\array_key_exists('StateProvinceCode', $data) && $data['StateProvinceCode'] !== null) {
                $object->setStateProvinceCode($data['StateProvinceCode']);
                unset($data['StateProvinceCode']);
            }
            elseif (\array_key_exists('StateProvinceCode', $data) && $data['StateProvinceCode'] === null) {
                $object->setStateProvinceCode(null);
            }
            if (\array_key_exists('PostalCode', $data) && $data['PostalCode'] !== null) {
                $object->setPostalCode($data['PostalCode']);
                unset($data['PostalCode']);
            }
            elseif (\array_key_exists('PostalCode', $data) && $data['PostalCode'] === null) {
                $object->setPostalCode(null);
            }
            if (\array_key_exists('CountryCode', $data) && $data['CountryCode'] !== null) {
                $object->setCountryCode($data['CountryCode']);
                unset($data['CountryCode']);
            }
            elseif (\array_key_exists('CountryCode', $data) && $data['CountryCode'] === null) {
                $object->setCountryCode(null);
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
            if ($object->isInitialized('addressLine') && null !== $object->getAddressLine()) {
                $data['AddressLine'] = $object->getAddressLine();
            }
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['City'] = $object->getCity();
            }
            if ($object->isInitialized('stateProvinceCode') && null !== $object->getStateProvinceCode()) {
                $data['StateProvinceCode'] = $object->getStateProvinceCode();
            }
            if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
                $data['PostalCode'] = $object->getPostalCode();
            }
            $data['CountryCode'] = $object->getCountryCode();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckShipmentShipToAddress' => false];
        }
    }
} else {
    class AcceptanceAuditPreCheckShipmentShipToAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckShipmentShipToAddress';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckShipmentShipToAddress';
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
            $object = new \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckShipmentShipToAddress();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('AddressLine', $data) && $data['AddressLine'] !== null) {
                $object->setAddressLine($data['AddressLine']);
                unset($data['AddressLine']);
            }
            elseif (\array_key_exists('AddressLine', $data) && $data['AddressLine'] === null) {
                $object->setAddressLine(null);
            }
            if (\array_key_exists('City', $data) && $data['City'] !== null) {
                $object->setCity($data['City']);
                unset($data['City']);
            }
            elseif (\array_key_exists('City', $data) && $data['City'] === null) {
                $object->setCity(null);
            }
            if (\array_key_exists('StateProvinceCode', $data) && $data['StateProvinceCode'] !== null) {
                $object->setStateProvinceCode($data['StateProvinceCode']);
                unset($data['StateProvinceCode']);
            }
            elseif (\array_key_exists('StateProvinceCode', $data) && $data['StateProvinceCode'] === null) {
                $object->setStateProvinceCode(null);
            }
            if (\array_key_exists('PostalCode', $data) && $data['PostalCode'] !== null) {
                $object->setPostalCode($data['PostalCode']);
                unset($data['PostalCode']);
            }
            elseif (\array_key_exists('PostalCode', $data) && $data['PostalCode'] === null) {
                $object->setPostalCode(null);
            }
            if (\array_key_exists('CountryCode', $data) && $data['CountryCode'] !== null) {
                $object->setCountryCode($data['CountryCode']);
                unset($data['CountryCode']);
            }
            elseif (\array_key_exists('CountryCode', $data) && $data['CountryCode'] === null) {
                $object->setCountryCode(null);
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
            if ($object->isInitialized('addressLine') && null !== $object->getAddressLine()) {
                $data['AddressLine'] = $object->getAddressLine();
            }
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['City'] = $object->getCity();
            }
            if ($object->isInitialized('stateProvinceCode') && null !== $object->getStateProvinceCode()) {
                $data['StateProvinceCode'] = $object->getStateProvinceCode();
            }
            if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
                $data['PostalCode'] = $object->getPostalCode();
            }
            $data['CountryCode'] = $object->getCountryCode();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckShipmentShipToAddress' => false];
        }
    }
}