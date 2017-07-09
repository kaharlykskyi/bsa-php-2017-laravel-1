<?php

namespace App\Services;

use App\Services\Contracts\CarSharing;

class CarSharingService implements CarSharing
{
    public function getAllCars()
    {
        return 'All cars';
    }
    public function getRandomCar()
    {
        return 'Random car';
    }
}