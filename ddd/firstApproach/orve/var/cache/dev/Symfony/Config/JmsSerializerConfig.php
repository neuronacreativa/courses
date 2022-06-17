<?php

namespace Symfony\Config;

require_once __DIR__ . \DIRECTORY_SEPARATOR . 'JmsSerializer' . \DIRECTORY_SEPARATOR . 'HandlersConfig.php';
require_once __DIR__ . \DIRECTORY_SEPARATOR . 'JmsSerializer' . \DIRECTORY_SEPARATOR . 'SubscribersConfig.php';
require_once __DIR__ . \DIRECTORY_SEPARATOR . 'JmsSerializer' . \DIRECTORY_SEPARATOR . 'ObjectConstructorsConfig.php';
require_once __DIR__ . \DIRECTORY_SEPARATOR . 'JmsSerializer' . \DIRECTORY_SEPARATOR . 'PropertyNamingConfig.php';
require_once __DIR__ . \DIRECTORY_SEPARATOR . 'JmsSerializer' . \DIRECTORY_SEPARATOR . 'ExpressionEvaluatorConfig.php';
require_once __DIR__ . \DIRECTORY_SEPARATOR . 'JmsSerializer' . \DIRECTORY_SEPARATOR . 'MetadataConfig.php';
require_once __DIR__ . \DIRECTORY_SEPARATOR . 'JmsSerializer' . \DIRECTORY_SEPARATOR . 'VisitorsConfig.php';
require_once __DIR__ . \DIRECTORY_SEPARATOR . 'JmsSerializer' . \DIRECTORY_SEPARATOR . 'DefaultContextConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class JmsSerializerConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $handlers;
    private $subscribers;
    private $objectConstructors;
    private $propertyNaming;
    private $expressionEvaluator;
    private $metadata;
    private $visitors;
    private $defaultContext;
    
    public function handlers(array $value = []): \Symfony\Config\JmsSerializer\HandlersConfig
    {
        if (null === $this->handlers) {
            $this->handlers = new \Symfony\Config\JmsSerializer\HandlersConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "handlers()" has already been initialized. You cannot pass values the second time you call handlers().');
        }
    
        return $this->handlers;
    }
    
    public function subscribers(array $value = []): \Symfony\Config\JmsSerializer\SubscribersConfig
    {
        if (null === $this->subscribers) {
            $this->subscribers = new \Symfony\Config\JmsSerializer\SubscribersConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "subscribers()" has already been initialized. You cannot pass values the second time you call subscribers().');
        }
    
        return $this->subscribers;
    }
    
    public function objectConstructors(array $value = []): \Symfony\Config\JmsSerializer\ObjectConstructorsConfig
    {
        if (null === $this->objectConstructors) {
            $this->objectConstructors = new \Symfony\Config\JmsSerializer\ObjectConstructorsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "objectConstructors()" has already been initialized. You cannot pass values the second time you call objectConstructors().');
        }
    
        return $this->objectConstructors;
    }
    
    public function propertyNaming(array $value = []): \Symfony\Config\JmsSerializer\PropertyNamingConfig
    {
        if (null === $this->propertyNaming) {
            $this->propertyNaming = new \Symfony\Config\JmsSerializer\PropertyNamingConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "propertyNaming()" has already been initialized. You cannot pass values the second time you call propertyNaming().');
        }
    
        return $this->propertyNaming;
    }
    
    public function expressionEvaluator(array $value = []): \Symfony\Config\JmsSerializer\ExpressionEvaluatorConfig
    {
        if (null === $this->expressionEvaluator) {
            $this->expressionEvaluator = new \Symfony\Config\JmsSerializer\ExpressionEvaluatorConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "expressionEvaluator()" has already been initialized. You cannot pass values the second time you call expressionEvaluator().');
        }
    
        return $this->expressionEvaluator;
    }
    
    public function metadata(array $value = []): \Symfony\Config\JmsSerializer\MetadataConfig
    {
        if (null === $this->metadata) {
            $this->metadata = new \Symfony\Config\JmsSerializer\MetadataConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "metadata()" has already been initialized. You cannot pass values the second time you call metadata().');
        }
    
        return $this->metadata;
    }
    
    public function visitors(array $value = []): \Symfony\Config\JmsSerializer\VisitorsConfig
    {
        if (null === $this->visitors) {
            $this->visitors = new \Symfony\Config\JmsSerializer\VisitorsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "visitors()" has already been initialized. You cannot pass values the second time you call visitors().');
        }
    
        return $this->visitors;
    }
    
    public function defaultContext(array $value = []): \Symfony\Config\JmsSerializer\DefaultContextConfig
    {
        if (null === $this->defaultContext) {
            $this->defaultContext = new \Symfony\Config\JmsSerializer\DefaultContextConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "defaultContext()" has already been initialized. You cannot pass values the second time you call defaultContext().');
        }
    
        return $this->defaultContext;
    }
    
    public function getExtensionAlias(): string
    {
        return 'jms_serializer';
    }
            
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['handlers'])) {
            $this->handlers = new \Symfony\Config\JmsSerializer\HandlersConfig($value['handlers']);
            unset($value['handlers']);
        }
    
        if (isset($value['subscribers'])) {
            $this->subscribers = new \Symfony\Config\JmsSerializer\SubscribersConfig($value['subscribers']);
            unset($value['subscribers']);
        }
    
        if (isset($value['object_constructors'])) {
            $this->objectConstructors = new \Symfony\Config\JmsSerializer\ObjectConstructorsConfig($value['object_constructors']);
            unset($value['object_constructors']);
        }
    
        if (isset($value['property_naming'])) {
            $this->propertyNaming = new \Symfony\Config\JmsSerializer\PropertyNamingConfig($value['property_naming']);
            unset($value['property_naming']);
        }
    
        if (isset($value['expression_evaluator'])) {
            $this->expressionEvaluator = new \Symfony\Config\JmsSerializer\ExpressionEvaluatorConfig($value['expression_evaluator']);
            unset($value['expression_evaluator']);
        }
    
        if (isset($value['metadata'])) {
            $this->metadata = new \Symfony\Config\JmsSerializer\MetadataConfig($value['metadata']);
            unset($value['metadata']);
        }
    
        if (isset($value['visitors'])) {
            $this->visitors = new \Symfony\Config\JmsSerializer\VisitorsConfig($value['visitors']);
            unset($value['visitors']);
        }
    
        if (isset($value['default_context'])) {
            $this->defaultContext = new \Symfony\Config\JmsSerializer\DefaultContextConfig($value['default_context']);
            unset($value['default_context']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->handlers) {
            $output['handlers'] = $this->handlers->toArray();
        }
        if (null !== $this->subscribers) {
            $output['subscribers'] = $this->subscribers->toArray();
        }
        if (null !== $this->objectConstructors) {
            $output['object_constructors'] = $this->objectConstructors->toArray();
        }
        if (null !== $this->propertyNaming) {
            $output['property_naming'] = $this->propertyNaming->toArray();
        }
        if (null !== $this->expressionEvaluator) {
            $output['expression_evaluator'] = $this->expressionEvaluator->toArray();
        }
        if (null !== $this->metadata) {
            $output['metadata'] = $this->metadata->toArray();
        }
        if (null !== $this->visitors) {
            $output['visitors'] = $this->visitors->toArray();
        }
        if (null !== $this->defaultContext) {
            $output['default_context'] = $this->defaultContext->toArray();
        }
    
        return $output;
    }
    

}
