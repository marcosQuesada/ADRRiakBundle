<?php

namespace ADR\RiakBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Riak\Bucket;
use Riak\Client;
use Riak\LinkPhase;
use Riak\Link;
use Riak\MapReducePhase;
use Riak\MapReduce;
use Riak\Object;
use Riak\StringIO;
use Riak\Utils;


class DefaultController extends Controller
{

    protected $riakHost = '172.16.206.129';
    protected $riakPort = 8091;

    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        $client = new Client($this->riakHost , $this->riakPort);
        ladybug_dump($client->isAlive());
        $client = $this->container->get('adr_riak.client');
        ladybug_dump($client);
        ladybug_dump($client->isAlive());
        return array('name' => $name);
    }
}
