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
            if (\array_key_exists('CompanyName', $data) && $data['CompanyName'] !== null) {
                $object->setCompanyName($data['CompanyName']);
                unset($data['CompanyName']);
            }
            elseif (\array_key_exists('CompanyName', $data) && $data['CompanyName'] === null) {
                $object->setCompanyName(null);
            }
            if (\array_key_exists('ContactName', $data) && $data['ContactName'] !== null) {
                $object->setContactName($data['ContactName']);
                unset($data['ContactName']);
            }
            elseif (\array_key_exists('ContactName', $data) && $data['ContactName'] === null) {
                $object->setContactName(null);
            }
            if (\array_key_exists('AddressLine', $data) && $data['AddressLine'] !== null) {
                $values = [];
                foreach ($data['AddressLine'] as $value) {
                    $values[] = $value;
                }
                $object->setAddressLine($values);
                unset($data['AddressLine']);
            }
            elseif (\array_key_exists('AddressLine', $data) && $data['AddressLine'] === null) {
                $object->setAddressLine(null);
            }
            if (\array_key_exists('Room', $data) && $data['Room'] !== null) {
                $object->setRoom($data['Room']);
                unset($data['Room']);
            }
            elseif (\array_key_exists('Room', $data) && $data['Room'] === null) {
                $object->setRoom(null);
            }
            if (\array_key_exists('Floor', $data) && $data['Floor'] !== null) {
                $object->setFloor($data['Floor']);
                unset($data['Floor']);
            }
            elseif (\array_key_exists('Floor', $data) && $data['Floor'] === null) {
                $object->setFloor(null);
            }
            if (\array_key_exists('City', $data) && $data['City'] !== null) {
                $object->setCity($data['City']);
                unset($data['City']);
            }
            elseif (\array_key_exists('City', $data) && $data['City'] === null) {
                $object->setCity(null);
            }
            if (\array_key_exists('StateProvince', $data) && $data['StateProvince'] !== null) {
                $object->setStateProvince($data['StateProvince']);
                unset($data['StateProvince']);
            }
            elseif (\array_key_exists('StateProvince', $data) && $data['StateProvince'] === null) {
                $object->setStateProvince(null);
            }
            if (\array_key_exists('Urbanization', $data) && $data['Urbanization'] !== null) {
                $object->setUrbanization($data['Urbanization']);
                unset($data['Urbanization']);
            }
            elseif (\array_key_exists('Urbanization', $data) && $data['Urbanization'] === null) {
                $object->setUrbanization(null);
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
            if (\array_key_exists('ResidentialIndicator', $data) && $data['ResidentialIndicator'] !== null) {
                $object->setResidentialIndicator($data['ResidentialIndicator']);
                unset($data['ResidentialIndicator']);
            }
            elseif (\array_key_exists('ResidentialIndicator', $data) && $data['ResidentialIndicator'] === null) {
                $object->setResidentialIndicator(null);
            }
            if (\array_key_exists('PickupPoint', $data) && $data['PickupPoint'] !== null) {
                $object->setPickupPoint($data['PickupPoint']);
                unset($data['PickupPoint']);
            }
            elseif (\array_key_exists('PickupPoint', $data) && $data['PickupPoint'] === null) {
                $object->setPickupPoint(null);
            }
            if (\array_key_exists('Phone', $data) && $data['Phone'] !== null) {
                $object->setPhone($this->denormalizer->denormalize($data['Phone'], 'ShipStream\\Ups\\Api\\Model\\PickupAddressPhone', 'json', $context));
                unset($data['Phone']);
            }
            elseif (\array_key_exists('Phone', $data) && $data['Phone'] === null) {
                $object->setPhone(null);
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
            if (\array_key_exists('CompanyName', $data) && $data['CompanyName'] !== null) {
                $object->setCompanyName($data['CompanyName']);
                unset($data['CompanyName']);
            }
            elseif (\array_key_exists('CompanyName', $data) && $data['CompanyName'] === null) {
                $object->setCompanyName(null);
            }
            if (\array_key_exists('ContactName', $data) && $data['ContactName'] !== null) {
                $object->setContactName($data['ContactName']);
                unset($data['ContactName']);
            }
            elseif (\array_key_exists('ContactName', $data) && $data['ContactName'] === null) {
                $object->setContactName(null);
            }
            if (\array_key_exists('AddressLine', $data) && $data['AddressLine'] !== null) {
                $values = [];
                foreach ($data['AddressLine'] as $value) {
                    $values[] = $value;
                }
                $object->setAddressLine($values);
                unset($data['AddressLine']);
            }
            elseif (\array_key_exists('AddressLine', $data) && $data['AddressLine'] === null) {
                $object->setAddressLine(null);
            }
            if (\array_key_exists('Room', $data) && $data['Room'] !== null) {
                $object->setRoom($data['Room']);
                unset($data['Room']);
            }
            elseif (\array_key_exists('Room', $data) && $data['Room'] === null) {
                $object->setRoom(null);
            }
            if (\array_key_exists('Floor', $data) && $data['Floor'] !== null) {
                $object->setFloor($data['Floor']);
                unset($data['Floor']);
            }
            elseif (\array_key_exists('Floor', $data) && $data['Floor'] === null) {
                $object->setFloor(null);
            }
            if (\array_key_exists('City', $data) && $data['City'] !== null) {
                $object->setCity($data['City']);
                unset($data['City']);
            }
            elseif (\array_key_exists('City', $data) && $data['City'] === null) {
                $object->setCity(null);
            }
            if (\array_key_exists('StateProvince', $data) && $data['StateProvince'] !== null) {
                $object->setStateProvince($data['StateProvince']);
                unset($data['StateProvince']);
            }
            elseif (\array_key_exists('StateProvince', $data) && $data['StateProvince'] === null) {
                $object->setStateProvince(null);
            }
            if (\array_key_exists('Urbanization', $data) && $data['Urbanization'] !== null) {
                $object->setUrbanization($data['Urbanization']);
                unset($data['Urbanization']);
            }
            elseif (\array_key_exists('Urbanization', $data) && $data['Urbanization'] === null) {
                $object->setUrbanization(null);
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
            if (\array_key_exists('ResidentialIndicator', $data) && $data['ResidentialIndicator'] !== null) {
                $object->setResidentialIndicator($data['ResidentialIndicator']);
                unset($data['ResidentialIndicator']);
            }
            elseif (\array_key_exists('ResidentialIndicator', $data) && $data['ResidentialIndicator'] === null) {
                $object->setResidentialIndicator(null);
            }
            if (\array_key_exists('PickupPoint', $data) && $data['PickupPoint'] !== null) {
                $object->setPickupPoint($data['PickupPoint']);
                unset($data['PickupPoint']);
            }
            elseif (\array_key_exists('PickupPoint', $data) && $data['PickupPoint'] === null) {
                $object->setPickupPoint(null);
            }
            if (\array_key_exists('Phone', $data) && $data['Phone'] !== null) {
                $object->setPhone($this->denormalizer->denormalize($data['Phone'], 'ShipStream\\Ups\\Api\\Model\\PickupAddressPhone', 'json', $context));
                unset($data['Phone']);
            }
            elseif (\array_key_exists('Phone', $data) && $data['Phone'] === null) {
                $object->setPhone(null);
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