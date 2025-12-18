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
class LabelDeliveryEMailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\LabelDeliveryEMail::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\LabelDeliveryEMail::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\LabelDeliveryEMail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('EMailAddress', $data)) {
            $object->setEMailAddress($data['EMailAddress']);
            unset($data['EMailAddress']);
        }
        if (\array_key_exists('UndeliverableEMailAddress', $data)) {
            $object->setUndeliverableEMailAddress($data['UndeliverableEMailAddress']);
            unset($data['UndeliverableEMailAddress']);
        }
        if (\array_key_exists('FromEMailAddress', $data)) {
            $object->setFromEMailAddress($data['FromEMailAddress']);
            unset($data['FromEMailAddress']);
        }
        if (\array_key_exists('FromName', $data)) {
            $object->setFromName($data['FromName']);
            unset($data['FromName']);
        }
        if (\array_key_exists('Memo', $data)) {
            $object->setMemo($data['Memo']);
            unset($data['Memo']);
        }
        if (\array_key_exists('Subject', $data)) {
            $object->setSubject($data['Subject']);
            unset($data['Subject']);
        }
        if (\array_key_exists('SubjectCode', $data)) {
            $object->setSubjectCode($data['SubjectCode']);
            unset($data['SubjectCode']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['EMailAddress'] = $data->getEMailAddress();
        if ($data->isInitialized('undeliverableEMailAddress') && null !== $data->getUndeliverableEMailAddress()) {
            $dataArray['UndeliverableEMailAddress'] = $data->getUndeliverableEMailAddress();
        }
        if ($data->isInitialized('fromEMailAddress') && null !== $data->getFromEMailAddress()) {
            $dataArray['FromEMailAddress'] = $data->getFromEMailAddress();
        }
        if ($data->isInitialized('fromName') && null !== $data->getFromName()) {
            $dataArray['FromName'] = $data->getFromName();
        }
        if ($data->isInitialized('memo') && null !== $data->getMemo()) {
            $dataArray['Memo'] = $data->getMemo();
        }
        if ($data->isInitialized('subject') && null !== $data->getSubject()) {
            $dataArray['Subject'] = $data->getSubject();
        }
        if ($data->isInitialized('subjectCode') && null !== $data->getSubjectCode()) {
            $dataArray['SubjectCode'] = $data->getSubjectCode();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\LabelDeliveryEMail::class => false];
    }
}