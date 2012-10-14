<?php

namespace ADR\RiakBundle\Tests\Service;
//use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Yaml\Parser;
use ADR\RiakBundle\DependencyInjection\ADRRiakExtension;


class ServicesTest extends \PHPUnit_Framework_TestCase
{
    protected $client;
    protected $container;

    /**
     * [setUp description]
     *
     * @return [type] [description]
     */
    public function setUp()
    {
        $container = new ContainerBuilder();

        $container->setParameter('riak.host', '172.16.206.129');
        $container->setParameter('riak.port', '8091');
        //var_dump($container->getParameter('riak_host'));
        $extension = new ADRRiakExtension();
        $extension->load(array(), $container);

        $this->container = $container;
    }

    public function testKvAnnotationServiceIsUp()
    {
        $this->assertTrue($this->container->has('adr_riak.client'));
    }

}