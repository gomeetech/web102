<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Clients\HomeController;
use App\Http\Controllers\Clients\LocationController;
use App\Http\Controllers\Clients\UserController;
use Illuminate\Support\Facades\Route;

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

Route::controller(AuthController::class)->group(base_path('routes/auth.php'));

Route::get('/errors/{code?}',                 [ErrorController::class,'showError']   )->name('errors');

Route::controller(HomeController::class)->group(base_path('routes/client/home.php'));
Route::as('client.')->group(function(){
    Route::prefix('location')->as('location.')->controller(LocationController::class)->group(base_path('routes/client/location.php'));
});
Route::controller(UserController::class)->prefix('users')->name('users.')->group(function($router){
    Route::get('list', 'getList')->name('list');
});