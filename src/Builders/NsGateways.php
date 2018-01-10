<?php declare(strict_types=1);

namespace Vsd\Builders;

use Vsd\Common\AbstractClasses\AbstractBuilder;
use Vsd\Api\NsGateways as NsGatewaysApi;
use Vsd\Models\NsGateway;

class NsGateways extends AbstractBuilder
{
    public function __construct($client)
    {
        parent::__construct($client,new NsGatewaysApi(), NsGateway::class);
    }
}