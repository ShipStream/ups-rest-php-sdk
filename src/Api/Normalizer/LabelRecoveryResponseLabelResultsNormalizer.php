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
class LabelRecoveryResponseLabelResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\LabelRecoveryResponseLabelResults::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\LabelRecoveryResponseLabelResults::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
        if (\array_key_exists('TrackingNumber', $data)) {
            $object->setTrackingNumber($data['TrackingNumber']);
            unset($data['TrackingNumber']);
        }
        if (\array_key_exists('LabelImage', $data)) {
            $object->setLabelImage($this->denormalizer->denormalize($data['LabelImage'], \ShipStream\Ups\Api\Model\LabelResultsLabelImage::class, 'json', $context));
            unset($data['LabelImage']);
        }
        if (\array_key_exists('MailInnovationsTrackingNumber', $data)) {
            $object->setMailInnovationsTrackingNumber($data['MailInnovationsTrackingNumber']);
            unset($data['MailInnovationsTrackingNumber']);
        }
        if (\array_key_exists('MailInnovationsLabelImage', $data)) {
            $object->setMailInnovationsLabelImage($this->denormalizer->denormalize($data['MailInnovationsLabelImage'], \ShipStream\Ups\Api\Model\LabelResultsMailInnovationsLabelImage::class, 'json', $context));
            unset($data['MailInnovationsLabelImage']);
        }
        if (\array_key_exists('Receipt', $data)) {
            $object->setReceipt($this->denormalizer->denormalize($data['Receipt'], \ShipStream\Ups\Api\Model\LabelResultsReceipt::class, 'json', $context));
            unset($data['Receipt']);
        }
        if (\array_key_exists('Form', $data)) {
            $object->setForm($this->denormalizer->denormalize($data['Form'], \ShipStream\Ups\Api\Model\LabelResultsForm::class, 'json', $context));
            unset($data['Form']);
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
        if ($data->isInitialized('trackingNumber') && null !== $data->getTrackingNumber()) {
            $dataArray['TrackingNumber'] = $data->getTrackingNumber();
        }
        if ($data->isInitialized('labelImage') && null !== $data->getLabelImage()) {
            $dataArray['LabelImage'] = $this->normalizer->normalize($data->getLabelImage(), 'json', $context);
        }
        if ($data->isInitialized('mailInnovationsTrackingNumber') && null !== $data->getMailInnovationsTrackingNumber()) {
            $dataArray['MailInnovationsTrackingNumber'] = $data->getMailInnovationsTrackingNumber();
        }
        if ($data->isInitialized('mailInnovationsLabelImage') && null !== $data->getMailInnovationsLabelImage()) {
            $dataArray['MailInnovationsLabelImage'] = $this->normalizer->normalize($data->getMailInnovationsLabelImage(), 'json', $context);
        }
        if ($data->isInitialized('receipt') && null !== $data->getReceipt()) {
            $dataArray['Receipt'] = $this->normalizer->normalize($data->getReceipt(), 'json', $context);
        }
        if ($data->isInitialized('form') && null !== $data->getForm()) {
            $dataArray['Form'] = $this->normalizer->normalize($data->getForm(), 'json', $context);
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
        return [\ShipStream\Ups\Api\Model\LabelRecoveryResponseLabelResults::class => false];
    }
}