<?php declare(strict_types=1);

namespace Vsd\Models;

use Vsd\Common\AbstractClasses\AbstractModel;
use Vsd\Models\DomainTemplate;
use Vsd\Api\Enterprises;

class Enterprise extends AbstractModel
{
	public $id;
	public $name;
	public $description;
	public $customerId;
	public $owner;

	protected $aliases = [
		'ID'         => 'id',
		'customerID' => 'customerId'
	];

	public function __construct(\Vsd\Common\Resources\Connection $client)
	{
		parent::__construct($client);
		$this->api = new Enterprises();
	}

	public function domainTemplates() 
	{
		return $this->model(DomainTemplate::class, ['parentId' => $this->id]);
	}

}