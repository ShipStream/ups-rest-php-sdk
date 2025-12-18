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
class DropLocationAccessPointInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\DropLocationAccessPointInformation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\DropLocationAccessPointInformation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\DropLocationAccessPointInformation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PublicAccessPointID', $data)) {
            $object->setPublicAccessPointID($data['PublicAccessPointID']);
            unset($data['PublicAccessPointID']);
        }
        if (\array_key_exists('ImageURL', $data)) {
            $object->setImageURL($data['ImageURL']);
            unset($data['ImageURL']);
        }
        if (\array_key_exists('BusinessClassificationList', $data)) {
            $object->setBusinessClassificationList($this->denormalizer->denormalize($data['BusinessClassificationList'], \ShipStream\Ups\Api\Model\AccessPointInformationBusinessClassificationList::class, 'json', $context));
            unset($data['BusinessClassificationList']);
        }
        if (\array_key_exists('AccessPointStatus', $data)) {
            $object->setAccessPointStatus($this->denormalizer->denormalize($data['AccessPointStatus'], \ShipStream\Ups\Api\Model\AccessPointInformationAccessPointStatus::class, 'json', $context));
            unset($data['AccessPointStatus']);
        }
        if (\array_key_exists('FacilitySLIC', $data)) {
            $object->setFacilitySLIC($data['FacilitySLIC']);
            unset($data['FacilitySLIC']);
        }
        if (\array_key_exists('PrivateNetworkList', $data)) {
            $object->setPrivateNetworkList($this->denormalizer->denormalize($data['PrivateNetworkList'], \ShipStream\Ups\Api\Model\AccessPointInformationPrivateNetworkList::class, 'json', $context));
            unset($data['PrivateNetworkList']);
        }
        if (\array_key_exists('Availability', $data)) {
            $object->setAvailability($this->denormalizer->denormalize($data['Availability'], \ShipStream\Ups\Api\Model\AccessPointInformationAvailability::class, 'json', $context));
            unset($data['Availability']);
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
        if ($data->isInitialized('publicAccessPointID') && null !== $data->getPublicAccessPointID()) {
            $dataArray['PublicAccessPointID'] = $data->getPublicAccessPointID();
        }
        if ($data->isInitialized('imageURL') && null !== $data->getImageURL()) {
            $dataArray['ImageURL'] = $data->getImageURL();
        }
        if ($data->isInitialized('businessClassificationList') && null !== $data->getBusinessClassificationList()) {
            $dataArray['BusinessClassificationList'] = $this->normalizer->normalize($data->getBusinessClassificationList(), 'json', $context);
        }
        if ($data->isInitialized('accessPointStatus') && null !== $data->getAccessPointStatus()) {
            $dataArray['AccessPointStatus'] = $this->normalizer->normalize($data->getAccessPointStatus(), 'json', $context);
        }
        if ($data->isInitialized('facilitySLIC') && null !== $data->getFacilitySLIC()) {
            $dataArray['FacilitySLIC'] = $data->getFacilitySLIC();
        }
        if ($data->isInitialized('privateNetworkList') && null !== $data->getPrivateNetworkList()) {
            $dataArray['PrivateNetworkList'] = $this->normalizer->normalize($data->getPrivateNetworkList(), 'json', $context);
        }
        if ($data->isInitialized('availability') && null !== $data->getAvailability()) {
            $dataArray['Availability'] = $this->normalizer->normalize($data->getAvailability(), 'json', $context);
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
        return [\ShipStream\Ups\Api\Model\DropLocationAccessPointInformation::class => false];
    }
}