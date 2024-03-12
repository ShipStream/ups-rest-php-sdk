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
    class InternationalFormsEEIFilingOptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\InternationalFormsEEIFilingOption';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\InternationalFormsEEIFilingOption';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\InternationalFormsEEIFilingOption();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Code', $data)) {
                $object->setCode($data['Code']);
                unset($data['Code']);
            }
            if (\array_key_exists('EMailAddress', $data)) {
                $object->setEMailAddress($data['EMailAddress']);
                unset($data['EMailAddress']);
            }
            if (\array_key_exists('Description', $data)) {
                $object->setDescription($data['Description']);
                unset($data['Description']);
            }
            if (\array_key_exists('UPSFiled', $data)) {
                $object->setUPSFiled($this->denormalizer->denormalize($data['UPSFiled'], 'ShipStream\\Ups\\Api\\Model\\EEIFilingOptionUPSFiled', 'json', $context));
                unset($data['UPSFiled']);
            }
            if (\array_key_exists('ShipperFiled', $data)) {
                $object->setShipperFiled($this->denormalizer->denormalize($data['ShipperFiled'], 'ShipStream\\Ups\\Api\\Model\\EEIFilingOptionShipperFiled', 'json', $context));
                unset($data['ShipperFiled']);
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
            $data['Code'] = $object->getCode();
            if ($object->isInitialized('eMailAddress') && null !== $object->getEMailAddress()) {
                $data['EMailAddress'] = $object->getEMailAddress();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['Description'] = $object->getDescription();
            }
            if ($object->isInitialized('uPSFiled') && null !== $object->getUPSFiled()) {
                $data['UPSFiled'] = $this->normalizer->normalize($object->getUPSFiled(), 'json', $context);
            }
            if ($object->isInitialized('shipperFiled') && null !== $object->getShipperFiled()) {
                $data['ShipperFiled'] = $this->normalizer->normalize($object->getShipperFiled(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\InternationalFormsEEIFilingOption' => false];
        }
    }
} else {
    class InternationalFormsEEIFilingOptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\InternationalFormsEEIFilingOption';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\InternationalFormsEEIFilingOption';
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
            $object = new \ShipStream\Ups\Api\Model\InternationalFormsEEIFilingOption();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Code', $data)) {
                $object->setCode($data['Code']);
                unset($data['Code']);
            }
            if (\array_key_exists('EMailAddress', $data)) {
                $object->setEMailAddress($data['EMailAddress']);
                unset($data['EMailAddress']);
            }
            if (\array_key_exists('Description', $data)) {
                $object->setDescription($data['Description']);
                unset($data['Description']);
            }
            if (\array_key_exists('UPSFiled', $data)) {
                $object->setUPSFiled($this->denormalizer->denormalize($data['UPSFiled'], 'ShipStream\\Ups\\Api\\Model\\EEIFilingOptionUPSFiled', 'json', $context));
                unset($data['UPSFiled']);
            }
            if (\array_key_exists('ShipperFiled', $data)) {
                $object->setShipperFiled($this->denormalizer->denormalize($data['ShipperFiled'], 'ShipStream\\Ups\\Api\\Model\\EEIFilingOptionShipperFiled', 'json', $context));
                unset($data['ShipperFiled']);
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
            $data['Code'] = $object->getCode();
            if ($object->isInitialized('eMailAddress') && null !== $object->getEMailAddress()) {
                $data['EMailAddress'] = $object->getEMailAddress();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['Description'] = $object->getDescription();
            }
            if ($object->isInitialized('uPSFiled') && null !== $object->getUPSFiled()) {
                $data['UPSFiled'] = $this->normalizer->normalize($object->getUPSFiled(), 'json', $context);
            }
            if ($object->isInitialized('shipperFiled') && null !== $object->getShipperFiled()) {
                $data['ShipperFiled'] = $this->normalizer->normalize($object->getShipperFiled(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\InternationalFormsEEIFilingOption' => false];
        }
    }
}