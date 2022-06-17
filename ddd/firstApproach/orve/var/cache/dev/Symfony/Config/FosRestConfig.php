<?php

namespace Symfony\Config;

require_once __DIR__ . \DIRECTORY_SEPARATOR . 'FosRest' . \DIRECTORY_SEPARATOR . 'ParamFetcherListenerConfig.php';
require_once __DIR__ . \DIRECTORY_SEPARATOR . 'FosRest' . \DIRECTORY_SEPARATOR . 'AllowedMethodsListenerConfig.php';
require_once __DIR__ . \DIRECTORY_SEPARATOR . 'FosRest' . \DIRECTORY_SEPARATOR . 'BodyConverterConfig.php';
require_once __DIR__ . \DIRECTORY_SEPARATOR . 'FosRest' . \DIRECTORY_SEPARATOR . 'ServiceConfig.php';
require_once __DIR__ . \DIRECTORY_SEPARATOR . 'FosRest' . \DIRECTORY_SEPARATOR . 'SerializerConfig.php';
require_once __DIR__ . \DIRECTORY_SEPARATOR . 'FosRest' . \DIRECTORY_SEPARATOR . 'ZoneConfig.php';
require_once __DIR__ . \DIRECTORY_SEPARATOR . 'FosRest' . \DIRECTORY_SEPARATOR . 'ViewConfig.php';
require_once __DIR__ . \DIRECTORY_SEPARATOR . 'FosRest' . \DIRECTORY_SEPARATOR . 'ExceptionConfig.php';
require_once __DIR__ . \DIRECTORY_SEPARATOR . 'FosRest' . \DIRECTORY_SEPARATOR . 'BodyListenerConfig.php';
require_once __DIR__ . \DIRECTORY_SEPARATOR . 'FosRest' . \DIRECTORY_SEPARATOR . 'FormatListenerConfig.php';
require_once __DIR__ . \DIRECTORY_SEPARATOR . 'FosRest' . \DIRECTORY_SEPARATOR . 'VersioningConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class FosRestConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $disableCsrfRole;
    private $unauthorizedChallenge;
    private $paramFetcherListener;
    private $cacheDir;
    private $allowedMethodsListener;
    private $routingLoader;
    private $bodyConverter;
    private $service;
    private $serializer;
    private $zone;
    private $view;
    private $exception;
    private $bodyListener;
    private $formatListener;
    private $versioning;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function disableCsrfRole($value): self
    {
        $this->disableCsrfRole = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function unauthorizedChallenge($value): self
    {
        $this->unauthorizedChallenge = $value;
    
        return $this;
    }
    
    public function paramFetcherListener(array $value = []): \Symfony\Config\FosRest\ParamFetcherListenerConfig
    {
        if (null === $this->paramFetcherListener) {
            $this->paramFetcherListener = new \Symfony\Config\FosRest\ParamFetcherListenerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "paramFetcherListener()" has already been initialized. You cannot pass values the second time you call paramFetcherListener().');
        }
    
        return $this->paramFetcherListener;
    }
    
    /**
     * @default '%kernel.cache_dir%/fos_rest'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cacheDir($value): self
    {
        $this->cacheDir = $value;
    
        return $this;
    }
    
    public function allowedMethodsListener(array $value = []): \Symfony\Config\FosRest\AllowedMethodsListenerConfig
    {
        if (null === $this->allowedMethodsListener) {
            $this->allowedMethodsListener = new \Symfony\Config\FosRest\AllowedMethodsListenerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "allowedMethodsListener()" has already been initialized. You cannot pass values the second time you call allowedMethodsListener().');
        }
    
        return $this->allowedMethodsListener;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function routingLoader($value): self
    {
        $this->routingLoader = $value;
    
        return $this;
    }
    
    public function bodyConverter(array $value = []): \Symfony\Config\FosRest\BodyConverterConfig
    {
        if (null === $this->bodyConverter) {
            $this->bodyConverter = new \Symfony\Config\FosRest\BodyConverterConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "bodyConverter()" has already been initialized. You cannot pass values the second time you call bodyConverter().');
        }
    
        return $this->bodyConverter;
    }
    
    public function service(array $value = []): \Symfony\Config\FosRest\ServiceConfig
    {
        if (null === $this->service) {
            $this->service = new \Symfony\Config\FosRest\ServiceConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "service()" has already been initialized. You cannot pass values the second time you call service().');
        }
    
        return $this->service;
    }
    
    public function serializer(array $value = []): \Symfony\Config\FosRest\SerializerConfig
    {
        if (null === $this->serializer) {
            $this->serializer = new \Symfony\Config\FosRest\SerializerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "serializer()" has already been initialized. You cannot pass values the second time you call serializer().');
        }
    
        return $this->serializer;
    }
    
    public function zone(array $value = []): \Symfony\Config\FosRest\ZoneConfig
    {
        return $this->zone[] = new \Symfony\Config\FosRest\ZoneConfig($value);
    }
    
    public function view(array $value = []): \Symfony\Config\FosRest\ViewConfig
    {
        if (null === $this->view) {
            $this->view = new \Symfony\Config\FosRest\ViewConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "view()" has already been initialized. You cannot pass values the second time you call view().');
        }
    
        return $this->view;
    }
    
    public function exception(array $value = []): \Symfony\Config\FosRest\ExceptionConfig
    {
        if (null === $this->exception) {
            $this->exception = new \Symfony\Config\FosRest\ExceptionConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "exception()" has already been initialized. You cannot pass values the second time you call exception().');
        }
    
        return $this->exception;
    }
    
    public function bodyListener(array $value = []): \Symfony\Config\FosRest\BodyListenerConfig
    {
        if (null === $this->bodyListener) {
            $this->bodyListener = new \Symfony\Config\FosRest\BodyListenerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "bodyListener()" has already been initialized. You cannot pass values the second time you call bodyListener().');
        }
    
        return $this->bodyListener;
    }
    
    public function formatListener(array $value = []): \Symfony\Config\FosRest\FormatListenerConfig
    {
        if (null === $this->formatListener) {
            $this->formatListener = new \Symfony\Config\FosRest\FormatListenerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "formatListener()" has already been initialized. You cannot pass values the second time you call formatListener().');
        }
    
        return $this->formatListener;
    }
    
    public function versioning(array $value = []): \Symfony\Config\FosRest\VersioningConfig
    {
        if (null === $this->versioning) {
            $this->versioning = new \Symfony\Config\FosRest\VersioningConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "versioning()" has already been initialized. You cannot pass values the second time you call versioning().');
        }
    
        return $this->versioning;
    }
    
    public function getExtensionAlias(): string
    {
        return 'fos_rest';
    }
            
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['disable_csrf_role'])) {
            $this->disableCsrfRole = $value['disable_csrf_role'];
            unset($value['disable_csrf_role']);
        }
    
        if (isset($value['unauthorized_challenge'])) {
            $this->unauthorizedChallenge = $value['unauthorized_challenge'];
            unset($value['unauthorized_challenge']);
        }
    
        if (isset($value['param_fetcher_listener'])) {
            $this->paramFetcherListener = new \Symfony\Config\FosRest\ParamFetcherListenerConfig($value['param_fetcher_listener']);
            unset($value['param_fetcher_listener']);
        }
    
        if (isset($value['cache_dir'])) {
            $this->cacheDir = $value['cache_dir'];
            unset($value['cache_dir']);
        }
    
        if (isset($value['allowed_methods_listener'])) {
            $this->allowedMethodsListener = new \Symfony\Config\FosRest\AllowedMethodsListenerConfig($value['allowed_methods_listener']);
            unset($value['allowed_methods_listener']);
        }
    
        if (isset($value['routing_loader'])) {
            $this->routingLoader = $value['routing_loader'];
            unset($value['routing_loader']);
        }
    
        if (isset($value['body_converter'])) {
            $this->bodyConverter = new \Symfony\Config\FosRest\BodyConverterConfig($value['body_converter']);
            unset($value['body_converter']);
        }
    
        if (isset($value['service'])) {
            $this->service = new \Symfony\Config\FosRest\ServiceConfig($value['service']);
            unset($value['service']);
        }
    
        if (isset($value['serializer'])) {
            $this->serializer = new \Symfony\Config\FosRest\SerializerConfig($value['serializer']);
            unset($value['serializer']);
        }
    
        if (isset($value['zone'])) {
            $this->zone = array_map(function ($v) { return new \Symfony\Config\FosRest\ZoneConfig($v); }, $value['zone']);
            unset($value['zone']);
        }
    
        if (isset($value['view'])) {
            $this->view = new \Symfony\Config\FosRest\ViewConfig($value['view']);
            unset($value['view']);
        }
    
        if (isset($value['exception'])) {
            $this->exception = new \Symfony\Config\FosRest\ExceptionConfig($value['exception']);
            unset($value['exception']);
        }
    
        if (isset($value['body_listener'])) {
            $this->bodyListener = new \Symfony\Config\FosRest\BodyListenerConfig($value['body_listener']);
            unset($value['body_listener']);
        }
    
        if (isset($value['format_listener'])) {
            $this->formatListener = new \Symfony\Config\FosRest\FormatListenerConfig($value['format_listener']);
            unset($value['format_listener']);
        }
    
        if (isset($value['versioning'])) {
            $this->versioning = new \Symfony\Config\FosRest\VersioningConfig($value['versioning']);
            unset($value['versioning']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->disableCsrfRole) {
            $output['disable_csrf_role'] = $this->disableCsrfRole;
        }
        if (null !== $this->unauthorizedChallenge) {
            $output['unauthorized_challenge'] = $this->unauthorizedChallenge;
        }
        if (null !== $this->paramFetcherListener) {
            $output['param_fetcher_listener'] = $this->paramFetcherListener->toArray();
        }
        if (null !== $this->cacheDir) {
            $output['cache_dir'] = $this->cacheDir;
        }
        if (null !== $this->allowedMethodsListener) {
            $output['allowed_methods_listener'] = $this->allowedMethodsListener->toArray();
        }
        if (null !== $this->routingLoader) {
            $output['routing_loader'] = $this->routingLoader;
        }
        if (null !== $this->bodyConverter) {
            $output['body_converter'] = $this->bodyConverter->toArray();
        }
        if (null !== $this->service) {
            $output['service'] = $this->service->toArray();
        }
        if (null !== $this->serializer) {
            $output['serializer'] = $this->serializer->toArray();
        }
        if (null !== $this->zone) {
            $output['zone'] = array_map(function ($v) { return $v->toArray(); }, $this->zone);
        }
        if (null !== $this->view) {
            $output['view'] = $this->view->toArray();
        }
        if (null !== $this->exception) {
            $output['exception'] = $this->exception->toArray();
        }
        if (null !== $this->bodyListener) {
            $output['body_listener'] = $this->bodyListener->toArray();
        }
        if (null !== $this->formatListener) {
            $output['format_listener'] = $this->formatListener->toArray();
        }
        if (null !== $this->versioning) {
            $output['versioning'] = $this->versioning->toArray();
        }
    
        return $output;
    }
    

}
