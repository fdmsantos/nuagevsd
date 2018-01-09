<?php declare(strict_types=1);

namespace Vsd\Models;

use Vsd\Common\AbstractClasses\AbstractModel;
use Vsd\Api\DomainTemplates;

class DomainTemplate extends AbstractModel
{
	public $ID;
	public $name;
	public $description;
	public $parentID;

	public function __construct(\Vsd\Common\Resources\Connection $client)
	{
		parent::__construct($client, new DomainTemplates());
	}

}