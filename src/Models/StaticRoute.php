<?php declare(strict_types=1);

namespace Vsd\Models;

use Vsd\Common\AbstractClasses\AbstractModel;
use Vsd\Api\StaticRoutes as StaticRoutesModelApi;

class StaticRoute extends AbstractModel
{
    public $ID;
    public $address;
    public $associatedSubnetID;
    public $BFDEnabled;
    public $IPType;
    public $IPv6Address;
    public $netmask;
    public $nextHopIp;
    public $routeDistinguisher;
    public $type;

    public function __construct(\Vsd\Common\Resources\Connection $client)
    {
        parent::__construct($client, new StaticRoutesModelApi());
    }

}