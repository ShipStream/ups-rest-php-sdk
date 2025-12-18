<?php

namespace ShipStream\Ups\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ShipStream\Ups\Api\Runtime\Normalizer\CheckArray;
use ShipStream\Ups\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ShipmentServiceOptionsNotificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ShipmentServiceOptionsNotification::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ShipmentServiceOptionsNotification::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ShipmentServiceOptionsNotification();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('NotificationCode', $data)) {
            $object->setNotificationCode($data['NotificationCode']);
            unset($data['NotificationCode']);
        }
        if (\array_key_exists('EMail', $data)) {
            $object->setEMail($this->denormalizer->denormalize($data['EMail'], \ShipStream\Ups\Api\Model\NotificationEMail::class, 'json', $context));
            unset($data['EMail']);
        }
        if (\array_key_exists('VoiceMessage', $data)) {
            $object->setVoiceMessage($this->denormalizer->denormalize($data['VoiceMessage'], \ShipStream\Ups\Api\Model\NotificationVoiceMessage::class, 'json', $context));
            unset($data['VoiceMessage']);
        }
        if (\array_key_exists('TextMessage', $data)) {
            $object->setTextMessage($this->denormalizer->denormalize($data['TextMessage'], \ShipStream\Ups\Api\Model\NotificationTextMessage::class, 'json', $context));
            unset($data['TextMessage']);
        }
        if (\array_key_exists('Locale', $data)) {
            $object->setLocale($this->denormalizer->denormalize($data['Locale'], \ShipStream\Ups\Api\Model\NotificationLocale::class, 'json', $context));
            unset($data['Locale']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['NotificationCode'] = $data->getNotificationCode();
        $dataArray['EMail'] = $this->normalizer->normalize($data->getEMail(), 'json', $context);
        if ($data->isInitialized('voiceMessage') && null !== $data->getVoiceMessage()) {
            $dataArray['VoiceMessage'] = $this->normalizer->normalize($data->getVoiceMessage(), 'json', $context);
        }
        if ($data->isInitialized('textMessage') && null !== $data->getTextMessage()) {
            $dataArray['TextMessage'] = $this->normalizer->normalize($data->getTextMessage(), 'json', $context);
        }
        if ($data->isInitialized('locale') && null !== $data->getLocale()) {
            $dataArray['Locale'] = $this->normalizer->normalize($data->getLocale(), 'json', $context);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\ShipmentServiceOptionsNotification::class => false];
    }
}