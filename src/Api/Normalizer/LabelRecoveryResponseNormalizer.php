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
class LabelRecoveryResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\LabelRecoveryResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\LabelRecoveryResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
            $object->setResponse($this->denormalizer->denormalize($data['Response'], \ShipStream\Ups\Api\Model\LabelRecoveryResponseResponse::class, 'json', $context));
            unset($data['Response']);
        }
        if (\array_key_exists('ShipmentIdentificationNumber', $data)) {
            $object->setShipmentIdentificationNumber($data['ShipmentIdentificationNumber']);
            unset($data['ShipmentIdentificationNumber']);
        }
        if (\array_key_exists('LabelResults', $data)) {
            $values = [];
            foreach ($data['LabelResults'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\LabelRecoveryResponseLabelResults::class, 'json', $context);
            }
            $object->setLabelResults($values);
            unset($data['LabelResults']);
        }
        if (\array_key_exists('CODTurnInPage', $data)) {
            $object->setCODTurnInPage($this->denormalizer->denormalize($data['CODTurnInPage'], \ShipStream\Ups\Api\Model\LabelRecoveryResponseCODTurnInPage::class, 'json', $context));
            unset($data['CODTurnInPage']);
        }
        if (\array_key_exists('Form', $data)) {
            $object->setForm($this->denormalizer->denormalize($data['Form'], \ShipStream\Ups\Api\Model\LabelRecoveryResponseForm::class, 'json', $context));
            unset($data['Form']);
        }
        if (\array_key_exists('HighValueReport', $data)) {
            $object->setHighValueReport($this->denormalizer->denormalize($data['HighValueReport'], \ShipStream\Ups\Api\Model\LabelRecoveryResponseHighValueReport::class, 'json', $context));
            unset($data['HighValueReport']);
        }
        if (\array_key_exists('TrackingCandidate', $data)) {
            $values_1 = [];
            foreach ($data['TrackingCandidate'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \ShipStream\Ups\Api\Model\LabelRecoveryResponseTrackingCandidate::class, 'json', $context);
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
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['Response'] = $this->normalizer->normalize($data->getResponse(), 'json', $context);
        if ($data->isInitialized('shipmentIdentificationNumber') && null !== $data->getShipmentIdentificationNumber()) {
            $dataArray['ShipmentIdentificationNumber'] = $data->getShipmentIdentificationNumber();
        }
        $values = [];
        foreach ($data->getLabelResults() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['LabelResults'] = $values;
        if ($data->isInitialized('cODTurnInPage') && null !== $data->getCODTurnInPage()) {
            $dataArray['CODTurnInPage'] = $this->normalizer->normalize($data->getCODTurnInPage(), 'json', $context);
        }
        if ($data->isInitialized('form') && null !== $data->getForm()) {
            $dataArray['Form'] = $this->normalizer->normalize($data->getForm(), 'json', $context);
        }
        if ($data->isInitialized('highValueReport') && null !== $data->getHighValueReport()) {
            $dataArray['HighValueReport'] = $this->normalizer->normalize($data->getHighValueReport(), 'json', $context);
        }
        if ($data->isInitialized('trackingCandidate') && null !== $data->getTrackingCandidate()) {
            $values_1 = [];
            foreach ($data->getTrackingCandidate() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['TrackingCandidate'] = $values_1;
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\LabelRecoveryResponse::class => false];
    }
}