<?php declare(strict_types=1);

namespace Vsd;
use Vsd\Common\Resources\Connection;
use Vsd\Builders\Enterprise;
use Vsd\Builders\DomainTemplate;
use Vsd\Builders\Domain;
use Vsd\Builders\IngressAclTemplates;
use Vsd\Builders\EgressAclTemplates;
use Vsd\Builders\Zones;
use Vsd\Builders\Subnets;
use Vsd\Builders\AddressRange;
use Vsd\Builders\DhcpOptions;
use Vsd\Builders\NsGateways;
use Vsd\Builders\NsPorts;
use Vsd\Builders\Vlans;
use Vsd\Builders\VPorts;
use Vsd\Builders\BridgeInterfaces;
use Vsd\Builders\SharedNetworkResources;

class Vsd
{
    private $client;

    public function __construct(array $options = [])
    {
        $this->client = new Connection($options);
    }

    public function enterprises(): Enterprise
    {
        return new Enterprise($this->client);
    }

    public function domainTemplates(): DomainTemplate
    {
        return new DomainTemplate($this->client);
    }

    public function domains(): Domain 
    {
        return new Domain($this->client);
    }

    public function ingressAclTemplates(): IngressAclTemplates 
    {
        return new IngressAclTemplates($this->client);
    }

    public function egressAclTemplates(): EgressAclTemplates 
    {
        return new EgressAclTemplates($this->client);
    }

    public function zones(): Zones 
    {
        return new Zones($this->client);
    }

    public function subnets(): Subnets 
    {
        return new Subnets($this->client);
    }

    public function addressRanges(): AddressRange 
    {
        return new AddressRange($this->client);
    }

    public function dhcpOptions(): DhcpOptions 
    {
        return new DhcpOptions($this->client);
    }

    public function nsgateways(): NsGateways 
    {
        return new NsGateways($this->client);
    }

    public function nsports(): NsPorts
    {
        return new NsPorts($this->client);
    }

    public function vlans(): Vlans
    {
        return new Vlans($this->client);
    }

    public function vports(): VPorts
    {
        return new VPorts($this->client);
    }

    public function bridgeInterfaces(): BridgeInterfaces
    {
        return new BridgeInterfaces($this->client);
    }

    public function sharedNetworkResources(): SharedNetworkResources
    {
        return new SharedNetworkResources($this->client);
    }
    
}