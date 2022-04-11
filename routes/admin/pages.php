<?php

use App\Http\Controllers\Admin\General\PageController;
use Illuminate\Support\Facades\Route;

$controller = PageController::class;

admin_routes($controller, true, true);

Route::controller($controller)->name('.')->group(function(){

    /**
     * --------------------------------------------------------------------------------------------------------------------
     *    Method | URI                           | Controller @ Nethod                   | Route Name                     |
     * --------------------------------------------------------------------------------------------------------------------
     */

    Route::post('/check-slug',                   'checkSlug'                             )->name('check-slug');
    Route::get('/get-slug',                      'getSlug'                               )->name('get-slug');
    
});
