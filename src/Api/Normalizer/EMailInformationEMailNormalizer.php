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
    class EMailInformationEMailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\EMailInformationEMail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\EMailInformationEMail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\EMailInformationEMail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('EMailAddress', $data) && $data['EMailAddress'] !== null) {
                $object->setEMailAddress($data['EMailAddress']);
                unset($data['EMailAddress']);
            }
            elseif (\array_key_exists('EMailAddress', $data) && $data['EMailAddress'] === null) {
                $object->setEMailAddress(null);
            }
            if (\array_key_exists('EMailText', $data) && $data['EMailText'] !== null) {
                $object->setEMailText($data['EMailText']);
                unset($data['EMailText']);
            }
            elseif (\array_key_exists('EMailText', $data) && $data['EMailText'] === null) {
                $object->setEMailText(null);
            }
            if (\array_key_exists('UndeliverableEMailAddress', $data) && $data['UndeliverableEMailAddress'] !== null) {
                $object->setUndeliverableEMailAddress($data['UndeliverableEMailAddress']);
                unset($data['UndeliverableEMailAddress']);
            }
            elseif (\array_key_exists('UndeliverableEMailAddress', $data) && $data['UndeliverableEMailAddress'] === null) {
                $object->setUndeliverableEMailAddress(null);
            }
            if (\array_key_exists('Subject', $data) && $data['Subject'] !== null) {
                $object->setSubject($data['Subject']);
                unset($data['Subject']);
            }
            elseif (\array_key_exists('Subject', $data) && $data['Subject'] === null) {
                $object->setSubject(null);
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
            $data['EMailAddress'] = $object->getEMailAddress();
            if ($object->isInitialized('eMailText') && null !== $object->getEMailText()) {
                $data['EMailText'] = $object->getEMailText();
            }
            $data['UndeliverableEMailAddress'] = $object->getUndeliverableEMailAddress();
            if ($object->isInitialized('subject') && null !== $object->getSubject()) {
                $data['Subject'] = $object->getSubject();
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
            return ['ShipStream\\Ups\\Api\\Model\\EMailInformationEMail' => false];
        }
    }
} else {
    class EMailInformationEMailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\EMailInformationEMail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\EMailInformationEMail';
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
            $object = new \ShipStream\Ups\Api\Model\EMailInformationEMail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('EMailAddress', $data) && $data['EMailAddress'] !== null) {
                $object->setEMailAddress($data['EMailAddress']);
                unset($data['EMailAddress']);
            }
            elseif (\array_key_exists('EMailAddress', $data) && $data['EMailAddress'] === null) {
                $object->setEMailAddress(null);
            }
            if (\array_key_exists('EMailText', $data) && $data['EMailText'] !== null) {
                $object->setEMailText($data['EMailText']);
                unset($data['EMailText']);
            }
            elseif (\array_key_exists('EMailText', $data) && $data['EMailText'] === null) {
                $object->setEMailText(null);
            }
            if (\array_key_exists('UndeliverableEMailAddress', $data) && $data['UndeliverableEMailAddress'] !== null) {
                $object->setUndeliverableEMailAddress($data['UndeliverableEMailAddress']);
                unset($data['UndeliverableEMailAddress']);
            }
            elseif (\array_key_exists('UndeliverableEMailAddress', $data) && $data['UndeliverableEMailAddress'] === null) {
                $object->setUndeliverableEMailAddress(null);
            }
            if (\array_key_exists('Subject', $data) && $data['Subject'] !== null) {
                $object->setSubject($data['Subject']);
                unset($data['Subject']);
            }
            elseif (\array_key_exists('Subject', $data) && $data['Subject'] === null) {
                $object->setSubject(null);
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
            $data['EMailAddress'] = $object->getEMailAddress();
            if ($object->isInitialized('eMailText') && null !== $object->getEMailText()) {
                $data['EMailText'] = $object->getEMailText();
            }
            $data['UndeliverableEMailAddress'] = $object->getUndeliverableEMailAddress();
            if ($object->isInitialized('subject') && null !== $object->getSubject()) {
                $data['Subject'] = $object->getSubject();
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
            return ['ShipStream\\Ups\\Api\\Model\\EMailInformationEMail' => false];
        }
    }
}