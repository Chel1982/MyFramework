<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 25.08.16
 * Time: 16:24
 */
    function __autoload($class_name)
    {
        $array_paths = array(
            '/models/',
            '/components/'
        );

        foreach ($array_paths as $path){
            $path = ROOT . $path . $class_name . '.php';
            if(is_file($path)){
                include_once $path;
            }
        }
    }