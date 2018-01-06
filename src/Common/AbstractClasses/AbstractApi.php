<?php declare(strict_types=1);

namespace Vsd\Common\AbstractClasses;

use Vsd\Common\Resources\Params;

abstract class AbstractApi
{
    protected $params;

    public function __construct()
    {
        $this->params = new Params();
    }

}