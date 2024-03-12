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
    class PickupCreationRequestPickupAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestPickupAddress';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestPickupAddress';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\PickupCreationRequestPickupAddress();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('CompanyName', $data)) {
                $object->setCompanyName($data['CompanyName']);
                unset($data['CompanyName']);
            }
            if (\array_key_exists('ContactName', $data)) {
                $object->setContactName($data['ContactName']);
                unset($data['ContactName']);
            }
            if (\array_key_exists('AddressLine', $data)) {
                $values = [];
                foreach ($data['AddressLine'] as $value) {
                    $values[] = $value;
                }
                $object->setAddressLine($values);
                unset($data['AddressLine']);
            }
            if (\array_key_exists('Room', $data)) {
                $object->setRoom($data['Room']);
                unset($data['Room']);
            }
            if (\array_key_exists('Floor', $data)) {
                $object->setFloor($data['Floor']);
                unset($data['Floor']);
            }
            if (\array_key_exists('City', $data)) {
                $object->setCity($data['City']);
                unset($data['City']);
            }
            if (\array_key_exists('StateProvince', $data)) {
                $object->setStateProvince($data['StateProvince']);
                unset($data['StateProvince']);
            }
            if (\array_key_exists('Urbanization', $data)) {
                $object->setUrbanization($data['Urbanization']);
                unset($data['Urbanization']);
            }
            if (\array_key_exists('PostalCode', $data)) {
                $object->setPostalCode($data['PostalCode']);
                unset($data['PostalCode']);
            }
            if (\array_key_exists('CountryCode', $data)) {
                $object->setCountryCode($data['CountryCode']);
                unset($data['CountryCode']);
            }
            if (\array_key_exists('ResidentialIndicator', $data)) {
                $object->setResidentialIndicator($data['ResidentialIndicator']);
                unset($data['ResidentialIndicator']);
            }
            if (\array_key_exists('PickupPoint', $data)) {
                $object->setPickupPoint($data['PickupPoint']);
                unset($data['PickupPoint']);
            }
            if (\array_key_exists('Phone', $data)) {
                $object->setPhone($this->denormalizer->denormalize($data['Phone'], 'ShipStream\\Ups\\Api\\Model\\PickupAddressPhone', 'json', $context));
                unset($data['Phone']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['CompanyName'] = $object->getCompanyName();
            $data['ContactName'] = $object->getContactName();
            $values = [];
            foreach ($object->getAddressLine() as $value) {
                $values[] = $value;
            }
            $data['AddressLine'] = $values;
            if ($object->isInitialized('room') && null !== $object->getRoom()) {
                $data['Room'] = $object->getRoom();
            }
            if ($object->isInitialized('floor') && null !== $object->getFloor()) {
                $data['Floor'] = $object->getFloor();
            }
            $data['City'] = $object->getCity();
            if ($object->isInitialized('stateProvince') && null !== $object->getStateProvince()) {
                $data['StateProvince'] = $object->getStateProvince();
            }
            if ($object->isInitialized('urbanization') && null !== $object->getUrbanization()) {
                $data['Urbanization'] = $object->getUrbanization();
            }
            if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
                $data['PostalCode'] = $object->getPostalCode();
            }
            $data['CountryCode'] = $object->getCountryCode();
            $data['ResidentialIndicator'] = $object->getResidentialIndicator();
            if ($object->isInitialized('pickupPoint') && null !== $object->getPickupPoint()) {
                $data['PickupPoint'] = $object->getPickupPoint();
            }
            $data['Phone'] = $this->normalizer->normalize($object->getPhone(), 'json', $context);
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\PickupCreationRequestPickupAddress' => false];
        }
    }
} else {
    class PickupCreationRequestPickupAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestPickupAddress';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestPickupAddress';
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
            $object = new \ShipStream\Ups\Api\Model\PickupCreationRequestPickupAddress();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('CompanyName', $data)) {
                $object->setCompanyName($data['CompanyName']);
                unset($data['CompanyName']);
            }
            if (\array_key_exists('ContactName', $data)) {
                $object->setContactName($data['ContactName']);
                unset($data['ContactName']);
            }
            if (\array_key_exists('AddressLine', $data)) {
                $values = [];
                foreach ($data['AddressLine'] as $value) {
                    $values[] = $value;
                }
                $object->setAddressLine($values);
                unset($data['AddressLine']);
            }
            if (\array_key_exists('Room', $data)) {
                $object->setRoom($data['Room']);
                unset($data['Room']);
            }
            if (\array_key_exists('Floor', $data)) {
                $object->setFloor($data['Floor']);
                unset($data['Floor']);
            }
            if (\array_key_exists('City', $data)) {
                $object->setCity($data['City']);
                unset($data['City']);
            }
            if (\array_key_exists('StateProvince', $data)) {
                $object->setStateProvince($data['StateProvince']);
                unset($data['StateProvince']);
            }
            if (\array_key_exists('Urbanization', $data)) {
                $object->setUrbanization($data['Urbanization']);
                unset($data['Urbanization']);
            }
            if (\array_key_exists('PostalCode', $data)) {
                $object->setPostalCode($data['PostalCode']);
                unset($data['PostalCode']);
            }
            if (\array_key_exists('CountryCode', $data)) {
                $object->setCountryCode($data['CountryCode']);
                unset($data['CountryCode']);
            }
            if (\array_key_exists('ResidentialIndicator', $data)) {
                $object->setResidentialIndicator($data['ResidentialIndicator']);
                unset($data['ResidentialIndicator']);
            }
            if (\array_key_exists('PickupPoint', $data)) {
                $object->setPickupPoint($data['PickupPoint']);
                unset($data['PickupPoint']);
            }
            if (\array_key_exists('Phone', $data)) {
                $object->setPhone($this->denormalizer->denormalize($data['Phone'], 'ShipStream\\Ups\\Api\\Model\\PickupAddressPhone', 'json', $context));
                unset($data['Phone']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            $data['CompanyName'] = $object->getCompanyName();
            $data['ContactName'] = $object->getContactName();
            $values = [];
            foreach ($object->getAddressLine() as $value) {
                $values[] = $value;
            }
            $data['AddressLine'] = $values;
            if ($object->isInitialized('room') && null !== $object->getRoom()) {
                $data['Room'] = $object->getRoom();
            }
            if ($object->isInitialized('floor') && null !== $object->getFloor()) {
                $data['Floor'] = $object->getFloor();
            }
            $data['City'] = $object->getCity();
            if ($object->isInitialized('stateProvince') && null !== $object->getStateProvince()) {
                $data['StateProvince'] = $object->getStateProvince();
            }
            if ($object->isInitialized('urbanization') && null !== $object->getUrbanization()) {
                $data['Urbanization'] = $object->getUrbanization();
            }
            if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
                $data['PostalCode'] = $object->getPostalCode();
            }
            $data['CountryCode'] = $object->getCountryCode();
            $data['ResidentialIndicator'] = $object->getResidentialIndicator();
            if ($object->isInitialized('pickupPoint') && null !== $object->getPickupPoint()) {
                $data['PickupPoint'] = $object->getPickupPoint();
            }
            $data['Phone'] = $this->normalizer->normalize($object->getPhone(), 'json', $context);
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\PickupCreationRequestPickupAddress' => false];
        }
    }
}