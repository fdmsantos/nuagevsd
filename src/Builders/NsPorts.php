<?php declare(strict_types=1);

namespace Vsd\Builders;

use Vsd\Common\AbstractClasses\AbstractBuilder;
use Vsd\Api\NsPorts as NsPortsApi;
use Vsd\Models\NsPort;

class NsPorts extends AbstractBuilder
{
    public function __construct($client)
    {
        parent::__construct($client,new NsPortsApi(), NsPort::class);
    }
}