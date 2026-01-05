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
class PickupCreationRequestPickupAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\PickupCreationRequestPickupAddress::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\PickupCreationRequestPickupAddress::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
            $object->setPhone($this->denormalizer->denormalize($data['Phone'], \ShipStream\Ups\Api\Model\PickupAddressPhone::class, 'json', $context));
            unset($data['Phone']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['CompanyName'] = $data->getCompanyName();
        $dataArray['ContactName'] = $data->getContactName();
        $values = [];
        foreach ($data->getAddressLine() as $value) {
            $values[] = $value;
        }
        $dataArray['AddressLine'] = $values;
        if ($data->isInitialized('room') && null !== $data->getRoom()) {
            $dataArray['Room'] = $data->getRoom();
        }
        if ($data->isInitialized('floor') && null !== $data->getFloor()) {
            $dataArray['Floor'] = $data->getFloor();
        }
        $dataArray['City'] = $data->getCity();
        if ($data->isInitialized('stateProvince') && null !== $data->getStateProvince()) {
            $dataArray['StateProvince'] = $data->getStateProvince();
        }
        if ($data->isInitialized('urbanization') && null !== $data->getUrbanization()) {
            $dataArray['Urbanization'] = $data->getUrbanization();
        }
        if ($data->isInitialized('postalCode') && null !== $data->getPostalCode()) {
            $dataArray['PostalCode'] = $data->getPostalCode();
        }
        $dataArray['CountryCode'] = $data->getCountryCode();
        $dataArray['ResidentialIndicator'] = $data->getResidentialIndicator();
        if ($data->isInitialized('pickupPoint') && null !== $data->getPickupPoint()) {
            $dataArray['PickupPoint'] = $data->getPickupPoint();
        }
        $dataArray['Phone'] = $this->normalizer->normalize($data->getPhone(), 'json', $context);
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\PickupCreationRequestPickupAddress::class => false];
    }
}