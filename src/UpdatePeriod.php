<?php

namespace Beedelivery\Iza;

use Beedelivery\Iza\Utils\Connection;

class UpdatePeriod
{
    protected $http;

    public function __construct()
    {
        $this->http = new Connection();
    }

    public function update($id, $finished_at)
    {
        try {
            return $this->http->put('/intermittent/persons/periods/'. $id, [
                "finished_at" => $finished_at
            ]);
        } catch (\Exception $e) {
            return [
                'code' => $e->getCode(),
                'response' => $e->getMessage(),
            ];
        }
    }
}