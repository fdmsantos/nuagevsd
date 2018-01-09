<?php declare(strict_types=1);

namespace Vsd\Builders;

use Vsd\Common\AbstractClasses\AbstractBuilder;
use Vsd\Api\Enterprises;
use Vsd\Models\Enterprise as EnterpriseModel;

class Enterprise extends AbstractBuilder
{
    public function __construct($client)
    {
        parent::__construct($client,new Enterprises(),EnterpriseModel::class);
    }

}