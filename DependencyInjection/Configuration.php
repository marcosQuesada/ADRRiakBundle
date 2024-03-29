<?php

namespace ADR\RiakBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('adr_riak');
        $rootNode
            ->children()
            ->scalarNode('riak_host')->end()
            ->end()
            ->children()
            ->scalarNode('riak_port')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
