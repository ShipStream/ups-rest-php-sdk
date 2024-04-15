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
    class PushToImageRepositoryRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PushToImageRepositoryRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PushToImageRepositoryRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\PushToImageRepositoryRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Request', $data) && $data['Request'] !== null) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\PushToImageRepositoryRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            elseif (\array_key_exists('Request', $data) && $data['Request'] === null) {
                $object->setRequest(null);
            }
            if (\array_key_exists('ShipperNumber', $data) && $data['ShipperNumber'] !== null) {
                $object->setShipperNumber($data['ShipperNumber']);
                unset($data['ShipperNumber']);
            }
            elseif (\array_key_exists('ShipperNumber', $data) && $data['ShipperNumber'] === null) {
                $object->setShipperNumber(null);
            }
            if (\array_key_exists('FormsHistoryDocumentID', $data) && $data['FormsHistoryDocumentID'] !== null) {
                $object->setFormsHistoryDocumentID($this->denormalizer->denormalize($data['FormsHistoryDocumentID'], 'ShipStream\\Ups\\Api\\Model\\PushToImageRepositoryRequestFormsHistoryDocumentID', 'json', $context));
                unset($data['FormsHistoryDocumentID']);
            }
            elseif (\array_key_exists('FormsHistoryDocumentID', $data) && $data['FormsHistoryDocumentID'] === null) {
                $object->setFormsHistoryDocumentID(null);
            }
            if (\array_key_exists('FormsGroupID', $data) && $data['FormsGroupID'] !== null) {
                $object->setFormsGroupID($data['FormsGroupID']);
                unset($data['FormsGroupID']);
            }
            elseif (\array_key_exists('FormsGroupID', $data) && $data['FormsGroupID'] === null) {
                $object->setFormsGroupID(null);
            }
            if (\array_key_exists('ShipmentIdentifier', $data) && $data['ShipmentIdentifier'] !== null) {
                $object->setShipmentIdentifier($data['ShipmentIdentifier']);
                unset($data['ShipmentIdentifier']);
            }
            elseif (\array_key_exists('ShipmentIdentifier', $data) && $data['ShipmentIdentifier'] === null) {
                $object->setShipmentIdentifier(null);
            }
            if (\array_key_exists('ShipmentDateAndTime', $data) && $data['ShipmentDateAndTime'] !== null) {
                $object->setShipmentDateAndTime($data['ShipmentDateAndTime']);
                unset($data['ShipmentDateAndTime']);
            }
            elseif (\array_key_exists('ShipmentDateAndTime', $data) && $data['ShipmentDateAndTime'] === null) {
                $object->setShipmentDateAndTime(null);
            }
            if (\array_key_exists('ShipmentType', $data) && $data['ShipmentType'] !== null) {
                $object->setShipmentType($data['ShipmentType']);
                unset($data['ShipmentType']);
            }
            elseif (\array_key_exists('ShipmentType', $data) && $data['ShipmentType'] === null) {
                $object->setShipmentType(null);
            }
            if (\array_key_exists('PRQConfirmationNumber', $data) && $data['PRQConfirmationNumber'] !== null) {
                $object->setPRQConfirmationNumber($data['PRQConfirmationNumber']);
                unset($data['PRQConfirmationNumber']);
            }
            elseif (\array_key_exists('PRQConfirmationNumber', $data) && $data['PRQConfirmationNumber'] === null) {
                $object->setPRQConfirmationNumber(null);
            }
            if (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] !== null) {
                $values = [];
                foreach ($data['TrackingNumber'] as $value) {
                    $values[] = $value;
                }
                $object->setTrackingNumber($values);
                unset($data['TrackingNumber']);
            }
            elseif (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] === null) {
                $object->setTrackingNumber(null);
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
            $data['Request'] = $this->normalizer->normalize($object->getRequest(), 'json', $context);
            $data['ShipperNumber'] = $object->getShipperNumber();
            $data['FormsHistoryDocumentID'] = $this->normalizer->normalize($object->getFormsHistoryDocumentID(), 'json', $context);
            if ($object->isInitialized('formsGroupID') && null !== $object->getFormsGroupID()) {
                $data['FormsGroupID'] = $object->getFormsGroupID();
            }
            $data['ShipmentIdentifier'] = $object->getShipmentIdentifier();
            if ($object->isInitialized('shipmentDateAndTime') && null !== $object->getShipmentDateAndTime()) {
                $data['ShipmentDateAndTime'] = $object->getShipmentDateAndTime();
            }
            $data['ShipmentType'] = $object->getShipmentType();
            if ($object->isInitialized('pRQConfirmationNumber') && null !== $object->getPRQConfirmationNumber()) {
                $data['PRQConfirmationNumber'] = $object->getPRQConfirmationNumber();
            }
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $values = [];
                foreach ($object->getTrackingNumber() as $value) {
                    $values[] = $value;
                }
                $data['TrackingNumber'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\PushToImageRepositoryRequest' => false];
        }
    }
} else {
    class PushToImageRepositoryRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PushToImageRepositoryRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PushToImageRepositoryRequest';
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
            $object = new \ShipStream\Ups\Api\Model\PushToImageRepositoryRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Request', $data) && $data['Request'] !== null) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\PushToImageRepositoryRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            elseif (\array_key_exists('Request', $data) && $data['Request'] === null) {
                $object->setRequest(null);
            }
            if (\array_key_exists('ShipperNumber', $data) && $data['ShipperNumber'] !== null) {
                $object->setShipperNumber($data['ShipperNumber']);
                unset($data['ShipperNumber']);
            }
            elseif (\array_key_exists('ShipperNumber', $data) && $data['ShipperNumber'] === null) {
                $object->setShipperNumber(null);
            }
            if (\array_key_exists('FormsHistoryDocumentID', $data) && $data['FormsHistoryDocumentID'] !== null) {
                $object->setFormsHistoryDocumentID($this->denormalizer->denormalize($data['FormsHistoryDocumentID'], 'ShipStream\\Ups\\Api\\Model\\PushToImageRepositoryRequestFormsHistoryDocumentID', 'json', $context));
                unset($data['FormsHistoryDocumentID']);
            }
            elseif (\array_key_exists('FormsHistoryDocumentID', $data) && $data['FormsHistoryDocumentID'] === null) {
                $object->setFormsHistoryDocumentID(null);
            }
            if (\array_key_exists('FormsGroupID', $data) && $data['FormsGroupID'] !== null) {
                $object->setFormsGroupID($data['FormsGroupID']);
                unset($data['FormsGroupID']);
            }
            elseif (\array_key_exists('FormsGroupID', $data) && $data['FormsGroupID'] === null) {
                $object->setFormsGroupID(null);
            }
            if (\array_key_exists('ShipmentIdentifier', $data) && $data['ShipmentIdentifier'] !== null) {
                $object->setShipmentIdentifier($data['ShipmentIdentifier']);
                unset($data['ShipmentIdentifier']);
            }
            elseif (\array_key_exists('ShipmentIdentifier', $data) && $data['ShipmentIdentifier'] === null) {
                $object->setShipmentIdentifier(null);
            }
            if (\array_key_exists('ShipmentDateAndTime', $data) && $data['ShipmentDateAndTime'] !== null) {
                $object->setShipmentDateAndTime($data['ShipmentDateAndTime']);
                unset($data['ShipmentDateAndTime']);
            }
            elseif (\array_key_exists('ShipmentDateAndTime', $data) && $data['ShipmentDateAndTime'] === null) {
                $object->setShipmentDateAndTime(null);
            }
            if (\array_key_exists('ShipmentType', $data) && $data['ShipmentType'] !== null) {
                $object->setShipmentType($data['ShipmentType']);
                unset($data['ShipmentType']);
            }
            elseif (\array_key_exists('ShipmentType', $data) && $data['ShipmentType'] === null) {
                $object->setShipmentType(null);
            }
            if (\array_key_exists('PRQConfirmationNumber', $data) && $data['PRQConfirmationNumber'] !== null) {
                $object->setPRQConfirmationNumber($data['PRQConfirmationNumber']);
                unset($data['PRQConfirmationNumber']);
            }
            elseif (\array_key_exists('PRQConfirmationNumber', $data) && $data['PRQConfirmationNumber'] === null) {
                $object->setPRQConfirmationNumber(null);
            }
            if (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] !== null) {
                $values = [];
                foreach ($data['TrackingNumber'] as $value) {
                    $values[] = $value;
                }
                $object->setTrackingNumber($values);
                unset($data['TrackingNumber']);
            }
            elseif (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] === null) {
                $object->setTrackingNumber(null);
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
            $data['Request'] = $this->normalizer->normalize($object->getRequest(), 'json', $context);
            $data['ShipperNumber'] = $object->getShipperNumber();
            $data['FormsHistoryDocumentID'] = $this->normalizer->normalize($object->getFormsHistoryDocumentID(), 'json', $context);
            if ($object->isInitialized('formsGroupID') && null !== $object->getFormsGroupID()) {
                $data['FormsGroupID'] = $object->getFormsGroupID();
            }
            $data['ShipmentIdentifier'] = $object->getShipmentIdentifier();
            if ($object->isInitialized('shipmentDateAndTime') && null !== $object->getShipmentDateAndTime()) {
                $data['ShipmentDateAndTime'] = $object->getShipmentDateAndTime();
            }
            $data['ShipmentType'] = $object->getShipmentType();
            if ($object->isInitialized('pRQConfirmationNumber') && null !== $object->getPRQConfirmationNumber()) {
                $data['PRQConfirmationNumber'] = $object->getPRQConfirmationNumber();
            }
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $values = [];
                foreach ($object->getTrackingNumber() as $value) {
                    $values[] = $value;
                }
                $data['TrackingNumber'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\PushToImageRepositoryRequest' => false];
        }
    }
}