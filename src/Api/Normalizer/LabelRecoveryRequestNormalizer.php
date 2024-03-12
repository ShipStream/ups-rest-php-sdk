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
    class LabelRecoveryRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\LabelRecoveryRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Request', $data)) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            if (\array_key_exists('LabelSpecification', $data)) {
                $object->setLabelSpecification($this->denormalizer->denormalize($data['LabelSpecification'], 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryRequestLabelSpecification', 'json', $context));
                unset($data['LabelSpecification']);
            }
            if (\array_key_exists('Translate', $data)) {
                $object->setTranslate($this->denormalizer->denormalize($data['Translate'], 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryRequestTranslate', 'json', $context));
                unset($data['Translate']);
            }
            if (\array_key_exists('LabelDelivery', $data)) {
                $object->setLabelDelivery($this->denormalizer->denormalize($data['LabelDelivery'], 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryRequestLabelDelivery', 'json', $context));
                unset($data['LabelDelivery']);
            }
            if (\array_key_exists('TrackingNumber', $data)) {
                $object->setTrackingNumber($data['TrackingNumber']);
                unset($data['TrackingNumber']);
            }
            if (\array_key_exists('MailInnovationsTrackingNumber', $data)) {
                $object->setMailInnovationsTrackingNumber($data['MailInnovationsTrackingNumber']);
                unset($data['MailInnovationsTrackingNumber']);
            }
            if (\array_key_exists('ReferenceValues', $data)) {
                $object->setReferenceValues($this->denormalizer->denormalize($data['ReferenceValues'], 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryRequestReferenceValues', 'json', $context));
                unset($data['ReferenceValues']);
            }
            if (\array_key_exists('Locale', $data)) {
                $object->setLocale($data['Locale']);
                unset($data['Locale']);
            }
            if (\array_key_exists('UPSPremiumCareForm', $data)) {
                $object->setUPSPremiumCareForm($this->denormalizer->denormalize($data['UPSPremiumCareForm'], 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryRequestUPSPremiumCareForm', 'json', $context));
                unset($data['UPSPremiumCareForm']);
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
            if ($object->isInitialized('labelSpecification') && null !== $object->getLabelSpecification()) {
                $data['LabelSpecification'] = $this->normalizer->normalize($object->getLabelSpecification(), 'json', $context);
            }
            if ($object->isInitialized('translate') && null !== $object->getTranslate()) {
                $data['Translate'] = $this->normalizer->normalize($object->getTranslate(), 'json', $context);
            }
            if ($object->isInitialized('labelDelivery') && null !== $object->getLabelDelivery()) {
                $data['LabelDelivery'] = $this->normalizer->normalize($object->getLabelDelivery(), 'json', $context);
            }
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['TrackingNumber'] = $object->getTrackingNumber();
            }
            if ($object->isInitialized('mailInnovationsTrackingNumber') && null !== $object->getMailInnovationsTrackingNumber()) {
                $data['MailInnovationsTrackingNumber'] = $object->getMailInnovationsTrackingNumber();
            }
            if ($object->isInitialized('referenceValues') && null !== $object->getReferenceValues()) {
                $data['ReferenceValues'] = $this->normalizer->normalize($object->getReferenceValues(), 'json', $context);
            }
            if ($object->isInitialized('locale') && null !== $object->getLocale()) {
                $data['Locale'] = $object->getLocale();
            }
            if ($object->isInitialized('uPSPremiumCareForm') && null !== $object->getUPSPremiumCareForm()) {
                $data['UPSPremiumCareForm'] = $this->normalizer->normalize($object->getUPSPremiumCareForm(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\LabelRecoveryRequest' => false];
        }
    }
} else {
    class LabelRecoveryRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryRequest';
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
            $object = new \ShipStream\Ups\Api\Model\LabelRecoveryRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Request', $data)) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            if (\array_key_exists('LabelSpecification', $data)) {
                $object->setLabelSpecification($this->denormalizer->denormalize($data['LabelSpecification'], 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryRequestLabelSpecification', 'json', $context));
                unset($data['LabelSpecification']);
            }
            if (\array_key_exists('Translate', $data)) {
                $object->setTranslate($this->denormalizer->denormalize($data['Translate'], 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryRequestTranslate', 'json', $context));
                unset($data['Translate']);
            }
            if (\array_key_exists('LabelDelivery', $data)) {
                $object->setLabelDelivery($this->denormalizer->denormalize($data['LabelDelivery'], 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryRequestLabelDelivery', 'json', $context));
                unset($data['LabelDelivery']);
            }
            if (\array_key_exists('TrackingNumber', $data)) {
                $object->setTrackingNumber($data['TrackingNumber']);
                unset($data['TrackingNumber']);
            }
            if (\array_key_exists('MailInnovationsTrackingNumber', $data)) {
                $object->setMailInnovationsTrackingNumber($data['MailInnovationsTrackingNumber']);
                unset($data['MailInnovationsTrackingNumber']);
            }
            if (\array_key_exists('ReferenceValues', $data)) {
                $object->setReferenceValues($this->denormalizer->denormalize($data['ReferenceValues'], 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryRequestReferenceValues', 'json', $context));
                unset($data['ReferenceValues']);
            }
            if (\array_key_exists('Locale', $data)) {
                $object->setLocale($data['Locale']);
                unset($data['Locale']);
            }
            if (\array_key_exists('UPSPremiumCareForm', $data)) {
                $object->setUPSPremiumCareForm($this->denormalizer->denormalize($data['UPSPremiumCareForm'], 'ShipStream\\Ups\\Api\\Model\\LabelRecoveryRequestUPSPremiumCareForm', 'json', $context));
                unset($data['UPSPremiumCareForm']);
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
            if ($object->isInitialized('labelSpecification') && null !== $object->getLabelSpecification()) {
                $data['LabelSpecification'] = $this->normalizer->normalize($object->getLabelSpecification(), 'json', $context);
            }
            if ($object->isInitialized('translate') && null !== $object->getTranslate()) {
                $data['Translate'] = $this->normalizer->normalize($object->getTranslate(), 'json', $context);
            }
            if ($object->isInitialized('labelDelivery') && null !== $object->getLabelDelivery()) {
                $data['LabelDelivery'] = $this->normalizer->normalize($object->getLabelDelivery(), 'json', $context);
            }
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['TrackingNumber'] = $object->getTrackingNumber();
            }
            if ($object->isInitialized('mailInnovationsTrackingNumber') && null !== $object->getMailInnovationsTrackingNumber()) {
                $data['MailInnovationsTrackingNumber'] = $object->getMailInnovationsTrackingNumber();
            }
            if ($object->isInitialized('referenceValues') && null !== $object->getReferenceValues()) {
                $data['ReferenceValues'] = $this->normalizer->normalize($object->getReferenceValues(), 'json', $context);
            }
            if ($object->isInitialized('locale') && null !== $object->getLocale()) {
                $data['Locale'] = $object->getLocale();
            }
            if ($object->isInitialized('uPSPremiumCareForm') && null !== $object->getUPSPremiumCareForm()) {
                $data['UPSPremiumCareForm'] = $this->normalizer->normalize($object->getUPSPremiumCareForm(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\LabelRecoveryRequest' => false];
        }
    }
}