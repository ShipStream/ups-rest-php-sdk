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
class RatePackageServiceOptionsDryIceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\RatePackageServiceOptionsDryIce';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\RatePackageServiceOptionsDryIce';
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
        $object = new \ShipStream\Ups\Api\Model\RatePackageServiceOptionsDryIce();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('RegulationSet', $data)) {
            $object->setRegulationSet($data['RegulationSet']);
            unset($data['RegulationSet']);
        }
        if (\array_key_exists('DryIceWeight', $data)) {
            $object->setDryIceWeight($this->denormalizer->denormalize($data['DryIceWeight'], 'ShipStream\\Ups\\Api\\Model\\DryIceDryIceWeight', 'json', $context));
            unset($data['DryIceWeight']);
        }
        if (\array_key_exists('MedicalUseIndicator', $data)) {
            $object->setMedicalUseIndicator($data['MedicalUseIndicator']);
            unset($data['MedicalUseIndicator']);
        }
        if (\array_key_exists('AuditRequired', $data)) {
            $object->setAuditRequired($data['AuditRequired']);
            unset($data['AuditRequired']);
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
        $data['RegulationSet'] = $object->getRegulationSet();
        $data['DryIceWeight'] = $this->normalizer->normalize($object->getDryIceWeight(), 'json', $context);
        if ($object->isInitialized('medicalUseIndicator') && null !== $object->getMedicalUseIndicator()) {
            $data['MedicalUseIndicator'] = $object->getMedicalUseIndicator();
        }
        if ($object->isInitialized('auditRequired') && null !== $object->getAuditRequired()) {
            $data['AuditRequired'] = $object->getAuditRequired();
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
        return array('ShipStream\\Ups\\Api\\Model\\RatePackageServiceOptionsDryIce' => false);
    }
}