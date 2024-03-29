<?php

namespace Symfony\Config\JmsSerializer\Metadata;

require_once __DIR__ . \DIRECTORY_SEPARATOR . 'Warmup' . \DIRECTORY_SEPARATOR . 'PathsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class WarmupConfig 
{
    private $paths;
    
    public function paths(array $value = []): \Symfony\Config\JmsSerializer\Metadata\Warmup\PathsConfig
    {
        if (null === $this->paths) {
            $this->paths = new \Symfony\Config\JmsSerializer\Metadata\Warmup\PathsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "paths()" has already been initialized. You cannot pass values the second time you call paths().');
        }
    
        return $this->paths;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['paths'])) {
            $this->paths = new \Symfony\Config\JmsSerializer\Metadata\Warmup\PathsConfig($value['paths']);
            unset($value['paths']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->paths) {
            $output['paths'] = $this->paths->toArray();
        }
    
        return $output;
    }
    

}
