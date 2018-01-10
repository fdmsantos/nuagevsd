<?php declare(strict_types=1);

namespace Vsd\Builders;

use Vsd\Common\AbstractClasses\AbstractBuilder;
use Vsd\Api\Subnets as SubnetApi;
use Vsd\Models\Subnet;

class Subnets extends AbstractBuilder
{
    public function __construct($client)
    {
        parent::__construct($client,new SubnetApi(), Subnet::class);
    }
}