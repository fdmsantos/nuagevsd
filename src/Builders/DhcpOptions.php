<?php declare(strict_types=1);

namespace Vsd\Builders;

use Vsd\Common\AbstractClasses\AbstractBuilder;
use Vsd\Api\DhcpOptions as DhcpOptionsApi;
use Vsd\Models\DhcpOption;

class DhcpOptions extends AbstractBuilder
{
    public function __construct($client)
    {
        parent::__construct($client,new DhcpOptionsApi(), DhcpOption::class);
    }
}