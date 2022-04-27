<?php

namespace Beedelivery\Iza;

use Beedelivery\Iza\Utils\Connection;

class CreatePerson
{
    protected $http;

    public function __construct()
    {
        $this->http = new Connection();
    }

    public function create($data)
    {
        try {
            return $this->http->post('/persons', [
                "doc"             => $data->cpf,
                "name"            => $data->nome,
                "birthed_at"      => $data->nascimento,
                "email"           => $data->email,
                "main_cell_phone" => preg_replace("/[^0-9]/", "", $data->celular)
            ]);
        } catch (\Exception $e) {
            return [
                'code' => $e->getCode(),
                'response' => $e->getMessage(),
            ];
        }
    }
}