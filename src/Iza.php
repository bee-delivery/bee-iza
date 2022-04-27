<?php

namespace Beedelivery\Iza;

use Beedelivery\Iza\DetailPerson;


class Iza
{
    public function createPerson()
    {
        return new CreatePerson();
    }

    public function detailPerson()
    {
        return new DetailPerson();
    }

    public function createContract()
    {
        return new CreateContract();
    }

    public function createPeriod()
    {
        return new CreatePeriod();
    }

    public function updatePeriod()
    {
        return new UpdatePeriod();
    }

    public function cancelPeriod()
    {
        return new CancelPeriod();
    }

    public function listPeriodsByPerson()
    {
        return new ListPeriodsByPersonDocument();
    }
    
}