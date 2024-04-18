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
    class ShipmentResponseShipmentResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentResponseShipmentResults';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentResponseShipmentResults';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\ShipmentResponseShipmentResults();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Disclaimer', $data)) {
                $values = [];
                foreach ($data['Disclaimer'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsDisclaimer', 'json', $context);
                }
                $object->setDisclaimer($values);
                unset($data['Disclaimer']);
            }
            if (\array_key_exists('ShipmentCharges', $data)) {
                $object->setShipmentCharges($this->denormalizer->denormalize($data['ShipmentCharges'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsShipmentCharges', 'json', $context));
                unset($data['ShipmentCharges']);
            }
            if (\array_key_exists('NegotiatedRateCharges', $data) && $data['NegotiatedRateCharges'] !== null) {
                $object->setNegotiatedRateCharges($this->denormalizer->denormalize($data['NegotiatedRateCharges'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsNegotiatedRateCharges', 'json', $context));
                unset($data['NegotiatedRateCharges']);
            }
            elseif (\array_key_exists('NegotiatedRateCharges', $data) && $data['NegotiatedRateCharges'] === null) {
                $object->setNegotiatedRateCharges(null);
            }
            if (\array_key_exists('FRSShipmentData', $data) && $data['FRSShipmentData'] !== null) {
                $object->setFRSShipmentData($this->denormalizer->denormalize($data['FRSShipmentData'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsFRSShipmentData', 'json', $context));
                unset($data['FRSShipmentData']);
            }
            elseif (\array_key_exists('FRSShipmentData', $data) && $data['FRSShipmentData'] === null) {
                $object->setFRSShipmentData(null);
            }
            if (\array_key_exists('RatingMethod', $data) && $data['RatingMethod'] !== null) {
                $object->setRatingMethod($data['RatingMethod']);
                unset($data['RatingMethod']);
            }
            elseif (\array_key_exists('RatingMethod', $data) && $data['RatingMethod'] === null) {
                $object->setRatingMethod(null);
            }
            if (\array_key_exists('BillableWeightCalculationMethod', $data) && $data['BillableWeightCalculationMethod'] !== null) {
                $object->setBillableWeightCalculationMethod($data['BillableWeightCalculationMethod']);
                unset($data['BillableWeightCalculationMethod']);
            }
            elseif (\array_key_exists('BillableWeightCalculationMethod', $data) && $data['BillableWeightCalculationMethod'] === null) {
                $object->setBillableWeightCalculationMethod(null);
            }
            if (\array_key_exists('BillingWeight', $data)) {
                $object->setBillingWeight($this->denormalizer->denormalize($data['BillingWeight'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsBillingWeight', 'json', $context));
                unset($data['BillingWeight']);
            }
            if (\array_key_exists('ShipmentIdentificationNumber', $data) && $data['ShipmentIdentificationNumber'] !== null) {
                $object->setShipmentIdentificationNumber($data['ShipmentIdentificationNumber']);
                unset($data['ShipmentIdentificationNumber']);
            }
            elseif (\array_key_exists('ShipmentIdentificationNumber', $data) && $data['ShipmentIdentificationNumber'] === null) {
                $object->setShipmentIdentificationNumber(null);
            }
            if (\array_key_exists('MIDualReturnShipmentKey', $data) && $data['MIDualReturnShipmentKey'] !== null) {
                $object->setMIDualReturnShipmentKey($data['MIDualReturnShipmentKey']);
                unset($data['MIDualReturnShipmentKey']);
            }
            elseif (\array_key_exists('MIDualReturnShipmentKey', $data) && $data['MIDualReturnShipmentKey'] === null) {
                $object->setMIDualReturnShipmentKey(null);
            }
            if (\array_key_exists('BarCodeImage', $data) && $data['BarCodeImage'] !== null) {
                $object->setBarCodeImage($data['BarCodeImage']);
                unset($data['BarCodeImage']);
            }
            elseif (\array_key_exists('BarCodeImage', $data) && $data['BarCodeImage'] === null) {
                $object->setBarCodeImage(null);
            }
            if (\array_key_exists('PackageResults', $data) && $data['PackageResults'] !== null) {
                $values_1 = [];
                foreach ($data['PackageResults'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsPackageResults', 'json', $context);
                }
                $object->setPackageResults($values_1);
                unset($data['PackageResults']);
            }
            elseif (\array_key_exists('PackageResults', $data) && $data['PackageResults'] === null) {
                $object->setPackageResults(null);
            }
            if (\array_key_exists('ControlLogReceipt', $data) && $data['ControlLogReceipt'] !== null) {
                $values_2 = [];
                foreach ($data['ControlLogReceipt'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsControlLogReceipt', 'json', $context);
                }
                $object->setControlLogReceipt($values_2);
                unset($data['ControlLogReceipt']);
            }
            elseif (\array_key_exists('ControlLogReceipt', $data) && $data['ControlLogReceipt'] === null) {
                $object->setControlLogReceipt(null);
            }
            if (\array_key_exists('Form', $data) && $data['Form'] !== null) {
                $object->setForm($this->denormalizer->denormalize($data['Form'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsForm', 'json', $context));
                unset($data['Form']);
            }
            elseif (\array_key_exists('Form', $data) && $data['Form'] === null) {
                $object->setForm(null);
            }
            if (\array_key_exists('CODTurnInPage', $data) && $data['CODTurnInPage'] !== null) {
                $object->setCODTurnInPage($this->denormalizer->denormalize($data['CODTurnInPage'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsCODTurnInPage', 'json', $context));
                unset($data['CODTurnInPage']);
            }
            elseif (\array_key_exists('CODTurnInPage', $data) && $data['CODTurnInPage'] === null) {
                $object->setCODTurnInPage(null);
            }
            if (\array_key_exists('HighValueReport', $data) && $data['HighValueReport'] !== null) {
                $object->setHighValueReport($this->denormalizer->denormalize($data['HighValueReport'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsHighValueReport', 'json', $context));
                unset($data['HighValueReport']);
            }
            elseif (\array_key_exists('HighValueReport', $data) && $data['HighValueReport'] === null) {
                $object->setHighValueReport(null);
            }
            if (\array_key_exists('LabelURL', $data) && $data['LabelURL'] !== null) {
                $object->setLabelURL($data['LabelURL']);
                unset($data['LabelURL']);
            }
            elseif (\array_key_exists('LabelURL', $data) && $data['LabelURL'] === null) {
                $object->setLabelURL(null);
            }
            if (\array_key_exists('LocalLanguageLabelURL', $data) && $data['LocalLanguageLabelURL'] !== null) {
                $object->setLocalLanguageLabelURL($data['LocalLanguageLabelURL']);
                unset($data['LocalLanguageLabelURL']);
            }
            elseif (\array_key_exists('LocalLanguageLabelURL', $data) && $data['LocalLanguageLabelURL'] === null) {
                $object->setLocalLanguageLabelURL(null);
            }
            if (\array_key_exists('ReceiptURL', $data) && $data['ReceiptURL'] !== null) {
                $object->setReceiptURL($data['ReceiptURL']);
                unset($data['ReceiptURL']);
            }
            elseif (\array_key_exists('ReceiptURL', $data) && $data['ReceiptURL'] === null) {
                $object->setReceiptURL(null);
            }
            if (\array_key_exists('LocalLanguageReceiptURL', $data) && $data['LocalLanguageReceiptURL'] !== null) {
                $object->setLocalLanguageReceiptURL($data['LocalLanguageReceiptURL']);
                unset($data['LocalLanguageReceiptURL']);
            }
            elseif (\array_key_exists('LocalLanguageReceiptURL', $data) && $data['LocalLanguageReceiptURL'] === null) {
                $object->setLocalLanguageReceiptURL(null);
            }
            if (\array_key_exists('DGPaperImage', $data) && $data['DGPaperImage'] !== null) {
                $values_3 = [];
                foreach ($data['DGPaperImage'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setDGPaperImage($values_3);
                unset($data['DGPaperImage']);
            }
            elseif (\array_key_exists('DGPaperImage', $data) && $data['DGPaperImage'] === null) {
                $object->setDGPaperImage(null);
            }
            if (\array_key_exists('MasterCartonID', $data) && $data['MasterCartonID'] !== null) {
                $object->setMasterCartonID($data['MasterCartonID']);
                unset($data['MasterCartonID']);
            }
            elseif (\array_key_exists('MasterCartonID', $data) && $data['MasterCartonID'] === null) {
                $object->setMasterCartonID(null);
            }
            if (\array_key_exists('RoarRatedIndicator', $data) && $data['RoarRatedIndicator'] !== null) {
                $object->setRoarRatedIndicator($data['RoarRatedIndicator']);
                unset($data['RoarRatedIndicator']);
            }
            elseif (\array_key_exists('RoarRatedIndicator', $data) && $data['RoarRatedIndicator'] === null) {
                $object->setRoarRatedIndicator(null);
            }
            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('disclaimer') && null !== $object->getDisclaimer()) {
                $values = [];
                foreach ($object->getDisclaimer() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Disclaimer'] = $values;
            }
            if ($object->isInitialized('shipmentCharges') && null !== $object->getShipmentCharges()) {
                $data['ShipmentCharges'] = $this->normalizer->normalize($object->getShipmentCharges(), 'json', $context);
            }
            if ($object->isInitialized('negotiatedRateCharges') && null !== $object->getNegotiatedRateCharges()) {
                $data['NegotiatedRateCharges'] = $this->normalizer->normalize($object->getNegotiatedRateCharges(), 'json', $context);
            }
            if ($object->isInitialized('fRSShipmentData') && null !== $object->getFRSShipmentData()) {
                $data['FRSShipmentData'] = $this->normalizer->normalize($object->getFRSShipmentData(), 'json', $context);
            }
            if ($object->isInitialized('ratingMethod') && null !== $object->getRatingMethod()) {
                $data['RatingMethod'] = $object->getRatingMethod();
            }
            if ($object->isInitialized('billableWeightCalculationMethod') && null !== $object->getBillableWeightCalculationMethod()) {
                $data['BillableWeightCalculationMethod'] = $object->getBillableWeightCalculationMethod();
            }
            $data['BillingWeight'] = $this->normalizer->normalize($object->getBillingWeight(), 'json', $context);
            if ($object->isInitialized('shipmentIdentificationNumber') && null !== $object->getShipmentIdentificationNumber()) {
                $data['ShipmentIdentificationNumber'] = $object->getShipmentIdentificationNumber();
            }
            if ($object->isInitialized('mIDualReturnShipmentKey') && null !== $object->getMIDualReturnShipmentKey()) {
                $data['MIDualReturnShipmentKey'] = $object->getMIDualReturnShipmentKey();
            }
            if ($object->isInitialized('barCodeImage') && null !== $object->getBarCodeImage()) {
                $data['BarCodeImage'] = $object->getBarCodeImage();
            }
            if ($object->isInitialized('packageResults') && null !== $object->getPackageResults()) {
                $values_1 = [];
                foreach ($object->getPackageResults() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['PackageResults'] = $values_1;
            }
            if ($object->isInitialized('controlLogReceipt') && null !== $object->getControlLogReceipt()) {
                $values_2 = [];
                foreach ($object->getControlLogReceipt() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['ControlLogReceipt'] = $values_2;
            }
            if ($object->isInitialized('form') && null !== $object->getForm()) {
                $data['Form'] = $this->normalizer->normalize($object->getForm(), 'json', $context);
            }
            if ($object->isInitialized('cODTurnInPage') && null !== $object->getCODTurnInPage()) {
                $data['CODTurnInPage'] = $this->normalizer->normalize($object->getCODTurnInPage(), 'json', $context);
            }
            if ($object->isInitialized('highValueReport') && null !== $object->getHighValueReport()) {
                $data['HighValueReport'] = $this->normalizer->normalize($object->getHighValueReport(), 'json', $context);
            }
            if ($object->isInitialized('labelURL') && null !== $object->getLabelURL()) {
                $data['LabelURL'] = $object->getLabelURL();
            }
            if ($object->isInitialized('localLanguageLabelURL') && null !== $object->getLocalLanguageLabelURL()) {
                $data['LocalLanguageLabelURL'] = $object->getLocalLanguageLabelURL();
            }
            if ($object->isInitialized('receiptURL') && null !== $object->getReceiptURL()) {
                $data['ReceiptURL'] = $object->getReceiptURL();
            }
            if ($object->isInitialized('localLanguageReceiptURL') && null !== $object->getLocalLanguageReceiptURL()) {
                $data['LocalLanguageReceiptURL'] = $object->getLocalLanguageReceiptURL();
            }
            if ($object->isInitialized('dGPaperImage') && null !== $object->getDGPaperImage()) {
                $values_3 = [];
                foreach ($object->getDGPaperImage() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['DGPaperImage'] = $values_3;
            }
            if ($object->isInitialized('masterCartonID') && null !== $object->getMasterCartonID()) {
                $data['MasterCartonID'] = $object->getMasterCartonID();
            }
            if ($object->isInitialized('roarRatedIndicator') && null !== $object->getRoarRatedIndicator()) {
                $data['RoarRatedIndicator'] = $object->getRoarRatedIndicator();
            }
            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentResponseShipmentResults' => false];
        }
    }
} else {
    class ShipmentResponseShipmentResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentResponseShipmentResults';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentResponseShipmentResults';
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
            $object = new \ShipStream\Ups\Api\Model\ShipmentResponseShipmentResults();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Disclaimer', $data)) {
                $values = [];
                foreach ($data['Disclaimer'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsDisclaimer', 'json', $context);
                }
                $object->setDisclaimer($values);
                unset($data['Disclaimer']);
            }
            if (\array_key_exists('ShipmentCharges', $data)) {
                $object->setShipmentCharges($this->denormalizer->denormalize($data['ShipmentCharges'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsShipmentCharges', 'json', $context));
                unset($data['ShipmentCharges']);
            }
            if (\array_key_exists('NegotiatedRateCharges', $data) && $data['NegotiatedRateCharges'] !== null) {
                $object->setNegotiatedRateCharges($this->denormalizer->denormalize($data['NegotiatedRateCharges'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsNegotiatedRateCharges', 'json', $context));
                unset($data['NegotiatedRateCharges']);
            }
            elseif (\array_key_exists('NegotiatedRateCharges', $data) && $data['NegotiatedRateCharges'] === null) {
                $object->setNegotiatedRateCharges(null);
            }
            if (\array_key_exists('FRSShipmentData', $data) && $data['FRSShipmentData'] !== null) {
                $object->setFRSShipmentData($this->denormalizer->denormalize($data['FRSShipmentData'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsFRSShipmentData', 'json', $context));
                unset($data['FRSShipmentData']);
            }
            elseif (\array_key_exists('FRSShipmentData', $data) && $data['FRSShipmentData'] === null) {
                $object->setFRSShipmentData(null);
            }
            if (\array_key_exists('RatingMethod', $data) && $data['RatingMethod'] !== null) {
                $object->setRatingMethod($data['RatingMethod']);
                unset($data['RatingMethod']);
            }
            elseif (\array_key_exists('RatingMethod', $data) && $data['RatingMethod'] === null) {
                $object->setRatingMethod(null);
            }
            if (\array_key_exists('BillableWeightCalculationMethod', $data) && $data['BillableWeightCalculationMethod'] !== null) {
                $object->setBillableWeightCalculationMethod($data['BillableWeightCalculationMethod']);
                unset($data['BillableWeightCalculationMethod']);
            }
            elseif (\array_key_exists('BillableWeightCalculationMethod', $data) && $data['BillableWeightCalculationMethod'] === null) {
                $object->setBillableWeightCalculationMethod(null);
            }
            if (\array_key_exists('BillingWeight', $data)) {
                $object->setBillingWeight($this->denormalizer->denormalize($data['BillingWeight'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsBillingWeight', 'json', $context));
                unset($data['BillingWeight']);
            }
            if (\array_key_exists('ShipmentIdentificationNumber', $data) && $data['ShipmentIdentificationNumber'] !== null) {
                $object->setShipmentIdentificationNumber($data['ShipmentIdentificationNumber']);
                unset($data['ShipmentIdentificationNumber']);
            }
            elseif (\array_key_exists('ShipmentIdentificationNumber', $data) && $data['ShipmentIdentificationNumber'] === null) {
                $object->setShipmentIdentificationNumber(null);
            }
            if (\array_key_exists('MIDualReturnShipmentKey', $data) && $data['MIDualReturnShipmentKey'] !== null) {
                $object->setMIDualReturnShipmentKey($data['MIDualReturnShipmentKey']);
                unset($data['MIDualReturnShipmentKey']);
            }
            elseif (\array_key_exists('MIDualReturnShipmentKey', $data) && $data['MIDualReturnShipmentKey'] === null) {
                $object->setMIDualReturnShipmentKey(null);
            }
            if (\array_key_exists('BarCodeImage', $data) && $data['BarCodeImage'] !== null) {
                $object->setBarCodeImage($data['BarCodeImage']);
                unset($data['BarCodeImage']);
            }
            elseif (\array_key_exists('BarCodeImage', $data) && $data['BarCodeImage'] === null) {
                $object->setBarCodeImage(null);
            }
            if (\array_key_exists('PackageResults', $data) && $data['PackageResults'] !== null) {
                $values_1 = [];
                foreach ($data['PackageResults'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsPackageResults', 'json', $context);
                }
                $object->setPackageResults($values_1);
                unset($data['PackageResults']);
            }
            elseif (\array_key_exists('PackageResults', $data) && $data['PackageResults'] === null) {
                $object->setPackageResults(null);
            }
            if (\array_key_exists('ControlLogReceipt', $data) && $data['ControlLogReceipt'] !== null) {
                $values_2 = [];
                foreach ($data['ControlLogReceipt'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsControlLogReceipt', 'json', $context);
                }
                $object->setControlLogReceipt($values_2);
                unset($data['ControlLogReceipt']);
            }
            elseif (\array_key_exists('ControlLogReceipt', $data) && $data['ControlLogReceipt'] === null) {
                $object->setControlLogReceipt(null);
            }
            if (\array_key_exists('Form', $data) && $data['Form'] !== null) {
                $object->setForm($this->denormalizer->denormalize($data['Form'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsForm', 'json', $context));
                unset($data['Form']);
            }
            elseif (\array_key_exists('Form', $data) && $data['Form'] === null) {
                $object->setForm(null);
            }
            if (\array_key_exists('CODTurnInPage', $data) && $data['CODTurnInPage'] !== null) {
                $object->setCODTurnInPage($this->denormalizer->denormalize($data['CODTurnInPage'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsCODTurnInPage', 'json', $context));
                unset($data['CODTurnInPage']);
            }
            elseif (\array_key_exists('CODTurnInPage', $data) && $data['CODTurnInPage'] === null) {
                $object->setCODTurnInPage(null);
            }
            if (\array_key_exists('HighValueReport', $data) && $data['HighValueReport'] !== null) {
                $object->setHighValueReport($this->denormalizer->denormalize($data['HighValueReport'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsHighValueReport', 'json', $context));
                unset($data['HighValueReport']);
            }
            elseif (\array_key_exists('HighValueReport', $data) && $data['HighValueReport'] === null) {
                $object->setHighValueReport(null);
            }
            if (\array_key_exists('LabelURL', $data) && $data['LabelURL'] !== null) {
                $object->setLabelURL($data['LabelURL']);
                unset($data['LabelURL']);
            }
            elseif (\array_key_exists('LabelURL', $data) && $data['LabelURL'] === null) {
                $object->setLabelURL(null);
            }
            if (\array_key_exists('LocalLanguageLabelURL', $data) && $data['LocalLanguageLabelURL'] !== null) {
                $object->setLocalLanguageLabelURL($data['LocalLanguageLabelURL']);
                unset($data['LocalLanguageLabelURL']);
            }
            elseif (\array_key_exists('LocalLanguageLabelURL', $data) && $data['LocalLanguageLabelURL'] === null) {
                $object->setLocalLanguageLabelURL(null);
            }
            if (\array_key_exists('ReceiptURL', $data) && $data['ReceiptURL'] !== null) {
                $object->setReceiptURL($data['ReceiptURL']);
                unset($data['ReceiptURL']);
            }
            elseif (\array_key_exists('ReceiptURL', $data) && $data['ReceiptURL'] === null) {
                $object->setReceiptURL(null);
            }
            if (\array_key_exists('LocalLanguageReceiptURL', $data) && $data['LocalLanguageReceiptURL'] !== null) {
                $object->setLocalLanguageReceiptURL($data['LocalLanguageReceiptURL']);
                unset($data['LocalLanguageReceiptURL']);
            }
            elseif (\array_key_exists('LocalLanguageReceiptURL', $data) && $data['LocalLanguageReceiptURL'] === null) {
                $object->setLocalLanguageReceiptURL(null);
            }
            if (\array_key_exists('DGPaperImage', $data) && $data['DGPaperImage'] !== null) {
                $values_3 = [];
                foreach ($data['DGPaperImage'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setDGPaperImage($values_3);
                unset($data['DGPaperImage']);
            }
            elseif (\array_key_exists('DGPaperImage', $data) && $data['DGPaperImage'] === null) {
                $object->setDGPaperImage(null);
            }
            if (\array_key_exists('MasterCartonID', $data) && $data['MasterCartonID'] !== null) {
                $object->setMasterCartonID($data['MasterCartonID']);
                unset($data['MasterCartonID']);
            }
            elseif (\array_key_exists('MasterCartonID', $data) && $data['MasterCartonID'] === null) {
                $object->setMasterCartonID(null);
            }
            if (\array_key_exists('RoarRatedIndicator', $data) && $data['RoarRatedIndicator'] !== null) {
                $object->setRoarRatedIndicator($data['RoarRatedIndicator']);
                unset($data['RoarRatedIndicator']);
            }
            elseif (\array_key_exists('RoarRatedIndicator', $data) && $data['RoarRatedIndicator'] === null) {
                $object->setRoarRatedIndicator(null);
            }
            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
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
                $values = [];
                foreach ($object->getDisclaimer() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Disclaimer'] = $values;
            }
            if ($object->isInitialized('shipmentCharges') && null !== $object->getShipmentCharges()) {
                $data['ShipmentCharges'] = $this->normalizer->normalize($object->getShipmentCharges(), 'json', $context);
            }
            if ($object->isInitialized('negotiatedRateCharges') && null !== $object->getNegotiatedRateCharges()) {
                $data['NegotiatedRateCharges'] = $this->normalizer->normalize($object->getNegotiatedRateCharges(), 'json', $context);
            }
            if ($object->isInitialized('fRSShipmentData') && null !== $object->getFRSShipmentData()) {
                $data['FRSShipmentData'] = $this->normalizer->normalize($object->getFRSShipmentData(), 'json', $context);
            }
            if ($object->isInitialized('ratingMethod') && null !== $object->getRatingMethod()) {
                $data['RatingMethod'] = $object->getRatingMethod();
            }
            if ($object->isInitialized('billableWeightCalculationMethod') && null !== $object->getBillableWeightCalculationMethod()) {
                $data['BillableWeightCalculationMethod'] = $object->getBillableWeightCalculationMethod();
            }
            $data['BillingWeight'] = $this->normalizer->normalize($object->getBillingWeight(), 'json', $context);
            if ($object->isInitialized('shipmentIdentificationNumber') && null !== $object->getShipmentIdentificationNumber()) {
                $data['ShipmentIdentificationNumber'] = $object->getShipmentIdentificationNumber();
            }
            if ($object->isInitialized('mIDualReturnShipmentKey') && null !== $object->getMIDualReturnShipmentKey()) {
                $data['MIDualReturnShipmentKey'] = $object->getMIDualReturnShipmentKey();
            }
            if ($object->isInitialized('barCodeImage') && null !== $object->getBarCodeImage()) {
                $data['BarCodeImage'] = $object->getBarCodeImage();
            }
            if ($object->isInitialized('packageResults') && null !== $object->getPackageResults()) {
                $values_1 = [];
                foreach ($object->getPackageResults() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['PackageResults'] = $values_1;
            }
            if ($object->isInitialized('controlLogReceipt') && null !== $object->getControlLogReceipt()) {
                $values_2 = [];
                foreach ($object->getControlLogReceipt() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['ControlLogReceipt'] = $values_2;
            }
            if ($object->isInitialized('form') && null !== $object->getForm()) {
                $data['Form'] = $this->normalizer->normalize($object->getForm(), 'json', $context);
            }
            if ($object->isInitialized('cODTurnInPage') && null !== $object->getCODTurnInPage()) {
                $data['CODTurnInPage'] = $this->normalizer->normalize($object->getCODTurnInPage(), 'json', $context);
            }
            if ($object->isInitialized('highValueReport') && null !== $object->getHighValueReport()) {
                $data['HighValueReport'] = $this->normalizer->normalize($object->getHighValueReport(), 'json', $context);
            }
            if ($object->isInitialized('labelURL') && null !== $object->getLabelURL()) {
                $data['LabelURL'] = $object->getLabelURL();
            }
            if ($object->isInitialized('localLanguageLabelURL') && null !== $object->getLocalLanguageLabelURL()) {
                $data['LocalLanguageLabelURL'] = $object->getLocalLanguageLabelURL();
            }
            if ($object->isInitialized('receiptURL') && null !== $object->getReceiptURL()) {
                $data['ReceiptURL'] = $object->getReceiptURL();
            }
            if ($object->isInitialized('localLanguageReceiptURL') && null !== $object->getLocalLanguageReceiptURL()) {
                $data['LocalLanguageReceiptURL'] = $object->getLocalLanguageReceiptURL();
            }
            if ($object->isInitialized('dGPaperImage') && null !== $object->getDGPaperImage()) {
                $values_3 = [];
                foreach ($object->getDGPaperImage() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['DGPaperImage'] = $values_3;
            }
            if ($object->isInitialized('masterCartonID') && null !== $object->getMasterCartonID()) {
                $data['MasterCartonID'] = $object->getMasterCartonID();
            }
            if ($object->isInitialized('roarRatedIndicator') && null !== $object->getRoarRatedIndicator()) {
                $data['RoarRatedIndicator'] = $object->getRoarRatedIndicator();
            }
            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentResponseShipmentResults' => false];
        }
    }
}