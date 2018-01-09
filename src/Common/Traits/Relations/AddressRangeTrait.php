<?php
namespace Vsd\Common\Traits\Relations;

use Vsd\Builders\AddressRange;

trait AddressRangeTrait
 {

    public function addressRanges(array $options = []): \Vsd\Common\Resources\VsdIterator
	{
		return $this->builder(AddressRange::class)->listByParent(array_merge([
			'parentType' => $this->resourceKey,
			'parentID'   => $this->ID
		], $options));
	}

	public function createAddressRange(array $options = []): \Vsd\Common\AbstractClasses\AbstractModel
	{
		return $this->builder(AddressRange::class)->create(array_merge([
			'parentType' => $this->resourceKey,
			'parentID'   => $this->ID
		], $options));
	}
    
}