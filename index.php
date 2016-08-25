<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 16.08.16
 * Time: 16:29
 */

/******** FRONT CONTROLLER **********/

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    define('ROOT', dirname(__FILE__));
    require_once (ROOT.'/components/Autoload.php');

    $router = new Router();
    $router -> run();