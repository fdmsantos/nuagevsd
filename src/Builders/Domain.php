<?php declare(strict_types=1);

namespace Vsd\Builders;

use Vsd\Common\AbstractClasses\AbstractBuilder;
use Vsd\Api\Domains;
use Vsd\Models\Domain as DomainModel;

class Domain extends AbstractBuilder
{
    public function __construct($client)
    {
        parent::__construct($client, new Domains(), DomainModel::class);
    }
}