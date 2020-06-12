<?php

namespace app\controllers;

use app\forms\LoginForm;
use core\ParamUtils;
use core\App;
use core\RoleUtils;
use core\Utils;
use core\SessionUtils;
use core\Validator;

class loginCtrl
{
    public $form;
    
  
    public function __construct(){
        $this->form = new LoginForm();
    }
     public function getLoginParams(){
        $this->form->login = ParamUtils::getFromRequest("login", true, 'Błędne wywołanie aplikacji');
        $this->form->password = ParamUtils::getFromRequest("password", true, 'Błędne wywołanie aplikacji');
    }
    public function validatelogin() {
      

        if(!empty(SessionUtils::load("id", true))) return true;

        if(!$this->form->checkIsNull()) return false;

        $v = new Validator();
        $v->validate($this->form->login,[
            'trim' => true,
            'required' => true,
            'required_message' => 'Login jest wymagany',
            'min_length' => 3,
            'max_length' => 32,
            'validator_message' => 'Login powinien zawierać od 3 do 32 znaków'
        ]);

        $v->validate($this->form->password,[
            'required' => true,
            'required_message' => 'Hasło jest wymagane',
        ]);

        if(App::getMessages()->isError()) return false;

        try{
            $this->accountData = App::getDB()->get("user", [
                "[>]role" => ["id_role" => "id_role"],
            ],[
                'user.id',
                'user.login',
                'user.password',
                'role.name',
            ],[
                'login' => $this->form->login,
                'password' => md5($this->form->password)
            ]);

            if(empty($this->accountData)){
                Utils::addErrorMessage("Nieprawidłowy login lub hasło");
            }
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }

        if(!App::getMessages()->isError()) return true;
        else return false;
    }

    
    public function generateView(){
        if($this->validateLogin()){
            SessionUtils::store("id", $this->accountData["id"]);
            SessionUtils::store("login", $this->accountData["login"]);
          

            

            RoleUtils::addRole($this->accountData["name"]);
            RoleUtils::addRole("logged");
            Utils::addInfoMessage("Logowanie udane!");

          
        }
        else{
            App::getSmarty()->assign('page_title','Zaloguj się');
            App::getSmarty()->assign('page_description','Logowanie do systemu');
            App::getSmarty()->display('loginView.tpl');
        }
    }
    
    
    public function action_loginview() {
         ;
         $this->generateView();
       
    }
    

    public function action_login() {
         $this->getLoginParams();
         $this->generateView();
       
    }

    public function action_logout() {
        // 1. zakończenie sesji
        session_destroy();
        // 2. idź na stronę główną - system automatycznie przekieruje do strony logowania
        App::getRouter()->redirectTo('loginshow');
    }
   

}