<?php
namespace Core;

use Gomee\Files\Filemanager;

class Package{
    /**
     * Undocumented variable
     *
     * @var Filemanager
     */
    protected static $filemanager;
    protected static $containers = [
        
    ];

    /**
     * get filemanager with path
     *
     * @param string $path
     * @return Filemanager
     */
    public static function fm($path)
    {
        if(!static::$filemanager){
            static::$filemanager = new Filemanager();
        }
        static::$filemanager->setDir($path);
        return static::$filemanager;
    }

    public static function register($name, $path)
    {
        if($path && is_dir($path)){
            $filemanager = static::fm($path);

            if($package = $filemanager->getJson('package.json')){
                static::$containers[$name] = [
                    'path' => $path,
                    'package' => $package
                ];
            }
        }
    }

    public static function all()
    {
        return static::$containers;
    }

}