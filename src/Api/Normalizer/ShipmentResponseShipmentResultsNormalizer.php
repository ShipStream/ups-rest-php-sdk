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
class ShipmentResponseShipmentResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ShipmentResponseShipmentResults::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ShipmentResponseShipmentResults::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\ShipmentResultsDisclaimer::class, 'json', $context);
            }
            $object->setDisclaimer($values);
            unset($data['Disclaimer']);
        }
        if (\array_key_exists('ShipmentCharges', $data)) {
            $object->setShipmentCharges($this->denormalizer->denormalize($data['ShipmentCharges'], \ShipStream\Ups\Api\Model\ShipmentResultsShipmentCharges::class, 'json', $context));
            unset($data['ShipmentCharges']);
        }
        if (\array_key_exists('NegotiatedRateCharges', $data) && $data['NegotiatedRateCharges'] !== null) {
            $object->setNegotiatedRateCharges($this->denormalizer->denormalize($data['NegotiatedRateCharges'], \ShipStream\Ups\Api\Model\ShipmentResultsNegotiatedRateCharges::class, 'json', $context));
            unset($data['NegotiatedRateCharges']);
        }
        elseif (\array_key_exists('NegotiatedRateCharges', $data) && $data['NegotiatedRateCharges'] === null) {
            $object->setNegotiatedRateCharges(null);
        }
        if (\array_key_exists('FRSShipmentData', $data) && $data['FRSShipmentData'] !== null) {
            $object->setFRSShipmentData($this->denormalizer->denormalize($data['FRSShipmentData'], \ShipStream\Ups\Api\Model\ShipmentResultsFRSShipmentData::class, 'json', $context));
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
            $object->setBillingWeight($this->denormalizer->denormalize($data['BillingWeight'], \ShipStream\Ups\Api\Model\ShipmentResultsBillingWeight::class, 'json', $context));
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
                $values_1[] = $this->denormalizer->denormalize($value_1, \ShipStream\Ups\Api\Model\ShipmentResultsPackageResults::class, 'json', $context);
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
                $values_2[] = $this->denormalizer->denormalize($value_2, \ShipStream\Ups\Api\Model\ShipmentResultsControlLogReceipt::class, 'json', $context);
            }
            $object->setControlLogReceipt($values_2);
            unset($data['ControlLogReceipt']);
        }
        elseif (\array_key_exists('ControlLogReceipt', $data) && $data['ControlLogReceipt'] === null) {
            $object->setControlLogReceipt(null);
        }
        if (\array_key_exists('Form', $data) && $data['Form'] !== null) {
            $object->setForm($this->denormalizer->denormalize($data['Form'], \ShipStream\Ups\Api\Model\ShipmentResultsForm::class, 'json', $context));
            unset($data['Form']);
        }
        elseif (\array_key_exists('Form', $data) && $data['Form'] === null) {
            $object->setForm(null);
        }
        if (\array_key_exists('CODTurnInPage', $data) && $data['CODTurnInPage'] !== null) {
            $object->setCODTurnInPage($this->denormalizer->denormalize($data['CODTurnInPage'], \ShipStream\Ups\Api\Model\ShipmentResultsCODTurnInPage::class, 'json', $context));
            unset($data['CODTurnInPage']);
        }
        elseif (\array_key_exists('CODTurnInPage', $data) && $data['CODTurnInPage'] === null) {
            $object->setCODTurnInPage(null);
        }
        if (\array_key_exists('HighValueReport', $data) && $data['HighValueReport'] !== null) {
            $object->setHighValueReport($this->denormalizer->denormalize($data['HighValueReport'], \ShipStream\Ups\Api\Model\ShipmentResultsHighValueReport::class, 'json', $context));
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
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('disclaimer') && null !== $data->getDisclaimer()) {
            $values = [];
            foreach ($data->getDisclaimer() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['Disclaimer'] = $values;
        }
        if ($data->isInitialized('shipmentCharges') && null !== $data->getShipmentCharges()) {
            $dataArray['ShipmentCharges'] = $this->normalizer->normalize($data->getShipmentCharges(), 'json', $context);
        }
        if ($data->isInitialized('negotiatedRateCharges')) {
            $dataArray['NegotiatedRateCharges'] = $this->normalizer->normalize($data->getNegotiatedRateCharges(), 'json', $context);
        }
        if ($data->isInitialized('fRSShipmentData')) {
            $dataArray['FRSShipmentData'] = $this->normalizer->normalize($data->getFRSShipmentData(), 'json', $context);
        }
        if ($data->isInitialized('ratingMethod')) {
            $dataArray['RatingMethod'] = $data->getRatingMethod();
        }
        if ($data->isInitialized('billableWeightCalculationMethod')) {
            $dataArray['BillableWeightCalculationMethod'] = $data->getBillableWeightCalculationMethod();
        }
        $dataArray['BillingWeight'] = $this->normalizer->normalize($data->getBillingWeight(), 'json', $context);
        if ($data->isInitialized('shipmentIdentificationNumber')) {
            $dataArray['ShipmentIdentificationNumber'] = $data->getShipmentIdentificationNumber();
        }
        if ($data->isInitialized('mIDualReturnShipmentKey')) {
            $dataArray['MIDualReturnShipmentKey'] = $data->getMIDualReturnShipmentKey();
        }
        if ($data->isInitialized('barCodeImage')) {
            $dataArray['BarCodeImage'] = $data->getBarCodeImage();
        }
        if ($data->isInitialized('packageResults')) {
            $values_1 = [];
            foreach ($data->getPackageResults() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['PackageResults'] = $values_1;
        }
        if ($data->isInitialized('controlLogReceipt')) {
            $values_2 = [];
            foreach ($data->getControlLogReceipt() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['ControlLogReceipt'] = $values_2;
        }
        if ($data->isInitialized('form')) {
            $dataArray['Form'] = $this->normalizer->normalize($data->getForm(), 'json', $context);
        }
        if ($data->isInitialized('cODTurnInPage')) {
            $dataArray['CODTurnInPage'] = $this->normalizer->normalize($data->getCODTurnInPage(), 'json', $context);
        }
        if ($data->isInitialized('highValueReport')) {
            $dataArray['HighValueReport'] = $this->normalizer->normalize($data->getHighValueReport(), 'json', $context);
        }
        if ($data->isInitialized('labelURL')) {
            $dataArray['LabelURL'] = $data->getLabelURL();
        }
        if ($data->isInitialized('localLanguageLabelURL')) {
            $dataArray['LocalLanguageLabelURL'] = $data->getLocalLanguageLabelURL();
        }
        if ($data->isInitialized('receiptURL')) {
            $dataArray['ReceiptURL'] = $data->getReceiptURL();
        }
        if ($data->isInitialized('localLanguageReceiptURL')) {
            $dataArray['LocalLanguageReceiptURL'] = $data->getLocalLanguageReceiptURL();
        }
        if ($data->isInitialized('dGPaperImage')) {
            $values_3 = [];
            foreach ($data->getDGPaperImage() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['DGPaperImage'] = $values_3;
        }
        if ($data->isInitialized('masterCartonID')) {
            $dataArray['MasterCartonID'] = $data->getMasterCartonID();
        }
        if ($data->isInitialized('roarRatedIndicator')) {
            $dataArray['RoarRatedIndicator'] = $data->getRoarRatedIndicator();
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\ShipmentResponseShipmentResults::class => false];
    }
}