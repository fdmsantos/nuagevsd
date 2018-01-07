<?php

namespace Vsd\Test;

use PHPUnit\Framework\TestCase;
use Vsd\Vsd;

class VsdTest extends TestCase
{
	protected $vsd;
	protected static $wasSetup = false;
	
	public function setUp()
    {
        parent::setUp();
        $this->vsd = new Vsd([
			'baseUri'      => getenv('VSD_AUTH_URL'),
			'organization' => getenv('VSD_ORGANIZATION'),
			'user'         => getenv('VSD_USERNAME'),
			'password'     => getenv('VSD_PASSWORD'),
			'verify'       => getenv('VSD_VERIFY') == "true" ? true : false,
		]);

		if ( ! static::$wasSetup) {
            static::$wasSetup = true;
        }

    }
}
