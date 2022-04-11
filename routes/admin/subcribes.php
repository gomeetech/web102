<?php

use App\Http\Controllers\Admin\General\SubcribeController;
use Illuminate\Support\Facades\Route;

$controller = SubcribeController::class;


$listRoute = ['index', 'list', 'create', 'update', 'save', 'delete'];

add_web_module_routes($controller, $listRoute, true, 'admin');

/**
 * --------------------------------------------------------------------------------------------------------------------
 *    Method | URI                           | Controller @ Nethod                   | Route Name                     |
 * --------------------------------------------------------------------------------------------------------------------
 */
