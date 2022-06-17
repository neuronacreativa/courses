<?php

namespace Symfony\Config\FosRest;

require_once __DIR__ . \DIRECTORY_SEPARATOR . 'Versioning' . \DIRECTORY_SEPARATOR . 'ResolversConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class VersioningConfig 
{
    private $enabled;
    private $defaultVersion;
    private $resolvers;
    private $guessingOrder;
    
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
    public function defaultVersion($value): self
    {
        $this->defaultVersion = $value;
    
        return $this;
    }
    
    public function resolvers(array $value = []): \Symfony\Config\FosRest\Versioning\ResolversConfig
    {
        if (null === $this->resolvers) {
            $this->resolvers = new \Symfony\Config\FosRest\Versioning\ResolversConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "resolvers()" has already been initialized. You cannot pass values the second time you call resolvers().');
        }
    
        return $this->resolvers;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function guessingOrder($value): self
    {
        $this->guessingOrder = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['default_version'])) {
            $this->defaultVersion = $value['default_version'];
            unset($value['default_version']);
        }
    
        if (isset($value['resolvers'])) {
            $this->resolvers = new \Symfony\Config\FosRest\Versioning\ResolversConfig($value['resolvers']);
            unset($value['resolvers']);
        }
    
        if (isset($value['guessing_order'])) {
            $this->guessingOrder = $value['guessing_order'];
            unset($value['guessing_order']);
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
        if (null !== $this->defaultVersion) {
            $output['default_version'] = $this->defaultVersion;
        }
        if (null !== $this->resolvers) {
            $output['resolvers'] = $this->resolvers->toArray();
        }
        if (null !== $this->guessingOrder) {
            $output['guessing_order'] = $this->guessingOrder;
        }
    
        return $output;
    }
    

}
