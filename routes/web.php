<?php

use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\Service\CommonPageController;
use App\Http\Controllers\Pages\Service\ElectricalPageController;
use App\Http\Controllers\Pages\Service\PlumberPageController;
use App\Http\Controllers\Pages\Service\VentilationPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);

Route::get('/services/electrician', ElectricalPageController::class);
Route::get('/services/plumber', PlumberPageController::class);
Route::get('/services/ventilation', VentilationPageController::class);
Route::get('/services/common', CommonPageController::class);
Route::get('/services', function () {
    return redirect('/services/electrician');
});
