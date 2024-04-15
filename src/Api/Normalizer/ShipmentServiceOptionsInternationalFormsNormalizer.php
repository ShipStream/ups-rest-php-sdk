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
    class ShipmentServiceOptionsInternationalFormsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsInternationalForms';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsInternationalForms';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
            if (\array_key_exists('FormType', $data) && $data['FormType'] !== null) {
                $values = [];
                foreach ($data['FormType'] as $value) {
                    $values[] = $value;
                }
                $object->setFormType($values);
                unset($data['FormType']);
            }
            elseif (\array_key_exists('FormType', $data) && $data['FormType'] === null) {
                $object->setFormType(null);
            }
            if (\array_key_exists('UserCreatedForm', $data) && $data['UserCreatedForm'] !== null) {
                $object->setUserCreatedForm($this->denormalizer->denormalize($data['UserCreatedForm'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsUserCreatedForm', 'json', $context));
                unset($data['UserCreatedForm']);
            }
            elseif (\array_key_exists('UserCreatedForm', $data) && $data['UserCreatedForm'] === null) {
                $object->setUserCreatedForm(null);
            }
            if (\array_key_exists('UPSPremiumCareForm', $data) && $data['UPSPremiumCareForm'] !== null) {
                $object->setUPSPremiumCareForm($this->denormalizer->denormalize($data['UPSPremiumCareForm'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsUPSPremiumCareForm', 'json', $context));
                unset($data['UPSPremiumCareForm']);
            }
            elseif (\array_key_exists('UPSPremiumCareForm', $data) && $data['UPSPremiumCareForm'] === null) {
                $object->setUPSPremiumCareForm(null);
            }
            if (\array_key_exists('CN22Form', $data) && $data['CN22Form'] !== null) {
                $object->setCN22Form($this->denormalizer->denormalize($data['CN22Form'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsCN22Form', 'json', $context));
                unset($data['CN22Form']);
            }
            elseif (\array_key_exists('CN22Form', $data) && $data['CN22Form'] === null) {
                $object->setCN22Form(null);
            }
            if (\array_key_exists('AdditionalDocumentIndicator', $data) && $data['AdditionalDocumentIndicator'] !== null) {
                $object->setAdditionalDocumentIndicator($data['AdditionalDocumentIndicator']);
                unset($data['AdditionalDocumentIndicator']);
            }
            elseif (\array_key_exists('AdditionalDocumentIndicator', $data) && $data['AdditionalDocumentIndicator'] === null) {
                $object->setAdditionalDocumentIndicator(null);
            }
            if (\array_key_exists('FormGroupIdName', $data) && $data['FormGroupIdName'] !== null) {
                $object->setFormGroupIdName($data['FormGroupIdName']);
                unset($data['FormGroupIdName']);
            }
            elseif (\array_key_exists('FormGroupIdName', $data) && $data['FormGroupIdName'] === null) {
                $object->setFormGroupIdName(null);
            }
            if (\array_key_exists('EEIFilingOption', $data) && $data['EEIFilingOption'] !== null) {
                $object->setEEIFilingOption($this->denormalizer->denormalize($data['EEIFilingOption'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsEEIFilingOption', 'json', $context));
                unset($data['EEIFilingOption']);
            }
            elseif (\array_key_exists('EEIFilingOption', $data) && $data['EEIFilingOption'] === null) {
                $object->setEEIFilingOption(null);
            }
            if (\array_key_exists('Contacts', $data) && $data['Contacts'] !== null) {
                $object->setContacts($this->denormalizer->denormalize($data['Contacts'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsContacts', 'json', $context));
                unset($data['Contacts']);
            }
            elseif (\array_key_exists('Contacts', $data) && $data['Contacts'] === null) {
                $object->setContacts(null);
            }
            if (\array_key_exists('Product', $data) && $data['Product'] !== null) {
                $values_1 = [];
                foreach ($data['Product'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\InternationalFormsProduct', 'json', $context);
                }
                $object->setProduct($values_1);
                unset($data['Product']);
            }
            elseif (\array_key_exists('Product', $data) && $data['Product'] === null) {
                $object->setProduct(null);
            }
            if (\array_key_exists('InvoiceNumber', $data) && $data['InvoiceNumber'] !== null) {
                $object->setInvoiceNumber($data['InvoiceNumber']);
                unset($data['InvoiceNumber']);
            }
            elseif (\array_key_exists('InvoiceNumber', $data) && $data['InvoiceNumber'] === null) {
                $object->setInvoiceNumber(null);
            }
            if (\array_key_exists('InvoiceDate', $data) && $data['InvoiceDate'] !== null) {
                $object->setInvoiceDate($data['InvoiceDate']);
                unset($data['InvoiceDate']);
            }
            elseif (\array_key_exists('InvoiceDate', $data) && $data['InvoiceDate'] === null) {
                $object->setInvoiceDate(null);
            }
            if (\array_key_exists('PurchaseOrderNumber', $data) && $data['PurchaseOrderNumber'] !== null) {
                $object->setPurchaseOrderNumber($data['PurchaseOrderNumber']);
                unset($data['PurchaseOrderNumber']);
            }
            elseif (\array_key_exists('PurchaseOrderNumber', $data) && $data['PurchaseOrderNumber'] === null) {
                $object->setPurchaseOrderNumber(null);
            }
            if (\array_key_exists('TermsOfShipment', $data) && $data['TermsOfShipment'] !== null) {
                $object->setTermsOfShipment($data['TermsOfShipment']);
                unset($data['TermsOfShipment']);
            }
            elseif (\array_key_exists('TermsOfShipment', $data) && $data['TermsOfShipment'] === null) {
                $object->setTermsOfShipment(null);
            }
            if (\array_key_exists('ReasonForExport', $data) && $data['ReasonForExport'] !== null) {
                $object->setReasonForExport($data['ReasonForExport']);
                unset($data['ReasonForExport']);
            }
            elseif (\array_key_exists('ReasonForExport', $data) && $data['ReasonForExport'] === null) {
                $object->setReasonForExport(null);
            }
            if (\array_key_exists('Comments', $data) && $data['Comments'] !== null) {
                $object->setComments($data['Comments']);
                unset($data['Comments']);
            }
            elseif (\array_key_exists('Comments', $data) && $data['Comments'] === null) {
                $object->setComments(null);
            }
            if (\array_key_exists('DeclarationStatement', $data) && $data['DeclarationStatement'] !== null) {
                $object->setDeclarationStatement($data['DeclarationStatement']);
                unset($data['DeclarationStatement']);
            }
            elseif (\array_key_exists('DeclarationStatement', $data) && $data['DeclarationStatement'] === null) {
                $object->setDeclarationStatement(null);
            }
            if (\array_key_exists('Discount', $data) && $data['Discount'] !== null) {
                $object->setDiscount($this->denormalizer->denormalize($data['Discount'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsDiscount', 'json', $context));
                unset($data['Discount']);
            }
            elseif (\array_key_exists('Discount', $data) && $data['Discount'] === null) {
                $object->setDiscount(null);
            }
            if (\array_key_exists('FreightCharges', $data) && $data['FreightCharges'] !== null) {
                $object->setFreightCharges($this->denormalizer->denormalize($data['FreightCharges'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsFreightCharges', 'json', $context));
                unset($data['FreightCharges']);
            }
            elseif (\array_key_exists('FreightCharges', $data) && $data['FreightCharges'] === null) {
                $object->setFreightCharges(null);
            }
            if (\array_key_exists('InsuranceCharges', $data) && $data['InsuranceCharges'] !== null) {
                $object->setInsuranceCharges($this->denormalizer->denormalize($data['InsuranceCharges'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsInsuranceCharges', 'json', $context));
                unset($data['InsuranceCharges']);
            }
            elseif (\array_key_exists('InsuranceCharges', $data) && $data['InsuranceCharges'] === null) {
                $object->setInsuranceCharges(null);
            }
            if (\array_key_exists('OtherCharges', $data) && $data['OtherCharges'] !== null) {
                $object->setOtherCharges($this->denormalizer->denormalize($data['OtherCharges'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsOtherCharges', 'json', $context));
                unset($data['OtherCharges']);
            }
            elseif (\array_key_exists('OtherCharges', $data) && $data['OtherCharges'] === null) {
                $object->setOtherCharges(null);
            }
            if (\array_key_exists('CurrencyCode', $data) && $data['CurrencyCode'] !== null) {
                $object->setCurrencyCode($data['CurrencyCode']);
                unset($data['CurrencyCode']);
            }
            elseif (\array_key_exists('CurrencyCode', $data) && $data['CurrencyCode'] === null) {
                $object->setCurrencyCode(null);
            }
            if (\array_key_exists('BlanketPeriod', $data) && $data['BlanketPeriod'] !== null) {
                $object->setBlanketPeriod($this->denormalizer->denormalize($data['BlanketPeriod'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsBlanketPeriod', 'json', $context));
                unset($data['BlanketPeriod']);
            }
            elseif (\array_key_exists('BlanketPeriod', $data) && $data['BlanketPeriod'] === null) {
                $object->setBlanketPeriod(null);
            }
            if (\array_key_exists('ExportDate', $data) && $data['ExportDate'] !== null) {
                $object->setExportDate($data['ExportDate']);
                unset($data['ExportDate']);
            }
            elseif (\array_key_exists('ExportDate', $data) && $data['ExportDate'] === null) {
                $object->setExportDate(null);
            }
            if (\array_key_exists('ExportingCarrier', $data) && $data['ExportingCarrier'] !== null) {
                $object->setExportingCarrier($data['ExportingCarrier']);
                unset($data['ExportingCarrier']);
            }
            elseif (\array_key_exists('ExportingCarrier', $data) && $data['ExportingCarrier'] === null) {
                $object->setExportingCarrier(null);
            }
            if (\array_key_exists('CarrierID', $data) && $data['CarrierID'] !== null) {
                $object->setCarrierID($data['CarrierID']);
                unset($data['CarrierID']);
            }
            elseif (\array_key_exists('CarrierID', $data) && $data['CarrierID'] === null) {
                $object->setCarrierID(null);
            }
            if (\array_key_exists('InBondCode', $data) && $data['InBondCode'] !== null) {
                $object->setInBondCode($data['InBondCode']);
                unset($data['InBondCode']);
            }
            elseif (\array_key_exists('InBondCode', $data) && $data['InBondCode'] === null) {
                $object->setInBondCode(null);
            }
            if (\array_key_exists('EntryNumber', $data) && $data['EntryNumber'] !== null) {
                $object->setEntryNumber($data['EntryNumber']);
                unset($data['EntryNumber']);
            }
            elseif (\array_key_exists('EntryNumber', $data) && $data['EntryNumber'] === null) {
                $object->setEntryNumber(null);
            }
            if (\array_key_exists('PointOfOrigin', $data) && $data['PointOfOrigin'] !== null) {
                $object->setPointOfOrigin($data['PointOfOrigin']);
                unset($data['PointOfOrigin']);
            }
            elseif (\array_key_exists('PointOfOrigin', $data) && $data['PointOfOrigin'] === null) {
                $object->setPointOfOrigin(null);
            }
            if (\array_key_exists('PointOfOriginType', $data) && $data['PointOfOriginType'] !== null) {
                $object->setPointOfOriginType($data['PointOfOriginType']);
                unset($data['PointOfOriginType']);
            }
            elseif (\array_key_exists('PointOfOriginType', $data) && $data['PointOfOriginType'] === null) {
                $object->setPointOfOriginType(null);
            }
            if (\array_key_exists('ModeOfTransport', $data) && $data['ModeOfTransport'] !== null) {
                $object->setModeOfTransport($data['ModeOfTransport']);
                unset($data['ModeOfTransport']);
            }
            elseif (\array_key_exists('ModeOfTransport', $data) && $data['ModeOfTransport'] === null) {
                $object->setModeOfTransport(null);
            }
            if (\array_key_exists('PortOfExport', $data) && $data['PortOfExport'] !== null) {
                $object->setPortOfExport($data['PortOfExport']);
                unset($data['PortOfExport']);
            }
            elseif (\array_key_exists('PortOfExport', $data) && $data['PortOfExport'] === null) {
                $object->setPortOfExport(null);
            }
            if (\array_key_exists('PortOfUnloading', $data) && $data['PortOfUnloading'] !== null) {
                $object->setPortOfUnloading($data['PortOfUnloading']);
                unset($data['PortOfUnloading']);
            }
            elseif (\array_key_exists('PortOfUnloading', $data) && $data['PortOfUnloading'] === null) {
                $object->setPortOfUnloading(null);
            }
            if (\array_key_exists('LoadingPier', $data) && $data['LoadingPier'] !== null) {
                $object->setLoadingPier($data['LoadingPier']);
                unset($data['LoadingPier']);
            }
            elseif (\array_key_exists('LoadingPier', $data) && $data['LoadingPier'] === null) {
                $object->setLoadingPier(null);
            }
            if (\array_key_exists('PartiesToTransaction', $data) && $data['PartiesToTransaction'] !== null) {
                $object->setPartiesToTransaction($data['PartiesToTransaction']);
                unset($data['PartiesToTransaction']);
            }
            elseif (\array_key_exists('PartiesToTransaction', $data) && $data['PartiesToTransaction'] === null) {
                $object->setPartiesToTransaction(null);
            }
            if (\array_key_exists('RoutedExportTransactionIndicator', $data) && $data['RoutedExportTransactionIndicator'] !== null) {
                $object->setRoutedExportTransactionIndicator($data['RoutedExportTransactionIndicator']);
                unset($data['RoutedExportTransactionIndicator']);
            }
            elseif (\array_key_exists('RoutedExportTransactionIndicator', $data) && $data['RoutedExportTransactionIndicator'] === null) {
                $object->setRoutedExportTransactionIndicator(null);
            }
            if (\array_key_exists('ContainerizedIndicator', $data) && $data['ContainerizedIndicator'] !== null) {
                $object->setContainerizedIndicator($data['ContainerizedIndicator']);
                unset($data['ContainerizedIndicator']);
            }
            elseif (\array_key_exists('ContainerizedIndicator', $data) && $data['ContainerizedIndicator'] === null) {
                $object->setContainerizedIndicator(null);
            }
            if (\array_key_exists('OverridePaperlessIndicator', $data) && $data['OverridePaperlessIndicator'] !== null) {
                $object->setOverridePaperlessIndicator($data['OverridePaperlessIndicator']);
                unset($data['OverridePaperlessIndicator']);
            }
            elseif (\array_key_exists('OverridePaperlessIndicator', $data) && $data['OverridePaperlessIndicator'] === null) {
                $object->setOverridePaperlessIndicator(null);
            }
            if (\array_key_exists('ShipperMemo', $data) && $data['ShipperMemo'] !== null) {
                $object->setShipperMemo($data['ShipperMemo']);
                unset($data['ShipperMemo']);
            }
            elseif (\array_key_exists('ShipperMemo', $data) && $data['ShipperMemo'] === null) {
                $object->setShipperMemo(null);
            }
            if (\array_key_exists('HazardousMaterialsIndicator', $data) && $data['HazardousMaterialsIndicator'] !== null) {
                $object->setHazardousMaterialsIndicator($data['HazardousMaterialsIndicator']);
                unset($data['HazardousMaterialsIndicator']);
            }
            elseif (\array_key_exists('HazardousMaterialsIndicator', $data) && $data['HazardousMaterialsIndicator'] === null) {
                $object->setHazardousMaterialsIndicator(null);
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
            $values = [];
            foreach ($object->getFormType() as $value) {
                $values[] = $value;
            }
            $data['FormType'] = $values;
            if ($object->isInitialized('userCreatedForm') && null !== $object->getUserCreatedForm()) {
                $data['UserCreatedForm'] = $this->normalizer->normalize($object->getUserCreatedForm(), 'json', $context);
            }
            if ($object->isInitialized('uPSPremiumCareForm') && null !== $object->getUPSPremiumCareForm()) {
                $data['UPSPremiumCareForm'] = $this->normalizer->normalize($object->getUPSPremiumCareForm(), 'json', $context);
            }
            if ($object->isInitialized('cN22Form') && null !== $object->getCN22Form()) {
                $data['CN22Form'] = $this->normalizer->normalize($object->getCN22Form(), 'json', $context);
            }
            if ($object->isInitialized('additionalDocumentIndicator') && null !== $object->getAdditionalDocumentIndicator()) {
                $data['AdditionalDocumentIndicator'] = $object->getAdditionalDocumentIndicator();
            }
            if ($object->isInitialized('formGroupIdName') && null !== $object->getFormGroupIdName()) {
                $data['FormGroupIdName'] = $object->getFormGroupIdName();
            }
            if ($object->isInitialized('eEIFilingOption') && null !== $object->getEEIFilingOption()) {
                $data['EEIFilingOption'] = $this->normalizer->normalize($object->getEEIFilingOption(), 'json', $context);
            }
            if ($object->isInitialized('contacts') && null !== $object->getContacts()) {
                $data['Contacts'] = $this->normalizer->normalize($object->getContacts(), 'json', $context);
            }
            $values_1 = [];
            foreach ($object->getProduct() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Product'] = $values_1;
            if ($object->isInitialized('invoiceNumber') && null !== $object->getInvoiceNumber()) {
                $data['InvoiceNumber'] = $object->getInvoiceNumber();
            }
            if ($object->isInitialized('invoiceDate') && null !== $object->getInvoiceDate()) {
                $data['InvoiceDate'] = $object->getInvoiceDate();
            }
            if ($object->isInitialized('purchaseOrderNumber') && null !== $object->getPurchaseOrderNumber()) {
                $data['PurchaseOrderNumber'] = $object->getPurchaseOrderNumber();
            }
            if ($object->isInitialized('termsOfShipment') && null !== $object->getTermsOfShipment()) {
                $data['TermsOfShipment'] = $object->getTermsOfShipment();
            }
            if ($object->isInitialized('reasonForExport') && null !== $object->getReasonForExport()) {
                $data['ReasonForExport'] = $object->getReasonForExport();
            }
            if ($object->isInitialized('comments') && null !== $object->getComments()) {
                $data['Comments'] = $object->getComments();
            }
            if ($object->isInitialized('declarationStatement') && null !== $object->getDeclarationStatement()) {
                $data['DeclarationStatement'] = $object->getDeclarationStatement();
            }
            if ($object->isInitialized('discount') && null !== $object->getDiscount()) {
                $data['Discount'] = $this->normalizer->normalize($object->getDiscount(), 'json', $context);
            }
            if ($object->isInitialized('freightCharges') && null !== $object->getFreightCharges()) {
                $data['FreightCharges'] = $this->normalizer->normalize($object->getFreightCharges(), 'json', $context);
            }
            if ($object->isInitialized('insuranceCharges') && null !== $object->getInsuranceCharges()) {
                $data['InsuranceCharges'] = $this->normalizer->normalize($object->getInsuranceCharges(), 'json', $context);
            }
            if ($object->isInitialized('otherCharges') && null !== $object->getOtherCharges()) {
                $data['OtherCharges'] = $this->normalizer->normalize($object->getOtherCharges(), 'json', $context);
            }
            if ($object->isInitialized('currencyCode') && null !== $object->getCurrencyCode()) {
                $data['CurrencyCode'] = $object->getCurrencyCode();
            }
            if ($object->isInitialized('blanketPeriod') && null !== $object->getBlanketPeriod()) {
                $data['BlanketPeriod'] = $this->normalizer->normalize($object->getBlanketPeriod(), 'json', $context);
            }
            if ($object->isInitialized('exportDate') && null !== $object->getExportDate()) {
                $data['ExportDate'] = $object->getExportDate();
            }
            if ($object->isInitialized('exportingCarrier') && null !== $object->getExportingCarrier()) {
                $data['ExportingCarrier'] = $object->getExportingCarrier();
            }
            if ($object->isInitialized('carrierID') && null !== $object->getCarrierID()) {
                $data['CarrierID'] = $object->getCarrierID();
            }
            if ($object->isInitialized('inBondCode') && null !== $object->getInBondCode()) {
                $data['InBondCode'] = $object->getInBondCode();
            }
            if ($object->isInitialized('entryNumber') && null !== $object->getEntryNumber()) {
                $data['EntryNumber'] = $object->getEntryNumber();
            }
            if ($object->isInitialized('pointOfOrigin') && null !== $object->getPointOfOrigin()) {
                $data['PointOfOrigin'] = $object->getPointOfOrigin();
            }
            if ($object->isInitialized('pointOfOriginType') && null !== $object->getPointOfOriginType()) {
                $data['PointOfOriginType'] = $object->getPointOfOriginType();
            }
            if ($object->isInitialized('modeOfTransport') && null !== $object->getModeOfTransport()) {
                $data['ModeOfTransport'] = $object->getModeOfTransport();
            }
            if ($object->isInitialized('portOfExport') && null !== $object->getPortOfExport()) {
                $data['PortOfExport'] = $object->getPortOfExport();
            }
            if ($object->isInitialized('portOfUnloading') && null !== $object->getPortOfUnloading()) {
                $data['PortOfUnloading'] = $object->getPortOfUnloading();
            }
            if ($object->isInitialized('loadingPier') && null !== $object->getLoadingPier()) {
                $data['LoadingPier'] = $object->getLoadingPier();
            }
            if ($object->isInitialized('partiesToTransaction') && null !== $object->getPartiesToTransaction()) {
                $data['PartiesToTransaction'] = $object->getPartiesToTransaction();
            }
            if ($object->isInitialized('routedExportTransactionIndicator') && null !== $object->getRoutedExportTransactionIndicator()) {
                $data['RoutedExportTransactionIndicator'] = $object->getRoutedExportTransactionIndicator();
            }
            if ($object->isInitialized('containerizedIndicator') && null !== $object->getContainerizedIndicator()) {
                $data['ContainerizedIndicator'] = $object->getContainerizedIndicator();
            }
            if ($object->isInitialized('overridePaperlessIndicator') && null !== $object->getOverridePaperlessIndicator()) {
                $data['OverridePaperlessIndicator'] = $object->getOverridePaperlessIndicator();
            }
            if ($object->isInitialized('shipperMemo') && null !== $object->getShipperMemo()) {
                $data['ShipperMemo'] = $object->getShipperMemo();
            }
            if ($object->isInitialized('hazardousMaterialsIndicator') && null !== $object->getHazardousMaterialsIndicator()) {
                $data['HazardousMaterialsIndicator'] = $object->getHazardousMaterialsIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsInternationalForms' => false];
        }
    }
} else {
    class ShipmentServiceOptionsInternationalFormsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsInternationalForms';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsInternationalForms';
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
            $object = new \ShipStream\Ups\Api\Model\ShipmentServiceOptionsInternationalForms();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('FormType', $data) && $data['FormType'] !== null) {
                $values = [];
                foreach ($data['FormType'] as $value) {
                    $values[] = $value;
                }
                $object->setFormType($values);
                unset($data['FormType']);
            }
            elseif (\array_key_exists('FormType', $data) && $data['FormType'] === null) {
                $object->setFormType(null);
            }
            if (\array_key_exists('UserCreatedForm', $data) && $data['UserCreatedForm'] !== null) {
                $object->setUserCreatedForm($this->denormalizer->denormalize($data['UserCreatedForm'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsUserCreatedForm', 'json', $context));
                unset($data['UserCreatedForm']);
            }
            elseif (\array_key_exists('UserCreatedForm', $data) && $data['UserCreatedForm'] === null) {
                $object->setUserCreatedForm(null);
            }
            if (\array_key_exists('UPSPremiumCareForm', $data) && $data['UPSPremiumCareForm'] !== null) {
                $object->setUPSPremiumCareForm($this->denormalizer->denormalize($data['UPSPremiumCareForm'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsUPSPremiumCareForm', 'json', $context));
                unset($data['UPSPremiumCareForm']);
            }
            elseif (\array_key_exists('UPSPremiumCareForm', $data) && $data['UPSPremiumCareForm'] === null) {
                $object->setUPSPremiumCareForm(null);
            }
            if (\array_key_exists('CN22Form', $data) && $data['CN22Form'] !== null) {
                $object->setCN22Form($this->denormalizer->denormalize($data['CN22Form'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsCN22Form', 'json', $context));
                unset($data['CN22Form']);
            }
            elseif (\array_key_exists('CN22Form', $data) && $data['CN22Form'] === null) {
                $object->setCN22Form(null);
            }
            if (\array_key_exists('AdditionalDocumentIndicator', $data) && $data['AdditionalDocumentIndicator'] !== null) {
                $object->setAdditionalDocumentIndicator($data['AdditionalDocumentIndicator']);
                unset($data['AdditionalDocumentIndicator']);
            }
            elseif (\array_key_exists('AdditionalDocumentIndicator', $data) && $data['AdditionalDocumentIndicator'] === null) {
                $object->setAdditionalDocumentIndicator(null);
            }
            if (\array_key_exists('FormGroupIdName', $data) && $data['FormGroupIdName'] !== null) {
                $object->setFormGroupIdName($data['FormGroupIdName']);
                unset($data['FormGroupIdName']);
            }
            elseif (\array_key_exists('FormGroupIdName', $data) && $data['FormGroupIdName'] === null) {
                $object->setFormGroupIdName(null);
            }
            if (\array_key_exists('EEIFilingOption', $data) && $data['EEIFilingOption'] !== null) {
                $object->setEEIFilingOption($this->denormalizer->denormalize($data['EEIFilingOption'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsEEIFilingOption', 'json', $context));
                unset($data['EEIFilingOption']);
            }
            elseif (\array_key_exists('EEIFilingOption', $data) && $data['EEIFilingOption'] === null) {
                $object->setEEIFilingOption(null);
            }
            if (\array_key_exists('Contacts', $data) && $data['Contacts'] !== null) {
                $object->setContacts($this->denormalizer->denormalize($data['Contacts'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsContacts', 'json', $context));
                unset($data['Contacts']);
            }
            elseif (\array_key_exists('Contacts', $data) && $data['Contacts'] === null) {
                $object->setContacts(null);
            }
            if (\array_key_exists('Product', $data) && $data['Product'] !== null) {
                $values_1 = [];
                foreach ($data['Product'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\InternationalFormsProduct', 'json', $context);
                }
                $object->setProduct($values_1);
                unset($data['Product']);
            }
            elseif (\array_key_exists('Product', $data) && $data['Product'] === null) {
                $object->setProduct(null);
            }
            if (\array_key_exists('InvoiceNumber', $data) && $data['InvoiceNumber'] !== null) {
                $object->setInvoiceNumber($data['InvoiceNumber']);
                unset($data['InvoiceNumber']);
            }
            elseif (\array_key_exists('InvoiceNumber', $data) && $data['InvoiceNumber'] === null) {
                $object->setInvoiceNumber(null);
            }
            if (\array_key_exists('InvoiceDate', $data) && $data['InvoiceDate'] !== null) {
                $object->setInvoiceDate($data['InvoiceDate']);
                unset($data['InvoiceDate']);
            }
            elseif (\array_key_exists('InvoiceDate', $data) && $data['InvoiceDate'] === null) {
                $object->setInvoiceDate(null);
            }
            if (\array_key_exists('PurchaseOrderNumber', $data) && $data['PurchaseOrderNumber'] !== null) {
                $object->setPurchaseOrderNumber($data['PurchaseOrderNumber']);
                unset($data['PurchaseOrderNumber']);
            }
            elseif (\array_key_exists('PurchaseOrderNumber', $data) && $data['PurchaseOrderNumber'] === null) {
                $object->setPurchaseOrderNumber(null);
            }
            if (\array_key_exists('TermsOfShipment', $data) && $data['TermsOfShipment'] !== null) {
                $object->setTermsOfShipment($data['TermsOfShipment']);
                unset($data['TermsOfShipment']);
            }
            elseif (\array_key_exists('TermsOfShipment', $data) && $data['TermsOfShipment'] === null) {
                $object->setTermsOfShipment(null);
            }
            if (\array_key_exists('ReasonForExport', $data) && $data['ReasonForExport'] !== null) {
                $object->setReasonForExport($data['ReasonForExport']);
                unset($data['ReasonForExport']);
            }
            elseif (\array_key_exists('ReasonForExport', $data) && $data['ReasonForExport'] === null) {
                $object->setReasonForExport(null);
            }
            if (\array_key_exists('Comments', $data) && $data['Comments'] !== null) {
                $object->setComments($data['Comments']);
                unset($data['Comments']);
            }
            elseif (\array_key_exists('Comments', $data) && $data['Comments'] === null) {
                $object->setComments(null);
            }
            if (\array_key_exists('DeclarationStatement', $data) && $data['DeclarationStatement'] !== null) {
                $object->setDeclarationStatement($data['DeclarationStatement']);
                unset($data['DeclarationStatement']);
            }
            elseif (\array_key_exists('DeclarationStatement', $data) && $data['DeclarationStatement'] === null) {
                $object->setDeclarationStatement(null);
            }
            if (\array_key_exists('Discount', $data) && $data['Discount'] !== null) {
                $object->setDiscount($this->denormalizer->denormalize($data['Discount'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsDiscount', 'json', $context));
                unset($data['Discount']);
            }
            elseif (\array_key_exists('Discount', $data) && $data['Discount'] === null) {
                $object->setDiscount(null);
            }
            if (\array_key_exists('FreightCharges', $data) && $data['FreightCharges'] !== null) {
                $object->setFreightCharges($this->denormalizer->denormalize($data['FreightCharges'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsFreightCharges', 'json', $context));
                unset($data['FreightCharges']);
            }
            elseif (\array_key_exists('FreightCharges', $data) && $data['FreightCharges'] === null) {
                $object->setFreightCharges(null);
            }
            if (\array_key_exists('InsuranceCharges', $data) && $data['InsuranceCharges'] !== null) {
                $object->setInsuranceCharges($this->denormalizer->denormalize($data['InsuranceCharges'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsInsuranceCharges', 'json', $context));
                unset($data['InsuranceCharges']);
            }
            elseif (\array_key_exists('InsuranceCharges', $data) && $data['InsuranceCharges'] === null) {
                $object->setInsuranceCharges(null);
            }
            if (\array_key_exists('OtherCharges', $data) && $data['OtherCharges'] !== null) {
                $object->setOtherCharges($this->denormalizer->denormalize($data['OtherCharges'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsOtherCharges', 'json', $context));
                unset($data['OtherCharges']);
            }
            elseif (\array_key_exists('OtherCharges', $data) && $data['OtherCharges'] === null) {
                $object->setOtherCharges(null);
            }
            if (\array_key_exists('CurrencyCode', $data) && $data['CurrencyCode'] !== null) {
                $object->setCurrencyCode($data['CurrencyCode']);
                unset($data['CurrencyCode']);
            }
            elseif (\array_key_exists('CurrencyCode', $data) && $data['CurrencyCode'] === null) {
                $object->setCurrencyCode(null);
            }
            if (\array_key_exists('BlanketPeriod', $data) && $data['BlanketPeriod'] !== null) {
                $object->setBlanketPeriod($this->denormalizer->denormalize($data['BlanketPeriod'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsBlanketPeriod', 'json', $context));
                unset($data['BlanketPeriod']);
            }
            elseif (\array_key_exists('BlanketPeriod', $data) && $data['BlanketPeriod'] === null) {
                $object->setBlanketPeriod(null);
            }
            if (\array_key_exists('ExportDate', $data) && $data['ExportDate'] !== null) {
                $object->setExportDate($data['ExportDate']);
                unset($data['ExportDate']);
            }
            elseif (\array_key_exists('ExportDate', $data) && $data['ExportDate'] === null) {
                $object->setExportDate(null);
            }
            if (\array_key_exists('ExportingCarrier', $data) && $data['ExportingCarrier'] !== null) {
                $object->setExportingCarrier($data['ExportingCarrier']);
                unset($data['ExportingCarrier']);
            }
            elseif (\array_key_exists('ExportingCarrier', $data) && $data['ExportingCarrier'] === null) {
                $object->setExportingCarrier(null);
            }
            if (\array_key_exists('CarrierID', $data) && $data['CarrierID'] !== null) {
                $object->setCarrierID($data['CarrierID']);
                unset($data['CarrierID']);
            }
            elseif (\array_key_exists('CarrierID', $data) && $data['CarrierID'] === null) {
                $object->setCarrierID(null);
            }
            if (\array_key_exists('InBondCode', $data) && $data['InBondCode'] !== null) {
                $object->setInBondCode($data['InBondCode']);
                unset($data['InBondCode']);
            }
            elseif (\array_key_exists('InBondCode', $data) && $data['InBondCode'] === null) {
                $object->setInBondCode(null);
            }
            if (\array_key_exists('EntryNumber', $data) && $data['EntryNumber'] !== null) {
                $object->setEntryNumber($data['EntryNumber']);
                unset($data['EntryNumber']);
            }
            elseif (\array_key_exists('EntryNumber', $data) && $data['EntryNumber'] === null) {
                $object->setEntryNumber(null);
            }
            if (\array_key_exists('PointOfOrigin', $data) && $data['PointOfOrigin'] !== null) {
                $object->setPointOfOrigin($data['PointOfOrigin']);
                unset($data['PointOfOrigin']);
            }
            elseif (\array_key_exists('PointOfOrigin', $data) && $data['PointOfOrigin'] === null) {
                $object->setPointOfOrigin(null);
            }
            if (\array_key_exists('PointOfOriginType', $data) && $data['PointOfOriginType'] !== null) {
                $object->setPointOfOriginType($data['PointOfOriginType']);
                unset($data['PointOfOriginType']);
            }
            elseif (\array_key_exists('PointOfOriginType', $data) && $data['PointOfOriginType'] === null) {
                $object->setPointOfOriginType(null);
            }
            if (\array_key_exists('ModeOfTransport', $data) && $data['ModeOfTransport'] !== null) {
                $object->setModeOfTransport($data['ModeOfTransport']);
                unset($data['ModeOfTransport']);
            }
            elseif (\array_key_exists('ModeOfTransport', $data) && $data['ModeOfTransport'] === null) {
                $object->setModeOfTransport(null);
            }
            if (\array_key_exists('PortOfExport', $data) && $data['PortOfExport'] !== null) {
                $object->setPortOfExport($data['PortOfExport']);
                unset($data['PortOfExport']);
            }
            elseif (\array_key_exists('PortOfExport', $data) && $data['PortOfExport'] === null) {
                $object->setPortOfExport(null);
            }
            if (\array_key_exists('PortOfUnloading', $data) && $data['PortOfUnloading'] !== null) {
                $object->setPortOfUnloading($data['PortOfUnloading']);
                unset($data['PortOfUnloading']);
            }
            elseif (\array_key_exists('PortOfUnloading', $data) && $data['PortOfUnloading'] === null) {
                $object->setPortOfUnloading(null);
            }
            if (\array_key_exists('LoadingPier', $data) && $data['LoadingPier'] !== null) {
                $object->setLoadingPier($data['LoadingPier']);
                unset($data['LoadingPier']);
            }
            elseif (\array_key_exists('LoadingPier', $data) && $data['LoadingPier'] === null) {
                $object->setLoadingPier(null);
            }
            if (\array_key_exists('PartiesToTransaction', $data) && $data['PartiesToTransaction'] !== null) {
                $object->setPartiesToTransaction($data['PartiesToTransaction']);
                unset($data['PartiesToTransaction']);
            }
            elseif (\array_key_exists('PartiesToTransaction', $data) && $data['PartiesToTransaction'] === null) {
                $object->setPartiesToTransaction(null);
            }
            if (\array_key_exists('RoutedExportTransactionIndicator', $data) && $data['RoutedExportTransactionIndicator'] !== null) {
                $object->setRoutedExportTransactionIndicator($data['RoutedExportTransactionIndicator']);
                unset($data['RoutedExportTransactionIndicator']);
            }
            elseif (\array_key_exists('RoutedExportTransactionIndicator', $data) && $data['RoutedExportTransactionIndicator'] === null) {
                $object->setRoutedExportTransactionIndicator(null);
            }
            if (\array_key_exists('ContainerizedIndicator', $data) && $data['ContainerizedIndicator'] !== null) {
                $object->setContainerizedIndicator($data['ContainerizedIndicator']);
                unset($data['ContainerizedIndicator']);
            }
            elseif (\array_key_exists('ContainerizedIndicator', $data) && $data['ContainerizedIndicator'] === null) {
                $object->setContainerizedIndicator(null);
            }
            if (\array_key_exists('OverridePaperlessIndicator', $data) && $data['OverridePaperlessIndicator'] !== null) {
                $object->setOverridePaperlessIndicator($data['OverridePaperlessIndicator']);
                unset($data['OverridePaperlessIndicator']);
            }
            elseif (\array_key_exists('OverridePaperlessIndicator', $data) && $data['OverridePaperlessIndicator'] === null) {
                $object->setOverridePaperlessIndicator(null);
            }
            if (\array_key_exists('ShipperMemo', $data) && $data['ShipperMemo'] !== null) {
                $object->setShipperMemo($data['ShipperMemo']);
                unset($data['ShipperMemo']);
            }
            elseif (\array_key_exists('ShipperMemo', $data) && $data['ShipperMemo'] === null) {
                $object->setShipperMemo(null);
            }
            if (\array_key_exists('HazardousMaterialsIndicator', $data) && $data['HazardousMaterialsIndicator'] !== null) {
                $object->setHazardousMaterialsIndicator($data['HazardousMaterialsIndicator']);
                unset($data['HazardousMaterialsIndicator']);
            }
            elseif (\array_key_exists('HazardousMaterialsIndicator', $data) && $data['HazardousMaterialsIndicator'] === null) {
                $object->setHazardousMaterialsIndicator(null);
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
            $values = [];
            foreach ($object->getFormType() as $value) {
                $values[] = $value;
            }
            $data['FormType'] = $values;
            if ($object->isInitialized('userCreatedForm') && null !== $object->getUserCreatedForm()) {
                $data['UserCreatedForm'] = $this->normalizer->normalize($object->getUserCreatedForm(), 'json', $context);
            }
            if ($object->isInitialized('uPSPremiumCareForm') && null !== $object->getUPSPremiumCareForm()) {
                $data['UPSPremiumCareForm'] = $this->normalizer->normalize($object->getUPSPremiumCareForm(), 'json', $context);
            }
            if ($object->isInitialized('cN22Form') && null !== $object->getCN22Form()) {
                $data['CN22Form'] = $this->normalizer->normalize($object->getCN22Form(), 'json', $context);
            }
            if ($object->isInitialized('additionalDocumentIndicator') && null !== $object->getAdditionalDocumentIndicator()) {
                $data['AdditionalDocumentIndicator'] = $object->getAdditionalDocumentIndicator();
            }
            if ($object->isInitialized('formGroupIdName') && null !== $object->getFormGroupIdName()) {
                $data['FormGroupIdName'] = $object->getFormGroupIdName();
            }
            if ($object->isInitialized('eEIFilingOption') && null !== $object->getEEIFilingOption()) {
                $data['EEIFilingOption'] = $this->normalizer->normalize($object->getEEIFilingOption(), 'json', $context);
            }
            if ($object->isInitialized('contacts') && null !== $object->getContacts()) {
                $data['Contacts'] = $this->normalizer->normalize($object->getContacts(), 'json', $context);
            }
            $values_1 = [];
            foreach ($object->getProduct() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Product'] = $values_1;
            if ($object->isInitialized('invoiceNumber') && null !== $object->getInvoiceNumber()) {
                $data['InvoiceNumber'] = $object->getInvoiceNumber();
            }
            if ($object->isInitialized('invoiceDate') && null !== $object->getInvoiceDate()) {
                $data['InvoiceDate'] = $object->getInvoiceDate();
            }
            if ($object->isInitialized('purchaseOrderNumber') && null !== $object->getPurchaseOrderNumber()) {
                $data['PurchaseOrderNumber'] = $object->getPurchaseOrderNumber();
            }
            if ($object->isInitialized('termsOfShipment') && null !== $object->getTermsOfShipment()) {
                $data['TermsOfShipment'] = $object->getTermsOfShipment();
            }
            if ($object->isInitialized('reasonForExport') && null !== $object->getReasonForExport()) {
                $data['ReasonForExport'] = $object->getReasonForExport();
            }
            if ($object->isInitialized('comments') && null !== $object->getComments()) {
                $data['Comments'] = $object->getComments();
            }
            if ($object->isInitialized('declarationStatement') && null !== $object->getDeclarationStatement()) {
                $data['DeclarationStatement'] = $object->getDeclarationStatement();
            }
            if ($object->isInitialized('discount') && null !== $object->getDiscount()) {
                $data['Discount'] = $this->normalizer->normalize($object->getDiscount(), 'json', $context);
            }
            if ($object->isInitialized('freightCharges') && null !== $object->getFreightCharges()) {
                $data['FreightCharges'] = $this->normalizer->normalize($object->getFreightCharges(), 'json', $context);
            }
            if ($object->isInitialized('insuranceCharges') && null !== $object->getInsuranceCharges()) {
                $data['InsuranceCharges'] = $this->normalizer->normalize($object->getInsuranceCharges(), 'json', $context);
            }
            if ($object->isInitialized('otherCharges') && null !== $object->getOtherCharges()) {
                $data['OtherCharges'] = $this->normalizer->normalize($object->getOtherCharges(), 'json', $context);
            }
            if ($object->isInitialized('currencyCode') && null !== $object->getCurrencyCode()) {
                $data['CurrencyCode'] = $object->getCurrencyCode();
            }
            if ($object->isInitialized('blanketPeriod') && null !== $object->getBlanketPeriod()) {
                $data['BlanketPeriod'] = $this->normalizer->normalize($object->getBlanketPeriod(), 'json', $context);
            }
            if ($object->isInitialized('exportDate') && null !== $object->getExportDate()) {
                $data['ExportDate'] = $object->getExportDate();
            }
            if ($object->isInitialized('exportingCarrier') && null !== $object->getExportingCarrier()) {
                $data['ExportingCarrier'] = $object->getExportingCarrier();
            }
            if ($object->isInitialized('carrierID') && null !== $object->getCarrierID()) {
                $data['CarrierID'] = $object->getCarrierID();
            }
            if ($object->isInitialized('inBondCode') && null !== $object->getInBondCode()) {
                $data['InBondCode'] = $object->getInBondCode();
            }
            if ($object->isInitialized('entryNumber') && null !== $object->getEntryNumber()) {
                $data['EntryNumber'] = $object->getEntryNumber();
            }
            if ($object->isInitialized('pointOfOrigin') && null !== $object->getPointOfOrigin()) {
                $data['PointOfOrigin'] = $object->getPointOfOrigin();
            }
            if ($object->isInitialized('pointOfOriginType') && null !== $object->getPointOfOriginType()) {
                $data['PointOfOriginType'] = $object->getPointOfOriginType();
            }
            if ($object->isInitialized('modeOfTransport') && null !== $object->getModeOfTransport()) {
                $data['ModeOfTransport'] = $object->getModeOfTransport();
            }
            if ($object->isInitialized('portOfExport') && null !== $object->getPortOfExport()) {
                $data['PortOfExport'] = $object->getPortOfExport();
            }
            if ($object->isInitialized('portOfUnloading') && null !== $object->getPortOfUnloading()) {
                $data['PortOfUnloading'] = $object->getPortOfUnloading();
            }
            if ($object->isInitialized('loadingPier') && null !== $object->getLoadingPier()) {
                $data['LoadingPier'] = $object->getLoadingPier();
            }
            if ($object->isInitialized('partiesToTransaction') && null !== $object->getPartiesToTransaction()) {
                $data['PartiesToTransaction'] = $object->getPartiesToTransaction();
            }
            if ($object->isInitialized('routedExportTransactionIndicator') && null !== $object->getRoutedExportTransactionIndicator()) {
                $data['RoutedExportTransactionIndicator'] = $object->getRoutedExportTransactionIndicator();
            }
            if ($object->isInitialized('containerizedIndicator') && null !== $object->getContainerizedIndicator()) {
                $data['ContainerizedIndicator'] = $object->getContainerizedIndicator();
            }
            if ($object->isInitialized('overridePaperlessIndicator') && null !== $object->getOverridePaperlessIndicator()) {
                $data['OverridePaperlessIndicator'] = $object->getOverridePaperlessIndicator();
            }
            if ($object->isInitialized('shipperMemo') && null !== $object->getShipperMemo()) {
                $data['ShipperMemo'] = $object->getShipperMemo();
            }
            if ($object->isInitialized('hazardousMaterialsIndicator') && null !== $object->getHazardousMaterialsIndicator()) {
                $data['HazardousMaterialsIndicator'] = $object->getHazardousMaterialsIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsInternationalForms' => false];
        }
    }
}