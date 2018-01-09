<?php declare(strict_types=1);

namespace Vsd\Common\AbstractClasses;

use Vsd\Common\Resources\Params;
use Vsd\Common\Interfaces\ApiInterface;

abstract class AbstractApi implements ApiInterface
{
    protected $params;

    public function __construct()
    {
        $this->params = new Params();
    }

}