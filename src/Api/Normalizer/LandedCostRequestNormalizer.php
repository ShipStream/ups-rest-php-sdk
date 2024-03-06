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
class LandedCostRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = []) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\LandedCostRequest';
    }
    public function supportsNormalization($data, $format = null, array $context = []) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LandedCostRequest';
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
        $object = new \ShipStream\Ups\Api\Model\LandedCostRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('currencyCode', $data)) {
            $object->setCurrencyCode($data['currencyCode']);
            unset($data['currencyCode']);
        }
        if (\array_key_exists('transID', $data)) {
            $object->setTransID($data['transID']);
            unset($data['transID']);
        }
        if (\array_key_exists('allowPartialLandedCostResult', $data)) {
            $object->setAllowPartialLandedCostResult($data['allowPartialLandedCostResult']);
            unset($data['allowPartialLandedCostResult']);
        }
        if (\array_key_exists('alversion', $data)) {
            $object->setAlversion($data['alversion']);
            unset($data['alversion']);
        }
        if (\array_key_exists('shipment', $data)) {
            $object->setShipment($this->denormalizer->denormalize($data['shipment'], 'ShipStream\\Ups\\Api\\Model\\LandedCostRequestShipment', 'json', $context));
            unset($data['shipment']);
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
        $data['currencyCode'] = $object->getCurrencyCode();
        $data['transID'] = $object->getTransID();
        if ($object->isInitialized('allowPartialLandedCostResult') && null !== $object->getAllowPartialLandedCostResult()) {
            $data['allowPartialLandedCostResult'] = $object->getAllowPartialLandedCostResult();
        }
        $data['alversion'] = $object->getAlversion();
        $data['shipment'] = $this->normalizer->normalize($object->getShipment(), 'json', $context);
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('ShipStream\\Ups\\Api\\Model\\LandedCostRequest' => false);
    }
}