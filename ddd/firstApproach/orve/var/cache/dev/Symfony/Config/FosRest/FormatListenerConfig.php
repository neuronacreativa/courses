<?php

namespace Symfony\Config\FosRest;

require_once __DIR__ . \DIRECTORY_SEPARATOR . 'FormatListener' . \DIRECTORY_SEPARATOR . 'RuleConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class FormatListenerConfig 
{
    private $enabled;
    private $service;
    private $rules;
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function service($value): self
    {
        $this->service = $value;
    
        return $this;
    }
    
    public function rule(array $value = []): \Symfony\Config\FosRest\FormatListener\RuleConfig
    {
        return $this->rules[] = new \Symfony\Config\FosRest\FormatListener\RuleConfig($value);
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['service'])) {
            $this->service = $value['service'];
            unset($value['service']);
        }
    
        if (isset($value['rules'])) {
            $this->rules = array_map(function ($v) { return new \Symfony\Config\FosRest\FormatListener\RuleConfig($v); }, $value['rules']);
            unset($value['rules']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->enabled) {
            $output['enabled'] = $this->enabled;
        }
        if (null !== $this->service) {
            $output['service'] = $this->service;
        }
        if (null !== $this->rules) {
            $output['rules'] = array_map(function ($v) { return $v->toArray(); }, $this->rules);
        }
    
        return $output;
    }
    

}
