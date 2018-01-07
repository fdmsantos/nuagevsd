<?php declare(strict_types=1);

namespace Vsd\Common\AbstractClasses;
use Vsd\Common\Traits\OperatorTrait;

abstract class AbstractService
{
    use OperatorTrait;
    protected $client;
    protected $api;

    public function __construct(\Vsd\Common\Resources\Connection $client)
    {
        $this->client = $client;
    }

}