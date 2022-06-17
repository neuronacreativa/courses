<?php

namespace Symfony\Config\FosRest;

require_once __DIR__ . \DIRECTORY_SEPARATOR . 'View' . \DIRECTORY_SEPARATOR . 'MimeTypesConfig.php';
require_once __DIR__ . \DIRECTORY_SEPARATOR . 'View' . \DIRECTORY_SEPARATOR . 'ViewResponseListenerConfig.php';
require_once __DIR__ . \DIRECTORY_SEPARATOR . 'View' . \DIRECTORY_SEPARATOR . 'JsonpHandlerConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ViewConfig 
{
    private $mimeTypes;
    private $formats;
    private $viewResponseListener;
    private $failedValidation;
    private $emptyContent;
    private $serializeNull;
    private $jsonpHandler;
    
    public function mimeTypes(array $value = []): \Symfony\Config\FosRest\View\MimeTypesConfig
    {
        if (null === $this->mimeTypes) {
            $this->mimeTypes = new \Symfony\Config\FosRest\View\MimeTypesConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "mimeTypes()" has already been initialized. You cannot pass values the second time you call mimeTypes().');
        }
    
        return $this->mimeTypes;
    }
    
    /**
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function format(string $name, $value): self
    {
        $this->formats[$name] = $value;
    
        return $this;
    }
    
    public function viewResponseListener(array $value = []): \Symfony\Config\FosRest\View\ViewResponseListenerConfig
    {
        if (null === $this->viewResponseListener) {
            $this->viewResponseListener = new \Symfony\Config\FosRest\View\ViewResponseListenerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "viewResponseListener()" has already been initialized. You cannot pass values the second time you call viewResponseListener().');
        }
    
        return $this->viewResponseListener;
    }
    
    /**
     * @default 400
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function failedValidation($value): self
    {
        $this->failedValidation = $value;
    
        return $this;
    }
    
    /**
     * @default 204
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function emptyContent($value): self
    {
        $this->emptyContent = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function serializeNull($value): self
    {
        $this->serializeNull = $value;
    
        return $this;
    }
    
    public function jsonpHandler(array $value = []): \Symfony\Config\FosRest\View\JsonpHandlerConfig
    {
        if (null === $this->jsonpHandler) {
            $this->jsonpHandler = new \Symfony\Config\FosRest\View\JsonpHandlerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "jsonpHandler()" has already been initialized. You cannot pass values the second time you call jsonpHandler().');
        }
    
        return $this->jsonpHandler;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['mime_types'])) {
            $this->mimeTypes = new \Symfony\Config\FosRest\View\MimeTypesConfig($value['mime_types']);
            unset($value['mime_types']);
        }
    
        if (isset($value['formats'])) {
            $this->formats = $value['formats'];
            unset($value['formats']);
        }
    
        if (isset($value['view_response_listener'])) {
            $this->viewResponseListener = new \Symfony\Config\FosRest\View\ViewResponseListenerConfig($value['view_response_listener']);
            unset($value['view_response_listener']);
        }
    
        if (isset($value['failed_validation'])) {
            $this->failedValidation = $value['failed_validation'];
            unset($value['failed_validation']);
        }
    
        if (isset($value['empty_content'])) {
            $this->emptyContent = $value['empty_content'];
            unset($value['empty_content']);
        }
    
        if (isset($value['serialize_null'])) {
            $this->serializeNull = $value['serialize_null'];
            unset($value['serialize_null']);
        }
    
        if (isset($value['jsonp_handler'])) {
            $this->jsonpHandler = new \Symfony\Config\FosRest\View\JsonpHandlerConfig($value['jsonp_handler']);
            unset($value['jsonp_handler']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->mimeTypes) {
            $output['mime_types'] = $this->mimeTypes->toArray();
        }
        if (null !== $this->formats) {
            $output['formats'] = $this->formats;
        }
        if (null !== $this->viewResponseListener) {
            $output['view_response_listener'] = $this->viewResponseListener->toArray();
        }
        if (null !== $this->failedValidation) {
            $output['failed_validation'] = $this->failedValidation;
        }
        if (null !== $this->emptyContent) {
            $output['empty_content'] = $this->emptyContent;
        }
        if (null !== $this->serializeNull) {
            $output['serialize_null'] = $this->serializeNull;
        }
        if (null !== $this->jsonpHandler) {
            $output['jsonp_handler'] = $this->jsonpHandler->toArray();
        }
    
        return $output;
    }
    

}
