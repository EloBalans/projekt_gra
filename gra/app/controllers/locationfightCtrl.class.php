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



class locationfightCtrl {
    
    
    public $login;    
    public $accountData;
    public $monsterData;
    public $fightData;
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
    
     public function getMonsterDB(){
        $monster = null;

        try{
            $monster = App::getDB()->get("monster", 
            [
                'monster.name',
                'monster.lvl',
                'monster.hp',
                'monster.attack',
                'monster.gold',
                'monster.exp'
                ],[
                'monster.idmonster' => $this->idmonster,
            ]);
           
            
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }

        return $monster;
       
    }
    
    
    
    
    
     public function generateView(){
        $this->idmonster = SessionUtils::load($this->idmonster, $keep = true);
        $this->accountData = $this->getUserDB($this->login);
        $this->monsterData = $this->getMonsterDB();
      //  $this->fight= $this->getfight($this->$accountData, $this->$monsterData);
        App::getSmarty()->assign("player", $this->accountData);
        App::getSmarty()->assign("monster", $this->monsterData); 
        App::getSmarty()->display('locationfightView.tpl');
     }
        
        
        
       
    
     public function loginn() {
         if (empty($this->login)){
            $this->login = SessionUtils::load("login", $keep = true);
        }
                
        if(!$this->validate()){
            $this->login = SessionUtils::load("login", $keep = true);
        }
         
         
     }
    public function action_locationfight() {
        
        $this->loginn();
        $this->generateView();
    }
    
    
//    public function getfight($accountData,$monsterData){
//        
//    }
    
  
  
    public function action_looplocation() {
        
        $this->location = SessionUtils::load('location', $keep = true);
          
        
        if(($this->location)=="Las"){
            SessionUtils::remove($this->idmonster);
            SessionUtils::store($this->idmonster, rand(1,5));
            App::getRouter()->redirectTo('location');
        }
        if(($this->location)=="Pustynia"){
            SessionUtils::remove($this->idmonster);
            SessionUtils::store($this->idmonster, rand(6,10));
            App::getRouter()->redirectTo('location');
        }
        if(($this->location)=="Bagna"){
            SessionUtils::remove($this->idmonster);
            SessionUtils::store($this->idmonster, rand(11,15));
            App::getRouter()->redirectTo('location');
        }
        
    }
     
    

}
