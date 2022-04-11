<?php

use App\Http\Controllers\Admin\General\CommentController;
use Illuminate\Support\Facades\Route;

$controller = CommentController::class;


$listRoute = ['index', 'create', 'update', 'save', 'delete', 'list'];

add_web_module_routes($controller, $listRoute, true, 'admin');

Route::post('change-approve',[$controller, 'changeApprove'])->name('.change-approve');
