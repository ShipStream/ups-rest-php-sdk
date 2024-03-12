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
    class DropLocationAccessPointInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\DropLocationAccessPointInformation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\DropLocationAccessPointInformation';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
                $object->setBusinessClassificationList($this->denormalizer->denormalize($data['BusinessClassificationList'], 'ShipStream\\Ups\\Api\\Model\\AccessPointInformationBusinessClassificationList', 'json', $context));
                unset($data['BusinessClassificationList']);
            }
            if (\array_key_exists('AccessPointStatus', $data)) {
                $object->setAccessPointStatus($this->denormalizer->denormalize($data['AccessPointStatus'], 'ShipStream\\Ups\\Api\\Model\\AccessPointInformationAccessPointStatus', 'json', $context));
                unset($data['AccessPointStatus']);
            }
            if (\array_key_exists('FacilitySLIC', $data)) {
                $object->setFacilitySLIC($data['FacilitySLIC']);
                unset($data['FacilitySLIC']);
            }
            if (\array_key_exists('PrivateNetworkList', $data)) {
                $object->setPrivateNetworkList($this->denormalizer->denormalize($data['PrivateNetworkList'], 'ShipStream\\Ups\\Api\\Model\\AccessPointInformationPrivateNetworkList', 'json', $context));
                unset($data['PrivateNetworkList']);
            }
            if (\array_key_exists('Availability', $data)) {
                $object->setAvailability($this->denormalizer->denormalize($data['Availability'], 'ShipStream\\Ups\\Api\\Model\\AccessPointInformationAvailability', 'json', $context));
                unset($data['Availability']);
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
            if ($object->isInitialized('publicAccessPointID') && null !== $object->getPublicAccessPointID()) {
                $data['PublicAccessPointID'] = $object->getPublicAccessPointID();
            }
            if ($object->isInitialized('imageURL') && null !== $object->getImageURL()) {
                $data['ImageURL'] = $object->getImageURL();
            }
            if ($object->isInitialized('businessClassificationList') && null !== $object->getBusinessClassificationList()) {
                $data['BusinessClassificationList'] = $this->normalizer->normalize($object->getBusinessClassificationList(), 'json', $context);
            }
            if ($object->isInitialized('accessPointStatus') && null !== $object->getAccessPointStatus()) {
                $data['AccessPointStatus'] = $this->normalizer->normalize($object->getAccessPointStatus(), 'json', $context);
            }
            if ($object->isInitialized('facilitySLIC') && null !== $object->getFacilitySLIC()) {
                $data['FacilitySLIC'] = $object->getFacilitySLIC();
            }
            if ($object->isInitialized('privateNetworkList') && null !== $object->getPrivateNetworkList()) {
                $data['PrivateNetworkList'] = $this->normalizer->normalize($object->getPrivateNetworkList(), 'json', $context);
            }
            if ($object->isInitialized('availability') && null !== $object->getAvailability()) {
                $data['Availability'] = $this->normalizer->normalize($object->getAvailability(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\DropLocationAccessPointInformation' => false];
        }
    }
} else {
    class DropLocationAccessPointInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\DropLocationAccessPointInformation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\DropLocationAccessPointInformation';
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
                $object->setBusinessClassificationList($this->denormalizer->denormalize($data['BusinessClassificationList'], 'ShipStream\\Ups\\Api\\Model\\AccessPointInformationBusinessClassificationList', 'json', $context));
                unset($data['BusinessClassificationList']);
            }
            if (\array_key_exists('AccessPointStatus', $data)) {
                $object->setAccessPointStatus($this->denormalizer->denormalize($data['AccessPointStatus'], 'ShipStream\\Ups\\Api\\Model\\AccessPointInformationAccessPointStatus', 'json', $context));
                unset($data['AccessPointStatus']);
            }
            if (\array_key_exists('FacilitySLIC', $data)) {
                $object->setFacilitySLIC($data['FacilitySLIC']);
                unset($data['FacilitySLIC']);
            }
            if (\array_key_exists('PrivateNetworkList', $data)) {
                $object->setPrivateNetworkList($this->denormalizer->denormalize($data['PrivateNetworkList'], 'ShipStream\\Ups\\Api\\Model\\AccessPointInformationPrivateNetworkList', 'json', $context));
                unset($data['PrivateNetworkList']);
            }
            if (\array_key_exists('Availability', $data)) {
                $object->setAvailability($this->denormalizer->denormalize($data['Availability'], 'ShipStream\\Ups\\Api\\Model\\AccessPointInformationAvailability', 'json', $context));
                unset($data['Availability']);
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
            if ($object->isInitialized('publicAccessPointID') && null !== $object->getPublicAccessPointID()) {
                $data['PublicAccessPointID'] = $object->getPublicAccessPointID();
            }
            if ($object->isInitialized('imageURL') && null !== $object->getImageURL()) {
                $data['ImageURL'] = $object->getImageURL();
            }
            if ($object->isInitialized('businessClassificationList') && null !== $object->getBusinessClassificationList()) {
                $data['BusinessClassificationList'] = $this->normalizer->normalize($object->getBusinessClassificationList(), 'json', $context);
            }
            if ($object->isInitialized('accessPointStatus') && null !== $object->getAccessPointStatus()) {
                $data['AccessPointStatus'] = $this->normalizer->normalize($object->getAccessPointStatus(), 'json', $context);
            }
            if ($object->isInitialized('facilitySLIC') && null !== $object->getFacilitySLIC()) {
                $data['FacilitySLIC'] = $object->getFacilitySLIC();
            }
            if ($object->isInitialized('privateNetworkList') && null !== $object->getPrivateNetworkList()) {
                $data['PrivateNetworkList'] = $this->normalizer->normalize($object->getPrivateNetworkList(), 'json', $context);
            }
            if ($object->isInitialized('availability') && null !== $object->getAvailability()) {
                $data['Availability'] = $this->normalizer->normalize($object->getAvailability(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\DropLocationAccessPointInformation' => false];
        }
    }
}