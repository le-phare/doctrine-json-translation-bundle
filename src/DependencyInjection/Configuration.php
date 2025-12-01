<?php

declare(strict_types=1);

namespace LePhare\DoctrineJsonTranslationBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('lephare_doctrine_json_translation');

        $treeBuilder->getRootNode()
            ->children()
                ->arrayNode('locales')
                ->scalarPrototype()->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
