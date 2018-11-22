<?php declare(strict_types=1);

namespace Vsd\Api;

use Vsd\Common\AbstractClasses\AbstractApi;
use Vsd\Common\Traits\ParentRelationTrait;

class Qos extends AbstractApi
{
    use ParentRelationTrait;

    private $resourceKey = 'qos';

    public function all(): array
    {
        return [
            'method'  => 'GET',
            'path'    => $this->resourceKey,
            'params'  => [
                'parentID' => $this->params->stringFilter(),
            ]
        ];
    }

    public function get(): array
    {
        return [
            'method'  => 'GET',
            'path'    => $this->resourceKey.'/{ID}',
            'params'  => [
                'ID' => $this->params->stringPath()
            ]
        ];
    }

    public function create(): array
    {
        return [
            'method'  => 'POST',
            'path'    => '{parentType}/{parentID}/qos',
            'params'  => [
                'parentType'                  => $this->params->stringPath(),
                'parentID'                    => $this->params->stringPath(),
                'name'                        => $this->params->stringJson(),
                'committedInformationRate'    => $this->params->stringJson(),
                'description'                 => $this->params->stringJson(),
                'active'                      => $this->params->booleanJson(),
                'rateLimitingActive'          => $this->params->booleanJson(),
                'peak'                        => $this->params->stringJson(),
                'burst'                       => $this->params->stringJson(),
                'committedBurstSize'          => $this->params->stringJson(),
                'BUMPeakInformationRate'      => $this->params->stringJson(),
                'BUMPeakBurstSize'            => $this->params->stringJson(),
                'BUMRateLimitingActive'       => $this->params->booleanJson(),
                'BUMCommittedInformationRate' => $this->params->stringJson(),
                'BUMCommittedBurstSize'       => $this->params->stringJson(),
            ]
        ];
    }

    public function delete(): array
    {
        return [
            'method'  => 'DELETE',
            'path'    => $this->resourceKey.'/{ID}',
            'params'  => [
                'ID' => $this->params->stringPath(),
            ],
            'responseChoice' => 1
        ];
    }

    public function update(): array
    {
        return [
            'method'  => 'PUT',
            'path'    => $this->resourceKey.'/{ID}',
            'params'  => [
                'ID'                          => $this->params->stringPath(),
                'name'                        => $this->params->stringJson(),
                'committedInformationRate'    => $this->params->stringJson(),
                'description'                 => $this->params->stringJson(),
                'active'                      => $this->params->booleanJson(),
                'rateLimitingActive'          => $this->params->booleanJson(),
                'peak'                        => $this->params->stringJson(),
                'burst'                       => $this->params->stringJson(),
                'committedBurstSize'          => $this->params->stringJson(),
                'BUMPeakInformationRate'      => $this->params->stringJson(),
                'BUMPeakBurstSize'            => $this->params->stringJson(),
                'BUMRateLimitingActive'       => $this->params->booleanJson(),
                'BUMCommittedInformationRate' => $this->params->stringJson(),
                'BUMCommittedBurstSize'       => $this->params->stringJson(),
            ],
        ];
    }

}