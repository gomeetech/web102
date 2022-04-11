<?php

use App\Http\Controllers\Admin\General\PermissionModuleController;
use App\Http\Controllers\Admin\General\PermissionRoleController;
use Illuminate\Support\Facades\Route;
Route::prefix('modules')->name('.modules')->controller(PermissionModuleController::class)->group(function () {
    
    admin_routes(PermissionModuleController::class, true, true);
    
    /**
     * --------------------------------------------------------------------------------------------------------------------
     *    Method | URI                           | Controller @ Nethod                   | Route Name                     |
     * --------------------------------------------------------------------------------------------------------------------
     */
    Route::get('/get-route-options',             'getRouteOptions'                       )->name('.get-route-options');
            
    
});


Route::prefix('roles')->name('.roles')->controller(PermissionRoleController::class)->group(function () {
    
    admin_routes(PermissionRoleController::class, true, true);

    /**
     * --------------------------------------------------------------------------------------------------------------------
     *    Method | URI                           | Controller @ Nethod                   | Route Name                     |
     * --------------------------------------------------------------------------------------------------------------------
     */

     Route::post('save-user-role',               'saveUserRole'                           )->name('.save-user-role');


    
});