<?php declare(strict_types=1);

namespace Vsd\Common\Resources;

class Params
{
    const URL = 'url';
    const STRING_TYPE = "string";
    const JSON = 'json';
	
    public function idPath(): array
    {
        return [
            'type'        => self::STRING_TYPE,
            'location'    => self::URL,
        ];
    }

    public function name(): array
    {
        return [
            'type'        => self::STRING_TYPE,
            'location'    => self::JSON,
        ];
    }

    public function description(): array
    {
        return [
            'type'        => self::STRING_TYPE,
            'location'    => self::JSON,
        ];
    }
	


}