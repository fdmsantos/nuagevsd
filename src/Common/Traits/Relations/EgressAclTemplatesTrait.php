<?php
namespace Vsd\Common\Traits\Relations;

use Vsd\Builders\EgressAclTemplates;

trait EgressAclTemplatesTrait
 {

    public function egressAclTemplates(array $options = []): \Vsd\Common\Resources\VsdIterator
	{
		return $this->builder(EgressAclTemplates::class)->listByParent(array_merge([
			'parentType' => $this->resourceKey,
			'parentID'   => $this->ID
		], $options));
	}

	public function createEgressAclTemplate(array $options = []): \Vsd\Common\AbstractClasses\AbstractModel
	{
		return $this->builder(EgressAclTemplates::class)->create(array_merge([
			'parentType' => $this->resourceKey,
			'parentID'   => $this->ID
		], $options));
	}
    
}