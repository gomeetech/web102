<?php

use Gomee\Laravel\Router;
use Illuminate\Support\Facades\Route;

if (!function_exists('get_route_options')) {
    /**
     * lấy thông tin route trả về dạng option key => value
     *
     * @param string $prefix
     * @return array
     */
    function get_route_options($prefix = null)
    {
        $data = [];
        $routes = Router::getSelectNameAndUri();
        if ($prefix) {
            if ($prefix == 'client') {
                foreach ($routes as $name => $uri) {
                    if (preg_match('/^' . $prefix . '\./i', $name) || $uri == '/') {
                        $data[$name] = $uri;
                    }
                }
            } else {
                foreach ($routes as $name => $uri) {
                    if (preg_match('/^' . $prefix . '\./i', $name)) {
                        $data[$name] = $uri;
                    }
                }
            }
        } else {
            $data = $routes;
        }
        return $data;
    }
}

if (!function_exists('add_web_module_routes')) {
    /**
     * dinh nghia cac route cho một module
     * @param string $controller class
     * @param boolean $require_index_route 
     * @param string|bool $route      prefix of route
     * 
     * @return void
     */
    function add_web_module_routes($controller, $list = [], $route = null, $scope = '')
    {
        $routeData = [
            'index'            => ['get', '/', 'getIndex', ''],
            'list'             => ['get', 'list.html', 'getList', 'list'],
            'trash'            => ['get', 'trash.html', 'getTrash', 'trash'],
            'detail'           => ['get', 'detail/{id}.html', 'getDetail', 'detail'],
            'ajax'             => ['get', 'ajax-search', 'ajaxSearch', 'ajax'],
            'create'           => ['get', 'create.html', 'getCreateForm', 'create'],
            'update'           => ['get', 'update/{id}.html', 'getUpdateForm', 'update'],
            'save'             => ['post', 'save', 'save', 'save'],
            'move-to-trash'    => ['post', 'move-to-trash', 'moveToTrash', 'move-to-trash'],
            'delete'           => ['post', 'delete', 'delete', 'delete'],
            'restore'          => ['post', 'restore', 'restore', 'restore'],
            'form-config'      => ['get', 'form/config/{action?}', 'getConfigForm', 'form.config.edit'],
            'form.config-save' => ['post', 'form/config/save', 'saveConfigForm', 'form.config.save']
        ];

        if (!is_array($list)) {
            if (in_array($list, ['all', '*']) || !$list) {
                $list = array_keys($routeData);
            } elseif (array_key_exists($list, $routeData)) {
                $list = [$list];
            } else {
                return false;
            }
        } elseif (!count($list)) {
            $list = array_keys($routeData);
        }

        if ($route) {
            if (count($list) && $list[0] == 'index') {
                Route::get('/', [$controller, 'getIndex'])->name(is_bool($route)?'':$route);
                array_shift($list);
            }
            Route::controller($controller)->name(is_bool($route)?'.':$route.'.')->group(function () use ($list, $routeData, $route) {
                foreach ($list as $key) {
                    if (array_key_exists($key, $routeData)) {
                        $detail = $routeData[$key];
                        $router = call_user_func_array(['Route', $detail[0]], [$detail[1], $detail[2]]);
                        $router->name($detail[3]);
                    }
                }
            });
        }
        else{
            Route::controller($controller)->group(function () use ($list, $routeData, $route) {
                foreach ($list as $key) {
                    if (array_key_exists($key, $routeData)) {
                        $detail = $routeData[$key];
                        $router = call_user_func_array(['Route', $detail[0]], [$detail[1], $detail[2]]);
                    }
                }
            });
        }

        
    }
}


if (!function_exists('api_routes')) {
    /**
     * dinh nghia cac route cho một module nào đó phần manager
     * @param string $controller class
     * @param string|bool $route      prefix of route
     * @param boolean $require_index_route 
     * 
     * @return void
     */
    function api_routes($controller, $route = null, $require_index_route = false)
    {
        Route::controller($controller);
        /**
         * --------------------------------------------------------------------------------------------------------------------
         *    Method | URI                                | Controller @ Nethod              | Route Name                     |
         * --------------------------------------------------------------------------------------------------------------------
         */

        if ($route) {
            if ($require_index_route) {
                Route::get('/',       [$controller, 'index'])->name(is_bool($route)?'':$route);
            }
            $route .= '.';
            Route::controller($controller)->name(is_bool($route)?'.':$route.'.')->group(function() {
                Route::get('/list',                             'index')->name('list');
                Route::get('/trash',                            'trash')->name('trash');
                Route::get('/detail/{id}',                      'detail')->name('detail');
                Route::post('/create',                          'create')->name('create');
                Route::post('/store',                           'store')->name('store');
                Route::put('/update/{id}',                      'update')->name('update');
                Route::post('/save',                            'save')->name('save');
                Route::delete('/move-to-trash',                 'moveToTrash')->name('move-to-trash');
                Route::delete('/delete',                        'delete')->name('delete');
                Route::put('/restore',                          'restore')->name('restore');
            });
            
        } else {
            if ($require_index_route)  Route::get('/',       'index');
            Route::get('/list',                             'index');
            Route::get('/trash',                            'trash');
            Route::get('/detail/{id}',                      'detail');
            Route::post('/create',                          'create');
            Route::post('/store',                           'store');
            Route::put('/update/{id}',                      'update');
            Route::post('/save',                            'save');
            Route::delete('/move-to-trash',                 'moveToTrash');
            Route::delete('/delete',                        'delete');
            Route::put('/restore',                          'restore');
        }
    }
}




if (!function_exists('admin_routes')) {
    /**
     * dinh nghia cac route cho một module nào đó phần manager
     * @param string $controller class
     * @param string $route      prefix of route
     * @param boolean $require_index_route 
     * 
     * @return void
     */
    function admin_routes($controller, $route = null, $require_index_route = false)
    {
        $routeData = [
            'index', 'list', 'trash', 'detail', 'ajax',  'create', 'update',
            'save', 'move-to-trash', 'delete', 'restore', 'form-config', 'form.config-save'
        ];

        if (!$require_index_route) array_shift($routeData);

        return add_web_module_routes($controller, $routeData, $route, 'admin');
    }
}
