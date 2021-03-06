<?php declare(strict_types=1);

namespace Vsd\Builders;

use Vsd\Common\AbstractClasses\AbstractBuilder;
use Vsd\Api\IngressAclTemplates as IngressApi;
use Vsd\Models\IngressAclTemplate;

class IngressAclTemplates extends AbstractBuilder
{
    public function __construct($client)
    {
        parent::__construct($client,new IngressApi(), IngressAclTemplate::class);
    }
}