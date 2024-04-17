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
class LocatorResponseSearchResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\LocatorResponseSearchResults';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LocatorResponseSearchResults';
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
        $object = new \ShipStream\Ups\Api\Model\LocatorResponseSearchResults();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('GeocodeCandidate', $data)) {
            $values = array();
            foreach ($data['GeocodeCandidate'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\SearchResultsGeocodeCandidate', 'json', $context);
            }
            $object->setGeocodeCandidate($values);
            unset($data['GeocodeCandidate']);
        }
        if (\array_key_exists('Disclaimer', $data)) {
            $object->setDisclaimer($data['Disclaimer']);
            unset($data['Disclaimer']);
        }
        if (\array_key_exists('DropLocation', $data)) {
            $values_1 = array();
            foreach ($data['DropLocation'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\SearchResultsDropLocation', 'json', $context);
            }
            $object->setDropLocation($values_1);
            unset($data['DropLocation']);
        }
        if (\array_key_exists('AvailableLocationAttributes', $data)) {
            $values_2 = array();
            foreach ($data['AvailableLocationAttributes'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'ShipStream\\Ups\\Api\\Model\\SearchResultsAvailableLocationAttributes', 'json', $context);
            }
            $object->setAvailableLocationAttributes($values_2);
            unset($data['AvailableLocationAttributes']);
        }
        if (\array_key_exists('ActiveAvailableAccessPointIndicator', $data)) {
            $object->setActiveAvailableAccessPointIndicator($data['ActiveAvailableAccessPointIndicator']);
            unset($data['ActiveAvailableAccessPointIndicator']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
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
        if ($object->isInitialized('geocodeCandidate') && null !== $object->getGeocodeCandidate()) {
            $values = array();
            foreach ($object->getGeocodeCandidate() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['GeocodeCandidate'] = $values;
        }
        if ($object->isInitialized('disclaimer') && null !== $object->getDisclaimer()) {
            $data['Disclaimer'] = $object->getDisclaimer();
        }
        if ($object->isInitialized('dropLocation') && null !== $object->getDropLocation()) {
            $values_1 = array();
            foreach ($object->getDropLocation() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['DropLocation'] = $values_1;
        }
        if ($object->isInitialized('availableLocationAttributes') && null !== $object->getAvailableLocationAttributes()) {
            $values_2 = array();
            foreach ($object->getAvailableLocationAttributes() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['AvailableLocationAttributes'] = $values_2;
        }
        if ($object->isInitialized('activeAvailableAccessPointIndicator') && null !== $object->getActiveAvailableAccessPointIndicator()) {
            $data['ActiveAvailableAccessPointIndicator'] = $object->getActiveAvailableAccessPointIndicator();
        }
        foreach ($object as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_3;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('ShipStream\\Ups\\Api\\Model\\LocatorResponseSearchResults' => false);
    }
}