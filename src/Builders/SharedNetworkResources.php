<?php declare(strict_types=1);

namespace Vsd\Builders;

use Vsd\Common\AbstractClasses\AbstractBuilder;
use Vsd\Api\SharedNetworkResource as SharedNetworkResourceApi;
use Vsd\Models\SharedNetworkResource as SharedNetworkResourceModel;

class SharedNetworkResources extends AbstractBuilder
{
    public function __construct($client)
    {
        parent::__construct($client,new SharedNetworkResourceApi(), SharedNetworkResourceModel::class);
    }
}