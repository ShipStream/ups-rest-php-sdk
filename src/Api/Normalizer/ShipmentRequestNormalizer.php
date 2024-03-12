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
    class ShipmentRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\ShipmentRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Request', $data)) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\ShipmentRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            if (\array_key_exists('Shipment', $data)) {
                $object->setShipment($this->denormalizer->denormalize($data['Shipment'], 'ShipStream\\Ups\\Api\\Model\\ShipmentRequestShipment', 'json', $context));
                unset($data['Shipment']);
            }
            if (\array_key_exists('LabelSpecification', $data)) {
                $object->setLabelSpecification($this->denormalizer->denormalize($data['LabelSpecification'], 'ShipStream\\Ups\\Api\\Model\\ShipmentRequestLabelSpecification', 'json', $context));
                unset($data['LabelSpecification']);
            }
            if (\array_key_exists('ReceiptSpecification', $data)) {
                $object->setReceiptSpecification($this->denormalizer->denormalize($data['ReceiptSpecification'], 'ShipStream\\Ups\\Api\\Model\\ShipmentRequestReceiptSpecification', 'json', $context));
                unset($data['ReceiptSpecification']);
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
            $data['Request'] = $this->normalizer->normalize($object->getRequest(), 'json', $context);
            $data['Shipment'] = $this->normalizer->normalize($object->getShipment(), 'json', $context);
            if ($object->isInitialized('labelSpecification') && null !== $object->getLabelSpecification()) {
                $data['LabelSpecification'] = $this->normalizer->normalize($object->getLabelSpecification(), 'json', $context);
            }
            if ($object->isInitialized('receiptSpecification') && null !== $object->getReceiptSpecification()) {
                $data['ReceiptSpecification'] = $this->normalizer->normalize($object->getReceiptSpecification(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentRequest' => false];
        }
    }
} else {
    class ShipmentRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentRequest';
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
            $object = new \ShipStream\Ups\Api\Model\ShipmentRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Request', $data)) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\ShipmentRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            if (\array_key_exists('Shipment', $data)) {
                $object->setShipment($this->denormalizer->denormalize($data['Shipment'], 'ShipStream\\Ups\\Api\\Model\\ShipmentRequestShipment', 'json', $context));
                unset($data['Shipment']);
            }
            if (\array_key_exists('LabelSpecification', $data)) {
                $object->setLabelSpecification($this->denormalizer->denormalize($data['LabelSpecification'], 'ShipStream\\Ups\\Api\\Model\\ShipmentRequestLabelSpecification', 'json', $context));
                unset($data['LabelSpecification']);
            }
            if (\array_key_exists('ReceiptSpecification', $data)) {
                $object->setReceiptSpecification($this->denormalizer->denormalize($data['ReceiptSpecification'], 'ShipStream\\Ups\\Api\\Model\\ShipmentRequestReceiptSpecification', 'json', $context));
                unset($data['ReceiptSpecification']);
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
            $data['Request'] = $this->normalizer->normalize($object->getRequest(), 'json', $context);
            $data['Shipment'] = $this->normalizer->normalize($object->getShipment(), 'json', $context);
            if ($object->isInitialized('labelSpecification') && null !== $object->getLabelSpecification()) {
                $data['LabelSpecification'] = $this->normalizer->normalize($object->getLabelSpecification(), 'json', $context);
            }
            if ($object->isInitialized('receiptSpecification') && null !== $object->getReceiptSpecification()) {
                $data['ReceiptSpecification'] = $this->normalizer->normalize($object->getReceiptSpecification(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentRequest' => false];
        }
    }
}