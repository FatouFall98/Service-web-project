<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegionController;
use App\Http\Controllers\API\DepartementController;
use App\Http\Controllers\API\ArrondissementController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\BureaudevotesController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

 // Les routes "regions.*" de l'API
Route::resource('regions', RegionController::class,[
    'only' => ['show','index','destroy','create','store','update']
]);

Route::resource('departements', DepartementController::class,[
  'only' => ['show','index','destroy','create','store','update']
]);

Route::resource('arrondissements', ArrondissementController::class,[
  'only' => ['show','index','destroy','create','store','update']
]);

Route::resource('users', UserController::class,[
  'only' => ['show','index','destroy','create','store','update']
]);

Route::resource('bureaudevotes', BureaudevotesController::class,[
  'only' => ['show','index','destroy','create','store','update']
]);

Route::post('/users/{email}/{password}',[ App/Http/Controllers/API/UserController::class, "finduser"]);