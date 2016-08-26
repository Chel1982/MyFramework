<?php

/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 26.08.16
 * Time: 11:11
 */
class CabinetController
{
    public function actionIndex()
    {
        $userId = User::checkLogged();
        echo $userId;

        require_once (ROOT . '/views/cabinet/index.php');
        return true;
    }
}