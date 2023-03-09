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

class PathItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\PathItem';
    }

    public function supportsNormalization($data, $format = null, $context = []) : bool
    {
        return $data instanceof \Jane\Component\OpenApi2\JsonSchema\Model\PathItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi2\JsonSchema\Model\PathItem();
        if (\array_key_exists('$ref', $data) && $data['$ref'] !== null) {
            $object->setDollarRef($data['$ref']);
            unset($data['$ref']);
        } elseif (\array_key_exists('$ref', $data) && $data['$ref'] === null) {
            $object->setDollarRef(null);
        }
        if (\array_key_exists('get', $data) && $data['get'] !== null) {
            $object->setGet($this->denormalizer->denormalize($data['get'], 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Operation', 'json', $context));
            unset($data['get']);
        } elseif (\array_key_exists('get', $data) && $data['get'] === null) {
            $object->setGet(null);
        }
        if (\array_key_exists('put', $data) && $data['put'] !== null) {
            $object->setPut($this->denormalizer->denormalize($data['put'], 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Operation', 'json', $context));
            unset($data['put']);
        } elseif (\array_key_exists('put', $data) && $data['put'] === null) {
            $object->setPut(null);
        }
        if (\array_key_exists('post', $data) && $data['post'] !== null) {
            $object->setPost($this->denormalizer->denormalize($data['post'], 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Operation', 'json', $context));
            unset($data['post']);
        } elseif (\array_key_exists('post', $data) && $data['post'] === null) {
            $object->setPost(null);
        }
        if (\array_key_exists('delete', $data) && $data['delete'] !== null) {
            $object->setDelete($this->denormalizer->denormalize($data['delete'], 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Operation', 'json', $context));
            unset($data['delete']);
        } elseif (\array_key_exists('delete', $data) && $data['delete'] === null) {
            $object->setDelete(null);
        }
        if (\array_key_exists('options', $data) && $data['options'] !== null) {
            $object->setOptions($this->denormalizer->denormalize($data['options'], 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Operation', 'json', $context));
            unset($data['options']);
        } elseif (\array_key_exists('options', $data) && $data['options'] === null) {
            $object->setOptions(null);
        }
        if (\array_key_exists('head', $data) && $data['head'] !== null) {
            $object->setHead($this->denormalizer->denormalize($data['head'], 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Operation', 'json', $context));
            unset($data['head']);
        } elseif (\array_key_exists('head', $data) && $data['head'] === null) {
            $object->setHead(null);
        }
        if (\array_key_exists('patch', $data) && $data['patch'] !== null) {
            $object->setPatch($this->denormalizer->denormalize($data['patch'], 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Operation', 'json', $context));
            unset($data['patch']);
        } elseif (\array_key_exists('patch', $data) && $data['patch'] === null) {
            $object->setPatch(null);
        }
        if (\array_key_exists('parameters', $data) && $data['parameters'] !== null) {
            $values = [];
            foreach ($data['parameters'] as $value) {
                $value_1 = $value;
                if (is_array($value) and isset($value['name']) and (isset($value['in']) and $value['in'] == 'body') and isset($value['schema'])) {
                    $value_1 = $this->denormalizer->denormalize($value, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\BodyParameter', 'json', $context);
                } elseif (is_array($value) and (isset($value['in']) and $value['in'] == 'header') and isset($value['name']) and (isset($value['type']) and ($value['type'] == 'string' or $value['type'] == 'number' or $value['type'] == 'boolean' or $value['type'] == 'integer' or $value['type'] == 'array'))) {
                    $value_1 = $this->denormalizer->denormalize($value, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\HeaderParameterSubSchema', 'json', $context);
                } elseif (is_array($value) and (isset($value['in']) and $value['in'] == 'formData') and isset($value['name']) and (isset($value['type']) and ($value['type'] == 'string' or $value['type'] == 'number' or $value['type'] == 'boolean' or $value['type'] == 'integer' or $value['type'] == 'array' or $value['type'] == 'file'))) {
                    $value_1 = $this->denormalizer->denormalize($value, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\FormDataParameterSubSchema', 'json', $context);
                } elseif (is_array($value) and (isset($value['in']) and $value['in'] == 'query') and isset($value['name']) and (isset($value['type']) and ($value['type'] == 'string' or $value['type'] == 'number' or $value['type'] == 'boolean' or $value['type'] == 'integer' or $value['type'] == 'array'))) {
                    $value_1 = $this->denormalizer->denormalize($value, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\QueryParameterSubSchema', 'json', $context);
                } elseif (is_array($value) and (isset($value['required']) and $value['required'] == '1') and (isset($value['in']) and $value['in'] == 'path') and isset($value['name']) and (isset($value['type']) and ($value['type'] == 'string' or $value['type'] == 'number' or $value['type'] == 'boolean' or $value['type'] == 'integer' or $value['type'] == 'array'))) {
                    $value_1 = $this->denormalizer->denormalize($value, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\PathParameterSubSchema', 'json', $context);
                } elseif (is_array($value) and isset($value['$ref'])) {
                    $value_1 = $this->denormalizer->denormalize($value, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\JsonReference', 'json', $context);
                }
                $values[] = $value_1;
            }
            $object->setParameters($values);
            unset($data['parameters']);
        } elseif (\array_key_exists('parameters', $data) && $data['parameters'] === null) {
            $object->setParameters(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/^x-/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getDollarRef()) {
            $data['$ref'] = $object->getDollarRef();
        } else {
            $data['$ref'] = null;
        }
        if (null !== $object->getGet()) {
            $data['get'] = $this->normalizer->normalize($object->getGet(), 'json', $context);
        } else {
            $data['get'] = null;
        }
        if (null !== $object->getPut()) {
            $data['put'] = $this->normalizer->normalize($object->getPut(), 'json', $context);
        } else {
            $data['put'] = null;
        }
        if (null !== $object->getPost()) {
            $data['post'] = $this->normalizer->normalize($object->getPost(), 'json', $context);
        } else {
            $data['post'] = null;
        }
        if (null !== $object->getDelete()) {
            $data['delete'] = $this->normalizer->normalize($object->getDelete(), 'json', $context);
        } else {
            $data['delete'] = null;
        }
        if (null !== $object->getOptions()) {
            $data['options'] = $this->normalizer->normalize($object->getOptions(), 'json', $context);
        } else {
            $data['options'] = null;
        }
        if (null !== $object->getHead()) {
            $data['head'] = $this->normalizer->normalize($object->getHead(), 'json', $context);
        } else {
            $data['head'] = null;
        }
        if (null !== $object->getPatch()) {
            $data['patch'] = $this->normalizer->normalize($object->getPatch(), 'json', $context);
        } else {
            $data['patch'] = null;
        }
        if (null !== $object->getParameters()) {
            $values = [];
            foreach ($object->getParameters() as $value) {
                $value_1 = $value;
                if (is_object($value)) {
                    $value_1 = $this->normalizer->normalize($value, 'json', $context);
                } elseif (is_object($value)) {
                    $value_1 = $this->normalizer->normalize($value, 'json', $context);
                } elseif (is_object($value)) {
                    $value_1 = $this->normalizer->normalize($value, 'json', $context);
                } elseif (is_object($value)) {
                    $value_1 = $this->normalizer->normalize($value, 'json', $context);
                } elseif (is_object($value)) {
                    $value_1 = $this->normalizer->normalize($value, 'json', $context);
                } elseif (is_object($value)) {
                    $value_1 = $this->normalizer->normalize($value, 'json', $context);
                }
                $values[] = $value_1;
            }
            $data['parameters'] = $values;
        } else {
            $data['parameters'] = null;
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/^x-/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }

        return $data;
    }
}
