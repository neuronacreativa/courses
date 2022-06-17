<?php

namespace Symfony\Config\FosRest;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ServiceConfig 
{
    private $serializer;
    private $viewHandler;
    private $validator;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function serializer($value): self
    {
        $this->serializer = $value;
    
        return $this;
    }
    
    /**
     * @default 'fos_rest.view_handler.default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function viewHandler($value): self
    {
        $this->viewHandler = $value;
    
        return $this;
    }
    
    /**
     * @default 'validator'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function validator($value): self
    {
        $this->validator = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['serializer'])) {
            $this->serializer = $value['serializer'];
            unset($value['serializer']);
        }
    
        if (isset($value['view_handler'])) {
            $this->viewHandler = $value['view_handler'];
            unset($value['view_handler']);
        }
    
        if (isset($value['validator'])) {
            $this->validator = $value['validator'];
            unset($value['validator']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->serializer) {
            $output['serializer'] = $this->serializer;
        }
        if (null !== $this->viewHandler) {
            $output['view_handler'] = $this->viewHandler;
        }
        if (null !== $this->validator) {
            $output['validator'] = $this->validator;
        }
    
        return $output;
    }
    

}
