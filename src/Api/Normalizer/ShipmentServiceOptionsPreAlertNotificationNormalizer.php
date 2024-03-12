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
    class ShipmentServiceOptionsPreAlertNotificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsPreAlertNotification';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsPreAlertNotification';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\ShipmentServiceOptionsPreAlertNotification();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('EMailMessage', $data)) {
                $object->setEMailMessage($this->denormalizer->denormalize($data['EMailMessage'], 'ShipStream\\Ups\\Api\\Model\\PreAlertNotificationEMailMessage', 'json', $context));
                unset($data['EMailMessage']);
            }
            if (\array_key_exists('VoiceMessage', $data)) {
                $object->setVoiceMessage($this->denormalizer->denormalize($data['VoiceMessage'], 'ShipStream\\Ups\\Api\\Model\\PreAlertNotificationVoiceMessage', 'json', $context));
                unset($data['VoiceMessage']);
            }
            if (\array_key_exists('TextMessage', $data)) {
                $object->setTextMessage($this->denormalizer->denormalize($data['TextMessage'], 'ShipStream\\Ups\\Api\\Model\\PreAlertNotificationTextMessage', 'json', $context));
                unset($data['TextMessage']);
            }
            if (\array_key_exists('Locale', $data)) {
                $object->setLocale($this->denormalizer->denormalize($data['Locale'], 'ShipStream\\Ups\\Api\\Model\\PreAlertNotificationLocale', 'json', $context));
                unset($data['Locale']);
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
            if ($object->isInitialized('eMailMessage') && null !== $object->getEMailMessage()) {
                $data['EMailMessage'] = $this->normalizer->normalize($object->getEMailMessage(), 'json', $context);
            }
            if ($object->isInitialized('voiceMessage') && null !== $object->getVoiceMessage()) {
                $data['VoiceMessage'] = $this->normalizer->normalize($object->getVoiceMessage(), 'json', $context);
            }
            if ($object->isInitialized('textMessage') && null !== $object->getTextMessage()) {
                $data['TextMessage'] = $this->normalizer->normalize($object->getTextMessage(), 'json', $context);
            }
            $data['Locale'] = $this->normalizer->normalize($object->getLocale(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsPreAlertNotification' => false];
        }
    }
} else {
    class ShipmentServiceOptionsPreAlertNotificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsPreAlertNotification';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsPreAlertNotification';
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
            $object = new \ShipStream\Ups\Api\Model\ShipmentServiceOptionsPreAlertNotification();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('EMailMessage', $data)) {
                $object->setEMailMessage($this->denormalizer->denormalize($data['EMailMessage'], 'ShipStream\\Ups\\Api\\Model\\PreAlertNotificationEMailMessage', 'json', $context));
                unset($data['EMailMessage']);
            }
            if (\array_key_exists('VoiceMessage', $data)) {
                $object->setVoiceMessage($this->denormalizer->denormalize($data['VoiceMessage'], 'ShipStream\\Ups\\Api\\Model\\PreAlertNotificationVoiceMessage', 'json', $context));
                unset($data['VoiceMessage']);
            }
            if (\array_key_exists('TextMessage', $data)) {
                $object->setTextMessage($this->denormalizer->denormalize($data['TextMessage'], 'ShipStream\\Ups\\Api\\Model\\PreAlertNotificationTextMessage', 'json', $context));
                unset($data['TextMessage']);
            }
            if (\array_key_exists('Locale', $data)) {
                $object->setLocale($this->denormalizer->denormalize($data['Locale'], 'ShipStream\\Ups\\Api\\Model\\PreAlertNotificationLocale', 'json', $context));
                unset($data['Locale']);
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
            if ($object->isInitialized('eMailMessage') && null !== $object->getEMailMessage()) {
                $data['EMailMessage'] = $this->normalizer->normalize($object->getEMailMessage(), 'json', $context);
            }
            if ($object->isInitialized('voiceMessage') && null !== $object->getVoiceMessage()) {
                $data['VoiceMessage'] = $this->normalizer->normalize($object->getVoiceMessage(), 'json', $context);
            }
            if ($object->isInitialized('textMessage') && null !== $object->getTextMessage()) {
                $data['TextMessage'] = $this->normalizer->normalize($object->getTextMessage(), 'json', $context);
            }
            $data['Locale'] = $this->normalizer->normalize($object->getLocale(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsPreAlertNotification' => false];
        }
    }
}