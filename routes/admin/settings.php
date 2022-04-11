<?php

use App\Http\Controllers\Admin\General\SettingController;
use App\Http\Controllers\Admin\General\UrlSettingController;
use App\Http\Controllers\Admin\General\WebConfigController;
use Illuminate\Support\Facades\Route;




Route::prefix('urls')->controller(UrlSettingController::class)->name('.urls')->group(function(){
    // manager_routes($s, $route, true);

    /**
     * --------------------------------------------------------------------------------------------------------------------
     *    Method | URI                           | Controller @ Nethod                   | Route Name                     |
     * --------------------------------------------------------------------------------------------------------------------
     */

    $route='';
    Route::get('/',                               'getUrlSettingForm'                     )->name($route); $route.='.';
    Route::get('/{group}.html',                   'getUrlSettingForm'                     )->name($route.'group');
    Route::post('/{group}/save',                  'saveSettings'                          )->name($route.'group.save');
    

});






// manager_routes($s, $route, true);

Route::controller(WebConfigController::class)->group(function(){

    /**
     * --------------------------------------------------------------------------------------------------------------------
     *    Method | URI                           | Controller @ Nethod                   | Route Name                     |
     * --------------------------------------------------------------------------------------------------------------------
     */

    Route::get('/webconfig.html',                'getWebConfigForm'                      )->name('.webconfig');
    Route::post('/webconfig/save',               'handle'                                )->name('.webconfig.save');
    
});

Route::controller(SettingController::class)->name('.')->group(function(){
    Route::post('/update',                        'handle'                               )->name('handle');

    Route::get('/{group}.html',                   'getSettingForm'                       )->name('group.form');
    Route::post('/{group}/save',                  'handle'                               )->name('group.save');
    Route::post('/{group}/items/save',            'saveSettingItem'                      )->name('item.save');
    
    Route::get('{group}/detail-item/{id?}',       'detailItem'                           )->name('item.detail');
    Route::get('{group}/sort.html',               'getSortForm'                          )->name('sort.form');
    Route::post('{group}/sort',                   'sortItems'                            )->name('sort.save');
    Route::post('{group}/delete',                 'deleteItem'                           )->name('item.delete');
    
});
