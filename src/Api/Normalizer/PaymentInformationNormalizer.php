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
    class PaymentInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PaymentInformation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PaymentInformation';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\PaymentInformation();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('amount', $data) && $data['amount'] !== null) {
                $object->setAmount($data['amount']);
                unset($data['amount']);
            }
            elseif (\array_key_exists('amount', $data) && $data['amount'] === null) {
                $object->setAmount(null);
            }
            if (\array_key_exists('currency', $data) && $data['currency'] !== null) {
                $object->setCurrency($data['currency']);
                unset($data['currency']);
            }
            elseif (\array_key_exists('currency', $data) && $data['currency'] === null) {
                $object->setCurrency(null);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('paid', $data) && $data['paid'] !== null) {
                $object->setPaid($data['paid']);
                unset($data['paid']);
            }
            elseif (\array_key_exists('paid', $data) && $data['paid'] === null) {
                $object->setPaid(null);
            }
            if (\array_key_exists('paymentMethod', $data) && $data['paymentMethod'] !== null) {
                $object->setPaymentMethod($data['paymentMethod']);
                unset($data['paymentMethod']);
            }
            elseif (\array_key_exists('paymentMethod', $data) && $data['paymentMethod'] === null) {
                $object->setPaymentMethod(null);
            }
            if (\array_key_exists('type', $data) && $data['type'] !== null) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            elseif (\array_key_exists('type', $data) && $data['type'] === null) {
                $object->setType(null);
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
            if ($object->isInitialized('amount') && null !== $object->getAmount()) {
                $data['amount'] = $object->getAmount();
            }
            if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
                $data['currency'] = $object->getCurrency();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('paid') && null !== $object->getPaid()) {
                $data['paid'] = $object->getPaid();
            }
            if ($object->isInitialized('paymentMethod') && null !== $object->getPaymentMethod()) {
                $data['paymentMethod'] = $object->getPaymentMethod();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
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
            return ['ShipStream\\Ups\\Api\\Model\\PaymentInformation' => false];
        }
    }
} else {
    class PaymentInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PaymentInformation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PaymentInformation';
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
            $object = new \ShipStream\Ups\Api\Model\PaymentInformation();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('amount', $data) && $data['amount'] !== null) {
                $object->setAmount($data['amount']);
                unset($data['amount']);
            }
            elseif (\array_key_exists('amount', $data) && $data['amount'] === null) {
                $object->setAmount(null);
            }
            if (\array_key_exists('currency', $data) && $data['currency'] !== null) {
                $object->setCurrency($data['currency']);
                unset($data['currency']);
            }
            elseif (\array_key_exists('currency', $data) && $data['currency'] === null) {
                $object->setCurrency(null);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('paid', $data) && $data['paid'] !== null) {
                $object->setPaid($data['paid']);
                unset($data['paid']);
            }
            elseif (\array_key_exists('paid', $data) && $data['paid'] === null) {
                $object->setPaid(null);
            }
            if (\array_key_exists('paymentMethod', $data) && $data['paymentMethod'] !== null) {
                $object->setPaymentMethod($data['paymentMethod']);
                unset($data['paymentMethod']);
            }
            elseif (\array_key_exists('paymentMethod', $data) && $data['paymentMethod'] === null) {
                $object->setPaymentMethod(null);
            }
            if (\array_key_exists('type', $data) && $data['type'] !== null) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            elseif (\array_key_exists('type', $data) && $data['type'] === null) {
                $object->setType(null);
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
            if ($object->isInitialized('amount') && null !== $object->getAmount()) {
                $data['amount'] = $object->getAmount();
            }
            if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
                $data['currency'] = $object->getCurrency();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('paid') && null !== $object->getPaid()) {
                $data['paid'] = $object->getPaid();
            }
            if ($object->isInitialized('paymentMethod') && null !== $object->getPaymentMethod()) {
                $data['paymentMethod'] = $object->getPaymentMethod();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
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
            return ['ShipStream\\Ups\\Api\\Model\\PaymentInformation' => false];
        }
    }
}