<?php declare(strict_types=1);

namespace Vsd\Builders;

use Vsd\Common\AbstractClasses\AbstractBuilder;
use Vsd\Api\Qos as QosApi;
use Vsd\Models\Qos as QosModel;

class Qos extends AbstractBuilder
{
    public function __construct($client)
    {
        parent::__construct($client,new QosApi(), QosModel::class);
    }
}