<?php

namespace Jane\Component\OpenApi2;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\OpenApi2\Generator\EndpointGenerator;
use Jane\Component\OpenApi2\Generator\GeneratorFactory;
use Jane\Component\OpenApi2\Guesser\OpenApiSchema\GuesserFactory;
use Jane\Component\OpenApi2\JsonSchema\Normalizer\JaneObjectNormalizer;
use Jane\Component\OpenApi2\SchemaParser\SchemaParser;
use Jane\Component\OpenApiCommon\Generator\AuthenticationGenerator;
use Jane\Component\OpenApiCommon\Generator\ModelGenerator;
use Jane\Component\OpenApiCommon\Generator\NormalizerGenerator;
use Jane\Component\OpenApiCommon\Generator\RuntimeGenerator;
use Jane\Component\OpenApiCommon\JaneOpenApi as CommonJaneOpenApi;
use PhpParser\ParserFactory;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class JaneOpenApi extends CommonJaneOpenApi
{
    protected const OBJECT_NORMALIZER_CLASS = JaneObjectNormalizer::class;
    protected const WHITELIST_FETCH_CLASS = WhitelistedSchema::class;

    protected static function create(array $options = []): CommonJaneOpenApi
    {
        $serializer = self::buildSerializer();

        return new self(
            SchemaParser::class,
            GuesserFactory::create($serializer, $options),
            $options['strict'] ?? true
        );
    }

    protected static function generators(DenormalizerInterface $denormalizer, array $options = []): \Generator
    {
        $naming = new Naming();
        $parser = (new ParserFactory())->create(ParserFactory::PREFER_PHP7);

        yield new ModelGenerator($naming, $parser);
        yield new NormalizerGenerator($naming, $parser, $options['reference'] ?? false, $options['use-cacheable-supports-method'] ?? false, $options['skip-null-values'] ?? true, $options['skip-required-fields'] ?? false);
        yield new AuthenticationGenerator();
        yield GeneratorFactory::build($denormalizer, $options['endpoint-generator'] ?: EndpointGenerator::class);
        yield new RuntimeGenerator($naming, $parser);
    }
}
