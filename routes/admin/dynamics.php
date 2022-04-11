<?php

use App\Http\Controllers\Admin\General\DynamicController;
use Illuminate\Support\Facades\Route;

$controller = DynamicController::class;
$route = 'dynamics';
admin_routes($controller, true, true);
$route = 
/**
 * --------------------------------------------------------------------------------------------------------------------
 *    Method | URI                           | Controller @ Nethod                   | Route Name                     |
 * --------------------------------------------------------------------------------------------------------------------
 */
Route::controller($controller)->name('.')->group(function(){
    Route::get('/select-options',            'getSelectOptions'         )->name('select-option');
    Route::post('/check-slug',               'checkSlug'                )->name('check-slug');
    Route::get('/get-slug',                  'getSlug'                  )->name('get-slug');
});
