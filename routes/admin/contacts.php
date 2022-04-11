<?php

use App\Http\Controllers\Admin\General\ContactController;
use App\Http\Controllers\Admin\General\ContactReplyController;
use Illuminate\Support\Facades\Route;

$controller = ContactController::class;

$listRoute = ['index', 'list', 'create', 'update', 'save', 'delete'];

add_web_module_routes($controller, $listRoute, true, 'admin');
/**
 * --------------------------------------------------------------------------------------------------------------------
 *    Method | URI                           | Controller @ Nethod                   | Route Name                     |
 * --------------------------------------------------------------------------------------------------------------------
 */

Route::get('detail',                         [$controller,'getResourceDetail']       )->name('.detail');


Route::controller(ContactReplyController::class)->name('.replies.')->group(function(){
    Route::get('replies/detail',                 'getResourceDetail'                )->name('detail');
    Route::post('replies/save',                  'ajaxSave'                         )->name('save');
    Route::post('replies/create',                'ajaxSave'                         )->name('create');
    Route::post('replies/update',                'ajaxSave'                         )->name('update');
    Route::delete('replies/delete',              'delete'                           )->name('delete');
});