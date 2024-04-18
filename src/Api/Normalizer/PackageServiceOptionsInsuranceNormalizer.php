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
class PackageServiceOptionsInsuranceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsInsurance';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsInsurance';
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
        $object = new \ShipStream\Ups\Api\Model\PackageServiceOptionsInsurance();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('BasicFlexibleParcelIndicator', $data)) {
            $object->setBasicFlexibleParcelIndicator($this->denormalizer->denormalize($data['BasicFlexibleParcelIndicator'], 'ShipStream\\Ups\\Api\\Model\\InsuranceBasicFlexibleParcelIndicator', 'json', $context));
            unset($data['BasicFlexibleParcelIndicator']);
        }
        if (\array_key_exists('ExtendedFlexibleParcelIndicator', $data)) {
            $object->setExtendedFlexibleParcelIndicator($this->denormalizer->denormalize($data['ExtendedFlexibleParcelIndicator'], 'ShipStream\\Ups\\Api\\Model\\InsuranceExtendedFlexibleParcelIndicator', 'json', $context));
            unset($data['ExtendedFlexibleParcelIndicator']);
        }
        if (\array_key_exists('TimeInTransitFlexibleParcelIndicator', $data)) {
            $object->setTimeInTransitFlexibleParcelIndicator($this->denormalizer->denormalize($data['TimeInTransitFlexibleParcelIndicator'], 'ShipStream\\Ups\\Api\\Model\\InsuranceTimeInTransitFlexibleParcelIndicator', 'json', $context));
            unset($data['TimeInTransitFlexibleParcelIndicator']);
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
        if ($object->isInitialized('basicFlexibleParcelIndicator') && null !== $object->getBasicFlexibleParcelIndicator()) {
            $data['BasicFlexibleParcelIndicator'] = $this->normalizer->normalize($object->getBasicFlexibleParcelIndicator(), 'json', $context);
        }
        if ($object->isInitialized('extendedFlexibleParcelIndicator') && null !== $object->getExtendedFlexibleParcelIndicator()) {
            $data['ExtendedFlexibleParcelIndicator'] = $this->normalizer->normalize($object->getExtendedFlexibleParcelIndicator(), 'json', $context);
        }
        if ($object->isInitialized('timeInTransitFlexibleParcelIndicator') && null !== $object->getTimeInTransitFlexibleParcelIndicator()) {
            $data['TimeInTransitFlexibleParcelIndicator'] = $this->normalizer->normalize($object->getTimeInTransitFlexibleParcelIndicator(), 'json', $context);
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
        return array('ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsInsurance' => false);
    }
}