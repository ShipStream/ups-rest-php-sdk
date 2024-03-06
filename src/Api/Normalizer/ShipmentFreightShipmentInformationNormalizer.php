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
class ShipmentFreightShipmentInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = []) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentFreightShipmentInformation';
    }
    public function supportsNormalization($data, $format = null, array $context = []) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentFreightShipmentInformation';
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
        $object = new \ShipStream\Ups\Api\Model\ShipmentFreightShipmentInformation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('FreightDensityInfo', $data)) {
            $object->setFreightDensityInfo($this->denormalizer->denormalize($data['FreightDensityInfo'], 'ShipStream\\Ups\\Api\\Model\\FreightShipmentInformationFreightDensityInfo', 'json', $context));
            unset($data['FreightDensityInfo']);
        }
        if (\array_key_exists('DensityEligibleIndicator', $data)) {
            $object->setDensityEligibleIndicator($data['DensityEligibleIndicator']);
            unset($data['DensityEligibleIndicator']);
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
        if ($object->isInitialized('freightDensityInfo') && null !== $object->getFreightDensityInfo()) {
            $data['FreightDensityInfo'] = $this->normalizer->normalize($object->getFreightDensityInfo(), 'json', $context);
        }
        if ($object->isInitialized('densityEligibleIndicator') && null !== $object->getDensityEligibleIndicator()) {
            $data['DensityEligibleIndicator'] = $object->getDensityEligibleIndicator();
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
        return array('ShipStream\\Ups\\Api\\Model\\ShipmentFreightShipmentInformation' => false);
    }
}