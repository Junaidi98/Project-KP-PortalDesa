<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostCRUDController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\BupatiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeBupatiController;
use App\Http\Controllers\PortalBupatiController;
use App\Http\Controllers\WabupController;
use App\Http\Controllers\SekdaController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\PortalSekdaController;
use App\Http\Controllers\HomeController;

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

Route::resource('/', HomeController::class)->only(['index']);

// Route::get('/',[PortalBupatiController::class,'index']);
// Route::get('/',[PortalSekdaController::class,'index']);

//Route::resource('posts', PostCRUDController::class);
Route::resource('bupati', BupatiController::class);
Route::resource('wabup', WabupController::class);
Route::resource('sekda', SekdaController::class);
Route::resource('desas', DesaController::class);
Route::resource('tentang', TentangController::class);
Route::resource('dashboard', DashboardController::class);




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


