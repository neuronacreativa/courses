<?php

namespace Symfony\Config\FosRest\View;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class JsonpHandlerConfig 
{
    private $callbackParam;
    private $mimeType;
    
    /**
     * @default 'callback'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function callbackParam($value): self
    {
        $this->callbackParam = $value;
    
        return $this;
    }
    
    /**
     * @default 'application/javascript+jsonp'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function mimeType($value): self
    {
        $this->mimeType = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['callback_param'])) {
            $this->callbackParam = $value['callback_param'];
            unset($value['callback_param']);
        }
    
        if (isset($value['mime_type'])) {
            $this->mimeType = $value['mime_type'];
            unset($value['mime_type']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->callbackParam) {
            $output['callback_param'] = $this->callbackParam;
        }
        if (null !== $this->mimeType) {
            $output['mime_type'] = $this->mimeType;
        }
    
        return $output;
    }
    

}
