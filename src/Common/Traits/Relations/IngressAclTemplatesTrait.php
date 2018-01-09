<?php
namespace Vsd\Common\Traits\Relations;

use Vsd\Builders\IngressAclTemplates;

trait IngressAclTemplatesTrait
 {

    public function ingressAclTemplates(array $options = []): \Vsd\Common\Resources\VsdIterator
	{
		return $this->builder(IngressAclTemplates::class)->listByParent(array_merge([
			'parentType' => $this->resourceKey,
			'parentID'   => $this->ID
		], $options));
	}

	public function createIngressAclTemplate(array $options = []): \Vsd\Common\AbstractClasses\AbstractModel
	{
		return $this->builder(IngressAclTemplates::class)->create(array_merge([
			'parentType' => $this->resourceKey,
			'parentID'   => $this->ID
		], $options));
	}
    
}