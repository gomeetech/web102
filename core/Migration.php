<?php
namespace Core;
/**
 * class chứa tất cả thông tin của cac moduole
 */
class Migration {
    protected static $migrations = [];

    public static function add($class, $path)
    {
        if(!array_key_exists($class, static::$migrations))static::$migrations[$class] = $path;
    }
    public static function get($class)
    {
        if(array_key_exists($class, static::$migrations)) return static::$migrations[$class];
        return false;
    }
    public static function all()
    {
        return static::$migrations;
    }
    

}