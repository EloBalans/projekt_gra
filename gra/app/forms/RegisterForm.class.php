<?php

namespace app\forms;

class RegisterForm
{
    public $email;
    public $login;
    public $password;
    public $password_repeat;

    function checkIsNull() {
        foreach ($this as $key => $value) {
            if(!isset($value)) return false;
            else return true;
        }
    }
}