<?php

namespace app\controllers;

use app\forms\LoginForm;
use core\ParamUtils;
use core\App;
use core\RoleUtils;
use core\Utils;

class loginCtrl
{
    public $form;
    
  
    public function __construct(){
        $this->form = new LoginForm();
    }

    public function validate() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->login))
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError())
            return false;

        // sprawdzenie, czy dane logowania poprawne
        // (takie informacje najczęściej przechowuje się w bazie danych)
        if ($this->form->login == "admin" && $this->form->pass == "admin") {
            RoleUtils::addRole('admin');
        } else if ($this->form->login == "user" && $this->form->pass == "user") {
            RoleUtils::addRole('user');
        } else {
            Utils::addErrorMessage('Niepoprawny login lub hasło');
        }

        return !App::getMessages()->isError();
    }

    
    public function action_loginShow() {
        $this->generateView();
    }

    public function action_login() {
        if ($this->validate()) {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            Utils::addErrorMessage('Poprawnie zalogowano do systemu');
            App::getRouter()->redirectTo("gameview");
        } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }

    public function action_logout() {
        // 1. zakończenie sesji
        session_destroy();
        // 2. idź na stronę główną - system automatycznie przekieruje do strony logowania
        App::getRouter()->redirectTo('login');
    }
   

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('loginView.tpl');
    }
}