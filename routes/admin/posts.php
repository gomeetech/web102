<?php

use App\Http\Controllers\Admin\General\PostCategoryController;
use App\Http\Controllers\Admin\General\PostController;
use Illuminate\Support\Facades\Route;

Route::controller(PostCategoryController::class)->group(function () {
    /**
     * --------------------------------------------------------------------------------------------------------------------
     *  Method | URI                                    | Controller @ Nethod              | Route Name               
     * --------------------------------------------------------------------------------------------------------------------
     */
    Route::get('/{dynamic}/categories',                  'getIndex'                        )->name('.categories');

    Route::name('.categories.')->group(function () {
        /**
         * --------------------------------------------------------------------------------------------------------------------
         *  Method | URI                                    | Controller @ Nethod              | Route Name               
         * --------------------------------------------------------------------------------------------------------------------
         */
        Route::get('/{dynamic}/categories/list.html',        'getList'                         )->name('list');
        Route::get('/{dynamic}/categories/trash.html',       'getTrash'                        )->name('trash');
        Route::get('/{dynamic}/categories/ajax-search',      'ajaxSearch'                      )->name('ajax');
        Route::get('/{dynamic}/categories/create.html',      'getCreateForm'                   )->name('create');
        Route::get('/{dynamic}/categories/update/{id}.html', 'getUpdateForm'                   )->name('update');
        Route::post('/{dynamic}/categories/save',            'save'                            )->name('save');
        Route::post('/{dynamic}/categories/move-to-trash',   'moveToTrash'                     )->name('move-to-trash');
        Route::post('/{dynamic}/categories/delete',          'delete'                          )->name('delete');
        Route::post('/{dynamic}/categories/restore',         'restore'                         )->name('restore');
        Route::get('/{dynamic}/categories/options',          'getCategoryOptions'              )->name('options');
    });
    
});
Route::controller(PostController::class)->name('.')->group(function(){
    /**
     * --------------------------------------------------------------------------------------------------------------------
     *  Method | URI                                    | Controller @ Nethod              | Route Name               
     * --------------------------------------------------------------------------------------------------------------------
     */

    Route::get('/{dynamic}/list.html',                   'getList'                          )->name('list');
    Route::get('/{dynamic}/trash.html',                  'getTrash'                         )->name('trash');
    Route::get('/{dynamic}/ajax-search',                 'ajaxSearch'                       )->name('ajax');
    Route::get('/{dynamic}/create.html',                 'getCreateForm'                    )->name('create');
    Route::get('/{dynamic}/update/{id}.html',            'getUpdateForm'                    )->name('update');
    Route::get('/{dynamic}/config.html',                 'getPostConfigForm'                )->name('config');
    Route::get('/{dynamic}/form-layout.html',            'getFormLayoutSetting'             )->name('form-layout');
    Route::post('/{dynamic}/save',                       'save'                             )->name('save');
    Route::post('/{dynamic}/move-to-trash',              'moveToTrash'                      )->name('move-to-trash');
    Route::post('/{dynamic}/delete',                     'delete'                           )->name('delete');
    Route::post('/{dynamic}/restore',                    'restore'                          )->name('restore');
    Route::post('/{dynamic}/save-config',                'saveConfig'                       )->name('save-config');
    Route::post('/{dynamic}/delete-form-group',          'deleteFormGroup'                  )->name('delete-form-group');
    Route::post('/{dynamic}/check-slug',                 'checkSlug'                        )->name('check-slug');
    Route::get('/{dynamic}/get-slug',                    'getSlug'                          )->name('get-slug');
    

});
Route::controller(PostController::class)->group(function(){
    /**
     * --------------------------------------------------------------------------------------------------------------------
     *  Method | URI                                    | Controller @ Nethod              | Route Name               
     * --------------------------------------------------------------------------------------------------------------------
     */

    Route::get('/{dynamic}.html',                        'getIndex'                         )->name('');

});