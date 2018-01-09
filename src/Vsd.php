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
}