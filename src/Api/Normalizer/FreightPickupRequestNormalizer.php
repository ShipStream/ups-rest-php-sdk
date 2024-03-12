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
    class FreightPickupRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightPickupRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightPickupRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\FreightPickupRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Request', $data)) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\FreightPickupRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            if (\array_key_exists('PickupRequestConfirmationNumber', $data)) {
                $object->setPickupRequestConfirmationNumber($data['PickupRequestConfirmationNumber']);
                unset($data['PickupRequestConfirmationNumber']);
            }
            if (\array_key_exists('DestinationPostalCode', $data)) {
                $object->setDestinationPostalCode($data['DestinationPostalCode']);
                unset($data['DestinationPostalCode']);
            }
            if (\array_key_exists('DestinationCountryCode', $data)) {
                $object->setDestinationCountryCode($data['DestinationCountryCode']);
                unset($data['DestinationCountryCode']);
            }
            if (\array_key_exists('Requester', $data)) {
                $object->setRequester($this->denormalizer->denormalize($data['Requester'], 'ShipStream\\Ups\\Api\\Model\\FreightPickupRequestRequester', 'json', $context));
                unset($data['Requester']);
            }
            if (\array_key_exists('ShipFrom', $data)) {
                $object->setShipFrom($this->denormalizer->denormalize($data['ShipFrom'], 'ShipStream\\Ups\\Api\\Model\\FreightPickupRequestShipFrom', 'json', $context));
                unset($data['ShipFrom']);
            }
            if (\array_key_exists('ShipTo', $data)) {
                $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], 'ShipStream\\Ups\\Api\\Model\\FreightPickupRequestShipTo', 'json', $context));
                unset($data['ShipTo']);
            }
            if (\array_key_exists('PickupDate', $data)) {
                $object->setPickupDate($data['PickupDate']);
                unset($data['PickupDate']);
            }
            if (\array_key_exists('EarliestTimeReady', $data)) {
                $object->setEarliestTimeReady($data['EarliestTimeReady']);
                unset($data['EarliestTimeReady']);
            }
            if (\array_key_exists('LatestTimeReady', $data)) {
                $object->setLatestTimeReady($data['LatestTimeReady']);
                unset($data['LatestTimeReady']);
            }
            if (\array_key_exists('ShipmentServiceOptions', $data)) {
                $object->setShipmentServiceOptions($this->denormalizer->denormalize($data['ShipmentServiceOptions'], 'ShipStream\\Ups\\Api\\Model\\FreightPickupRequestShipmentServiceOptions', 'json', $context));
                unset($data['ShipmentServiceOptions']);
            }
            if (\array_key_exists('ShipmentDetail', $data)) {
                $values = [];
                foreach ($data['ShipmentDetail'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\FreightPickupRequestShipmentDetail', 'json', $context);
                }
                $object->setShipmentDetail($values);
                unset($data['ShipmentDetail']);
            }
            if (\array_key_exists('ExistingShipmentID', $data)) {
                $object->setExistingShipmentID($this->denormalizer->denormalize($data['ExistingShipmentID'], 'ShipStream\\Ups\\Api\\Model\\FreightPickupRequestExistingShipmentID', 'json', $context));
                unset($data['ExistingShipmentID']);
            }
            if (\array_key_exists('POM', $data)) {
                $object->setPOM($this->denormalizer->denormalize($data['POM'], 'ShipStream\\Ups\\Api\\Model\\FreightPickupRequestPOM', 'json', $context));
                unset($data['POM']);
            }
            if (\array_key_exists('PickupInstructions', $data)) {
                $object->setPickupInstructions($data['PickupInstructions']);
                unset($data['PickupInstructions']);
            }
            if (\array_key_exists('AdditionalComments', $data)) {
                $object->setAdditionalComments($data['AdditionalComments']);
                unset($data['AdditionalComments']);
            }
            if (\array_key_exists('HandlingInstructions', $data)) {
                $object->setHandlingInstructions($data['HandlingInstructions']);
                unset($data['HandlingInstructions']);
            }
            if (\array_key_exists('SpecialInstructions', $data)) {
                $object->setSpecialInstructions($data['SpecialInstructions']);
                unset($data['SpecialInstructions']);
            }
            if (\array_key_exists('DeliveryInstructions', $data)) {
                $object->setDeliveryInstructions($data['DeliveryInstructions']);
                unset($data['DeliveryInstructions']);
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
            if ($object->isInitialized('pickupRequestConfirmationNumber') && null !== $object->getPickupRequestConfirmationNumber()) {
                $data['PickupRequestConfirmationNumber'] = $object->getPickupRequestConfirmationNumber();
            }
            if ($object->isInitialized('destinationPostalCode') && null !== $object->getDestinationPostalCode()) {
                $data['DestinationPostalCode'] = $object->getDestinationPostalCode();
            }
            $data['DestinationCountryCode'] = $object->getDestinationCountryCode();
            $data['Requester'] = $this->normalizer->normalize($object->getRequester(), 'json', $context);
            $data['ShipFrom'] = $this->normalizer->normalize($object->getShipFrom(), 'json', $context);
            if ($object->isInitialized('shipTo') && null !== $object->getShipTo()) {
                $data['ShipTo'] = $this->normalizer->normalize($object->getShipTo(), 'json', $context);
            }
            $data['PickupDate'] = $object->getPickupDate();
            $data['EarliestTimeReady'] = $object->getEarliestTimeReady();
            $data['LatestTimeReady'] = $object->getLatestTimeReady();
            if ($object->isInitialized('shipmentServiceOptions') && null !== $object->getShipmentServiceOptions()) {
                $data['ShipmentServiceOptions'] = $this->normalizer->normalize($object->getShipmentServiceOptions(), 'json', $context);
            }
            if ($object->isInitialized('shipmentDetail') && null !== $object->getShipmentDetail()) {
                $values = [];
                foreach ($object->getShipmentDetail() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ShipmentDetail'] = $values;
            }
            if ($object->isInitialized('existingShipmentID') && null !== $object->getExistingShipmentID()) {
                $data['ExistingShipmentID'] = $this->normalizer->normalize($object->getExistingShipmentID(), 'json', $context);
            }
            if ($object->isInitialized('pOM') && null !== $object->getPOM()) {
                $data['POM'] = $this->normalizer->normalize($object->getPOM(), 'json', $context);
            }
            if ($object->isInitialized('pickupInstructions') && null !== $object->getPickupInstructions()) {
                $data['PickupInstructions'] = $object->getPickupInstructions();
            }
            if ($object->isInitialized('additionalComments') && null !== $object->getAdditionalComments()) {
                $data['AdditionalComments'] = $object->getAdditionalComments();
            }
            if ($object->isInitialized('handlingInstructions') && null !== $object->getHandlingInstructions()) {
                $data['HandlingInstructions'] = $object->getHandlingInstructions();
            }
            if ($object->isInitialized('specialInstructions') && null !== $object->getSpecialInstructions()) {
                $data['SpecialInstructions'] = $object->getSpecialInstructions();
            }
            if ($object->isInitialized('deliveryInstructions') && null !== $object->getDeliveryInstructions()) {
                $data['DeliveryInstructions'] = $object->getDeliveryInstructions();
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
            return ['ShipStream\\Ups\\Api\\Model\\FreightPickupRequest' => false];
        }
    }
} else {
    class FreightPickupRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightPickupRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightPickupRequest';
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
            $object = new \ShipStream\Ups\Api\Model\FreightPickupRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Request', $data)) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\FreightPickupRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            if (\array_key_exists('PickupRequestConfirmationNumber', $data)) {
                $object->setPickupRequestConfirmationNumber($data['PickupRequestConfirmationNumber']);
                unset($data['PickupRequestConfirmationNumber']);
            }
            if (\array_key_exists('DestinationPostalCode', $data)) {
                $object->setDestinationPostalCode($data['DestinationPostalCode']);
                unset($data['DestinationPostalCode']);
            }
            if (\array_key_exists('DestinationCountryCode', $data)) {
                $object->setDestinationCountryCode($data['DestinationCountryCode']);
                unset($data['DestinationCountryCode']);
            }
            if (\array_key_exists('Requester', $data)) {
                $object->setRequester($this->denormalizer->denormalize($data['Requester'], 'ShipStream\\Ups\\Api\\Model\\FreightPickupRequestRequester', 'json', $context));
                unset($data['Requester']);
            }
            if (\array_key_exists('ShipFrom', $data)) {
                $object->setShipFrom($this->denormalizer->denormalize($data['ShipFrom'], 'ShipStream\\Ups\\Api\\Model\\FreightPickupRequestShipFrom', 'json', $context));
                unset($data['ShipFrom']);
            }
            if (\array_key_exists('ShipTo', $data)) {
                $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], 'ShipStream\\Ups\\Api\\Model\\FreightPickupRequestShipTo', 'json', $context));
                unset($data['ShipTo']);
            }
            if (\array_key_exists('PickupDate', $data)) {
                $object->setPickupDate($data['PickupDate']);
                unset($data['PickupDate']);
            }
            if (\array_key_exists('EarliestTimeReady', $data)) {
                $object->setEarliestTimeReady($data['EarliestTimeReady']);
                unset($data['EarliestTimeReady']);
            }
            if (\array_key_exists('LatestTimeReady', $data)) {
                $object->setLatestTimeReady($data['LatestTimeReady']);
                unset($data['LatestTimeReady']);
            }
            if (\array_key_exists('ShipmentServiceOptions', $data)) {
                $object->setShipmentServiceOptions($this->denormalizer->denormalize($data['ShipmentServiceOptions'], 'ShipStream\\Ups\\Api\\Model\\FreightPickupRequestShipmentServiceOptions', 'json', $context));
                unset($data['ShipmentServiceOptions']);
            }
            if (\array_key_exists('ShipmentDetail', $data)) {
                $values = [];
                foreach ($data['ShipmentDetail'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\FreightPickupRequestShipmentDetail', 'json', $context);
                }
                $object->setShipmentDetail($values);
                unset($data['ShipmentDetail']);
            }
            if (\array_key_exists('ExistingShipmentID', $data)) {
                $object->setExistingShipmentID($this->denormalizer->denormalize($data['ExistingShipmentID'], 'ShipStream\\Ups\\Api\\Model\\FreightPickupRequestExistingShipmentID', 'json', $context));
                unset($data['ExistingShipmentID']);
            }
            if (\array_key_exists('POM', $data)) {
                $object->setPOM($this->denormalizer->denormalize($data['POM'], 'ShipStream\\Ups\\Api\\Model\\FreightPickupRequestPOM', 'json', $context));
                unset($data['POM']);
            }
            if (\array_key_exists('PickupInstructions', $data)) {
                $object->setPickupInstructions($data['PickupInstructions']);
                unset($data['PickupInstructions']);
            }
            if (\array_key_exists('AdditionalComments', $data)) {
                $object->setAdditionalComments($data['AdditionalComments']);
                unset($data['AdditionalComments']);
            }
            if (\array_key_exists('HandlingInstructions', $data)) {
                $object->setHandlingInstructions($data['HandlingInstructions']);
                unset($data['HandlingInstructions']);
            }
            if (\array_key_exists('SpecialInstructions', $data)) {
                $object->setSpecialInstructions($data['SpecialInstructions']);
                unset($data['SpecialInstructions']);
            }
            if (\array_key_exists('DeliveryInstructions', $data)) {
                $object->setDeliveryInstructions($data['DeliveryInstructions']);
                unset($data['DeliveryInstructions']);
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
            if ($object->isInitialized('pickupRequestConfirmationNumber') && null !== $object->getPickupRequestConfirmationNumber()) {
                $data['PickupRequestConfirmationNumber'] = $object->getPickupRequestConfirmationNumber();
            }
            if ($object->isInitialized('destinationPostalCode') && null !== $object->getDestinationPostalCode()) {
                $data['DestinationPostalCode'] = $object->getDestinationPostalCode();
            }
            $data['DestinationCountryCode'] = $object->getDestinationCountryCode();
            $data['Requester'] = $this->normalizer->normalize($object->getRequester(), 'json', $context);
            $data['ShipFrom'] = $this->normalizer->normalize($object->getShipFrom(), 'json', $context);
            if ($object->isInitialized('shipTo') && null !== $object->getShipTo()) {
                $data['ShipTo'] = $this->normalizer->normalize($object->getShipTo(), 'json', $context);
            }
            $data['PickupDate'] = $object->getPickupDate();
            $data['EarliestTimeReady'] = $object->getEarliestTimeReady();
            $data['LatestTimeReady'] = $object->getLatestTimeReady();
            if ($object->isInitialized('shipmentServiceOptions') && null !== $object->getShipmentServiceOptions()) {
                $data['ShipmentServiceOptions'] = $this->normalizer->normalize($object->getShipmentServiceOptions(), 'json', $context);
            }
            if ($object->isInitialized('shipmentDetail') && null !== $object->getShipmentDetail()) {
                $values = [];
                foreach ($object->getShipmentDetail() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ShipmentDetail'] = $values;
            }
            if ($object->isInitialized('existingShipmentID') && null !== $object->getExistingShipmentID()) {
                $data['ExistingShipmentID'] = $this->normalizer->normalize($object->getExistingShipmentID(), 'json', $context);
            }
            if ($object->isInitialized('pOM') && null !== $object->getPOM()) {
                $data['POM'] = $this->normalizer->normalize($object->getPOM(), 'json', $context);
            }
            if ($object->isInitialized('pickupInstructions') && null !== $object->getPickupInstructions()) {
                $data['PickupInstructions'] = $object->getPickupInstructions();
            }
            if ($object->isInitialized('additionalComments') && null !== $object->getAdditionalComments()) {
                $data['AdditionalComments'] = $object->getAdditionalComments();
            }
            if ($object->isInitialized('handlingInstructions') && null !== $object->getHandlingInstructions()) {
                $data['HandlingInstructions'] = $object->getHandlingInstructions();
            }
            if ($object->isInitialized('specialInstructions') && null !== $object->getSpecialInstructions()) {
                $data['SpecialInstructions'] = $object->getSpecialInstructions();
            }
            if ($object->isInitialized('deliveryInstructions') && null !== $object->getDeliveryInstructions()) {
                $data['DeliveryInstructions'] = $object->getDeliveryInstructions();
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
            return ['ShipStream\\Ups\\Api\\Model\\FreightPickupRequest' => false];
        }
    }
}