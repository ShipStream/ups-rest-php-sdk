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
class RateResultChargeDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = []) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\RateResultChargeDetail';
    }
    public function supportsNormalization($data, $format = null, array $context = []) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\RateResultChargeDetail';
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
        $object = new \ShipStream\Ups\Api\Model\RateResultChargeDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ChargeCode', $data)) {
            $object->setChargeCode($data['ChargeCode']);
            unset($data['ChargeCode']);
        }
        if (\array_key_exists('ChargeDescription', $data)) {
            $object->setChargeDescription($data['ChargeDescription']);
            unset($data['ChargeDescription']);
        }
        if (\array_key_exists('ChargeAmount', $data)) {
            $object->setChargeAmount($data['ChargeAmount']);
            unset($data['ChargeAmount']);
        }
        if (\array_key_exists('IncentedAmount', $data)) {
            $object->setIncentedAmount($data['IncentedAmount']);
            unset($data['IncentedAmount']);
        }
        if (\array_key_exists('TaxAmount', $data)) {
            $object->setTaxAmount($data['TaxAmount']);
            unset($data['TaxAmount']);
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
        $data['ChargeCode'] = $object->getChargeCode();
        if ($object->isInitialized('chargeDescription') && null !== $object->getChargeDescription()) {
            $data['ChargeDescription'] = $object->getChargeDescription();
        }
        $data['ChargeAmount'] = $object->getChargeAmount();
        if ($object->isInitialized('incentedAmount') && null !== $object->getIncentedAmount()) {
            $data['IncentedAmount'] = $object->getIncentedAmount();
        }
        if ($object->isInitialized('taxAmount') && null !== $object->getTaxAmount()) {
            $data['TaxAmount'] = $object->getTaxAmount();
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
        return array('ShipStream\\Ups\\Api\\Model\\RateResultChargeDetail' => false);
    }
}