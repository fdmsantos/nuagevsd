<?php declare(strict_types=1);

namespace Vsd\Builders;

use Vsd\Common\AbstractClasses\AbstractBuilder;
use Vsd\Api\BrdigeInterfaces as BrdigeInterfacesApi;
use Vsd\Models\BridgeInterface;

class BridgeInterfaces extends AbstractBuilder
{
    public function __construct($client)
    {
        parent::__construct($client, new BrdigeInterfacesApi(), BridgeInterface::class);
    }
}