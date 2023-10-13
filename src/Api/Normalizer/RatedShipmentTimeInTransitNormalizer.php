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
class RatedShipmentTimeInTransitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\RatedShipmentTimeInTransit';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\RatedShipmentTimeInTransit';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
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
            $values = array();
            foreach ($data['ServiceSummary'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\TimeInTransitServiceSummary', 'json', $context);
            }
            $object->setServiceSummary($values);
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
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['PickupDate'] = $object->getPickupDate();
        if ($object->isInitialized('documentsOnlyIndicator') && null !== $object->getDocumentsOnlyIndicator()) {
            $data['DocumentsOnlyIndicator'] = $object->getDocumentsOnlyIndicator();
        }
        if ($object->isInitialized('packageBillType') && null !== $object->getPackageBillType()) {
            $data['PackageBillType'] = $object->getPackageBillType();
        }
        $values = array();
        foreach ($object->getServiceSummary() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['ServiceSummary'] = $values;
        if ($object->isInitialized('autoDutyCode') && null !== $object->getAutoDutyCode()) {
            $data['AutoDutyCode'] = $object->getAutoDutyCode();
        }
        if ($object->isInitialized('disclaimer') && null !== $object->getDisclaimer()) {
            $data['Disclaimer'] = $object->getDisclaimer();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('ShipStream\\Ups\\Api\\Model\\RatedShipmentTimeInTransit' => false);
    }
}