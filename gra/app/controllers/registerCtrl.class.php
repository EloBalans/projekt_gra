<?php

namespace app\controllers;

use app\forms\RegisterForm;
use core\ParamUtils;
use core\Message;
use core\RoleUtils;
use core\App;
use core\Utils;
use core\Validator;


class registerCtrl
{
    
    
     
    private $form;
    
    public function __construct() {
        $this->form = new RegisterForm();
    }
    
    public function getParams()
    {
        $this->form->email = ParamUtils::getFromRequest('email', true, 'Błędne wywołanie aplikacji');
        $this->form->nick = ParamUtils::getFromRequest('nick', true, 'Błędne wywołanie aplikacji');
        $this->form->login = ParamUtils::getFromRequest('login', true, 'Błędne wywołanie aplikacji');
        $this->form->password = ParamUtils::getFromRequest('password', true, 'Błędne wywołanie aplikacji');
         
        
            
    }
    
    public function validate() {
        
        $valid = new Validator();
        
         $valid->validate($this->form->email,[
            'email' => true,
            'trim' => true,
            'required' => true,
            'min_length' => 4,
            'max_length' => 128,
            'required_message' => 'Email jest wymagany',
            'validator_message' => "Nieprawidłowy adres email"
        ]); 
         
        $valid->validate($this->form->nick,[
            'required' => true,
            'min_length' => 4,
            'max_length' => 128,
            'required_message' => 'Nick jest wymagany',
            'validator_message' => "Nieprawidłowy adres email"
        ]);
         
        $valid->validate($this->form->login,[
            'trim' => true,
            'required' => true,
            'required_message' => 'Login jest wymagany',
            'min_length' => 3,
            'max_length' => 32,
            'validator_message' => 'Login powinien zawierać od 3 do 32 znaków'
        ]);
        
        $valid->validate($this->form->password,[
            'required' => true,
            'required_message' => 'Hasło jest wymagane',
            'min_length' => 3,
            'max_length' => 32,
            'validator_message' => 'Hasło powinno zawierac od 3 do 32 znaków'
        ]);
        
       
        
        $this->Duplicate();
        
        if(!App::getMessages()->isError()) return true;
        else return false;
    }
    
    public function toDB(){
        try{
            App::getDB()->insert("user",[
                'login' => $this->form->login,
                'nick' => $this->form->login,
                'password' => $this->form->password,
                'email' => $this->form->email,
                'rola' => 'user'
            ]);
            
            Utils::addInfoMessage("Konto zostało utworzone");
        }catch(\PDOException $e){
            Utils::addErrorMessage("1Błąd połączenia z bazą danych!");
        }
    }
    
    public function Duplicate(){
        try{
            $loginCount = App::getDB()->has("user", [
                'login' => $this->form->login
            ]);
            
            $nickCount = App::getDB()->has("user", [
                'nick' => $this->form->nick
            ]);
            
            $emailCount = App::getDB()->has("user",[
                'email' => $this->form->email
            ]);
            
            if($loginCount){
                Utils::addErrorMessage("Podany login jest już zajęty");
            }
            
            if($nickCount){
                Utils::addErrorMessage("Podany email jest już zajęty");
            }

            if($emailCount){
                Utils::addErrorMessage("Podany email jest już zajęty");
            }

        }catch(\PDOException $e){
            Utils::addErrorMessage("2Błąd połączenia z bazą danych");
        }
    }
     public function action_registershow() {	        
        $this->generateView();  
    }
    
   
    
     public function action_register() {	        
        $this->getParams();
        if($this->validate()){
            $this->toDB();
            App::getSmarty()->display('loginView.tpl');
        }
        else{
            App::getSmarty()->display('registerView.tpl');
        }
         
    }
    
    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('registerView.tpl');
    }
    
}

