<?php

namespace Beedelivery\Iza;

use Beedelivery\Iza\Utils\Connection;

class CreatePeriod
{
    protected $http;

    public function __construct()
    {
        $this->http = new Connection();
    }

    public function create($data, $started_at)
    {
        try {
            return $this->http->post('/intermittent/persons/periods', [
                "doc" => $data->cpf,
                "started_at" => $started_at,
                "finished_at" => ""
            ]);
        } catch (\Exception $e) {
            return [
                'code' => $e->getCode(),
                'response' => $e->getMessage(),
            ];
        }
    }
}