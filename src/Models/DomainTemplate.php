<?php declare(strict_types=1);

namespace Vsd\Models;

use Vsd\Common\AbstractClasses\AbstractModel;
use Vsd\Api\DomainTemplates;
use Vsd\Builders\EgressAclTemplates;
use Vsd\Builders\IngressAclTemplates;

class DomainTemplate extends AbstractModel
{
	
	public $ID;
	public $name;
	public $description;
	public $parentID;
	protected $resourceKey = 'domaintemplates';
	protected $relations = [
		'egressAclTemplates'  => EgressAclTemplates::class,
		'ingressAclTemplates' => IngressAclTemplates::class
	];

	public function __construct(\Vsd\Common\Resources\Connection $client)
	{
		parent::__construct($client, new DomainTemplates());
	}

}