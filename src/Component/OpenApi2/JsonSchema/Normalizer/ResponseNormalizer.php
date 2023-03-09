<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\Component\OpenApi2\JsonSchema\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi2\JsonSchema\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Response';
    }

    public function supportsNormalization($data, $format = null, $context = []) : bool
    {
        return $data instanceof \Jane\Component\OpenApi2\JsonSchema\Model\Response;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi2\JsonSchema\Model\Response();
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('schema', $data) && $data['schema'] !== null) {
            $value = $data['schema'];
            if (is_array($data['schema'])) {
                $value = $this->denormalizer->denormalize($data['schema'], 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Schema', 'json', $context);
            } elseif (is_array($data['schema']) and (isset($data['schema']['type']) and $data['schema']['type'] == 'file')) {
                $value = $this->denormalizer->denormalize($data['schema'], 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\FileSchema', 'json', $context);
            }
            $object->setSchema($value);
            unset($data['schema']);
        } elseif (\array_key_exists('schema', $data) && $data['schema'] === null) {
            $object->setSchema(null);
        }
        if (\array_key_exists('headers', $data) && $data['headers'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['headers'] as $key => $value_1) {
                $values[$key] = $this->denormalizer->denormalize($value_1, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Header', 'json', $context);
            }
            $object->setHeaders($values);
            unset($data['headers']);
        } elseif (\array_key_exists('headers', $data) && $data['headers'] === null) {
            $object->setHeaders(null);
        }
        if (\array_key_exists('examples', $data) && $data['examples'] !== null) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['examples'] as $key_1 => $value_2) {
                $values_1[$key_1] = $value_2;
            }
            $object->setExamples($values_1);
            unset($data['examples']);
        } elseif (\array_key_exists('examples', $data) && $data['examples'] === null) {
            $object->setExamples(null);
        }
        foreach ($data as $key_2 => $value_3) {
            if (preg_match('/^x-/', (string) $key_2)) {
                $object[$key_2] = $value_3;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        } else {
            $data['description'] = null;
        }
        if (null !== $object->getSchema()) {
            $value = $object->getSchema();
            if (is_object($object->getSchema())) {
                $value = $this->normalizer->normalize($object->getSchema(), 'json', $context);
            } elseif (is_object($object->getSchema())) {
                $value = $this->normalizer->normalize($object->getSchema(), 'json', $context);
            }
            $data['schema'] = $value;
        } else {
            $data['schema'] = null;
        }
        if (null !== $object->getHeaders()) {
            $values = [];
            foreach ($object->getHeaders() as $key => $value_1) {
                $values[$key] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['headers'] = $values;
        } else {
            $data['headers'] = null;
        }
        if (null !== $object->getExamples()) {
            $values_1 = [];
            foreach ($object->getExamples() as $key_1 => $value_2) {
                $values_1[$key_1] = $value_2;
            }
            $data['examples'] = $values_1;
        } else {
            $data['examples'] = null;
        }
        foreach ($object as $key_2 => $value_3) {
            if (preg_match('/^x-/', (string) $key_2)) {
                $data[$key_2] = $value_3;
            }
        }

        return $data;
    }
}
