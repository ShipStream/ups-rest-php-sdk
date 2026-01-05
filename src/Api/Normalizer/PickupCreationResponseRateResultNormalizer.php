<?php

namespace ShipStream\Ups\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ShipStream\Ups\Api\Runtime\Normalizer\CheckArray;
use ShipStream\Ups\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PickupCreationResponseRateResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\PickupCreationResponseRateResult::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\PickupCreationResponseRateResult::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\PickupCreationResponseRateResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Disclaimer', $data)) {
            $object->setDisclaimer($this->denormalizer->denormalize($data['Disclaimer'], \ShipStream\Ups\Api\Model\RateResultDisclaimer::class, 'json', $context));
            unset($data['Disclaimer']);
        }
        if (\array_key_exists('RateType', $data)) {
            $object->setRateType($data['RateType']);
            unset($data['RateType']);
        }
        if (\array_key_exists('CurrencyCode', $data)) {
            $object->setCurrencyCode($data['CurrencyCode']);
            unset($data['CurrencyCode']);
        }
        if (\array_key_exists('ChargeDetail', $data)) {
            $values = [];
            foreach ($data['ChargeDetail'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\RateResultChargeDetail::class, 'json', $context);
            }
            $object->setChargeDetail($values);
            unset($data['ChargeDetail']);
        }
        if (\array_key_exists('TaxCharges', $data)) {
            $values_1 = [];
            foreach ($data['TaxCharges'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \ShipStream\Ups\Api\Model\RateResultTaxCharges::class, 'json', $context);
            }
            $object->setTaxCharges($values_1);
            unset($data['TaxCharges']);
        }
        if (\array_key_exists('TotalTax', $data)) {
            $object->setTotalTax($data['TotalTax']);
            unset($data['TotalTax']);
        }
        if (\array_key_exists('GrandTotalOfAllCharge', $data)) {
            $object->setGrandTotalOfAllCharge($data['GrandTotalOfAllCharge']);
            unset($data['GrandTotalOfAllCharge']);
        }
        if (\array_key_exists('GrandTotalOfAllIncentedCharge', $data)) {
            $object->setGrandTotalOfAllIncentedCharge($data['GrandTotalOfAllIncentedCharge']);
            unset($data['GrandTotalOfAllIncentedCharge']);
        }
        if (\array_key_exists('PreTaxTotalCharge', $data)) {
            $object->setPreTaxTotalCharge($data['PreTaxTotalCharge']);
            unset($data['PreTaxTotalCharge']);
        }
        if (\array_key_exists('PreTaxTotalIncentedCharge', $data)) {
            $object->setPreTaxTotalIncentedCharge($data['PreTaxTotalIncentedCharge']);
            unset($data['PreTaxTotalIncentedCharge']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('disclaimer') && null !== $data->getDisclaimer()) {
            $dataArray['Disclaimer'] = $this->normalizer->normalize($data->getDisclaimer(), 'json', $context);
        }
        if ($data->isInitialized('rateType') && null !== $data->getRateType()) {
            $dataArray['RateType'] = $data->getRateType();
        }
        if ($data->isInitialized('currencyCode') && null !== $data->getCurrencyCode()) {
            $dataArray['CurrencyCode'] = $data->getCurrencyCode();
        }
        if ($data->isInitialized('chargeDetail') && null !== $data->getChargeDetail()) {
            $values = [];
            foreach ($data->getChargeDetail() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['ChargeDetail'] = $values;
        }
        if ($data->isInitialized('taxCharges') && null !== $data->getTaxCharges()) {
            $values_1 = [];
            foreach ($data->getTaxCharges() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['TaxCharges'] = $values_1;
        }
        if ($data->isInitialized('totalTax') && null !== $data->getTotalTax()) {
            $dataArray['TotalTax'] = $data->getTotalTax();
        }
        $dataArray['GrandTotalOfAllCharge'] = $data->getGrandTotalOfAllCharge();
        if ($data->isInitialized('grandTotalOfAllIncentedCharge') && null !== $data->getGrandTotalOfAllIncentedCharge()) {
            $dataArray['GrandTotalOfAllIncentedCharge'] = $data->getGrandTotalOfAllIncentedCharge();
        }
        if ($data->isInitialized('preTaxTotalCharge') && null !== $data->getPreTaxTotalCharge()) {
            $dataArray['PreTaxTotalCharge'] = $data->getPreTaxTotalCharge();
        }
        if ($data->isInitialized('preTaxTotalIncentedCharge') && null !== $data->getPreTaxTotalIncentedCharge()) {
            $dataArray['PreTaxTotalIncentedCharge'] = $data->getPreTaxTotalIncentedCharge();
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\PickupCreationResponseRateResult::class => false];
    }
}