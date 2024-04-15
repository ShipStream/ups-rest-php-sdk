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
    class POMPickupNotificationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\POMPickupNotifications';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\POMPickupNotifications';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\POMPickupNotifications();
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
            if (\array_key_exists('EMailNotification', $data) && $data['EMailNotification'] !== null) {
                $values = [];
                foreach ($data['EMailNotification'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\PickupNotificationsEMailNotification', 'json', $context);
                }
                $object->setEMailNotification($values);
                unset($data['EMailNotification']);
            }
            elseif (\array_key_exists('EMailNotification', $data) && $data['EMailNotification'] === null) {
                $object->setEMailNotification(null);
            }
            if (\array_key_exists('FailedEMail', $data) && $data['FailedEMail'] !== null) {
                $object->setFailedEMail($data['FailedEMail']);
                unset($data['FailedEMail']);
            }
            elseif (\array_key_exists('FailedEMail', $data) && $data['FailedEMail'] === null) {
                $object->setFailedEMail(null);
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
            if ($object->isInitialized('companyName') && null !== $object->getCompanyName()) {
                $data['CompanyName'] = $object->getCompanyName();
            }
            if ($object->isInitialized('eMailNotification') && null !== $object->getEMailNotification()) {
                $values = [];
                foreach ($object->getEMailNotification() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['EMailNotification'] = $values;
            }
            if ($object->isInitialized('failedEMail') && null !== $object->getFailedEMail()) {
                $data['FailedEMail'] = $object->getFailedEMail();
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
            return ['ShipStream\\Ups\\Api\\Model\\POMPickupNotifications' => false];
        }
    }
} else {
    class POMPickupNotificationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\POMPickupNotifications';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\POMPickupNotifications';
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
            $object = new \ShipStream\Ups\Api\Model\POMPickupNotifications();
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
            if (\array_key_exists('EMailNotification', $data) && $data['EMailNotification'] !== null) {
                $values = [];
                foreach ($data['EMailNotification'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\PickupNotificationsEMailNotification', 'json', $context);
                }
                $object->setEMailNotification($values);
                unset($data['EMailNotification']);
            }
            elseif (\array_key_exists('EMailNotification', $data) && $data['EMailNotification'] === null) {
                $object->setEMailNotification(null);
            }
            if (\array_key_exists('FailedEMail', $data) && $data['FailedEMail'] !== null) {
                $object->setFailedEMail($data['FailedEMail']);
                unset($data['FailedEMail']);
            }
            elseif (\array_key_exists('FailedEMail', $data) && $data['FailedEMail'] === null) {
                $object->setFailedEMail(null);
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
            if ($object->isInitialized('companyName') && null !== $object->getCompanyName()) {
                $data['CompanyName'] = $object->getCompanyName();
            }
            if ($object->isInitialized('eMailNotification') && null !== $object->getEMailNotification()) {
                $values = [];
                foreach ($object->getEMailNotification() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['EMailNotification'] = $values;
            }
            if ($object->isInitialized('failedEMail') && null !== $object->getFailedEMail()) {
                $data['FailedEMail'] = $object->getFailedEMail();
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
            return ['ShipStream\\Ups\\Api\\Model\\POMPickupNotifications' => false];
        }
    }
}