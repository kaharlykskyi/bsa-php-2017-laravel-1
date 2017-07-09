<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Services\Contracts\CarSharing;
use App\Services\Contracts\RandomGenerator;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cars', function (CarSharing $car) {
    return $car->getAllCars();
});

Route::get('/cars/random', function (RandomGenerator $random) {
    return $random->getRandomInt(1,5);
});