<?php declare(strict_types=1);

namespace Vsd\Models;

use Vsd\Common\AbstractClasses\AbstractModel;
use Vsd\Api\DomainTemplates;
use Vsd\Common\Traits\Relations\IngressAclTemplatesTrait;

class DomainTemplate extends AbstractModel
{
	use IngressAclTemplatesTrait;
	
	public $ID;
	public $name;
	public $description;
	public $parentID;
	private $resourceKey = 'domaintemplates';

	public function __construct(\Vsd\Common\Resources\Connection $client)
	{
		parent::__construct($client, new DomainTemplates());
	}

}