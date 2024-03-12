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
    class ShipperChargeCardNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipperChargeCard';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipperChargeCard';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\ShipperChargeCard();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('CardHolderName', $data)) {
                $object->setCardHolderName($data['CardHolderName']);
                unset($data['CardHolderName']);
            }
            if (\array_key_exists('CardType', $data)) {
                $object->setCardType($data['CardType']);
                unset($data['CardType']);
            }
            if (\array_key_exists('CardNumber', $data)) {
                $object->setCardNumber($data['CardNumber']);
                unset($data['CardNumber']);
            }
            if (\array_key_exists('ExpirationDate', $data)) {
                $object->setExpirationDate($data['ExpirationDate']);
                unset($data['ExpirationDate']);
            }
            if (\array_key_exists('SecurityCode', $data)) {
                $object->setSecurityCode($data['SecurityCode']);
                unset($data['SecurityCode']);
            }
            if (\array_key_exists('CardAddress', $data)) {
                $object->setCardAddress($this->denormalizer->denormalize($data['CardAddress'], 'ShipStream\\Ups\\Api\\Model\\ChargeCardCardAddress', 'json', $context));
                unset($data['CardAddress']);
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
            if ($object->isInitialized('cardHolderName') && null !== $object->getCardHolderName()) {
                $data['CardHolderName'] = $object->getCardHolderName();
            }
            $data['CardType'] = $object->getCardType();
            $data['CardNumber'] = $object->getCardNumber();
            $data['ExpirationDate'] = $object->getExpirationDate();
            $data['SecurityCode'] = $object->getSecurityCode();
            $data['CardAddress'] = $this->normalizer->normalize($object->getCardAddress(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\ShipperChargeCard' => false];
        }
    }
} else {
    class ShipperChargeCardNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipperChargeCard';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipperChargeCard';
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
            $object = new \ShipStream\Ups\Api\Model\ShipperChargeCard();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('CardHolderName', $data)) {
                $object->setCardHolderName($data['CardHolderName']);
                unset($data['CardHolderName']);
            }
            if (\array_key_exists('CardType', $data)) {
                $object->setCardType($data['CardType']);
                unset($data['CardType']);
            }
            if (\array_key_exists('CardNumber', $data)) {
                $object->setCardNumber($data['CardNumber']);
                unset($data['CardNumber']);
            }
            if (\array_key_exists('ExpirationDate', $data)) {
                $object->setExpirationDate($data['ExpirationDate']);
                unset($data['ExpirationDate']);
            }
            if (\array_key_exists('SecurityCode', $data)) {
                $object->setSecurityCode($data['SecurityCode']);
                unset($data['SecurityCode']);
            }
            if (\array_key_exists('CardAddress', $data)) {
                $object->setCardAddress($this->denormalizer->denormalize($data['CardAddress'], 'ShipStream\\Ups\\Api\\Model\\ChargeCardCardAddress', 'json', $context));
                unset($data['CardAddress']);
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
            if ($object->isInitialized('cardHolderName') && null !== $object->getCardHolderName()) {
                $data['CardHolderName'] = $object->getCardHolderName();
            }
            $data['CardType'] = $object->getCardType();
            $data['CardNumber'] = $object->getCardNumber();
            $data['ExpirationDate'] = $object->getExpirationDate();
            $data['SecurityCode'] = $object->getSecurityCode();
            $data['CardAddress'] = $this->normalizer->normalize($object->getCardAddress(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\ShipperChargeCard' => false];
        }
    }
}