<?php declare(strict_types=1);

namespace Vsd\Common\Resources;

class Params
{
    const URL = 'url';
    const STRING_TYPE = "string";
    const JSON = 'json';
    const FILTER = 'filter';
	
    public function stringPath(): array
    {
        return [
            'type'        => self::STRING_TYPE,
            'location'    => self::URL,
        ];
    }

    public function stringJson(): array
    {
        return [
            'type'        => self::STRING_TYPE,
            'location'    => self::JSON,
        ];
    }

    public function stringFilter(): array
    {
        return [
            'type'        => self::STRING_TYPE,
            'location'    => self::FILTER,
        ];
    }

}