<?php
use App\Http\Controllers\Admin\General\ComponentController;
use Illuminate\Support\Facades\Route;

// manager_routes($controller, $route, true);
Route::controller(ComponentController::class)->group(function(){

    /**
     * --------------------------------------------------------------------------------------------------------------------
     *    Method | URI                           | Controller @ Nethod                   | Route Name  
     * --------------------------------------------------------------------------------------------------------------------
     */

    $route = '';
    Route::get('/',                               'showComponents'                        )->name($route);
    $route.='.';
    Route::get('/list.html',                      'showComponents'                        )->name($route.'list');
    Route::get('/detail/{id?}',                   'getComponentDetail'                    )->name($route.'detail');
    Route::post('/sort',                          'sort'                                  )->name($route.'sort');
    Route::post('/save',                          'save'                                  )->name($route.'save');
    Route::post('ajax-save',                      'ajaxSave'                              )->name($route.'ajax-save');
    Route::post('/delete',                        'delete'                                )->name($route.'delete');
    Route::match(['get', 'post'], '/inputs',      'getComponentInputs'                    )->name($route.'inputs');
    
});
