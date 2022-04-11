<?php

use App\Http\Controllers\Admin\General\SliderController;
use App\Http\Controllers\Admin\General\SliderItemController;
use Illuminate\Support\Facades\Route;

$controller = SliderController::class;

$route = 'sliders';

admin_routes($controller, true, true);

Route::controller($controller)->name('.')->group(function(){

    /**
     * --------------------------------------------------------------------------------------------------------------------
     *    Method | URI                           | Controller @ Nethod                   | Route Name                     |
     * --------------------------------------------------------------------------------------------------------------------
     */

    Route::get('options',                        'getSelectOptions'                      )->name('select-options');
    Route::post('change-status',                 'changeStatus'                          )->name('change-status');
    Route::get('sort.html',                      'getSortForm'                           )->name('sort.form');
    Route::post('sort',                          'sortSliders'                           )->name('sort.save');

});

Route::middleware(['slider.item'])->controller(SliderItemController::class)->name('.items')->group(function () {
    Route::get('/{slider}/items.html',           'getIndex'                              )->name("");
    Route::get('/{slider}/items/list.html',      'getList'                               )->name('.list');
    Route::get('/{slider}/items/sort.html',      'getSortForm'                           )->name('.sort.form');
    Route::post('/{slider}/items/sort',          'sortItems'                             )->name('.sort.save');
    Route::get('/{slider}/items/create.html',    'getCreateForm'                         )->name('.create');
    Route::get('/{slider}/items/update/{id}.html','getUpdateForm'                        )->name('.update');
    Route::post('/{slider}/items/save',          'save'                                  )->name('.save');
    Route::post('/{slider}/items/delete',        'delete'                                )->name('.delete');
});