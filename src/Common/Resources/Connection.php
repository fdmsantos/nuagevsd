<?php declare(strict_types=1);

namespace Vsd\Common\Resources;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

Class Connection
{
	private $connection;
	private $authorizationKey;
	private $expectedResponse = [
		'GET'    => 200,
		'POST'   => 201,
		'PUT'    => 204,
		'DELETE' => 204,
	];

	public function __construct(array $options = [])
	{
		$this->connection = new Client([
        	'base_uri' => rtrim($options['baseUri'], '/') . '/',
            'headers' => [
                'Content-Type'         => 'application/json',
                'X-Nuage-Organization' => $options['organization'],
            ],
            'verify' => isset($options['verify']) ? $options['verify'] : true,
            'proxy'  => isset($options['proxy']) ? $options['proxy'] : '',
        ]);
        $this->auth($options['user'],$options['password']);
	}

	private function auth(string $user, string $password) 
	{
		$response = $this->connection->request('GET','me',[
			'headers' => [
				'Authorization' => 'Basic '.base64_encode($user.':'.$password)
			],
		]);
		$data = json_decode((string) $response->getBody(),true);
		$this->authorizationKey = 'Basic '.base64_encode($user.':'.$data[0]['APIKey']);
	}

	public function sendRequest(array $options, array $params = null)
	{
		$request = $this->requestBuilder($options,$params);
		$response = $this->connection->request(
			$request['method'],
			$request['path'],
			$request['Options']
		);
		$this->checkResponse($response,$request['method']);
		$data = json_decode((string) $response->getBody(),true);
		return $data;
	}

	private function requestBuilder(array $options, array $params = null) 
	{
		$request['Options']['headers']['Authorization'] = $this->authorizationKey;
		$request['method'] = $options['method'];
		$request['path'] = $options['path'];

		if (isset($options['params'])) {
            foreach ($options['params'] as $param => $values) {
            	if (isSet($params[$param])) {
            		if (gettype($params[$param] == $values['type'])) {
	                    if ($values['location'] == Params::URL) { // Path Params
	                        $request['path'] = str_replace('{'.$param.'}',$params[$param],$request['path']);
	                    }
	                    else if ($values['location'] == Params::JSON) { // Body Params To send in JSON Format
	                        $request['Options']['body'][$param] = $params[$param];
	                    }
	                    else if ($values['location'] == Params::FILTER) { // Filters
	                        $request['Options']['headers']['X-Nuage-Filter'] = $params[$param];
	                    }
	                }
	                else {
	                	throw new Exception("Types No valid", 1); // Verify This	
	                }
            	}
            }
        }

        if (isSet($request['Options']['body'])) {
			$request['Options']['body'] = json_encode($request['Options']['body']);
		}

		if (isSet($options['responseChoice'])) {
			$request['path'] .= '/?responseChoice='.$options['responseChoice'];
		}
        return $request;
	}

	private function checkResponse($response, $method)
	{
		if ($this->expectedResponse[$method] != $response->getStatusCode()) {
			throw new \Exception('Unexpect Request Response. Status Code => '.$response->getReasonPhrase()." - Body => ".$response->getBody(), 1);
		}
	}
}