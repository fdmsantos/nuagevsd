<?php declare(strict_types=1);

namespace Vsd;
use Vsd\Common\Resources\Connection;
use Vsd\Models\Enterprise;
use Vsd\Models\DomainTemplate;
use Vsd\Common\Traits\OperatorTrait;

class Vsd
{
    use OperatorTrait;
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

}