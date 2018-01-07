<?php declare(strict_types=1);

namespace Vsd;
use Vsd\Common\Resources\Connection;
use Vsd\Services\Enterprises;
use Vsd\Services\DomainTemplates;

class Vsd
{
    private $client;

    public function __construct(array $options = [])
    {
        $this->client = new Connection($options);
    }

    public function enterprises(): Enterprises
    {
        return new Enterprises($this->client);
    }

    public function domainTemplates(): DomainTemplates
    {
        return new DomainTemplates($this->client);
    }

}