<?php

use App\Http\Controllers\Admin\General\DashboardController;
use App\Http\Controllers\Admin\General\DynamicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(DashboardController::class)->group(function () {
    Route::get('/',                               'getIndex')->middleware('auth')->name('dashboard');
    Route::get('/dashboard',                      'getIndex')->middleware('auth')->name('admin.dashboard');
});




$routes = [
    // prefix => middleware

    // thêm route ở đây
];
$modules = get_web_module_list(get_web_type());
if (count($modules)) {
    foreach ($modules as $module) {
        if ($module) {
            $routes[] = $module;
        }
    }
}


$routes[] = 'notices';

Route::name('admin.')->group(function () use ($routes) {


    foreach ($routes as $prefix => $middleware) {
        $mw = null; // middleware
        $pf = null; // prefix
        if (!is_numeric($prefix)) {
            $pf = $prefix;
            if ($middleware) {
                $mw = $middleware;
            }
        } else {
            $pf = $middleware;
        }
        if ($pf && file_exists($path = base_path('routes/admin/' . $pf . '.php'))) {
            $router = Route::prefix($pf);
            if ($mw) {
                $router->middleware($mw);
            }
            $router->as($pf);
            $router->group($path);
        }
    }

    Route::get('posts/categorie/options',   [DynamicController::class, 'getCategoryOptions']       )->name('posts.category-options');

    Route::middleware(['dynamic.post'])->name('posts')->group(base_path('routes/admin/posts.php'));
});
