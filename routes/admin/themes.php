<?php

use App\Http\Controllers\Admin\General\ThemeController;
use Illuminate\Support\Facades\Route;

Route::controller(ThemeController::class)->group(function(){
    /**
     * --------------------------------------------------------------------------------------------------------------------
     *    Method | URI                           | Controller @ Nethod                   | Route Name                     
     * --------------------------------------------------------------------------------------------------------------------
     */
    Route::get('/',                              'getPublishThemes'                      )->name("");
    Route::name('.')->group(function(){
        /**
         * --------------------------------------------------------------------------------------------------------------------
         * Method  |  URI                           |  Nethod                                |  Route Name                     
         * --------------------------------------------------------------------------------------------------------------------
         */

        Route::get('/store.html',                    'getPublishThemes'                      )->name('store');
        Route::get('/my-themes.html',                'getMyThemes'                           )->name('my-themes');
        Route::get('options.html',                   'getThemeOptionForm'                    )->name('options');
        Route::get('options/{group}.html',           'getThemeOptionForm'                    )->name('options.group');
        Route::post('options/{group}',               'saveThemeOption'                       )->name('options.group.save');
        Route::get('detail/{id?}',                   'getResourceDetail'                     )->name('detail');
        Route::get('my-detail/{id?}',                'getMyThemeDetail'                      )->name('my-detail');
        Route::get('search',                         'ajaxSearch'                            )->name('search');
        Route::get('my-themes',                      'ajaxSearchMyThemes'                    )->name('search-my-themes');
        Route::post('active',                        'active'                                )->name('active');
        Route::get('test-active',                    'active'                                )->name('test-active');
        Route::get('download/{slug}',                'download'                              )->name('download');
        Route::post('extract',                       'extract'                               )->name('extract');
        
    });

});



$listRoute = ['create', 'update', 'save', 'delete'];

add_web_module_routes(ThemeController::class, $listRoute, true, 'admin');


