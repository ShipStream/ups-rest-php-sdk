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
class LabelRecoveryRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\LabelRecoveryRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\LabelRecoveryRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
            $object->setRequest($this->denormalizer->denormalize($data['Request'], \ShipStream\Ups\Api\Model\LabelRecoveryRequestRequest::class, 'json', $context));
            unset($data['Request']);
        }
        if (\array_key_exists('LabelSpecification', $data)) {
            $object->setLabelSpecification($this->denormalizer->denormalize($data['LabelSpecification'], \ShipStream\Ups\Api\Model\LabelRecoveryRequestLabelSpecification::class, 'json', $context));
            unset($data['LabelSpecification']);
        }
        if (\array_key_exists('Translate', $data)) {
            $object->setTranslate($this->denormalizer->denormalize($data['Translate'], \ShipStream\Ups\Api\Model\LabelRecoveryRequestTranslate::class, 'json', $context));
            unset($data['Translate']);
        }
        if (\array_key_exists('LabelDelivery', $data)) {
            $object->setLabelDelivery($this->denormalizer->denormalize($data['LabelDelivery'], \ShipStream\Ups\Api\Model\LabelRecoveryRequestLabelDelivery::class, 'json', $context));
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
            $object->setReferenceValues($this->denormalizer->denormalize($data['ReferenceValues'], \ShipStream\Ups\Api\Model\LabelRecoveryRequestReferenceValues::class, 'json', $context));
            unset($data['ReferenceValues']);
        }
        if (\array_key_exists('Locale', $data)) {
            $object->setLocale($data['Locale']);
            unset($data['Locale']);
        }
        if (\array_key_exists('UPSPremiumCareForm', $data)) {
            $object->setUPSPremiumCareForm($this->denormalizer->denormalize($data['UPSPremiumCareForm'], \ShipStream\Ups\Api\Model\LabelRecoveryRequestUPSPremiumCareForm::class, 'json', $context));
            unset($data['UPSPremiumCareForm']);
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
        $dataArray['Request'] = $this->normalizer->normalize($data->getRequest(), 'json', $context);
        if ($data->isInitialized('labelSpecification') && null !== $data->getLabelSpecification()) {
            $dataArray['LabelSpecification'] = $this->normalizer->normalize($data->getLabelSpecification(), 'json', $context);
        }
        if ($data->isInitialized('translate') && null !== $data->getTranslate()) {
            $dataArray['Translate'] = $this->normalizer->normalize($data->getTranslate(), 'json', $context);
        }
        if ($data->isInitialized('labelDelivery') && null !== $data->getLabelDelivery()) {
            $dataArray['LabelDelivery'] = $this->normalizer->normalize($data->getLabelDelivery(), 'json', $context);
        }
        if ($data->isInitialized('trackingNumber') && null !== $data->getTrackingNumber()) {
            $dataArray['TrackingNumber'] = $data->getTrackingNumber();
        }
        if ($data->isInitialized('mailInnovationsTrackingNumber') && null !== $data->getMailInnovationsTrackingNumber()) {
            $dataArray['MailInnovationsTrackingNumber'] = $data->getMailInnovationsTrackingNumber();
        }
        if ($data->isInitialized('referenceValues') && null !== $data->getReferenceValues()) {
            $dataArray['ReferenceValues'] = $this->normalizer->normalize($data->getReferenceValues(), 'json', $context);
        }
        if ($data->isInitialized('locale') && null !== $data->getLocale()) {
            $dataArray['Locale'] = $data->getLocale();
        }
        if ($data->isInitialized('uPSPremiumCareForm') && null !== $data->getUPSPremiumCareForm()) {
            $dataArray['UPSPremiumCareForm'] = $this->normalizer->normalize($data->getUPSPremiumCareForm(), 'json', $context);
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
        return [\ShipStream\Ups\Api\Model\LabelRecoveryRequest::class => false];
    }
}