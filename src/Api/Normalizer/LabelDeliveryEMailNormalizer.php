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
class LabelDeliveryEMailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\LabelDeliveryEMail';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LabelDeliveryEMail';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
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
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['EMailAddress'] = $object->getEMailAddress();
        if ($object->isInitialized('undeliverableEMailAddress') && null !== $object->getUndeliverableEMailAddress()) {
            $data['UndeliverableEMailAddress'] = $object->getUndeliverableEMailAddress();
        }
        if ($object->isInitialized('fromEMailAddress') && null !== $object->getFromEMailAddress()) {
            $data['FromEMailAddress'] = $object->getFromEMailAddress();
        }
        if ($object->isInitialized('fromName') && null !== $object->getFromName()) {
            $data['FromName'] = $object->getFromName();
        }
        if ($object->isInitialized('memo') && null !== $object->getMemo()) {
            $data['Memo'] = $object->getMemo();
        }
        if ($object->isInitialized('subject') && null !== $object->getSubject()) {
            $data['Subject'] = $object->getSubject();
        }
        if ($object->isInitialized('subjectCode') && null !== $object->getSubjectCode()) {
            $data['SubjectCode'] = $object->getSubjectCode();
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
        return array('ShipStream\\Ups\\Api\\Model\\LabelDeliveryEMail' => false);
    }
}