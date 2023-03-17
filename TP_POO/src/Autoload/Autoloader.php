<?php

namespace Autoloader;

class Autoload
{
    public static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload')); 
    }

    private function autoload($class)
    {
        $class = str_replace('\\', '/', $class);
       
        // Look for the class file in the different directories
        $filePath = str_replace('\\', '/', $class) . '.php';
        $fullPath = ROOT . '/src/' . $filePath;
    
        if (file_exists($fullPath)) {
            require_once $fullPath;
        }
    }
}