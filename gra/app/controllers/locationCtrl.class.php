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



class locationCtrl {
    
    
    public $login;    
    public $accountData; 
    public $monsterData;
    public $idmonster;
    public $location;
    
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
                'nick',
                'lvl',
                'exp',
                'gold',
                'hp',
                'attack',
            ],[
                'login' => $login
            ]);
            
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }

        return $user;
    }
     public function getMonsterDB(){
        $monster = null;

        try{
            $monster = App::getDB()->get("monster", 
            [
                'name',
                'lvl',
                'hp',
                'attack',
                'gold', 
                'exp'
                ],[
                'idmonster' => $this->idmonster,
            ]);


        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą dany ch!");
        }

        return $monster;

    }
    
     public function generateView(){
        $this->idmonster = SessionUtils::load($this->idmonster, $keep = true);
        $this->accountData = $this->getUserDB($this->login);
        $this->monsterData = $this->getMonsterDB();
        $this->location = SessionUtils::load('location', $keep = true);
        
        App::getSmarty()->assign("location", $this->location);
        App::getSmarty()->assign("player", $this->accountData);
        App::getSmarty()->assign("monster", $this->monsterData);;
        App::getSmarty()->display('locationView.tpl');
    }
    
    public function action_location() {
         if (empty($this->login)){
            $this->login = SessionUtils::load("login", $keep = true);
        }
                
        if(!$this->validate()){
            $this->login = SessionUtils::load("login", $keep = true);
        }
        
        $this->generateView();
    }
    

}
