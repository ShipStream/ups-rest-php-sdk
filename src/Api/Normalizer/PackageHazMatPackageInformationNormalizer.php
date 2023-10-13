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
class PackageHazMatPackageInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\PackageHazMatPackageInformation';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PackageHazMatPackageInformation';
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
        $object = new \ShipStream\Ups\Api\Model\PackageHazMatPackageInformation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('AllPackedInOneIndicator', $data)) {
            $object->setAllPackedInOneIndicator($data['AllPackedInOneIndicator']);
            unset($data['AllPackedInOneIndicator']);
        }
        if (\array_key_exists('OverPackedIndicator', $data)) {
            $object->setOverPackedIndicator($data['OverPackedIndicator']);
            unset($data['OverPackedIndicator']);
        }
        if (\array_key_exists('QValue', $data)) {
            $object->setQValue($data['QValue']);
            unset($data['QValue']);
        }
        if (\array_key_exists('OuterPackagingType', $data)) {
            $object->setOuterPackagingType($data['OuterPackagingType']);
            unset($data['OuterPackagingType']);
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
        if ($object->isInitialized('allPackedInOneIndicator') && null !== $object->getAllPackedInOneIndicator()) {
            $data['AllPackedInOneIndicator'] = $object->getAllPackedInOneIndicator();
        }
        if ($object->isInitialized('overPackedIndicator') && null !== $object->getOverPackedIndicator()) {
            $data['OverPackedIndicator'] = $object->getOverPackedIndicator();
        }
        if ($object->isInitialized('qValue') && null !== $object->getQValue()) {
            $data['QValue'] = $object->getQValue();
        }
        if ($object->isInitialized('outerPackagingType') && null !== $object->getOuterPackagingType()) {
            $data['OuterPackagingType'] = $object->getOuterPackagingType();
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
        return array('ShipStream\\Ups\\Api\\Model\\PackageHazMatPackageInformation' => false);
    }
}