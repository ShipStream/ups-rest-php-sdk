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
    class FreightShipmentInformationFreightDensityInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightShipmentInformationFreightDensityInfo';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightShipmentInformationFreightDensityInfo';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\FreightShipmentInformationFreightDensityInfo();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('AdjustedHeightIndicator', $data)) {
                $object->setAdjustedHeightIndicator($data['AdjustedHeightIndicator']);
                unset($data['AdjustedHeightIndicator']);
            }
            if (\array_key_exists('AdjustedHeight', $data)) {
                $object->setAdjustedHeight($this->denormalizer->denormalize($data['AdjustedHeight'], 'ShipStream\\Ups\\Api\\Model\\FreightDensityInfoAdjustedHeight', 'json', $context));
                unset($data['AdjustedHeight']);
            }
            if (\array_key_exists('HandlingUnits', $data)) {
                $values = [];
                foreach ($data['HandlingUnits'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\FreightDensityInfoHandlingUnits', 'json', $context);
                }
                $object->setHandlingUnits($values);
                unset($data['HandlingUnits']);
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
            if ($object->isInitialized('adjustedHeightIndicator') && null !== $object->getAdjustedHeightIndicator()) {
                $data['AdjustedHeightIndicator'] = $object->getAdjustedHeightIndicator();
            }
            if ($object->isInitialized('adjustedHeight') && null !== $object->getAdjustedHeight()) {
                $data['AdjustedHeight'] = $this->normalizer->normalize($object->getAdjustedHeight(), 'json', $context);
            }
            if ($object->isInitialized('handlingUnits') && null !== $object->getHandlingUnits()) {
                $values = [];
                foreach ($object->getHandlingUnits() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['HandlingUnits'] = $values;
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
            return ['ShipStream\\Ups\\Api\\Model\\FreightShipmentInformationFreightDensityInfo' => false];
        }
    }
} else {
    class FreightShipmentInformationFreightDensityInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightShipmentInformationFreightDensityInfo';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightShipmentInformationFreightDensityInfo';
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
            $object = new \ShipStream\Ups\Api\Model\FreightShipmentInformationFreightDensityInfo();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('AdjustedHeightIndicator', $data)) {
                $object->setAdjustedHeightIndicator($data['AdjustedHeightIndicator']);
                unset($data['AdjustedHeightIndicator']);
            }
            if (\array_key_exists('AdjustedHeight', $data)) {
                $object->setAdjustedHeight($this->denormalizer->denormalize($data['AdjustedHeight'], 'ShipStream\\Ups\\Api\\Model\\FreightDensityInfoAdjustedHeight', 'json', $context));
                unset($data['AdjustedHeight']);
            }
            if (\array_key_exists('HandlingUnits', $data)) {
                $values = [];
                foreach ($data['HandlingUnits'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\FreightDensityInfoHandlingUnits', 'json', $context);
                }
                $object->setHandlingUnits($values);
                unset($data['HandlingUnits']);
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
            if ($object->isInitialized('adjustedHeightIndicator') && null !== $object->getAdjustedHeightIndicator()) {
                $data['AdjustedHeightIndicator'] = $object->getAdjustedHeightIndicator();
            }
            if ($object->isInitialized('adjustedHeight') && null !== $object->getAdjustedHeight()) {
                $data['AdjustedHeight'] = $this->normalizer->normalize($object->getAdjustedHeight(), 'json', $context);
            }
            if ($object->isInitialized('handlingUnits') && null !== $object->getHandlingUnits()) {
                $values = [];
                foreach ($object->getHandlingUnits() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['HandlingUnits'] = $values;
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
            return ['ShipStream\\Ups\\Api\\Model\\FreightShipmentInformationFreightDensityInfo' => false];
        }
    }
}