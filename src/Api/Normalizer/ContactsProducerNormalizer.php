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
    class ContactsProducerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \ShipStream\Ups\Api\Model\ContactsProducer::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ContactsProducer::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\ContactsProducer();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Option', $data)) {
                $object->setOption($data['Option']);
                unset($data['Option']);
            }
            if (\array_key_exists('CompanyName', $data)) {
                $object->setCompanyName($data['CompanyName']);
                unset($data['CompanyName']);
            }
            if (\array_key_exists('TaxIdentificationNumber', $data)) {
                $object->setTaxIdentificationNumber($data['TaxIdentificationNumber']);
                unset($data['TaxIdentificationNumber']);
            }
            if (\array_key_exists('Address', $data)) {
                $object->setAddress($this->denormalizer->denormalize($data['Address'], \ShipStream\Ups\Api\Model\ProducerAddress::class, 'json', $context));
                unset($data['Address']);
            }
            if (\array_key_exists('AttentionName', $data)) {
                $object->setAttentionName($data['AttentionName']);
                unset($data['AttentionName']);
            }
            if (\array_key_exists('Phone', $data)) {
                $object->setPhone($this->denormalizer->denormalize($data['Phone'], \ShipStream\Ups\Api\Model\ProducerPhone::class, 'json', $context));
                unset($data['Phone']);
            }
            if (\array_key_exists('EMailAddress', $data)) {
                $object->setEMailAddress($data['EMailAddress']);
                unset($data['EMailAddress']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('option') && null !== $object->getOption()) {
                $data['Option'] = $object->getOption();
            }
            if ($object->isInitialized('companyName') && null !== $object->getCompanyName()) {
                $data['CompanyName'] = $object->getCompanyName();
            }
            if ($object->isInitialized('taxIdentificationNumber') && null !== $object->getTaxIdentificationNumber()) {
                $data['TaxIdentificationNumber'] = $object->getTaxIdentificationNumber();
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['Address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
            }
            if ($object->isInitialized('attentionName') && null !== $object->getAttentionName()) {
                $data['AttentionName'] = $object->getAttentionName();
            }
            if ($object->isInitialized('phone') && null !== $object->getPhone()) {
                $data['Phone'] = $this->normalizer->normalize($object->getPhone(), 'json', $context);
            }
            if ($object->isInitialized('eMailAddress') && null !== $object->getEMailAddress()) {
                $data['EMailAddress'] = $object->getEMailAddress();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\ShipStream\Ups\Api\Model\ContactsProducer::class => false];
        }
    }
} else {
    class ContactsProducerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \ShipStream\Ups\Api\Model\ContactsProducer::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ContactsProducer::class;
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
            $object = new \ShipStream\Ups\Api\Model\ContactsProducer();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Option', $data)) {
                $object->setOption($data['Option']);
                unset($data['Option']);
            }
            if (\array_key_exists('CompanyName', $data)) {
                $object->setCompanyName($data['CompanyName']);
                unset($data['CompanyName']);
            }
            if (\array_key_exists('TaxIdentificationNumber', $data)) {
                $object->setTaxIdentificationNumber($data['TaxIdentificationNumber']);
                unset($data['TaxIdentificationNumber']);
            }
            if (\array_key_exists('Address', $data)) {
                $object->setAddress($this->denormalizer->denormalize($data['Address'], \ShipStream\Ups\Api\Model\ProducerAddress::class, 'json', $context));
                unset($data['Address']);
            }
            if (\array_key_exists('AttentionName', $data)) {
                $object->setAttentionName($data['AttentionName']);
                unset($data['AttentionName']);
            }
            if (\array_key_exists('Phone', $data)) {
                $object->setPhone($this->denormalizer->denormalize($data['Phone'], \ShipStream\Ups\Api\Model\ProducerPhone::class, 'json', $context));
                unset($data['Phone']);
            }
            if (\array_key_exists('EMailAddress', $data)) {
                $object->setEMailAddress($data['EMailAddress']);
                unset($data['EMailAddress']);
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
            if ($object->isInitialized('option') && null !== $object->getOption()) {
                $data['Option'] = $object->getOption();
            }
            if ($object->isInitialized('companyName') && null !== $object->getCompanyName()) {
                $data['CompanyName'] = $object->getCompanyName();
            }
            if ($object->isInitialized('taxIdentificationNumber') && null !== $object->getTaxIdentificationNumber()) {
                $data['TaxIdentificationNumber'] = $object->getTaxIdentificationNumber();
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['Address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
            }
            if ($object->isInitialized('attentionName') && null !== $object->getAttentionName()) {
                $data['AttentionName'] = $object->getAttentionName();
            }
            if ($object->isInitialized('phone') && null !== $object->getPhone()) {
                $data['Phone'] = $this->normalizer->normalize($object->getPhone(), 'json', $context);
            }
            if ($object->isInitialized('eMailAddress') && null !== $object->getEMailAddress()) {
                $data['EMailAddress'] = $object->getEMailAddress();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\ShipStream\Ups\Api\Model\ContactsProducer::class => false];
        }
    }
}