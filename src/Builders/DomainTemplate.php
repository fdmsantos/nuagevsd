<?php declare(strict_types=1);

namespace Vsd\Builders;

use Vsd\Common\AbstractClasses\AbstractBuilder;
use Vsd\Api\DomainTemplates;
use Vsd\Models\DomainTemplate as DomainTemplateModel;

class DomainTemplate extends AbstractBuilder
{
    public function __construct($client)
    {
        parent::__construct($client, new DomainTemplates(), DomainTemplateModel::class);
    }
}