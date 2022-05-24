<?php

use App\Http\Controllers\Admin\General\SubscribeController;
use Illuminate\Support\Facades\Route;

$controller = SubscribeController::class;

add_web_module_routes($controller, true, true, 'admin');
/**
 * --------------------------------------------------------------------------------------------------------------------
 *    Method | URI                           | Controller @ Nethod                   | Route Name                     |
 * --------------------------------------------------------------------------------------------------------------------
 */
