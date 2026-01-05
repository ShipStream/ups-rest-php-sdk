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
class RatedShipmentTimeInTransitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\RatedShipmentTimeInTransit::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\RatedShipmentTimeInTransit::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\RatedShipmentTimeInTransit();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PickupDate', $data)) {
            $object->setPickupDate($data['PickupDate']);
            unset($data['PickupDate']);
        }
        if (\array_key_exists('DocumentsOnlyIndicator', $data)) {
            $object->setDocumentsOnlyIndicator($data['DocumentsOnlyIndicator']);
            unset($data['DocumentsOnlyIndicator']);
        }
        if (\array_key_exists('PackageBillType', $data)) {
            $object->setPackageBillType($data['PackageBillType']);
            unset($data['PackageBillType']);
        }
        if (\array_key_exists('ServiceSummary', $data)) {
            $object->setServiceSummary($this->denormalizer->denormalize($data['ServiceSummary'], \ShipStream\Ups\Api\Model\TimeInTransitServiceSummary::class, 'json', $context));
            unset($data['ServiceSummary']);
        }
        if (\array_key_exists('AutoDutyCode', $data)) {
            $object->setAutoDutyCode($data['AutoDutyCode']);
            unset($data['AutoDutyCode']);
        }
        if (\array_key_exists('Disclaimer', $data)) {
            $object->setDisclaimer($data['Disclaimer']);
            unset($data['Disclaimer']);
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
        $dataArray['PickupDate'] = $data->getPickupDate();
        if ($data->isInitialized('documentsOnlyIndicator') && null !== $data->getDocumentsOnlyIndicator()) {
            $dataArray['DocumentsOnlyIndicator'] = $data->getDocumentsOnlyIndicator();
        }
        if ($data->isInitialized('packageBillType') && null !== $data->getPackageBillType()) {
            $dataArray['PackageBillType'] = $data->getPackageBillType();
        }
        $dataArray['ServiceSummary'] = $this->normalizer->normalize($data->getServiceSummary(), 'json', $context);
        if ($data->isInitialized('autoDutyCode') && null !== $data->getAutoDutyCode()) {
            $dataArray['AutoDutyCode'] = $data->getAutoDutyCode();
        }
        if ($data->isInitialized('disclaimer') && null !== $data->getDisclaimer()) {
            $dataArray['Disclaimer'] = $data->getDisclaimer();
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
        return [\ShipStream\Ups\Api\Model\RatedShipmentTimeInTransit::class => false];
    }
}