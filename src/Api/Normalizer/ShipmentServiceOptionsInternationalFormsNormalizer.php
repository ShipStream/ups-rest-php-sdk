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
            if (\array_key_exists('FormType', $data)) {
                $values = [];
                foreach ($data['FormType'] as $value) {
                    $values[] = $value;
                }
                $object->setFormType($values);
                unset($data['FormType']);
            }
            if (\array_key_exists('UserCreatedForm', $data)) {
                $object->setUserCreatedForm($this->denormalizer->denormalize($data['UserCreatedForm'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsUserCreatedForm', 'json', $context));
                unset($data['UserCreatedForm']);
            }
            if (\array_key_exists('UPSPremiumCareForm', $data)) {
                $object->setUPSPremiumCareForm($this->denormalizer->denormalize($data['UPSPremiumCareForm'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsUPSPremiumCareForm', 'json', $context));
                unset($data['UPSPremiumCareForm']);
            }
            if (\array_key_exists('CN22Form', $data)) {
                $object->setCN22Form($this->denormalizer->denormalize($data['CN22Form'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsCN22Form', 'json', $context));
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
                $object->setEEIFilingOption($this->denormalizer->denormalize($data['EEIFilingOption'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsEEIFilingOption', 'json', $context));
                unset($data['EEIFilingOption']);
            }
            if (\array_key_exists('Contacts', $data)) {
                $object->setContacts($this->denormalizer->denormalize($data['Contacts'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsContacts', 'json', $context));
                unset($data['Contacts']);
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
                $object->setDiscount($this->denormalizer->denormalize($data['Discount'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsDiscount', 'json', $context));
                unset($data['Discount']);
            }
            if (\array_key_exists('FreightCharges', $data)) {
                $object->setFreightCharges($this->denormalizer->denormalize($data['FreightCharges'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsFreightCharges', 'json', $context));
                unset($data['FreightCharges']);
            }
            if (\array_key_exists('InsuranceCharges', $data)) {
                $object->setInsuranceCharges($this->denormalizer->denormalize($data['InsuranceCharges'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsInsuranceCharges', 'json', $context));
                unset($data['InsuranceCharges']);
            }
            if (\array_key_exists('OtherCharges', $data)) {
                $object->setOtherCharges($this->denormalizer->denormalize($data['OtherCharges'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsOtherCharges', 'json', $context));
                unset($data['OtherCharges']);
            }
            if (\array_key_exists('CurrencyCode', $data)) {
                $object->setCurrencyCode($data['CurrencyCode']);
                unset($data['CurrencyCode']);
            }
            if (\array_key_exists('BlanketPeriod', $data)) {
                $object->setBlanketPeriod($this->denormalizer->denormalize($data['BlanketPeriod'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsBlanketPeriod', 'json', $context));
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
            if (\array_key_exists('FormType', $data)) {
                $values = [];
                foreach ($data['FormType'] as $value) {
                    $values[] = $value;
                }
                $object->setFormType($values);
                unset($data['FormType']);
            }
            if (\array_key_exists('UserCreatedForm', $data)) {
                $object->setUserCreatedForm($this->denormalizer->denormalize($data['UserCreatedForm'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsUserCreatedForm', 'json', $context));
                unset($data['UserCreatedForm']);
            }
            if (\array_key_exists('UPSPremiumCareForm', $data)) {
                $object->setUPSPremiumCareForm($this->denormalizer->denormalize($data['UPSPremiumCareForm'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsUPSPremiumCareForm', 'json', $context));
                unset($data['UPSPremiumCareForm']);
            }
            if (\array_key_exists('CN22Form', $data)) {
                $object->setCN22Form($this->denormalizer->denormalize($data['CN22Form'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsCN22Form', 'json', $context));
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
                $object->setEEIFilingOption($this->denormalizer->denormalize($data['EEIFilingOption'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsEEIFilingOption', 'json', $context));
                unset($data['EEIFilingOption']);
            }
            if (\array_key_exists('Contacts', $data)) {
                $object->setContacts($this->denormalizer->denormalize($data['Contacts'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsContacts', 'json', $context));
                unset($data['Contacts']);
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
                $object->setDiscount($this->denormalizer->denormalize($data['Discount'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsDiscount', 'json', $context));
                unset($data['Discount']);
            }
            if (\array_key_exists('FreightCharges', $data)) {
                $object->setFreightCharges($this->denormalizer->denormalize($data['FreightCharges'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsFreightCharges', 'json', $context));
                unset($data['FreightCharges']);
            }
            if (\array_key_exists('InsuranceCharges', $data)) {
                $object->setInsuranceCharges($this->denormalizer->denormalize($data['InsuranceCharges'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsInsuranceCharges', 'json', $context));
                unset($data['InsuranceCharges']);
            }
            if (\array_key_exists('OtherCharges', $data)) {
                $object->setOtherCharges($this->denormalizer->denormalize($data['OtherCharges'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsOtherCharges', 'json', $context));
                unset($data['OtherCharges']);
            }
            if (\array_key_exists('CurrencyCode', $data)) {
                $object->setCurrencyCode($data['CurrencyCode']);
                unset($data['CurrencyCode']);
            }
            if (\array_key_exists('BlanketPeriod', $data)) {
                $object->setBlanketPeriod($this->denormalizer->denormalize($data['BlanketPeriod'], 'ShipStream\\Ups\\Api\\Model\\InternationalFormsBlanketPeriod', 'json', $context));
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