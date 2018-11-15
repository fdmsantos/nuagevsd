<?php declare(strict_types=1);

namespace Vsd\Models;

use Vsd\Common\AbstractClasses\AbstractModel;
use Vsd\Api\Qos as QosApi;

class Qos extends AbstractModel
{
    public $ID;
    public $parentID;
    public $parentType;
    public $name;
    public $description;
    public $committedInformationRate;
    public $active;
    public $rateLimitingActive;

    public function __construct(\Vsd\Common\Resources\Connection $client)
    {
        parent::__construct($client, new QosApi());
    }

}