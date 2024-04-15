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
    class LabelRecoveryResponseLabelResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponseLabelResults';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponseLabelResults';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\LabelRecoveryResponseLabelResults();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] !== null) {
                $object->setTrackingNumber($data['TrackingNumber']);
                unset($data['TrackingNumber']);
            }
            elseif (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] === null) {
                $object->setTrackingNumber(null);
            }
            if (\array_key_exists('LabelImage', $data) && $data['LabelImage'] !== null) {
                $object->setLabelImage($this->denormalizer->denormalize($data['LabelImage'], 'ShipStream\\Ups\\Api\\Model\\LabelResultsLabelImage', 'json', $context));
                unset($data['LabelImage']);
            }
            elseif (\array_key_exists('LabelImage', $data) && $data['LabelImage'] === null) {
                $object->setLabelImage(null);
            }
            if (\array_key_exists('MailInnovationsTrackingNumber', $data) && $data['MailInnovationsTrackingNumber'] !== null) {
                $object->setMailInnovationsTrackingNumber($data['MailInnovationsTrackingNumber']);
                unset($data['MailInnovationsTrackingNumber']);
            }
            elseif (\array_key_exists('MailInnovationsTrackingNumber', $data) && $data['MailInnovationsTrackingNumber'] === null) {
                $object->setMailInnovationsTrackingNumber(null);
            }
            if (\array_key_exists('MailInnovationsLabelImage', $data) && $data['MailInnovationsLabelImage'] !== null) {
                $object->setMailInnovationsLabelImage($this->denormalizer->denormalize($data['MailInnovationsLabelImage'], 'ShipStream\\Ups\\Api\\Model\\LabelResultsMailInnovationsLabelImage', 'json', $context));
                unset($data['MailInnovationsLabelImage']);
            }
            elseif (\array_key_exists('MailInnovationsLabelImage', $data) && $data['MailInnovationsLabelImage'] === null) {
                $object->setMailInnovationsLabelImage(null);
            }
            if (\array_key_exists('Receipt', $data) && $data['Receipt'] !== null) {
                $object->setReceipt($this->denormalizer->denormalize($data['Receipt'], 'ShipStream\\Ups\\Api\\Model\\LabelResultsReceipt', 'json', $context));
                unset($data['Receipt']);
            }
            elseif (\array_key_exists('Receipt', $data) && $data['Receipt'] === null) {
                $object->setReceipt(null);
            }
            if (\array_key_exists('Form', $data) && $data['Form'] !== null) {
                $object->setForm($this->denormalizer->denormalize($data['Form'], 'ShipStream\\Ups\\Api\\Model\\LabelResultsForm', 'json', $context));
                unset($data['Form']);
            }
            elseif (\array_key_exists('Form', $data) && $data['Form'] === null) {
                $object->setForm(null);
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
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['TrackingNumber'] = $object->getTrackingNumber();
            }
            if ($object->isInitialized('labelImage') && null !== $object->getLabelImage()) {
                $data['LabelImage'] = $this->normalizer->normalize($object->getLabelImage(), 'json', $context);
            }
            if ($object->isInitialized('mailInnovationsTrackingNumber') && null !== $object->getMailInnovationsTrackingNumber()) {
                $data['MailInnovationsTrackingNumber'] = $object->getMailInnovationsTrackingNumber();
            }
            if ($object->isInitialized('mailInnovationsLabelImage') && null !== $object->getMailInnovationsLabelImage()) {
                $data['MailInnovationsLabelImage'] = $this->normalizer->normalize($object->getMailInnovationsLabelImage(), 'json', $context);
            }
            if ($object->isInitialized('receipt') && null !== $object->getReceipt()) {
                $data['Receipt'] = $this->normalizer->normalize($object->getReceipt(), 'json', $context);
            }
            if ($object->isInitialized('form') && null !== $object->getForm()) {
                $data['Form'] = $this->normalizer->normalize($object->getForm(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponseLabelResults' => false];
        }
    }
} else {
    class LabelRecoveryResponseLabelResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponseLabelResults';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponseLabelResults';
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
            $object = new \ShipStream\Ups\Api\Model\LabelRecoveryResponseLabelResults();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] !== null) {
                $object->setTrackingNumber($data['TrackingNumber']);
                unset($data['TrackingNumber']);
            }
            elseif (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] === null) {
                $object->setTrackingNumber(null);
            }
            if (\array_key_exists('LabelImage', $data) && $data['LabelImage'] !== null) {
                $object->setLabelImage($this->denormalizer->denormalize($data['LabelImage'], 'ShipStream\\Ups\\Api\\Model\\LabelResultsLabelImage', 'json', $context));
                unset($data['LabelImage']);
            }
            elseif (\array_key_exists('LabelImage', $data) && $data['LabelImage'] === null) {
                $object->setLabelImage(null);
            }
            if (\array_key_exists('MailInnovationsTrackingNumber', $data) && $data['MailInnovationsTrackingNumber'] !== null) {
                $object->setMailInnovationsTrackingNumber($data['MailInnovationsTrackingNumber']);
                unset($data['MailInnovationsTrackingNumber']);
            }
            elseif (\array_key_exists('MailInnovationsTrackingNumber', $data) && $data['MailInnovationsTrackingNumber'] === null) {
                $object->setMailInnovationsTrackingNumber(null);
            }
            if (\array_key_exists('MailInnovationsLabelImage', $data) && $data['MailInnovationsLabelImage'] !== null) {
                $object->setMailInnovationsLabelImage($this->denormalizer->denormalize($data['MailInnovationsLabelImage'], 'ShipStream\\Ups\\Api\\Model\\LabelResultsMailInnovationsLabelImage', 'json', $context));
                unset($data['MailInnovationsLabelImage']);
            }
            elseif (\array_key_exists('MailInnovationsLabelImage', $data) && $data['MailInnovationsLabelImage'] === null) {
                $object->setMailInnovationsLabelImage(null);
            }
            if (\array_key_exists('Receipt', $data) && $data['Receipt'] !== null) {
                $object->setReceipt($this->denormalizer->denormalize($data['Receipt'], 'ShipStream\\Ups\\Api\\Model\\LabelResultsReceipt', 'json', $context));
                unset($data['Receipt']);
            }
            elseif (\array_key_exists('Receipt', $data) && $data['Receipt'] === null) {
                $object->setReceipt(null);
            }
            if (\array_key_exists('Form', $data) && $data['Form'] !== null) {
                $object->setForm($this->denormalizer->denormalize($data['Form'], 'ShipStream\\Ups\\Api\\Model\\LabelResultsForm', 'json', $context));
                unset($data['Form']);
            }
            elseif (\array_key_exists('Form', $data) && $data['Form'] === null) {
                $object->setForm(null);
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
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['TrackingNumber'] = $object->getTrackingNumber();
            }
            if ($object->isInitialized('labelImage') && null !== $object->getLabelImage()) {
                $data['LabelImage'] = $this->normalizer->normalize($object->getLabelImage(), 'json', $context);
            }
            if ($object->isInitialized('mailInnovationsTrackingNumber') && null !== $object->getMailInnovationsTrackingNumber()) {
                $data['MailInnovationsTrackingNumber'] = $object->getMailInnovationsTrackingNumber();
            }
            if ($object->isInitialized('mailInnovationsLabelImage') && null !== $object->getMailInnovationsLabelImage()) {
                $data['MailInnovationsLabelImage'] = $this->normalizer->normalize($object->getMailInnovationsLabelImage(), 'json', $context);
            }
            if ($object->isInitialized('receipt') && null !== $object->getReceipt()) {
                $data['Receipt'] = $this->normalizer->normalize($object->getReceipt(), 'json', $context);
            }
            if ($object->isInitialized('form') && null !== $object->getForm()) {
                $data['Form'] = $this->normalizer->normalize($object->getForm(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\LabelRecoveryResponseLabelResults' => false];
        }
    }
}