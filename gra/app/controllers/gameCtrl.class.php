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



class gameCtrl {
    
    public $login;    
    public $accountData; 
    public $monsterData;
    public $idmonster;
    
     
     public function validate() {
        $exists = App::getDB()->count("user","login",[
           'login' => $this->login 
        ]);
        
        if($exists != 1){
            Utils::addErrorMessage("Użytkownik o podanym id nie istnieje!");
        }
        
        if(App::getMessages()->isError()) return false;
        else return true;
    }
    
    public function getUserDB($login){
        $user = null;

        try{
            $user = App::getDB()->get("user", 
            [
                'user.nick',
                'user.lvl',
                'user.exp',
                'user.gold',
                'user.hp',
                'user.attack',
            ],[
                'login' => $login
            ]);
            
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }

        return $user;
    }
    
    
    
    
    
     public function generateView(){
        $this->accountData = $this->getUserDB($this->login);
        SessionUtils::store($this->idmonster, rand(1,5));
        App::getSmarty()->assign("player", $this->accountData);
        App::getSmarty()->display('gameView.tpl');
    }
    
    public function action_gameview() {
        
        if (empty($this->login)){
            $this->login = SessionUtils::load("login", $keep = true);
        }
                
        if(!$this->validate()){
            $this->login = SessionUtils::load("login", $keep = true);
        }
       
        $this->generateView();
    }
    
    
}
