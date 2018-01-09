<?php declare(strict_types=1);

namespace Vsd\Models;

use Vsd\Common\AbstractClasses\AbstractModel;
use Vsd\Api\Domains;

class Domain extends AbstractModel
{
	public $ID;
	public $parentID;
	public $name;
	public $templateID;
	public $underlayEnabled;
	public $PATEnabled;
	public $encryption;

	public function __construct(\Vsd\Common\Resources\Connection $client)
	{
		parent::__construct($client, new Domains());
	}

	public function domainTemplates() 
	{
		return $this->model(DomainTemplate::class, ['parentId' => $this->id]);
	}

}