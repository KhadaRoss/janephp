<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\Component\OpenApi2\JsonSchema\Model;

class OpenApi extends \ArrayObject
{
    /**
     * The Swagger version of this document.
     *
     * @var string|null
     */
    protected $swagger;
    /**
     * General information about the API.
     *
     * @var Info|null
     */
    protected $info;
    /**
     * The host (name or ip) of the API. Example: 'swagger.io'.
     *
     * @var string|null
     */
    protected $host;
    /**
     * The base path to the API. Example: '/api'.
     *
     * @var string|null
     */
    protected $basePath;
    /**
     * The transfer protocol of the API.
     *
     * @var string[]|null
     */
    protected $schemes;
    /**
     * A list of MIME types accepted by the API.
     *
     * @var string[]|null
     */
    protected $consumes;
    /**
     * A list of MIME types the API can produce.
     *
     * @var string[]|null
     */
    protected $produces;
    /**
     * Relative paths to the individual endpoints. They must be relative to the 'basePath'.
     *
     * @var mixed[]|PathItem[]|null
     */
    protected $paths;
    /**
     * One or more JSON objects describing the schemas being consumed and produced by the API.
     *
     * @var Schema[]|null
     */
    protected $definitions;
    /**
     * One or more JSON representations for parameters.
     *
     * @var BodyParameter[]|HeaderParameterSubSchema[]|FormDataParameterSubSchema[]|QueryParameterSubSchema[]|PathParameterSubSchema[]|null
     */
    protected $parameters;
    /**
     * One or more JSON representations for responses.
     *
     * @var Response[]|null
     */
    protected $responses;
    /**
     * @var string[][][]|null
     */
    protected $security;
    /**
     * @var BasicAuthenticationSecurity[]|ApiKeySecurity[]|Oauth2ImplicitSecurity[]|Oauth2PasswordSecurity[]|Oauth2ApplicationSecurity[]|Oauth2AccessCodeSecurity[]|null
     */
    protected $securityDefinitions;
    /**
     * @var Tag[]|null
     */
    protected $tags;
    /**
     * information about external documentation.
     *
     * @var ExternalDocs|null
     */
    protected $externalDocs;

    /**
     * The Swagger version of this document.
     *
     * @return string|null
     */
    public function getSwagger(): ?string
    {
        return $this->swagger;
    }

    /**
     * The Swagger version of this document.
     *
     * @param string|null $swagger
     *
     * @return self
     */
    public function setSwagger(?string $swagger): self
    {
        $this->swagger = $swagger;

        return $this;
    }

    /**
     * General information about the API.
     *
     * @return Info|null
     */
    public function getInfo(): ?Info
    {
        return $this->info;
    }

    /**
     * General information about the API.
     *
     * @param Info|null $info
     *
     * @return self
     */
    public function setInfo(?Info $info): self
    {
        $this->info = $info;

        return $this;
    }

    /**
     * The host (name or ip) of the API. Example: 'swagger.io'.
     *
     * @return string|null
     */
    public function getHost(): ?string
    {
        return $this->host;
    }

    /**
     * The host (name or ip) of the API. Example: 'swagger.io'.
     *
     * @param string|null $host
     *
     * @return self
     */
    public function setHost(?string $host): self
    {
        $this->host = $host;

        return $this;
    }

    /**
     * The base path to the API. Example: '/api'.
     *
     * @return string|null
     */
    public function getBasePath(): ?string
    {
        return $this->basePath;
    }

    /**
     * The base path to the API. Example: '/api'.
     *
     * @param string|null $basePath
     *
     * @return self
     */
    public function setBasePath(?string $basePath): self
    {
        $this->basePath = $basePath;

        return $this;
    }

    /**
     * The transfer protocol of the API.
     *
     * @return string[]|null
     */
    public function getSchemes(): ?array
    {
        return $this->schemes;
    }

    /**
     * The transfer protocol of the API.
     *
     * @param string[]|null $schemes
     *
     * @return self
     */
    public function setSchemes(?array $schemes): self
    {
        $this->schemes = $schemes;

        return $this;
    }

    /**
     * A list of MIME types accepted by the API.
     *
     * @return string[]|null
     */
    public function getConsumes(): ?array
    {
        return $this->consumes;
    }

    /**
     * A list of MIME types accepted by the API.
     *
     * @param string[]|null $consumes
     *
     * @return self
     */
    public function setConsumes(?array $consumes): self
    {
        $this->consumes = $consumes;

        return $this;
    }

    /**
     * A list of MIME types the API can produce.
     *
     * @return string[]|null
     */
    public function getProduces(): ?array
    {
        return $this->produces;
    }

    /**
     * A list of MIME types the API can produce.
     *
     * @param string[]|null $produces
     *
     * @return self
     */
    public function setProduces(?array $produces): self
    {
        $this->produces = $produces;

        return $this;
    }

    /**
     * Relative paths to the individual endpoints. They must be relative to the 'basePath'.
     *
     * @return mixed[]|PathItem[]
     */
    public function getPaths()
    {
        return $this->paths;
    }

    /**
     * Relative paths to the individual endpoints. They must be relative to the 'basePath'.
     *
     * @param mixed[]|PathItem[] $paths
     *
     * @return self
     */
    public function setPaths($paths): self
    {
        $this->paths = $paths;

        return $this;
    }

    /**
     * One or more JSON objects describing the schemas being consumed and produced by the API.
     *
     * @return Schema[]|null
     */
    public function getDefinitions(): ?iterable
    {
        return $this->definitions;
    }

    /**
     * One or more JSON objects describing the schemas being consumed and produced by the API.
     *
     * @param Schema[]|null $definitions
     *
     * @return self
     */
    public function setDefinitions(?iterable $definitions): self
    {
        $this->definitions = $definitions;

        return $this;
    }

    /**
     * One or more JSON representations for parameters.
     *
     * @return BodyParameter[]|HeaderParameterSubSchema[]|FormDataParameterSubSchema[]|QueryParameterSubSchema[]|PathParameterSubSchema[]|null
     */
    public function getParameters(): ?iterable
    {
        return $this->parameters;
    }

    /**
     * One or more JSON representations for parameters.
     *
     * @param BodyParameter[]|HeaderParameterSubSchema[]|FormDataParameterSubSchema[]|QueryParameterSubSchema[]|PathParameterSubSchema[]|null $parameters
     *
     * @return self
     */
    public function setParameters(?iterable $parameters): self
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * One or more JSON representations for responses.
     *
     * @return Response[]|null
     */
    public function getResponses(): ?iterable
    {
        return $this->responses;
    }

    /**
     * One or more JSON representations for responses.
     *
     * @param Response[]|null $responses
     *
     * @return self
     */
    public function setResponses(?iterable $responses): self
    {
        $this->responses = $responses;

        return $this;
    }

    /**
     * @return string[][][]|null
     */
    public function getSecurity(): ?array
    {
        return $this->security;
    }

    /**
     * @param string[][][]|null $security
     *
     * @return self
     */
    public function setSecurity(?array $security): self
    {
        $this->security = $security;

        return $this;
    }

    /**
     * @return BasicAuthenticationSecurity[]|ApiKeySecurity[]|Oauth2ImplicitSecurity[]|Oauth2PasswordSecurity[]|Oauth2ApplicationSecurity[]|Oauth2AccessCodeSecurity[]|null
     */
    public function getSecurityDefinitions(): ?iterable
    {
        return $this->securityDefinitions;
    }

    /**
     * @param BasicAuthenticationSecurity[]|ApiKeySecurity[]|Oauth2ImplicitSecurity[]|Oauth2PasswordSecurity[]|Oauth2ApplicationSecurity[]|Oauth2AccessCodeSecurity[]|null $securityDefinitions
     *
     * @return self
     */
    public function setSecurityDefinitions(?iterable $securityDefinitions): self
    {
        $this->securityDefinitions = $securityDefinitions;

        return $this;
    }

    /**
     * @return Tag[]|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param Tag[]|null $tags
     *
     * @return self
     */
    public function setTags(?array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * information about external documentation.
     *
     * @return ExternalDocs|null
     */
    public function getExternalDocs(): ?ExternalDocs
    {
        return $this->externalDocs;
    }

    /**
     * information about external documentation.
     *
     * @param ExternalDocs|null $externalDocs
     *
     * @return self
     */
    public function setExternalDocs(?ExternalDocs $externalDocs): self
    {
        $this->externalDocs = $externalDocs;

        return $this;
    }
}
