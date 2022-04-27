<?php

namespace Beedelivery\Iza;

use Beedelivery\Iza\Utils\Connection;

class ListPeriodsByPersonDocument
{
    protected $http;

    public function __construct()
    {
        $this->http = new Connection();
    }

    public function listPeriods($data)
    {
        try {
            return $this->http->get('/intermittent/persons/periods', [
                "doc" => $data->cpf,
            ]);
        } catch (\Exception $e) {
            return [
                'code' => $e->getCode(),
                'response' => $e->getMessage(),
            ];
        }
    }
}