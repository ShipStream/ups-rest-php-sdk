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
class EEIInformationDDTCInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\EEIInformationDDTCInformation';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\EEIInformationDDTCInformation';
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
        $object = new \ShipStream\Ups\Api\Model\EEIInformationDDTCInformation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ITARExemptionNumber', $data)) {
            $object->setITARExemptionNumber($data['ITARExemptionNumber']);
            unset($data['ITARExemptionNumber']);
        }
        if (\array_key_exists('USMLCategoryCode', $data)) {
            $object->setUSMLCategoryCode($data['USMLCategoryCode']);
            unset($data['USMLCategoryCode']);
        }
        if (\array_key_exists('EligiblePartyIndicator', $data)) {
            $object->setEligiblePartyIndicator($data['EligiblePartyIndicator']);
            unset($data['EligiblePartyIndicator']);
        }
        if (\array_key_exists('RegistrationNumber', $data)) {
            $object->setRegistrationNumber($data['RegistrationNumber']);
            unset($data['RegistrationNumber']);
        }
        if (\array_key_exists('Quantity', $data)) {
            $object->setQuantity($data['Quantity']);
            unset($data['Quantity']);
        }
        if (\array_key_exists('UnitOfMeasurement', $data)) {
            $object->setUnitOfMeasurement($this->denormalizer->denormalize($data['UnitOfMeasurement'], 'ShipStream\\Ups\\Api\\Model\\DDTCInformationUnitOfMeasurement', 'json', $context));
            unset($data['UnitOfMeasurement']);
        }
        if (\array_key_exists('SignificantMilitaryEquipmentIndicator', $data)) {
            $object->setSignificantMilitaryEquipmentIndicator($data['SignificantMilitaryEquipmentIndicator']);
            unset($data['SignificantMilitaryEquipmentIndicator']);
        }
        if (\array_key_exists('ACMNumber', $data)) {
            $object->setACMNumber($data['ACMNumber']);
            unset($data['ACMNumber']);
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
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('iTARExemptionNumber') && null !== $object->getITARExemptionNumber()) {
            $data['ITARExemptionNumber'] = $object->getITARExemptionNumber();
        }
        if ($object->isInitialized('uSMLCategoryCode') && null !== $object->getUSMLCategoryCode()) {
            $data['USMLCategoryCode'] = $object->getUSMLCategoryCode();
        }
        if ($object->isInitialized('eligiblePartyIndicator') && null !== $object->getEligiblePartyIndicator()) {
            $data['EligiblePartyIndicator'] = $object->getEligiblePartyIndicator();
        }
        if ($object->isInitialized('registrationNumber') && null !== $object->getRegistrationNumber()) {
            $data['RegistrationNumber'] = $object->getRegistrationNumber();
        }
        if ($object->isInitialized('quantity') && null !== $object->getQuantity()) {
            $data['Quantity'] = $object->getQuantity();
        }
        if ($object->isInitialized('unitOfMeasurement') && null !== $object->getUnitOfMeasurement()) {
            $data['UnitOfMeasurement'] = $this->normalizer->normalize($object->getUnitOfMeasurement(), 'json', $context);
        }
        if ($object->isInitialized('significantMilitaryEquipmentIndicator') && null !== $object->getSignificantMilitaryEquipmentIndicator()) {
            $data['SignificantMilitaryEquipmentIndicator'] = $object->getSignificantMilitaryEquipmentIndicator();
        }
        if ($object->isInitialized('aCMNumber') && null !== $object->getACMNumber()) {
            $data['ACMNumber'] = $object->getACMNumber();
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
        return array('ShipStream\\Ups\\Api\\Model\\EEIInformationDDTCInformation' => false);
    }
}