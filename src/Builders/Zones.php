<?php declare(strict_types=1);

namespace Vsd\Builders;

use Vsd\Common\AbstractClasses\AbstractBuilder;
use Vsd\Api\Zones as ZoneApi;
use Vsd\Models\Zone;

class Zones extends AbstractBuilder
{
    public function __construct($client)
    {
        parent::__construct($client,new ZoneApi(), Zone::class);
    }

    public function byDomains(string $id): \Vsd\Common\Resources\VsdIterator
    {
        return $this->model($this->model)->enumerate($this->api->byDomains(), ['parentID' => $id]);
    }
}