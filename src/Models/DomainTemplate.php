<?php declare(strict_types=1);

namespace Vsd\Models;

use Vsd\Common\AbstractClasses\AbstractModel;
use Vsd\Api\DomainTemplates;

class DomainTemplate extends AbstractModel
{
	public $id;
	public $name;
	public $description;
	public $parentId;

	protected $aliases = [
		'ID'         => 'id',
		'parentID'   => 'parentId'
	];

	public function __construct(\Vsd\Common\Resources\Connection $client)
	{
		parent::__construct($client);
		$this->api = new DomainTemplates();
	}

	public function list(array $options = [])
	{
		return $this->enumerate(array_merge([
			'parentID' => $this->parentId
		], $options));
	}


}