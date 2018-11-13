<?php declare(strict_types=1);

namespace Vsd\Builders;

use Vsd\Common\AbstractClasses\AbstractBuilder;
use Vsd\Api\StaticRoutes as StaticRoutesApi;
use Vsd\Models\StaticRoute;

class StaticRoutes extends AbstractBuilder
{
    public function __construct($client)
    {
        parent::__construct($client,new StaticRoutesApi(), StaticRoute::class);
    }
}