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
    class PickupPendingStatusResponsePendingStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PickupPendingStatusResponsePendingStatus';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PickupPendingStatusResponsePendingStatus';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\PickupPendingStatusResponsePendingStatus();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('PickupType', $data) && $data['PickupType'] !== null) {
                $object->setPickupType($data['PickupType']);
                unset($data['PickupType']);
            }
            elseif (\array_key_exists('PickupType', $data) && $data['PickupType'] === null) {
                $object->setPickupType(null);
            }
            if (\array_key_exists('ServiceDate', $data) && $data['ServiceDate'] !== null) {
                $object->setServiceDate($data['ServiceDate']);
                unset($data['ServiceDate']);
            }
            elseif (\array_key_exists('ServiceDate', $data) && $data['ServiceDate'] === null) {
                $object->setServiceDate(null);
            }
            if (\array_key_exists('PRN', $data) && $data['PRN'] !== null) {
                $object->setPRN($data['PRN']);
                unset($data['PRN']);
            }
            elseif (\array_key_exists('PRN', $data) && $data['PRN'] === null) {
                $object->setPRN(null);
            }
            if (\array_key_exists('GWNStatusCode', $data) && $data['GWNStatusCode'] !== null) {
                $object->setGWNStatusCode($data['GWNStatusCode']);
                unset($data['GWNStatusCode']);
            }
            elseif (\array_key_exists('GWNStatusCode', $data) && $data['GWNStatusCode'] === null) {
                $object->setGWNStatusCode(null);
            }
            if (\array_key_exists('OnCallStatusCode', $data) && $data['OnCallStatusCode'] !== null) {
                $object->setOnCallStatusCode($data['OnCallStatusCode']);
                unset($data['OnCallStatusCode']);
            }
            elseif (\array_key_exists('OnCallStatusCode', $data) && $data['OnCallStatusCode'] === null) {
                $object->setOnCallStatusCode(null);
            }
            if (\array_key_exists('PickupStatusMessage', $data) && $data['PickupStatusMessage'] !== null) {
                $object->setPickupStatusMessage($data['PickupStatusMessage']);
                unset($data['PickupStatusMessage']);
            }
            elseif (\array_key_exists('PickupStatusMessage', $data) && $data['PickupStatusMessage'] === null) {
                $object->setPickupStatusMessage(null);
            }
            if (\array_key_exists('BillingCode', $data) && $data['BillingCode'] !== null) {
                $object->setBillingCode($data['BillingCode']);
                unset($data['BillingCode']);
            }
            elseif (\array_key_exists('BillingCode', $data) && $data['BillingCode'] === null) {
                $object->setBillingCode(null);
            }
            if (\array_key_exists('ContactName', $data) && $data['ContactName'] !== null) {
                $object->setContactName($data['ContactName']);
                unset($data['ContactName']);
            }
            elseif (\array_key_exists('ContactName', $data) && $data['ContactName'] === null) {
                $object->setContactName(null);
            }
            if (\array_key_exists('ReferenceNumber', $data) && $data['ReferenceNumber'] !== null) {
                $object->setReferenceNumber($data['ReferenceNumber']);
                unset($data['ReferenceNumber']);
            }
            elseif (\array_key_exists('ReferenceNumber', $data) && $data['ReferenceNumber'] === null) {
                $object->setReferenceNumber(null);
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
            $data['PickupType'] = $object->getPickupType();
            $data['ServiceDate'] = $object->getServiceDate();
            $data['PRN'] = $object->getPRN();
            if ($object->isInitialized('gWNStatusCode') && null !== $object->getGWNStatusCode()) {
                $data['GWNStatusCode'] = $object->getGWNStatusCode();
            }
            if ($object->isInitialized('onCallStatusCode') && null !== $object->getOnCallStatusCode()) {
                $data['OnCallStatusCode'] = $object->getOnCallStatusCode();
            }
            $data['PickupStatusMessage'] = $object->getPickupStatusMessage();
            if ($object->isInitialized('billingCode') && null !== $object->getBillingCode()) {
                $data['BillingCode'] = $object->getBillingCode();
            }
            if ($object->isInitialized('contactName') && null !== $object->getContactName()) {
                $data['ContactName'] = $object->getContactName();
            }
            if ($object->isInitialized('referenceNumber') && null !== $object->getReferenceNumber()) {
                $data['ReferenceNumber'] = $object->getReferenceNumber();
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
            return ['ShipStream\\Ups\\Api\\Model\\PickupPendingStatusResponsePendingStatus' => false];
        }
    }
} else {
    class PickupPendingStatusResponsePendingStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PickupPendingStatusResponsePendingStatus';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PickupPendingStatusResponsePendingStatus';
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
            $object = new \ShipStream\Ups\Api\Model\PickupPendingStatusResponsePendingStatus();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('PickupType', $data) && $data['PickupType'] !== null) {
                $object->setPickupType($data['PickupType']);
                unset($data['PickupType']);
            }
            elseif (\array_key_exists('PickupType', $data) && $data['PickupType'] === null) {
                $object->setPickupType(null);
            }
            if (\array_key_exists('ServiceDate', $data) && $data['ServiceDate'] !== null) {
                $object->setServiceDate($data['ServiceDate']);
                unset($data['ServiceDate']);
            }
            elseif (\array_key_exists('ServiceDate', $data) && $data['ServiceDate'] === null) {
                $object->setServiceDate(null);
            }
            if (\array_key_exists('PRN', $data) && $data['PRN'] !== null) {
                $object->setPRN($data['PRN']);
                unset($data['PRN']);
            }
            elseif (\array_key_exists('PRN', $data) && $data['PRN'] === null) {
                $object->setPRN(null);
            }
            if (\array_key_exists('GWNStatusCode', $data) && $data['GWNStatusCode'] !== null) {
                $object->setGWNStatusCode($data['GWNStatusCode']);
                unset($data['GWNStatusCode']);
            }
            elseif (\array_key_exists('GWNStatusCode', $data) && $data['GWNStatusCode'] === null) {
                $object->setGWNStatusCode(null);
            }
            if (\array_key_exists('OnCallStatusCode', $data) && $data['OnCallStatusCode'] !== null) {
                $object->setOnCallStatusCode($data['OnCallStatusCode']);
                unset($data['OnCallStatusCode']);
            }
            elseif (\array_key_exists('OnCallStatusCode', $data) && $data['OnCallStatusCode'] === null) {
                $object->setOnCallStatusCode(null);
            }
            if (\array_key_exists('PickupStatusMessage', $data) && $data['PickupStatusMessage'] !== null) {
                $object->setPickupStatusMessage($data['PickupStatusMessage']);
                unset($data['PickupStatusMessage']);
            }
            elseif (\array_key_exists('PickupStatusMessage', $data) && $data['PickupStatusMessage'] === null) {
                $object->setPickupStatusMessage(null);
            }
            if (\array_key_exists('BillingCode', $data) && $data['BillingCode'] !== null) {
                $object->setBillingCode($data['BillingCode']);
                unset($data['BillingCode']);
            }
            elseif (\array_key_exists('BillingCode', $data) && $data['BillingCode'] === null) {
                $object->setBillingCode(null);
            }
            if (\array_key_exists('ContactName', $data) && $data['ContactName'] !== null) {
                $object->setContactName($data['ContactName']);
                unset($data['ContactName']);
            }
            elseif (\array_key_exists('ContactName', $data) && $data['ContactName'] === null) {
                $object->setContactName(null);
            }
            if (\array_key_exists('ReferenceNumber', $data) && $data['ReferenceNumber'] !== null) {
                $object->setReferenceNumber($data['ReferenceNumber']);
                unset($data['ReferenceNumber']);
            }
            elseif (\array_key_exists('ReferenceNumber', $data) && $data['ReferenceNumber'] === null) {
                $object->setReferenceNumber(null);
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
            $data['PickupType'] = $object->getPickupType();
            $data['ServiceDate'] = $object->getServiceDate();
            $data['PRN'] = $object->getPRN();
            if ($object->isInitialized('gWNStatusCode') && null !== $object->getGWNStatusCode()) {
                $data['GWNStatusCode'] = $object->getGWNStatusCode();
            }
            if ($object->isInitialized('onCallStatusCode') && null !== $object->getOnCallStatusCode()) {
                $data['OnCallStatusCode'] = $object->getOnCallStatusCode();
            }
            $data['PickupStatusMessage'] = $object->getPickupStatusMessage();
            if ($object->isInitialized('billingCode') && null !== $object->getBillingCode()) {
                $data['BillingCode'] = $object->getBillingCode();
            }
            if ($object->isInitialized('contactName') && null !== $object->getContactName()) {
                $data['ContactName'] = $object->getContactName();
            }
            if ($object->isInitialized('referenceNumber') && null !== $object->getReferenceNumber()) {
                $data['ReferenceNumber'] = $object->getReferenceNumber();
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
            return ['ShipStream\\Ups\\Api\\Model\\PickupPendingStatusResponsePendingStatus' => false];
        }
    }
}