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
    class PickupRateResponseRateResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PickupRateResponseRateResult';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PickupRateResponseRateResult';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\PickupRateResponseRateResult();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Disclaimer', $data)) {
                $object->setDisclaimer($this->denormalizer->denormalize($data['Disclaimer'], 'ShipStream\\Ups\\Api\\Model\\RateResultDisclaimer', 'json', $context));
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
                $object->setChargeDetail($this->denormalizer->denormalize($data['ChargeDetail'], 'ShipStream\\Ups\\Api\\Model\\RateResultChargeDetail', 'json', $context));
                unset($data['ChargeDetail']);
            }
            if (\array_key_exists('TaxCharges', $data)) {
                $object->setTaxCharges($this->denormalizer->denormalize($data['TaxCharges'], 'ShipStream\\Ups\\Api\\Model\\RateResultTaxCharges', 'json', $context));
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
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            $data['CurrencyCode'] = $object->getCurrencyCode();
            if ($object->isInitialized('chargeDetail') && null !== $object->getChargeDetail()) {
                $data['ChargeDetail'] = $this->normalizer->normalize($object->getChargeDetail(), 'json', $context);
            }
            if ($object->isInitialized('taxCharges') && null !== $object->getTaxCharges()) {
                $data['TaxCharges'] = $this->normalizer->normalize($object->getTaxCharges(), 'json', $context);
            }
            if ($object->isInitialized('totalTax') && null !== $object->getTotalTax()) {
                $data['TotalTax'] = $object->getTotalTax();
            }
            if ($object->isInitialized('grandTotalOfAllCharge') && null !== $object->getGrandTotalOfAllCharge()) {
                $data['GrandTotalOfAllCharge'] = $object->getGrandTotalOfAllCharge();
            }
            if ($object->isInitialized('grandTotalOfAllIncentedCharge') && null !== $object->getGrandTotalOfAllIncentedCharge()) {
                $data['GrandTotalOfAllIncentedCharge'] = $object->getGrandTotalOfAllIncentedCharge();
            }
            if ($object->isInitialized('preTaxTotalCharge') && null !== $object->getPreTaxTotalCharge()) {
                $data['PreTaxTotalCharge'] = $object->getPreTaxTotalCharge();
            }
            if ($object->isInitialized('preTaxTotalIncentedCharge') && null !== $object->getPreTaxTotalIncentedCharge()) {
                $data['PreTaxTotalIncentedCharge'] = $object->getPreTaxTotalIncentedCharge();
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
            return ['ShipStream\\Ups\\Api\\Model\\PickupRateResponseRateResult' => false];
        }
    }
} else {
    class PickupRateResponseRateResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PickupRateResponseRateResult';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PickupRateResponseRateResult';
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
            $object = new \ShipStream\Ups\Api\Model\PickupRateResponseRateResult();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Disclaimer', $data)) {
                $object->setDisclaimer($this->denormalizer->denormalize($data['Disclaimer'], 'ShipStream\\Ups\\Api\\Model\\RateResultDisclaimer', 'json', $context));
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
                $object->setChargeDetail($this->denormalizer->denormalize($data['ChargeDetail'], 'ShipStream\\Ups\\Api\\Model\\RateResultChargeDetail', 'json', $context));
                unset($data['ChargeDetail']);
            }
            if (\array_key_exists('TaxCharges', $data)) {
                $object->setTaxCharges($this->denormalizer->denormalize($data['TaxCharges'], 'ShipStream\\Ups\\Api\\Model\\RateResultTaxCharges', 'json', $context));
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
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('disclaimer') && null !== $object->getDisclaimer()) {
                $data['Disclaimer'] = $this->normalizer->normalize($object->getDisclaimer(), 'json', $context);
            }
            if ($object->isInitialized('rateType') && null !== $object->getRateType()) {
                $data['RateType'] = $object->getRateType();
            }
            $data['CurrencyCode'] = $object->getCurrencyCode();
            if ($object->isInitialized('chargeDetail') && null !== $object->getChargeDetail()) {
                $data['ChargeDetail'] = $this->normalizer->normalize($object->getChargeDetail(), 'json', $context);
            }
            if ($object->isInitialized('taxCharges') && null !== $object->getTaxCharges()) {
                $data['TaxCharges'] = $this->normalizer->normalize($object->getTaxCharges(), 'json', $context);
            }
            if ($object->isInitialized('totalTax') && null !== $object->getTotalTax()) {
                $data['TotalTax'] = $object->getTotalTax();
            }
            if ($object->isInitialized('grandTotalOfAllCharge') && null !== $object->getGrandTotalOfAllCharge()) {
                $data['GrandTotalOfAllCharge'] = $object->getGrandTotalOfAllCharge();
            }
            if ($object->isInitialized('grandTotalOfAllIncentedCharge') && null !== $object->getGrandTotalOfAllIncentedCharge()) {
                $data['GrandTotalOfAllIncentedCharge'] = $object->getGrandTotalOfAllIncentedCharge();
            }
            if ($object->isInitialized('preTaxTotalCharge') && null !== $object->getPreTaxTotalCharge()) {
                $data['PreTaxTotalCharge'] = $object->getPreTaxTotalCharge();
            }
            if ($object->isInitialized('preTaxTotalIncentedCharge') && null !== $object->getPreTaxTotalIncentedCharge()) {
                $data['PreTaxTotalIncentedCharge'] = $object->getPreTaxTotalIncentedCharge();
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
            return ['ShipStream\\Ups\\Api\\Model\\PickupRateResponseRateResult' => false];
        }
    }
}