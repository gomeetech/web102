<?php

use App\Http\Controllers\Admin\General\MenuController;
use App\Http\Controllers\Admin\General\MenuItemController;
use Illuminate\Support\Facades\Route;

$controller = MenuController::class;

$route = 'menus';

$listRoute = ['index', 'create', 'update', 'save', 'delete'];

add_web_module_routes($controller, $listRoute, true, 'admin');


Route::controller($controller)->name('.')->group(function(){
    
    /**
     * --------------------------------------------------------------------------------------------------------------------
     *    Method | URI                           | Controller @ Nethod                   | Route Name                     |
     * --------------------------------------------------------------------------------------------------------------------
     */

    Route::get('options',                        'getSelectOptions'                      )->name('select-options');
    Route::post('change-status',                 'changeStatus'                          )->name('change-status');
    Route::get('sort.html',                      'getSortForm'                           )->name('sort.form');
    Route::post('sort',                          'sortMenus'                             )->name('sort.save');
    Route::get('list.html',                      'getMenus'                              )->name('list');
});

Route::middleware(['menu.item'])->controller(MenuItemController::class)->name('.items')->group(function () {
    /**
     * --------------------------------------------------------------------------------------------------------------------
     *    Method | URI                           | Controller @ Nethod                   | Route Name                     |
     * --------------------------------------------------------------------------------------------------------------------
     */

    Route::get('/{menu_id}/items.html',          'getItems'                              )->name("");
    Route::get('/{menu_id}/items/list.html',     'getList'                               )->name('.list');
    Route::get('/{menu_id}/items/detail/{id?}',  'getResourceDetail'                     )->name('.detail');
    
    Route::post('/{menu_id}/items/sort',         'sortItems'                             )->name('.sort');
    Route::post('/{menu_id}/items/save',         'save'                                  )->name('.save');
    Route::post('/{menu_id}/items/ajax-save',    'ajaxSave'                              )->name('.ajax-save');
    Route::post('/{menu_id}/items/delete',       'delete'                                )->name('.delete');
});