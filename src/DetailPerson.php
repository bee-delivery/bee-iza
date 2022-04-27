<?php

namespace Beedelivery\Iza;

use Beedelivery\Iza\Utils\Connection;

class DetailPerson
{
    protected $http;

    public function __construct()
    {
        $this->http = new Connection();
    }

    public function details($data)
    {
        try {
            return $this->http->get('/persons', [
                "doc" => $data->cpf
            ]);
            
        } catch (\Exception $e) {
            return [
                'code' => $e->getCode(),
                'response' => $e->getMessage(),
            ];
        }
    }
}