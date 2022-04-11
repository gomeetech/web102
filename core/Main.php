<?php
namespace Core;
class Main{
    protected static $containers = [
        'assets' => [],
        'database' => [
            'migrations' => [],
            'seeders' => []
        ],
        'views' => [],
        'routes' => [],
        'packages' => []
    ];

    public static function __registerPackage__($name, $data)
    {
        static::$containers['packages'][$name] = $data;
    }

    public function __call($name, $arguments)
    {
        if(is_callable(static::class . '__' .$name .'__')){
            return call_user_func_array(static::class . '__' .$name .'__', $arguments);
        }
        return false;
    }
    public static function __callStatic($name, $arguments)
    {
        if(is_callable(static::class . '__' .$name .'__')){
            return call_user_func_array(static::class . '__' .$name .'__', $arguments);
        }
        
        return false;
    }

}