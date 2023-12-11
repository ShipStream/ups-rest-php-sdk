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
class ManifestPackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\ManifestPackage';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ManifestPackage';
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
        $object = new \ShipStream\Ups\Api\Model\ManifestPackage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Activity', $data)) {
            $values = array();
            foreach ($data['Activity'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\PackageActivity', 'json', $context);
            }
            $object->setActivity($values);
            unset($data['Activity']);
        }
        if (\array_key_exists('Description', $data)) {
            $object->setDescription($data['Description']);
            unset($data['Description']);
        }
        if (\array_key_exists('Dimensions', $data)) {
            $object->setDimensions($this->denormalizer->denormalize($data['Dimensions'], 'ShipStream\\Ups\\Api\\Model\\ManifestPackageDimensions', 'json', $context));
            unset($data['Dimensions']);
        }
        if (\array_key_exists('DimensionalWeight', $data)) {
            $object->setDimensionalWeight($this->denormalizer->denormalize($data['DimensionalWeight'], 'ShipStream\\Ups\\Api\\Model\\PackageDimensionalWeight', 'json', $context));
            unset($data['DimensionalWeight']);
        }
        if (\array_key_exists('PackageWeight', $data)) {
            $object->setPackageWeight($this->denormalizer->denormalize($data['PackageWeight'], 'ShipStream\\Ups\\Api\\Model\\ManifestPackagePackageWeight', 'json', $context));
            unset($data['PackageWeight']);
        }
        if (\array_key_exists('LargePackage', $data)) {
            $object->setLargePackage($data['LargePackage']);
            unset($data['LargePackage']);
        }
        if (\array_key_exists('TrackingNumber', $data)) {
            $object->setTrackingNumber($data['TrackingNumber']);
            unset($data['TrackingNumber']);
        }
        if (\array_key_exists('ReferenceNumber', $data)) {
            $object->setReferenceNumber($this->denormalizer->denormalize($data['ReferenceNumber'], 'ShipStream\\Ups\\Api\\Model\\ManifestPackageReferenceNumber', 'json', $context));
            unset($data['ReferenceNumber']);
        }
        if (\array_key_exists('PackageServiceOptions', $data)) {
            $object->setPackageServiceOptions($this->denormalizer->denormalize($data['PackageServiceOptions'], 'ShipStream\\Ups\\Api\\Model\\ManifestPackagePackageServiceOptions', 'json', $context));
            unset($data['PackageServiceOptions']);
        }
        if (\array_key_exists('UPSPremiumCareIndicator', $data)) {
            $object->setUPSPremiumCareIndicator($data['UPSPremiumCareIndicator']);
            unset($data['UPSPremiumCareIndicator']);
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
        if ($object->isInitialized('activity') && null !== $object->getActivity()) {
            $values = array();
            foreach ($object->getActivity() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Activity'] = $values;
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['Description'] = $object->getDescription();
        }
        if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
            $data['Dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
        }
        if ($object->isInitialized('dimensionalWeight') && null !== $object->getDimensionalWeight()) {
            $data['DimensionalWeight'] = $this->normalizer->normalize($object->getDimensionalWeight(), 'json', $context);
        }
        if ($object->isInitialized('packageWeight') && null !== $object->getPackageWeight()) {
            $data['PackageWeight'] = $this->normalizer->normalize($object->getPackageWeight(), 'json', $context);
        }
        if ($object->isInitialized('largePackage') && null !== $object->getLargePackage()) {
            $data['LargePackage'] = $object->getLargePackage();
        }
        if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
            $data['TrackingNumber'] = $object->getTrackingNumber();
        }
        if ($object->isInitialized('referenceNumber') && null !== $object->getReferenceNumber()) {
            $data['ReferenceNumber'] = $this->normalizer->normalize($object->getReferenceNumber(), 'json', $context);
        }
        if ($object->isInitialized('packageServiceOptions') && null !== $object->getPackageServiceOptions()) {
            $data['PackageServiceOptions'] = $this->normalizer->normalize($object->getPackageServiceOptions(), 'json', $context);
        }
        if ($object->isInitialized('uPSPremiumCareIndicator') && null !== $object->getUPSPremiumCareIndicator()) {
            $data['UPSPremiumCareIndicator'] = $object->getUPSPremiumCareIndicator();
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
        return array('ShipStream\\Ups\\Api\\Model\\ManifestPackage' => false);
    }
}