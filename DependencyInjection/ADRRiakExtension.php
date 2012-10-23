<?php

namespace ADR\RiakBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class ADRRiakExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        // @TODO: Pending Correct definition under Test environment
        $riakHost = (count($config) == 0) ? '172.16.206.129' : $config['riak_host'];
        $riakPort= (count($config) == 0) ? '8091' : $config['riak_port'];

        $container->setParameter('riak.host', $riakHost);
        $container->setParameter('riak.port',$riakPort);

        $loader->load('services.xml');
    }
}
