<?php

/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 17.08.16
 * Time: 17:04
 */
class DB
{
    public static function getConnection()
    {
        $paramsPath = ROOT . '/config/db_params.php';
        $params = include($paramsPath);

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);
        $db -> exec('SET names utf8');

        return $db;

    }
}