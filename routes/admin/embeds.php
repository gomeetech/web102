<?php

use App\Http\Controllers\Admin\General\EmbedController;
use Illuminate\Support\Facades\Route;

// manager_routes($controller, $route, true);
Route::controller(EmbedController::class)->group(function(){

    /**
     * --------------------------------------------------------------------------------------------------------------------
     *    Method | URI                           | Controller @ Nethod                   | Route Name                     |
     * --------------------------------------------------------------------------------------------------------------------
     */

    $route='';
    Route::get('/',                               'showEmbeds'               )->name($route);
    $route.='.';
    Route::get('/list.html',                      'showEmbeds'               )->name($route.'list');
    Route::get('/detail/{id?}',                   'getResourceDetail'        )->name($route.'detail');
    Route::post('/sort',                          'sort'                     )->name($route.'sort');
    Route::post('/save',                          'save'                     )->name($route.'save');
    Route::post('ajax-save',                      'ajaxSave'                 )->name($route.'ajax-save');
    Route::post('/delete',                        'delete'                   )->name($route.'delete');

});