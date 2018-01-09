<?php declare(strict_types=1);

namespace Vsd\Models;

use Vsd\Common\AbstractClasses\AbstractModel;
use Vsd\Api\Domains;
use Vsd\Common\Traits\Relations\IngressAclTemplatesTrait;
use Vsd\Common\Traits\Relations\EgressAclTemplatesTrait;
use Vsd\Builders\Zones;

class Domain extends AbstractModel
{
	use IngressAclTemplatesTrait, EgressAclTemplatesTrait;

	public $ID;
	public $parentID;
	public $name;
	public $templateID;
	public $underlayEnabled;
	public $PATEnabled;
	public $encryption;
	private $resourceKey = 'domains';

	public function __construct(\Vsd\Common\Resources\Connection $client)
	{
		parent::__construct($client, new Domains());
	}

	public function createZone(array $options = []): AbstractModel
	{
		return $this->builder(Zones::class)->create(array_merge([
			'parentID' => $this->ID
		], $options));
	}

	public function zones(array $options = []): \Vsd\Common\Resources\VsdIterator 
	{
		return $this->builder(Zones::class)->byDomains($this->ID);
	}
}