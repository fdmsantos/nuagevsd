<?php declare(strict_types=1);

namespace Vsd\Builders;

use Vsd\Common\AbstractClasses\AbstractBuilder;
use Vsd\Api\VPorts as VPortsApi;
use Vsd\Models\VPort;

class VPorts extends AbstractBuilder
{
    public function __construct($client)
    {
        parent::__construct($client,new VPortsApi(), VPort::class);
    }
}