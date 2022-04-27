<?php

namespace Beedelivery\Iza;

use Beedelivery\Iza\Utils\Connection;

class CreateContract
{
    protected $http;

    public function __construct()
    {
        $this->http = new Connection();
    }

    public function create($data)
    {
        try {
            return $this->http->post('/contracts', [
                "doc"             => $data->cpf,
            ]);
        } catch (\Exception $e) {
            return [
                'code' => $e->getCode(),
                'response' => $e->getMessage(),
            ];
        }
    }
}