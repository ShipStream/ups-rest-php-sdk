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
class ShipmentServiceOptionsInternationalFormsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ShipmentServiceOptionsInternationalForms::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ShipmentServiceOptionsInternationalForms::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ShipmentServiceOptionsInternationalForms();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('FormType', $data)) {
            $values = [];
            foreach ($data['FormType'] as $value) {
                $values[] = $value;
            }
            $object->setFormType($values);
            unset($data['FormType']);
        }
        if (\array_key_exists('UserCreatedForm', $data)) {
            $object->setUserCreatedForm($this->denormalizer->denormalize($data['UserCreatedForm'], \ShipStream\Ups\Api\Model\InternationalFormsUserCreatedForm::class, 'json', $context));
            unset($data['UserCreatedForm']);
        }
        if (\array_key_exists('UPSPremiumCareForm', $data)) {
            $object->setUPSPremiumCareForm($this->denormalizer->denormalize($data['UPSPremiumCareForm'], \ShipStream\Ups\Api\Model\InternationalFormsUPSPremiumCareForm::class, 'json', $context));
            unset($data['UPSPremiumCareForm']);
        }
        if (\array_key_exists('CN22Form', $data)) {
            $object->setCN22Form($this->denormalizer->denormalize($data['CN22Form'], \ShipStream\Ups\Api\Model\InternationalFormsCN22Form::class, 'json', $context));
            unset($data['CN22Form']);
        }
        if (\array_key_exists('AdditionalDocumentIndicator', $data)) {
            $object->setAdditionalDocumentIndicator($data['AdditionalDocumentIndicator']);
            unset($data['AdditionalDocumentIndicator']);
        }
        if (\array_key_exists('FormGroupIdName', $data)) {
            $object->setFormGroupIdName($data['FormGroupIdName']);
            unset($data['FormGroupIdName']);
        }
        if (\array_key_exists('EEIFilingOption', $data)) {
            $object->setEEIFilingOption($this->denormalizer->denormalize($data['EEIFilingOption'], \ShipStream\Ups\Api\Model\InternationalFormsEEIFilingOption::class, 'json', $context));
            unset($data['EEIFilingOption']);
        }
        if (\array_key_exists('Contacts', $data)) {
            $object->setContacts($this->denormalizer->denormalize($data['Contacts'], \ShipStream\Ups\Api\Model\InternationalFormsContacts::class, 'json', $context));
            unset($data['Contacts']);
        }
        if (\array_key_exists('Product', $data) && $data['Product'] !== null) {
            $values_1 = [];
            foreach ($data['Product'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \ShipStream\Ups\Api\Model\InternationalFormsProduct::class, 'json', $context);
            }
            $object->setProduct($values_1);
            unset($data['Product']);
        }
        elseif (\array_key_exists('Product', $data) && $data['Product'] === null) {
            $object->setProduct(null);
        }
        if (\array_key_exists('InvoiceNumber', $data)) {
            $object->setInvoiceNumber($data['InvoiceNumber']);
            unset($data['InvoiceNumber']);
        }
        if (\array_key_exists('InvoiceDate', $data)) {
            $object->setInvoiceDate($data['InvoiceDate']);
            unset($data['InvoiceDate']);
        }
        if (\array_key_exists('PurchaseOrderNumber', $data)) {
            $object->setPurchaseOrderNumber($data['PurchaseOrderNumber']);
            unset($data['PurchaseOrderNumber']);
        }
        if (\array_key_exists('TermsOfShipment', $data)) {
            $object->setTermsOfShipment($data['TermsOfShipment']);
            unset($data['TermsOfShipment']);
        }
        if (\array_key_exists('ReasonForExport', $data)) {
            $object->setReasonForExport($data['ReasonForExport']);
            unset($data['ReasonForExport']);
        }
        if (\array_key_exists('Comments', $data)) {
            $object->setComments($data['Comments']);
            unset($data['Comments']);
        }
        if (\array_key_exists('DeclarationStatement', $data)) {
            $object->setDeclarationStatement($data['DeclarationStatement']);
            unset($data['DeclarationStatement']);
        }
        if (\array_key_exists('Discount', $data)) {
            $object->setDiscount($this->denormalizer->denormalize($data['Discount'], \ShipStream\Ups\Api\Model\InternationalFormsDiscount::class, 'json', $context));
            unset($data['Discount']);
        }
        if (\array_key_exists('FreightCharges', $data)) {
            $object->setFreightCharges($this->denormalizer->denormalize($data['FreightCharges'], \ShipStream\Ups\Api\Model\InternationalFormsFreightCharges::class, 'json', $context));
            unset($data['FreightCharges']);
        }
        if (\array_key_exists('InsuranceCharges', $data)) {
            $object->setInsuranceCharges($this->denormalizer->denormalize($data['InsuranceCharges'], \ShipStream\Ups\Api\Model\InternationalFormsInsuranceCharges::class, 'json', $context));
            unset($data['InsuranceCharges']);
        }
        if (\array_key_exists('OtherCharges', $data)) {
            $object->setOtherCharges($this->denormalizer->denormalize($data['OtherCharges'], \ShipStream\Ups\Api\Model\InternationalFormsOtherCharges::class, 'json', $context));
            unset($data['OtherCharges']);
        }
        if (\array_key_exists('CurrencyCode', $data)) {
            $object->setCurrencyCode($data['CurrencyCode']);
            unset($data['CurrencyCode']);
        }
        if (\array_key_exists('BlanketPeriod', $data)) {
            $object->setBlanketPeriod($this->denormalizer->denormalize($data['BlanketPeriod'], \ShipStream\Ups\Api\Model\InternationalFormsBlanketPeriod::class, 'json', $context));
            unset($data['BlanketPeriod']);
        }
        if (\array_key_exists('ExportDate', $data)) {
            $object->setExportDate($data['ExportDate']);
            unset($data['ExportDate']);
        }
        if (\array_key_exists('ExportingCarrier', $data)) {
            $object->setExportingCarrier($data['ExportingCarrier']);
            unset($data['ExportingCarrier']);
        }
        if (\array_key_exists('CarrierID', $data)) {
            $object->setCarrierID($data['CarrierID']);
            unset($data['CarrierID']);
        }
        if (\array_key_exists('InBondCode', $data)) {
            $object->setInBondCode($data['InBondCode']);
            unset($data['InBondCode']);
        }
        if (\array_key_exists('EntryNumber', $data)) {
            $object->setEntryNumber($data['EntryNumber']);
            unset($data['EntryNumber']);
        }
        if (\array_key_exists('PointOfOrigin', $data)) {
            $object->setPointOfOrigin($data['PointOfOrigin']);
            unset($data['PointOfOrigin']);
        }
        if (\array_key_exists('PointOfOriginType', $data)) {
            $object->setPointOfOriginType($data['PointOfOriginType']);
            unset($data['PointOfOriginType']);
        }
        if (\array_key_exists('ModeOfTransport', $data)) {
            $object->setModeOfTransport($data['ModeOfTransport']);
            unset($data['ModeOfTransport']);
        }
        if (\array_key_exists('PortOfExport', $data)) {
            $object->setPortOfExport($data['PortOfExport']);
            unset($data['PortOfExport']);
        }
        if (\array_key_exists('PortOfUnloading', $data)) {
            $object->setPortOfUnloading($data['PortOfUnloading']);
            unset($data['PortOfUnloading']);
        }
        if (\array_key_exists('LoadingPier', $data)) {
            $object->setLoadingPier($data['LoadingPier']);
            unset($data['LoadingPier']);
        }
        if (\array_key_exists('PartiesToTransaction', $data)) {
            $object->setPartiesToTransaction($data['PartiesToTransaction']);
            unset($data['PartiesToTransaction']);
        }
        if (\array_key_exists('RoutedExportTransactionIndicator', $data)) {
            $object->setRoutedExportTransactionIndicator($data['RoutedExportTransactionIndicator']);
            unset($data['RoutedExportTransactionIndicator']);
        }
        if (\array_key_exists('ContainerizedIndicator', $data)) {
            $object->setContainerizedIndicator($data['ContainerizedIndicator']);
            unset($data['ContainerizedIndicator']);
        }
        if (\array_key_exists('OverridePaperlessIndicator', $data)) {
            $object->setOverridePaperlessIndicator($data['OverridePaperlessIndicator']);
            unset($data['OverridePaperlessIndicator']);
        }
        if (\array_key_exists('ShipperMemo', $data)) {
            $object->setShipperMemo($data['ShipperMemo']);
            unset($data['ShipperMemo']);
        }
        if (\array_key_exists('HazardousMaterialsIndicator', $data)) {
            $object->setHazardousMaterialsIndicator($data['HazardousMaterialsIndicator']);
            unset($data['HazardousMaterialsIndicator']);
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
        $values = [];
        foreach ($data->getFormType() as $value) {
            $values[] = $value;
        }
        $dataArray['FormType'] = $values;
        if ($data->isInitialized('userCreatedForm') && null !== $data->getUserCreatedForm()) {
            $dataArray['UserCreatedForm'] = $this->normalizer->normalize($data->getUserCreatedForm(), 'json', $context);
        }
        if ($data->isInitialized('uPSPremiumCareForm') && null !== $data->getUPSPremiumCareForm()) {
            $dataArray['UPSPremiumCareForm'] = $this->normalizer->normalize($data->getUPSPremiumCareForm(), 'json', $context);
        }
        if ($data->isInitialized('cN22Form') && null !== $data->getCN22Form()) {
            $dataArray['CN22Form'] = $this->normalizer->normalize($data->getCN22Form(), 'json', $context);
        }
        if ($data->isInitialized('additionalDocumentIndicator') && null !== $data->getAdditionalDocumentIndicator()) {
            $dataArray['AdditionalDocumentIndicator'] = $data->getAdditionalDocumentIndicator();
        }
        if ($data->isInitialized('formGroupIdName') && null !== $data->getFormGroupIdName()) {
            $dataArray['FormGroupIdName'] = $data->getFormGroupIdName();
        }
        if ($data->isInitialized('eEIFilingOption') && null !== $data->getEEIFilingOption()) {
            $dataArray['EEIFilingOption'] = $this->normalizer->normalize($data->getEEIFilingOption(), 'json', $context);
        }
        if ($data->isInitialized('contacts') && null !== $data->getContacts()) {
            $dataArray['Contacts'] = $this->normalizer->normalize($data->getContacts(), 'json', $context);
        }
        $values_1 = [];
        foreach ($data->getProduct() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['Product'] = $values_1;
        if ($data->isInitialized('invoiceNumber') && null !== $data->getInvoiceNumber()) {
            $dataArray['InvoiceNumber'] = $data->getInvoiceNumber();
        }
        if ($data->isInitialized('invoiceDate') && null !== $data->getInvoiceDate()) {
            $dataArray['InvoiceDate'] = $data->getInvoiceDate();
        }
        if ($data->isInitialized('purchaseOrderNumber') && null !== $data->getPurchaseOrderNumber()) {
            $dataArray['PurchaseOrderNumber'] = $data->getPurchaseOrderNumber();
        }
        if ($data->isInitialized('termsOfShipment') && null !== $data->getTermsOfShipment()) {
            $dataArray['TermsOfShipment'] = $data->getTermsOfShipment();
        }
        if ($data->isInitialized('reasonForExport') && null !== $data->getReasonForExport()) {
            $dataArray['ReasonForExport'] = $data->getReasonForExport();
        }
        if ($data->isInitialized('comments') && null !== $data->getComments()) {
            $dataArray['Comments'] = $data->getComments();
        }
        if ($data->isInitialized('declarationStatement') && null !== $data->getDeclarationStatement()) {
            $dataArray['DeclarationStatement'] = $data->getDeclarationStatement();
        }
        if ($data->isInitialized('discount') && null !== $data->getDiscount()) {
            $dataArray['Discount'] = $this->normalizer->normalize($data->getDiscount(), 'json', $context);
        }
        if ($data->isInitialized('freightCharges') && null !== $data->getFreightCharges()) {
            $dataArray['FreightCharges'] = $this->normalizer->normalize($data->getFreightCharges(), 'json', $context);
        }
        if ($data->isInitialized('insuranceCharges') && null !== $data->getInsuranceCharges()) {
            $dataArray['InsuranceCharges'] = $this->normalizer->normalize($data->getInsuranceCharges(), 'json', $context);
        }
        if ($data->isInitialized('otherCharges') && null !== $data->getOtherCharges()) {
            $dataArray['OtherCharges'] = $this->normalizer->normalize($data->getOtherCharges(), 'json', $context);
        }
        if ($data->isInitialized('currencyCode') && null !== $data->getCurrencyCode()) {
            $dataArray['CurrencyCode'] = $data->getCurrencyCode();
        }
        if ($data->isInitialized('blanketPeriod') && null !== $data->getBlanketPeriod()) {
            $dataArray['BlanketPeriod'] = $this->normalizer->normalize($data->getBlanketPeriod(), 'json', $context);
        }
        if ($data->isInitialized('exportDate') && null !== $data->getExportDate()) {
            $dataArray['ExportDate'] = $data->getExportDate();
        }
        if ($data->isInitialized('exportingCarrier') && null !== $data->getExportingCarrier()) {
            $dataArray['ExportingCarrier'] = $data->getExportingCarrier();
        }
        if ($data->isInitialized('carrierID') && null !== $data->getCarrierID()) {
            $dataArray['CarrierID'] = $data->getCarrierID();
        }
        if ($data->isInitialized('inBondCode') && null !== $data->getInBondCode()) {
            $dataArray['InBondCode'] = $data->getInBondCode();
        }
        if ($data->isInitialized('entryNumber') && null !== $data->getEntryNumber()) {
            $dataArray['EntryNumber'] = $data->getEntryNumber();
        }
        if ($data->isInitialized('pointOfOrigin') && null !== $data->getPointOfOrigin()) {
            $dataArray['PointOfOrigin'] = $data->getPointOfOrigin();
        }
        if ($data->isInitialized('pointOfOriginType') && null !== $data->getPointOfOriginType()) {
            $dataArray['PointOfOriginType'] = $data->getPointOfOriginType();
        }
        if ($data->isInitialized('modeOfTransport') && null !== $data->getModeOfTransport()) {
            $dataArray['ModeOfTransport'] = $data->getModeOfTransport();
        }
        if ($data->isInitialized('portOfExport') && null !== $data->getPortOfExport()) {
            $dataArray['PortOfExport'] = $data->getPortOfExport();
        }
        if ($data->isInitialized('portOfUnloading') && null !== $data->getPortOfUnloading()) {
            $dataArray['PortOfUnloading'] = $data->getPortOfUnloading();
        }
        if ($data->isInitialized('loadingPier') && null !== $data->getLoadingPier()) {
            $dataArray['LoadingPier'] = $data->getLoadingPier();
        }
        if ($data->isInitialized('partiesToTransaction') && null !== $data->getPartiesToTransaction()) {
            $dataArray['PartiesToTransaction'] = $data->getPartiesToTransaction();
        }
        if ($data->isInitialized('routedExportTransactionIndicator') && null !== $data->getRoutedExportTransactionIndicator()) {
            $dataArray['RoutedExportTransactionIndicator'] = $data->getRoutedExportTransactionIndicator();
        }
        if ($data->isInitialized('containerizedIndicator') && null !== $data->getContainerizedIndicator()) {
            $dataArray['ContainerizedIndicator'] = $data->getContainerizedIndicator();
        }
        if ($data->isInitialized('overridePaperlessIndicator') && null !== $data->getOverridePaperlessIndicator()) {
            $dataArray['OverridePaperlessIndicator'] = $data->getOverridePaperlessIndicator();
        }
        if ($data->isInitialized('shipperMemo') && null !== $data->getShipperMemo()) {
            $dataArray['ShipperMemo'] = $data->getShipperMemo();
        }
        if ($data->isInitialized('hazardousMaterialsIndicator') && null !== $data->getHazardousMaterialsIndicator()) {
            $dataArray['HazardousMaterialsIndicator'] = $data->getHazardousMaterialsIndicator();
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
        return [\ShipStream\Ups\Api\Model\ShipmentServiceOptionsInternationalForms::class => false];
    }
}