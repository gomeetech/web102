<?php

use App\Http\Controllers\Admin\General\UserController;
use Illuminate\Support\Facades\Route;

$controller = UserController::class;
admin_routes($controller, true, true);
Route::controller($controller)->name('.')->group(function(){
    /**
     * --------------------------------------------------------------------------------------------------------------------
     *    Method | URI                           | Controller @ Nethod                   | Route Name                     |
     * --------------------------------------------------------------------------------------------------------------------
     */
    Route::get('/user-select-options',           'getUserSelectOptions'     )->name('select-option');
    Route::get('/user-tag-data',                 'getUserTagData'           )->name('tag-data');;

});