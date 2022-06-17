<?php

namespace Symfony\Config\FosRest\BodyListener;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ArrayNormalizerConfig 
{
    private $service;
    private $forms;
    
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
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function forms($value): self
    {
        $this->forms = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['service'])) {
            $this->service = $value['service'];
            unset($value['service']);
        }
    
        if (isset($value['forms'])) {
            $this->forms = $value['forms'];
            unset($value['forms']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->service) {
            $output['service'] = $this->service;
        }
        if (null !== $this->forms) {
            $output['forms'] = $this->forms;
        }
    
        return $output;
    }
    

}
