<?php

use App\Http\Controllers\Admin\General\SubcribeController;
use Illuminate\Support\Facades\Route;

$controller = SubcribeController::class;

add_web_module_routes($controller, true, true, 'admin');
/**
 * --------------------------------------------------------------------------------------------------------------------
 *    Method | URI                           | Controller @ Nethod                   | Route Name                     |
 * --------------------------------------------------------------------------------------------------------------------
 */
