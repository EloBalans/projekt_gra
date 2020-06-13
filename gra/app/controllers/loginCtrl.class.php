<?php

namespace app\controllers;

use app\forms\LoginForm;
use core\ParamUtils;
use core\App;
use core\RoleUtils;
use core\Utils;
use core\SessionUtils;
use core\Validator;
use core\Message;

class loginCtrl
{
    public $form;
    private $accountData;
    
  
    public function __construct(){
        $this->form = new LoginForm();
    }
     public function getLoginParams(){
        $this->form->login = ParamUtils::getFromRequest("login", true, 'Błędne wywołanie aplikacji');
        $this->form->password = ParamUtils::getFromRequest("password", true, 'Błędne wywołanie aplikacji');
    }
    public function validatelogin() {
      

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

        if(App::getMessages()->isError()) {
            return false;
        }

        try{
           
            
            $this->accountData = App::getDB()->get("user", [
                'login',
                'password',
                'rola',
            ],[
                'login' => $this->form->login,
                'password' => md5($this->form->password),
            ]);
            
            

            if(empty($this->accountData)){
                Utils::addErrorMessage("Nieprawidłowy login lub hasło");
            }
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }

        if(!App::getMessages()->isError()) {
            return true;
        }
        else{
            return false;
        }
    }

    
    public function generateView(){
        App::getSmarty()->assign('form', $this->form); 
        App::getSmarty()->display('LoginView.tpl');
    }
    
    
    public function action_loginview() {
         
         $this->generateView();
       
    }
    

    public function action_login() {
         $this->getLoginParams();
        if ($this->validatelogin()) {
            RoleUtils::addRole($this->accountData['rola']); 
            SessionUtils::store("login", $this->accountData['login']);
            SessionUtils::store("rola", $this->accountData['rola']);
            header("Location: ".App::getConf()->app_url."/gameview");
        } 
        else {
            $this->generateView();
        }
       
    }

    public function action_logout() {
        RoleUtils::removeRole("logged");
        RoleUtils::removeRole(SessionUtils::load("rola"));
        SessionUtils::remove("iduser");
        SessionUtils::remove("login");
        SessionUtils::remove("rola");
       
        session_destroy();
        
        App::getRouter()->redirectTo('loginshow');
    }
   

}