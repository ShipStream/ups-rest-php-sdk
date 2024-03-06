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
class EEIFilingOptionShipperFiledNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = []) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\EEIFilingOptionShipperFiled';
    }
    public function supportsNormalization($data, $format = null, array $context = []) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\EEIFilingOptionShipperFiled';
    }
    /**
     * @return mixed
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\EEIFilingOptionShipperFiled();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Code', $data)) {
            $object->setCode($data['Code']);
            unset($data['Code']);
        }
        if (\array_key_exists('Description', $data)) {
            $object->setDescription($data['Description']);
            unset($data['Description']);
        }
        if (\array_key_exists('PreDepartureITNNumber', $data)) {
            $object->setPreDepartureITNNumber($data['PreDepartureITNNumber']);
            unset($data['PreDepartureITNNumber']);
        }
        if (\array_key_exists('ExemptionLegend', $data)) {
            $object->setExemptionLegend($data['ExemptionLegend']);
            unset($data['ExemptionLegend']);
        }
        if (\array_key_exists('EEIShipmentReferenceNumber', $data)) {
            $object->setEEIShipmentReferenceNumber($data['EEIShipmentReferenceNumber']);
            unset($data['EEIShipmentReferenceNumber']);
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
    public function normalize(mixed $object, ?string $format = null, array $context = []): \ArrayObject|array|string|int|float|bool|null
    {
        $data = [];
        $data['Code'] = $object->getCode();
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['Description'] = $object->getDescription();
        }
        if ($object->isInitialized('preDepartureITNNumber') && null !== $object->getPreDepartureITNNumber()) {
            $data['PreDepartureITNNumber'] = $object->getPreDepartureITNNumber();
        }
        if ($object->isInitialized('exemptionLegend') && null !== $object->getExemptionLegend()) {
            $data['ExemptionLegend'] = $object->getExemptionLegend();
        }
        if ($object->isInitialized('eEIShipmentReferenceNumber') && null !== $object->getEEIShipmentReferenceNumber()) {
            $data['EEIShipmentReferenceNumber'] = $object->getEEIShipmentReferenceNumber();
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
        return array('ShipStream\\Ups\\Api\\Model\\EEIFilingOptionShipperFiled' => false);
    }
}