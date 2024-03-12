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
    class LabelRecoveryResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponse';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\LabelRecoveryResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Response', $data)) {
                $object->setResponse($this->denormalizer->denormalize($data['Response'], 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponseResponse', 'json', $context));
                unset($data['Response']);
            }
            if (\array_key_exists('ShipmentIdentificationNumber', $data)) {
                $object->setShipmentIdentificationNumber($data['ShipmentIdentificationNumber']);
                unset($data['ShipmentIdentificationNumber']);
            }
            if (\array_key_exists('LabelResults', $data)) {
                $values = [];
                foreach ($data['LabelResults'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponseLabelResults', 'json', $context);
                }
                $object->setLabelResults($values);
                unset($data['LabelResults']);
            }
            if (\array_key_exists('CODTurnInPage', $data)) {
                $object->setCODTurnInPage($this->denormalizer->denormalize($data['CODTurnInPage'], 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponseCODTurnInPage', 'json', $context));
                unset($data['CODTurnInPage']);
            }
            if (\array_key_exists('Form', $data)) {
                $object->setForm($this->denormalizer->denormalize($data['Form'], 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponseForm', 'json', $context));
                unset($data['Form']);
            }
            if (\array_key_exists('HighValueReport', $data)) {
                $object->setHighValueReport($this->denormalizer->denormalize($data['HighValueReport'], 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponseHighValueReport', 'json', $context));
                unset($data['HighValueReport']);
            }
            if (\array_key_exists('TrackingCandidate', $data)) {
                $values_1 = [];
                foreach ($data['TrackingCandidate'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponseTrackingCandidate', 'json', $context);
                }
                $object->setTrackingCandidate($values_1);
                unset($data['TrackingCandidate']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['Response'] = $this->normalizer->normalize($object->getResponse(), 'json', $context);
            if ($object->isInitialized('shipmentIdentificationNumber') && null !== $object->getShipmentIdentificationNumber()) {
                $data['ShipmentIdentificationNumber'] = $object->getShipmentIdentificationNumber();
            }
            $values = [];
            foreach ($object->getLabelResults() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['LabelResults'] = $values;
            if ($object->isInitialized('cODTurnInPage') && null !== $object->getCODTurnInPage()) {
                $data['CODTurnInPage'] = $this->normalizer->normalize($object->getCODTurnInPage(), 'json', $context);
            }
            if ($object->isInitialized('form') && null !== $object->getForm()) {
                $data['Form'] = $this->normalizer->normalize($object->getForm(), 'json', $context);
            }
            if ($object->isInitialized('highValueReport') && null !== $object->getHighValueReport()) {
                $data['HighValueReport'] = $this->normalizer->normalize($object->getHighValueReport(), 'json', $context);
            }
            if ($object->isInitialized('trackingCandidate') && null !== $object->getTrackingCandidate()) {
                $values_1 = [];
                foreach ($object->getTrackingCandidate() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['TrackingCandidate'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponse' => false];
        }
    }
} else {
    class LabelRecoveryResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponse';
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
            $object = new \ShipStream\Ups\Api\Model\LabelRecoveryResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Response', $data)) {
                $object->setResponse($this->denormalizer->denormalize($data['Response'], 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponseResponse', 'json', $context));
                unset($data['Response']);
            }
            if (\array_key_exists('ShipmentIdentificationNumber', $data)) {
                $object->setShipmentIdentificationNumber($data['ShipmentIdentificationNumber']);
                unset($data['ShipmentIdentificationNumber']);
            }
            if (\array_key_exists('LabelResults', $data)) {
                $values = [];
                foreach ($data['LabelResults'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponseLabelResults', 'json', $context);
                }
                $object->setLabelResults($values);
                unset($data['LabelResults']);
            }
            if (\array_key_exists('CODTurnInPage', $data)) {
                $object->setCODTurnInPage($this->denormalizer->denormalize($data['CODTurnInPage'], 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponseCODTurnInPage', 'json', $context));
                unset($data['CODTurnInPage']);
            }
            if (\array_key_exists('Form', $data)) {
                $object->setForm($this->denormalizer->denormalize($data['Form'], 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponseForm', 'json', $context));
                unset($data['Form']);
            }
            if (\array_key_exists('HighValueReport', $data)) {
                $object->setHighValueReport($this->denormalizer->denormalize($data['HighValueReport'], 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponseHighValueReport', 'json', $context));
                unset($data['HighValueReport']);
            }
            if (\array_key_exists('TrackingCandidate', $data)) {
                $values_1 = [];
                foreach ($data['TrackingCandidate'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponseTrackingCandidate', 'json', $context);
                }
                $object->setTrackingCandidate($values_1);
                unset($data['TrackingCandidate']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            $data['Response'] = $this->normalizer->normalize($object->getResponse(), 'json', $context);
            if ($object->isInitialized('shipmentIdentificationNumber') && null !== $object->getShipmentIdentificationNumber()) {
                $data['ShipmentIdentificationNumber'] = $object->getShipmentIdentificationNumber();
            }
            $values = [];
            foreach ($object->getLabelResults() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['LabelResults'] = $values;
            if ($object->isInitialized('cODTurnInPage') && null !== $object->getCODTurnInPage()) {
                $data['CODTurnInPage'] = $this->normalizer->normalize($object->getCODTurnInPage(), 'json', $context);
            }
            if ($object->isInitialized('form') && null !== $object->getForm()) {
                $data['Form'] = $this->normalizer->normalize($object->getForm(), 'json', $context);
            }
            if ($object->isInitialized('highValueReport') && null !== $object->getHighValueReport()) {
                $data['HighValueReport'] = $this->normalizer->normalize($object->getHighValueReport(), 'json', $context);
            }
            if ($object->isInitialized('trackingCandidate') && null !== $object->getTrackingCandidate()) {
                $values_1 = [];
                foreach ($object->getTrackingCandidate() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['TrackingCandidate'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponse' => false];
        }
    }
}