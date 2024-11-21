<?php

use App\Http\Controllers\Pages\AboutPageController;
use App\Http\Controllers\Pages\Article\ArticlePageController;
use App\Http\Controllers\Pages\Article\ArticlePageItemController;
use App\Http\Controllers\Pages\ContactsPageController;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\Installation\ElectricalInstallationController;
use App\Http\Controllers\Pages\Installation\ElectricalShieldInstallationController;
use App\Http\Controllers\Pages\Installation\SplitInstallationController;
use App\Http\Controllers\Pages\Installation\VentilationInstallationController;
use App\Http\Controllers\Pages\Service\CommonPageController;
use App\Http\Controllers\Pages\Service\ElectricalPageController;
use App\Http\Controllers\Pages\Service\PlumberPageController;
use App\Http\Controllers\Pages\Service\VentilationPageController;
use App\Http\Controllers\Pages\Works\WorksPageController;
use App\Http\Controllers\Pages\Works\WorksPageItemController;
use App\Http\Controllers\Telegram\TelegramController;
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


Route::get('/installation', function () {
    return redirect('/installation/electrician');
});
Route::get('/installation/electrician', ElectricalInstallationController::class);
Route::get('/installation/split', SplitInstallationController::class);
Route::get('/installation/electrical-commutation', ElectricalShieldInstallationController::class);
Route::get('/installation/ventilation', VentilationInstallationController::class);

Route::get('/about', AboutPageController::class);

Route::get('/contacts', ContactsPageController::class);

Route::get('/articles', ArticlePageController::class);
Route::get('/articles/{article}', ArticlePageItemController::class);

Route::get('/works', WorksPageController::class);
Route::get('/works/{work}', WorksPageItemController::class);

Route::post('/send-message', TelegramController::class);

