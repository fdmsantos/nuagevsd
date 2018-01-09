<?php declare(strict_types=1);

namespace Vsd\Models;

use Vsd\Common\AbstractClasses\AbstractModel;
use Vsd\Builders\DomainTemplate;
use Vsd\Builders\Domain;
use Vsd\Api\Enterprises;

class Enterprise extends AbstractModel
{
	public $ID;
	public $name;
	public $description;
	public $customerID;
	public $owner;

	public function __construct(\Vsd\Common\Resources\Connection $client)
	{
		parent::__construct($client, new Enterprises());
	}

	public function domainTemplates(array $options = []): \Vsd\Common\Resources\VsdIterator
	{
		return $this->builder(DomainTemplate::class)->list(array_merge([
			'parentID' => $this->ID
		], $options));
	}

	public function createDomainTemplate(array $options = []): AbstractModel
	{
		return $this->builder(DomainTemplate::class)->create(array_merge([
			'parentID' => $this->ID
		], $options));
	}

	public function domains(): \Vsd\Common\Resources\VsdIterator 
	{
		return $this->builder(Domain::class)->byEnterprises($this->ID);
	}

	public function createDomain(array $options = []): AbstractModel
	{
		return $this->builder(Domain::class)->create(array_merge([
			'parentID' => $this->ID
		], $options));
	}

}