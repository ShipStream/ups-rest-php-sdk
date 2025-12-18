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
class ShipmentServiceOptionsPreAlertNotificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ShipmentServiceOptionsPreAlertNotification::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ShipmentServiceOptionsPreAlertNotification::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
            $object->setEMailMessage($this->denormalizer->denormalize($data['EMailMessage'], \ShipStream\Ups\Api\Model\PreAlertNotificationEMailMessage::class, 'json', $context));
            unset($data['EMailMessage']);
        }
        if (\array_key_exists('VoiceMessage', $data)) {
            $object->setVoiceMessage($this->denormalizer->denormalize($data['VoiceMessage'], \ShipStream\Ups\Api\Model\PreAlertNotificationVoiceMessage::class, 'json', $context));
            unset($data['VoiceMessage']);
        }
        if (\array_key_exists('TextMessage', $data)) {
            $object->setTextMessage($this->denormalizer->denormalize($data['TextMessage'], \ShipStream\Ups\Api\Model\PreAlertNotificationTextMessage::class, 'json', $context));
            unset($data['TextMessage']);
        }
        if (\array_key_exists('Locale', $data)) {
            $object->setLocale($this->denormalizer->denormalize($data['Locale'], \ShipStream\Ups\Api\Model\PreAlertNotificationLocale::class, 'json', $context));
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
        if ($data->isInitialized('eMailMessage') && null !== $data->getEMailMessage()) {
            $dataArray['EMailMessage'] = $this->normalizer->normalize($data->getEMailMessage(), 'json', $context);
        }
        if ($data->isInitialized('voiceMessage') && null !== $data->getVoiceMessage()) {
            $dataArray['VoiceMessage'] = $this->normalizer->normalize($data->getVoiceMessage(), 'json', $context);
        }
        if ($data->isInitialized('textMessage') && null !== $data->getTextMessage()) {
            $dataArray['TextMessage'] = $this->normalizer->normalize($data->getTextMessage(), 'json', $context);
        }
        $dataArray['Locale'] = $this->normalizer->normalize($data->getLocale(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\ShipmentServiceOptionsPreAlertNotification::class => false];
    }
}