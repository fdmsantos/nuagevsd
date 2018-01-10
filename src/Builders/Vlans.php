<?php declare(strict_types=1);

namespace Vsd\Builders;

use Vsd\Common\AbstractClasses\AbstractBuilder;
use Vsd\Api\Vlans as VlansApi;
use Vsd\Models\Vlan;

class Vlans extends AbstractBuilder
{
    public function __construct($client)
    {
        parent::__construct($client,new VlansApi(), Vlan::class);
    }
}