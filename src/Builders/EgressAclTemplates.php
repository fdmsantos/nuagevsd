<?php declare(strict_types=1);

namespace Vsd\Builders;

use Vsd\Common\AbstractClasses\AbstractBuilder;
use Vsd\Api\EgressAclTemplates as EgressApi;
use Vsd\Models\EgressAclTemplate;

class EgressAclTemplates extends AbstractBuilder
{
    public function __construct($client)
    {
        parent::__construct($client,new EgressApi(), EgressAclTemplate::class);
    }

}