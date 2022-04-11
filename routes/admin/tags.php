<?php

use App\Http\Controllers\Admin\General\TagController;
use Illuminate\Support\Facades\Route;

// manager_routes($controller, $route, true);
Route::controller(TagController::class)->group(function () {
    /**
     * --------------------------------------------------------------------------------------------------------------------
     *    Method | URI                           | Controller @ Nethod                   | Route Name                     |
     * --------------------------------------------------------------------------------------------------------------------
     */

    Route::get('/',                               'getIndex'                 )->name("");
    Route::get('/list.html',                      'getList'                  )->name('.list');
    Route::get('/data.json',                      'getData'                  )->name('.data');
    Route::post('/create-tags',                   'createTags'               )->name('.create');
    Route::put('/update',                         'updateTag'                )->name('.update');
    Route::post('/delete',                        'delete'                   )->name('.delete');
});