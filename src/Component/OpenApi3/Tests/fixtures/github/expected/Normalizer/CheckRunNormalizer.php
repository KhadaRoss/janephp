<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class CheckRunNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Github\Model\CheckRun::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Github\Model\CheckRun::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\CheckRun();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CheckRunConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('head_sha', $data)) {
                $object->setHeadSha($data['head_sha']);
                unset($data['head_sha']);
            }
            if (\array_key_exists('node_id', $data)) {
                $object->setNodeId($data['node_id']);
                unset($data['node_id']);
            }
            if (\array_key_exists('external_id', $data) && $data['external_id'] !== null) {
                $object->setExternalId($data['external_id']);
                unset($data['external_id']);
            }
            elseif (\array_key_exists('external_id', $data) && $data['external_id'] === null) {
                $object->setExternalId(null);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('html_url', $data) && $data['html_url'] !== null) {
                $object->setHtmlUrl($data['html_url']);
                unset($data['html_url']);
            }
            elseif (\array_key_exists('html_url', $data) && $data['html_url'] === null) {
                $object->setHtmlUrl(null);
            }
            if (\array_key_exists('details_url', $data) && $data['details_url'] !== null) {
                $object->setDetailsUrl($data['details_url']);
                unset($data['details_url']);
            }
            elseif (\array_key_exists('details_url', $data) && $data['details_url'] === null) {
                $object->setDetailsUrl(null);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('conclusion', $data) && $data['conclusion'] !== null) {
                $object->setConclusion($data['conclusion']);
                unset($data['conclusion']);
            }
            elseif (\array_key_exists('conclusion', $data) && $data['conclusion'] === null) {
                $object->setConclusion(null);
            }
            if (\array_key_exists('started_at', $data) && $data['started_at'] !== null) {
                $object->setStartedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['started_at']));
                unset($data['started_at']);
            }
            elseif (\array_key_exists('started_at', $data) && $data['started_at'] === null) {
                $object->setStartedAt(null);
            }
            if (\array_key_exists('completed_at', $data) && $data['completed_at'] !== null) {
                $object->setCompletedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['completed_at']));
                unset($data['completed_at']);
            }
            elseif (\array_key_exists('completed_at', $data) && $data['completed_at'] === null) {
                $object->setCompletedAt(null);
            }
            if (\array_key_exists('output', $data)) {
                $object->setOutput($this->denormalizer->denormalize($data['output'], \Github\Model\CheckRunOutput::class, 'json', $context));
                unset($data['output']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('check_suite', $data) && $data['check_suite'] !== null) {
                $object->setCheckSuite($this->denormalizer->denormalize($data['check_suite'], \Github\Model\CheckRunCheckSuite::class, 'json', $context));
                unset($data['check_suite']);
            }
            elseif (\array_key_exists('check_suite', $data) && $data['check_suite'] === null) {
                $object->setCheckSuite(null);
            }
            if (\array_key_exists('app', $data) && $data['app'] !== null) {
                $object->setApp($this->denormalizer->denormalize($data['app'], \Github\Model\CheckRunApp::class, 'json', $context));
                unset($data['app']);
            }
            elseif (\array_key_exists('app', $data) && $data['app'] === null) {
                $object->setApp(null);
            }
            if (\array_key_exists('pull_requests', $data)) {
                $object->setPullRequests($data['pull_requests']);
                unset($data['pull_requests']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['id'] = $object->getId();
            $data['head_sha'] = $object->getHeadSha();
            $data['node_id'] = $object->getNodeId();
            $data['external_id'] = $object->getExternalId();
            $data['url'] = $object->getUrl();
            $data['html_url'] = $object->getHtmlUrl();
            $data['details_url'] = $object->getDetailsUrl();
            $data['status'] = $object->getStatus();
            $data['conclusion'] = $object->getConclusion();
            $data['started_at'] = $object->getStartedAt()->format('Y-m-d\TH:i:sP');
            $data['completed_at'] = $object->getCompletedAt()->format('Y-m-d\TH:i:sP');
            $data['output'] = $this->normalizer->normalize($object->getOutput(), 'json', $context);
            $data['name'] = $object->getName();
            $data['check_suite'] = $this->normalizer->normalize($object->getCheckSuite(), 'json', $context);
            $data['app'] = $this->normalizer->normalize($object->getApp(), 'json', $context);
            $data['pull_requests'] = $object->getPullRequests();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CheckRunConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Github\Model\CheckRun::class => false];
        }
    }
} else {
    class CheckRunNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Github\Model\CheckRun::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Github\Model\CheckRun::class;
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
            $object = new \Github\Model\CheckRun();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CheckRunConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('head_sha', $data)) {
                $object->setHeadSha($data['head_sha']);
                unset($data['head_sha']);
            }
            if (\array_key_exists('node_id', $data)) {
                $object->setNodeId($data['node_id']);
                unset($data['node_id']);
            }
            if (\array_key_exists('external_id', $data) && $data['external_id'] !== null) {
                $object->setExternalId($data['external_id']);
                unset($data['external_id']);
            }
            elseif (\array_key_exists('external_id', $data) && $data['external_id'] === null) {
                $object->setExternalId(null);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('html_url', $data) && $data['html_url'] !== null) {
                $object->setHtmlUrl($data['html_url']);
                unset($data['html_url']);
            }
            elseif (\array_key_exists('html_url', $data) && $data['html_url'] === null) {
                $object->setHtmlUrl(null);
            }
            if (\array_key_exists('details_url', $data) && $data['details_url'] !== null) {
                $object->setDetailsUrl($data['details_url']);
                unset($data['details_url']);
            }
            elseif (\array_key_exists('details_url', $data) && $data['details_url'] === null) {
                $object->setDetailsUrl(null);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('conclusion', $data) && $data['conclusion'] !== null) {
                $object->setConclusion($data['conclusion']);
                unset($data['conclusion']);
            }
            elseif (\array_key_exists('conclusion', $data) && $data['conclusion'] === null) {
                $object->setConclusion(null);
            }
            if (\array_key_exists('started_at', $data) && $data['started_at'] !== null) {
                $object->setStartedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['started_at']));
                unset($data['started_at']);
            }
            elseif (\array_key_exists('started_at', $data) && $data['started_at'] === null) {
                $object->setStartedAt(null);
            }
            if (\array_key_exists('completed_at', $data) && $data['completed_at'] !== null) {
                $object->setCompletedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['completed_at']));
                unset($data['completed_at']);
            }
            elseif (\array_key_exists('completed_at', $data) && $data['completed_at'] === null) {
                $object->setCompletedAt(null);
            }
            if (\array_key_exists('output', $data)) {
                $object->setOutput($this->denormalizer->denormalize($data['output'], \Github\Model\CheckRunOutput::class, 'json', $context));
                unset($data['output']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('check_suite', $data) && $data['check_suite'] !== null) {
                $object->setCheckSuite($this->denormalizer->denormalize($data['check_suite'], \Github\Model\CheckRunCheckSuite::class, 'json', $context));
                unset($data['check_suite']);
            }
            elseif (\array_key_exists('check_suite', $data) && $data['check_suite'] === null) {
                $object->setCheckSuite(null);
            }
            if (\array_key_exists('app', $data) && $data['app'] !== null) {
                $object->setApp($this->denormalizer->denormalize($data['app'], \Github\Model\CheckRunApp::class, 'json', $context));
                unset($data['app']);
            }
            elseif (\array_key_exists('app', $data) && $data['app'] === null) {
                $object->setApp(null);
            }
            if (\array_key_exists('pull_requests', $data)) {
                $object->setPullRequests($data['pull_requests']);
                unset($data['pull_requests']);
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
            $data['id'] = $object->getId();
            $data['head_sha'] = $object->getHeadSha();
            $data['node_id'] = $object->getNodeId();
            $data['external_id'] = $object->getExternalId();
            $data['url'] = $object->getUrl();
            $data['html_url'] = $object->getHtmlUrl();
            $data['details_url'] = $object->getDetailsUrl();
            $data['status'] = $object->getStatus();
            $data['conclusion'] = $object->getConclusion();
            $data['started_at'] = $object->getStartedAt()->format('Y-m-d\TH:i:sP');
            $data['completed_at'] = $object->getCompletedAt()->format('Y-m-d\TH:i:sP');
            $data['output'] = $this->normalizer->normalize($object->getOutput(), 'json', $context);
            $data['name'] = $object->getName();
            $data['check_suite'] = $this->normalizer->normalize($object->getCheckSuite(), 'json', $context);
            $data['app'] = $this->normalizer->normalize($object->getApp(), 'json', $context);
            $data['pull_requests'] = $object->getPullRequests();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CheckRunConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Github\Model\CheckRun::class => false];
        }
    }
}