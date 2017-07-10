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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/cars', function (CarSharing $car) {
    return json_encode($car->getAllCars());
});

Route::get('/cars/random', function (CarSharing $car) {
    $data =  $car->getRandomCar();
    return Response::view('car', [
        'model' => $data['model'],
        'image' => $data['image']
    ]);
});