# ADR Riak Bundle

### Installation instructions:

On AppKernel add:

    new ADR\RiakBundle\ADRRiakBundle(),

On config.yml:

adr_riak:

    riak_host: IP riak host Machine

    riak_port: riak Port

###Usage:

To access Riak Client:

    $client = $this->container->get('adr_riak.client');


