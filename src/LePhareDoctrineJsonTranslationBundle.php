<?php

namespace LePhare\DoctrineJsonTranslationBundle;

use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class LePhareDoctrineJsonTranslationBundle extends AbstractBundle
{
    public function configure(DefinitionConfigurator $definition): void
    {
        $definition->rootNode()
            ->children()
                ->arrayNode('locales')
                    ->canBeUnset()
                    ->defaultValue([])
                    ->scalarPrototype()->end()
                ->end()
            ->end()
        ;
    }

    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $container->import('../config/services.php');

        $container->parameters()
            ->set('lephare_doctrine_json_translation.locales', $config['locales']);
        ;
    }
}
