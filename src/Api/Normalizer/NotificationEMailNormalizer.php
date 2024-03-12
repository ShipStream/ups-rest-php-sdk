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
    class NotificationEMailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\NotificationEMail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\NotificationEMail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\NotificationEMail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('EMailAddress', $data)) {
                $values = [];
                foreach ($data['EMailAddress'] as $value) {
                    $values[] = $value;
                }
                $object->setEMailAddress($values);
                unset($data['EMailAddress']);
            }
            if (\array_key_exists('UndeliverableEMailAddress', $data)) {
                $object->setUndeliverableEMailAddress($data['UndeliverableEMailAddress']);
                unset($data['UndeliverableEMailAddress']);
            }
            if (\array_key_exists('FromEMailAddress', $data)) {
                $object->setFromEMailAddress($data['FromEMailAddress']);
                unset($data['FromEMailAddress']);
            }
            if (\array_key_exists('FromName', $data)) {
                $object->setFromName($data['FromName']);
                unset($data['FromName']);
            }
            if (\array_key_exists('Memo', $data)) {
                $object->setMemo($data['Memo']);
                unset($data['Memo']);
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
            $values = [];
            foreach ($object->getEMailAddress() as $value) {
                $values[] = $value;
            }
            $data['EMailAddress'] = $values;
            if ($object->isInitialized('undeliverableEMailAddress') && null !== $object->getUndeliverableEMailAddress()) {
                $data['UndeliverableEMailAddress'] = $object->getUndeliverableEMailAddress();
            }
            if ($object->isInitialized('fromEMailAddress') && null !== $object->getFromEMailAddress()) {
                $data['FromEMailAddress'] = $object->getFromEMailAddress();
            }
            if ($object->isInitialized('fromName') && null !== $object->getFromName()) {
                $data['FromName'] = $object->getFromName();
            }
            if ($object->isInitialized('memo') && null !== $object->getMemo()) {
                $data['Memo'] = $object->getMemo();
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
            return ['ShipStream\\Ups\\Api\\Model\\NotificationEMail' => false];
        }
    }
} else {
    class NotificationEMailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\NotificationEMail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\NotificationEMail';
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
            $object = new \ShipStream\Ups\Api\Model\NotificationEMail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('EMailAddress', $data)) {
                $values = [];
                foreach ($data['EMailAddress'] as $value) {
                    $values[] = $value;
                }
                $object->setEMailAddress($values);
                unset($data['EMailAddress']);
            }
            if (\array_key_exists('UndeliverableEMailAddress', $data)) {
                $object->setUndeliverableEMailAddress($data['UndeliverableEMailAddress']);
                unset($data['UndeliverableEMailAddress']);
            }
            if (\array_key_exists('FromEMailAddress', $data)) {
                $object->setFromEMailAddress($data['FromEMailAddress']);
                unset($data['FromEMailAddress']);
            }
            if (\array_key_exists('FromName', $data)) {
                $object->setFromName($data['FromName']);
                unset($data['FromName']);
            }
            if (\array_key_exists('Memo', $data)) {
                $object->setMemo($data['Memo']);
                unset($data['Memo']);
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
            $values = [];
            foreach ($object->getEMailAddress() as $value) {
                $values[] = $value;
            }
            $data['EMailAddress'] = $values;
            if ($object->isInitialized('undeliverableEMailAddress') && null !== $object->getUndeliverableEMailAddress()) {
                $data['UndeliverableEMailAddress'] = $object->getUndeliverableEMailAddress();
            }
            if ($object->isInitialized('fromEMailAddress') && null !== $object->getFromEMailAddress()) {
                $data['FromEMailAddress'] = $object->getFromEMailAddress();
            }
            if ($object->isInitialized('fromName') && null !== $object->getFromName()) {
                $data['FromName'] = $object->getFromName();
            }
            if ($object->isInitialized('memo') && null !== $object->getMemo()) {
                $data['Memo'] = $object->getMemo();
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
            return ['ShipStream\\Ups\\Api\\Model\\NotificationEMail' => false];
        }
    }
}