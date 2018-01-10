<?php declare(strict_types=1);

namespace Vsd\Builders;

use Vsd\Common\AbstractClasses\AbstractBuilder;
use Vsd\Api\AddressRange as AddressRangeApi;
use Vsd\Models\AddressRange as AddressRangeModel;

class AddressRange extends AbstractBuilder
{
    public function __construct($client)
    {
        parent::__construct($client,new AddressRangeApi(), AddressRangeModel::class);
    }
}