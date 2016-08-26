<?php

/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 25.08.16
 * Time: 16:51
 */
class UserController
{
    public function actionLogin()
    {

    }
    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';

        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkName($name)){
                $errors[] = 'Имя не должно быть короче 2х символов';
            }

            if (!User::checkEmail($email)){
                $errors[] = 'Не правильный email';
            }

            if (!User::checkPassword($password)){
                $errors[] = 'Пароль не должен быть меньше 6 ти символов';
            }

            if (User::checkEmailExists($email)){
                $errors[] = 'Такой email уже используется';
            }

            if ($errors == false){
                $result = User::register($name, $email, $password);
            }
        }

        require_once (ROOT . '/views/user/register.php');
        return true;
    }


}