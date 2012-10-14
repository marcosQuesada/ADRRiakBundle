# Riak Bundle

On config.yml:

adr_riak:

    riak_host: IP riak host Machine

    riak_port: riak Port

To access Riak Client:

    $client = $this->container->get('adr_riak.client');