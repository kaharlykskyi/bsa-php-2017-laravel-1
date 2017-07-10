<?php

namespace App\Services;

use App\Repositories\CarRepository;
use App\Services\Contracts\CarSharing;
use App\Services\Contracts\RandomGenerator;

class CarSharingService implements CarSharing
{
    private $carRepository;
    private $randomGenerator;

    public function __construct(CarRepository $carRepository, RandomGenerator $randomGenerator)
    {
        $this->carRepository = $carRepository;
        $this->randomGenerator = $randomGenerator;
    }

    public function getAllCars()
    {
        return $this->carRepository->all();
    }
    public function getRandomCar()
    {
        $allCars = $this->getAllCars();
        $randomNumber = $this->randomGenerator->getRandomInt(0, count($allCars) - 1);
        return $allCars()[$randomNumber];
    }
}
