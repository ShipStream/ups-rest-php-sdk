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
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class PickupCreationResponseRateResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PickupCreationResponseRateResult';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PickupCreationResponseRateResult';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
            if (\array_key_exists('Disclaimer', $data) && $data['Disclaimer'] !== null) {
                $object->setDisclaimer($this->denormalizer->denormalize($data['Disclaimer'], 'ShipStream\\Ups\\Api\\Model\\RateResultDisclaimer', 'json', $context));
                unset($data['Disclaimer']);
            }
            elseif (\array_key_exists('Disclaimer', $data) && $data['Disclaimer'] === null) {
                $object->setDisclaimer(null);
            }
            if (\array_key_exists('RateType', $data) && $data['RateType'] !== null) {
                $object->setRateType($data['RateType']);
                unset($data['RateType']);
            }
            elseif (\array_key_exists('RateType', $data) && $data['RateType'] === null) {
                $object->setRateType(null);
            }
            if (\array_key_exists('CurrencyCode', $data) && $data['CurrencyCode'] !== null) {
                $object->setCurrencyCode($data['CurrencyCode']);
                unset($data['CurrencyCode']);
            }
            elseif (\array_key_exists('CurrencyCode', $data) && $data['CurrencyCode'] === null) {
                $object->setCurrencyCode(null);
            }
            if (\array_key_exists('ChargeDetail', $data) && $data['ChargeDetail'] !== null) {
                $values = [];
                foreach ($data['ChargeDetail'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\RateResultChargeDetail', 'json', $context);
                }
                $object->setChargeDetail($values);
                unset($data['ChargeDetail']);
            }
            elseif (\array_key_exists('ChargeDetail', $data) && $data['ChargeDetail'] === null) {
                $object->setChargeDetail(null);
            }
            if (\array_key_exists('TaxCharges', $data) && $data['TaxCharges'] !== null) {
                $values_1 = [];
                foreach ($data['TaxCharges'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\RateResultTaxCharges', 'json', $context);
                }
                $object->setTaxCharges($values_1);
                unset($data['TaxCharges']);
            }
            elseif (\array_key_exists('TaxCharges', $data) && $data['TaxCharges'] === null) {
                $object->setTaxCharges(null);
            }
            if (\array_key_exists('TotalTax', $data) && $data['TotalTax'] !== null) {
                $object->setTotalTax($data['TotalTax']);
                unset($data['TotalTax']);
            }
            elseif (\array_key_exists('TotalTax', $data) && $data['TotalTax'] === null) {
                $object->setTotalTax(null);
            }
            if (\array_key_exists('GrandTotalOfAllCharge', $data) && $data['GrandTotalOfAllCharge'] !== null) {
                $object->setGrandTotalOfAllCharge($data['GrandTotalOfAllCharge']);
                unset($data['GrandTotalOfAllCharge']);
            }
            elseif (\array_key_exists('GrandTotalOfAllCharge', $data) && $data['GrandTotalOfAllCharge'] === null) {
                $object->setGrandTotalOfAllCharge(null);
            }
            if (\array_key_exists('GrandTotalOfAllIncentedCharge', $data) && $data['GrandTotalOfAllIncentedCharge'] !== null) {
                $object->setGrandTotalOfAllIncentedCharge($data['GrandTotalOfAllIncentedCharge']);
                unset($data['GrandTotalOfAllIncentedCharge']);
            }
            elseif (\array_key_exists('GrandTotalOfAllIncentedCharge', $data) && $data['GrandTotalOfAllIncentedCharge'] === null) {
                $object->setGrandTotalOfAllIncentedCharge(null);
            }
            if (\array_key_exists('PreTaxTotalCharge', $data) && $data['PreTaxTotalCharge'] !== null) {
                $object->setPreTaxTotalCharge($data['PreTaxTotalCharge']);
                unset($data['PreTaxTotalCharge']);
            }
            elseif (\array_key_exists('PreTaxTotalCharge', $data) && $data['PreTaxTotalCharge'] === null) {
                $object->setPreTaxTotalCharge(null);
            }
            if (\array_key_exists('PreTaxTotalIncentedCharge', $data) && $data['PreTaxTotalIncentedCharge'] !== null) {
                $object->setPreTaxTotalIncentedCharge($data['PreTaxTotalIncentedCharge']);
                unset($data['PreTaxTotalIncentedCharge']);
            }
            elseif (\array_key_exists('PreTaxTotalIncentedCharge', $data) && $data['PreTaxTotalIncentedCharge'] === null) {
                $object->setPreTaxTotalIncentedCharge(null);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('disclaimer') && null !== $object->getDisclaimer()) {
                $data['Disclaimer'] = $this->normalizer->normalize($object->getDisclaimer(), 'json', $context);
            }
            if ($object->isInitialized('rateType') && null !== $object->getRateType()) {
                $data['RateType'] = $object->getRateType();
            }
            if ($object->isInitialized('currencyCode') && null !== $object->getCurrencyCode()) {
                $data['CurrencyCode'] = $object->getCurrencyCode();
            }
            if ($object->isInitialized('chargeDetail') && null !== $object->getChargeDetail()) {
                $values = [];
                foreach ($object->getChargeDetail() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ChargeDetail'] = $values;
            }
            if ($object->isInitialized('taxCharges') && null !== $object->getTaxCharges()) {
                $values_1 = [];
                foreach ($object->getTaxCharges() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['TaxCharges'] = $values_1;
            }
            if ($object->isInitialized('totalTax') && null !== $object->getTotalTax()) {
                $data['TotalTax'] = $object->getTotalTax();
            }
            $data['GrandTotalOfAllCharge'] = $object->getGrandTotalOfAllCharge();
            if ($object->isInitialized('grandTotalOfAllIncentedCharge') && null !== $object->getGrandTotalOfAllIncentedCharge()) {
                $data['GrandTotalOfAllIncentedCharge'] = $object->getGrandTotalOfAllIncentedCharge();
            }
            if ($object->isInitialized('preTaxTotalCharge') && null !== $object->getPreTaxTotalCharge()) {
                $data['PreTaxTotalCharge'] = $object->getPreTaxTotalCharge();
            }
            if ($object->isInitialized('preTaxTotalIncentedCharge') && null !== $object->getPreTaxTotalIncentedCharge()) {
                $data['PreTaxTotalIncentedCharge'] = $object->getPreTaxTotalIncentedCharge();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\PickupCreationResponseRateResult' => false];
        }
    }
} else {
    class PickupCreationResponseRateResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PickupCreationResponseRateResult';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PickupCreationResponseRateResult';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
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
            if (\array_key_exists('Disclaimer', $data) && $data['Disclaimer'] !== null) {
                $object->setDisclaimer($this->denormalizer->denormalize($data['Disclaimer'], 'ShipStream\\Ups\\Api\\Model\\RateResultDisclaimer', 'json', $context));
                unset($data['Disclaimer']);
            }
            elseif (\array_key_exists('Disclaimer', $data) && $data['Disclaimer'] === null) {
                $object->setDisclaimer(null);
            }
            if (\array_key_exists('RateType', $data) && $data['RateType'] !== null) {
                $object->setRateType($data['RateType']);
                unset($data['RateType']);
            }
            elseif (\array_key_exists('RateType', $data) && $data['RateType'] === null) {
                $object->setRateType(null);
            }
            if (\array_key_exists('CurrencyCode', $data) && $data['CurrencyCode'] !== null) {
                $object->setCurrencyCode($data['CurrencyCode']);
                unset($data['CurrencyCode']);
            }
            elseif (\array_key_exists('CurrencyCode', $data) && $data['CurrencyCode'] === null) {
                $object->setCurrencyCode(null);
            }
            if (\array_key_exists('ChargeDetail', $data) && $data['ChargeDetail'] !== null) {
                $values = [];
                foreach ($data['ChargeDetail'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\RateResultChargeDetail', 'json', $context);
                }
                $object->setChargeDetail($values);
                unset($data['ChargeDetail']);
            }
            elseif (\array_key_exists('ChargeDetail', $data) && $data['ChargeDetail'] === null) {
                $object->setChargeDetail(null);
            }
            if (\array_key_exists('TaxCharges', $data) && $data['TaxCharges'] !== null) {
                $values_1 = [];
                foreach ($data['TaxCharges'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\RateResultTaxCharges', 'json', $context);
                }
                $object->setTaxCharges($values_1);
                unset($data['TaxCharges']);
            }
            elseif (\array_key_exists('TaxCharges', $data) && $data['TaxCharges'] === null) {
                $object->setTaxCharges(null);
            }
            if (\array_key_exists('TotalTax', $data) && $data['TotalTax'] !== null) {
                $object->setTotalTax($data['TotalTax']);
                unset($data['TotalTax']);
            }
            elseif (\array_key_exists('TotalTax', $data) && $data['TotalTax'] === null) {
                $object->setTotalTax(null);
            }
            if (\array_key_exists('GrandTotalOfAllCharge', $data) && $data['GrandTotalOfAllCharge'] !== null) {
                $object->setGrandTotalOfAllCharge($data['GrandTotalOfAllCharge']);
                unset($data['GrandTotalOfAllCharge']);
            }
            elseif (\array_key_exists('GrandTotalOfAllCharge', $data) && $data['GrandTotalOfAllCharge'] === null) {
                $object->setGrandTotalOfAllCharge(null);
            }
            if (\array_key_exists('GrandTotalOfAllIncentedCharge', $data) && $data['GrandTotalOfAllIncentedCharge'] !== null) {
                $object->setGrandTotalOfAllIncentedCharge($data['GrandTotalOfAllIncentedCharge']);
                unset($data['GrandTotalOfAllIncentedCharge']);
            }
            elseif (\array_key_exists('GrandTotalOfAllIncentedCharge', $data) && $data['GrandTotalOfAllIncentedCharge'] === null) {
                $object->setGrandTotalOfAllIncentedCharge(null);
            }
            if (\array_key_exists('PreTaxTotalCharge', $data) && $data['PreTaxTotalCharge'] !== null) {
                $object->setPreTaxTotalCharge($data['PreTaxTotalCharge']);
                unset($data['PreTaxTotalCharge']);
            }
            elseif (\array_key_exists('PreTaxTotalCharge', $data) && $data['PreTaxTotalCharge'] === null) {
                $object->setPreTaxTotalCharge(null);
            }
            if (\array_key_exists('PreTaxTotalIncentedCharge', $data) && $data['PreTaxTotalIncentedCharge'] !== null) {
                $object->setPreTaxTotalIncentedCharge($data['PreTaxTotalIncentedCharge']);
                unset($data['PreTaxTotalIncentedCharge']);
            }
            elseif (\array_key_exists('PreTaxTotalIncentedCharge', $data) && $data['PreTaxTotalIncentedCharge'] === null) {
                $object->setPreTaxTotalIncentedCharge(null);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('disclaimer') && null !== $object->getDisclaimer()) {
                $data['Disclaimer'] = $this->normalizer->normalize($object->getDisclaimer(), 'json', $context);
            }
            if ($object->isInitialized('rateType') && null !== $object->getRateType()) {
                $data['RateType'] = $object->getRateType();
            }
            if ($object->isInitialized('currencyCode') && null !== $object->getCurrencyCode()) {
                $data['CurrencyCode'] = $object->getCurrencyCode();
            }
            if ($object->isInitialized('chargeDetail') && null !== $object->getChargeDetail()) {
                $values = [];
                foreach ($object->getChargeDetail() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ChargeDetail'] = $values;
            }
            if ($object->isInitialized('taxCharges') && null !== $object->getTaxCharges()) {
                $values_1 = [];
                foreach ($object->getTaxCharges() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['TaxCharges'] = $values_1;
            }
            if ($object->isInitialized('totalTax') && null !== $object->getTotalTax()) {
                $data['TotalTax'] = $object->getTotalTax();
            }
            $data['GrandTotalOfAllCharge'] = $object->getGrandTotalOfAllCharge();
            if ($object->isInitialized('grandTotalOfAllIncentedCharge') && null !== $object->getGrandTotalOfAllIncentedCharge()) {
                $data['GrandTotalOfAllIncentedCharge'] = $object->getGrandTotalOfAllIncentedCharge();
            }
            if ($object->isInitialized('preTaxTotalCharge') && null !== $object->getPreTaxTotalCharge()) {
                $data['PreTaxTotalCharge'] = $object->getPreTaxTotalCharge();
            }
            if ($object->isInitialized('preTaxTotalIncentedCharge') && null !== $object->getPreTaxTotalIncentedCharge()) {
                $data['PreTaxTotalIncentedCharge'] = $object->getPreTaxTotalIncentedCharge();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\PickupCreationResponseRateResult' => false];
        }
    }
}