<?php declare(strict_types=1);

namespace Vsd\Models;

use Vsd\Common\AbstractClasses\AbstractModel;
use Vsd\Api\SharedNetworkResource as SharedNetworkResourceModelApi;

class SharedNetworkResource extends AbstractModel
{
    public $ID;
    public $name;
    public $address;
    public $netmask;

    public function __construct(\Vsd\Common\Resources\Connection $client)
    {
        parent::__construct($client, new SharedNetworkResourceModelApi());
    }

}