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
    public $idmonster;
    public $location;
    public $getfight;
        
    
    
    
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
    public function lvl($login){
        
        
         try{
             $this->userexp = App::getDB()->sum("user",['exp',],['login' => $login]);
             $this->userhp = App::getDB()->sum("user",['hp',],['login' => $login]);
             $this->userat = App::getDB()->sum("user",['attack',],['login' => $login]);
             
            if($this->userexp >= 0 & $this->userexp <44 ){
                App::getDB()->update("user" ,['lvl' => 1],['login' => $login]);
                
                
            }
            if($this->userexp >= 44 & $this->userexp <99 ){
                App::getDB()->update("user" ,['lvl' => 2],['login' => $login]);
                App::getDB()->update("user" ,['hp' => 25],['login' => $login]);
                App::getDB()->update("user" ,['attack' => 5],['login' => $login]);
            }
            if($this->userexp >= 99 & $this->userexp <176 ){
                App::getDB()->update("user" ,['lvl' => 3],['login' => $login]);
                App::getDB()->update("user" ,['hp' => 30],['login' => $login]);
                App::getDB()->update("user" ,['attack' => 6],['login' => $login]);
            }
            if($this->userexp >= 176 & $this->userexp <275 ){
                App::getDB()->update("user" ,['lvl' => 4],['login' => $login]);
                App::getDB()->update("user" ,['hp' => 35],['login' => $login]);
                App::getDB()->update("user" ,['attack' => 7],['login' => $login]);
            }
            if($this->userexp >= 275 & $this->userexp <396 ){
                App::getDB()->update("user" ,['lvl' => 5],['login' => $login]);
                App::getDB()->update("user" ,['hp' => 40],['login' => $login]);
                App::getDB()->update("user" ,['attack' => 8],['login' => $login]);
                
            }
            if($this->userexp >= 396 & $this->userexp <539 ){
                App::getDB()->update("user" ,['lvl' => 6],['login' => $login]);
                App::getDB()->update("user" ,['hp' => 45],['login' => $login]);
                App::getDB()->update("user" ,['attack' => 9],['login' => $login]);
            }
            if($this->userexp >= 539 & $this->userexp <704 ){
                App::getDB()->update("user" ,['lvl' => 7],['login' => $login]);
                App::getDB()->update("user" ,['hp' => 50],['login' => $login]);
                App::getDB()->update("user" ,['attack' => 10],['login' => $login]);
            }
            if($this->userexp >= 704 & $this->userexp <891 ){
                App::getDB()->update("user" ,['lvl' => 8],['login' => $login]);
                App::getDB()->update("user" ,['hp' => 55],['login' => $login]);
                App::getDB()->update("user" ,['attack' => 11],['login' => $login]);
            } 
            if($this->userexp >= 891 & $this->userexp <1000 ){
                App::getDB()->update("user" ,['lvl' => 9],['login' => $login]);
                App::getDB()->update("user" ,['hp' => 60],['login' => $login]);
                App::getDB()->update("user" ,['attack' => 12],['login' => $login]);
            }
            if($this->userexp >= 1000 & $this->userexp <1210 ){
                App::getDB()->update("user" ,['lvl' => 10],['login' => $login]);
                App::getDB()->update("user" ,['hp' => 65],['login' => $login]);
                App::getDB()->update("user" ,['attack' => 13],['login' => $login]);
            }
            if($this->userexp >= 1210 & $this->userexp <1440 ){
                App::getDB()->update("user" ,['lvl' => 11],['login' => $login]);
                App::getDB()->update("user" ,['hp' => 70],['login' => $login]);
                App::getDB()->update("user" ,['attack' => 14],['login' => $login]);
            }
            if($this->userexp >= 1440 & $this->userexp <1690 ){
                App::getDB()->update("user" ,['lvl' => 12],['login' => $login]);
                App::getDB()->update("user" ,['hp' => 75],['login' => $login]);
                App::getDB()->update("user" ,['attack' => 15],['login' => $login]);
            }
            if($this->userexp >= 1690 & $this->userexp <1960 ){
                App::getDB()->update("user" ,['lvl' => 13],['login' => $login]);
                App::getDB()->update("user" ,['hp' => 80],['login' => $login]);
                App::getDB()->update("user" ,['attack' => 16],['login' => $login]);
            }
            if($this->userexp >= 1960 & $this->userexp <2250 ){
                App::getDB()->update("user" ,['lvl' => 14],['login' => $login]);
                App::getDB()->update("user" ,['hp' => 85],['login' => $login]);
                App::getDB()->update("user" ,['attack' => 17],['login' => $login]);
            }
            if($this->userexp >= 2250){
                App::getDB()->update("user" ,['lvl' => 15],['login' => $login]);
                App::getDB()->update("user" ,['hp' => 90],['login' => $login]);
                App::getDB()->update("user" ,['attack' => 18],['login' => $login]);
            }
            
            
            
        
        }catch(\PDOException $e){
            Utils::addErrorMessage("blad polaczenia czy jakos tak");
        }
    }
    
     public function getfight($login){
        $at_monster = null;
        $at_user = null;
        $hp_monster = null;
        $hp_user = null;

        try{
            $this->at_monster = App::getDB()->sum("monster",['attack',],['idmonster' => $this->idmonster,]);
            $this->hp_monster = App::getDB()->sum("monster",['monster.hp',],['idmonster' => $this->idmonster,]);
            $this->at_user = App::getDB()->sum("user",['attack',],['login' => $login]);
            $this->hp_user = App::getDB()->sum("user",['hp',],['login' => $login]);
            
            
        }catch(\PDOException $e){
            Utils::addErrorMessage("blad polaczenia czy jakos tak");
        }
        
    
        
        
        $monsterexp=null;
        $userexp=null;
        $monstergold=null;
        $usergold=null;
        do{
        $this->hp_monster = $this->hp_monster - $this->at_user;
        
        if($this->hp_monster<1){    
            App::getSmarty()->assign("result", "Wygrana!");
            
            try{
                $this->monsterexp = App::getDB()->sum("monster",['exp',],['idmonster' => $this->idmonster,]);
                $this->userexp = App::getDB()->sum("user",['exp',],['login' => $login]);
                $this->finalexp=$this->userexp+$this->monsterexp;
                
                $this->monstergold = App::getDB()->sum("monster",['gold',],['idmonster' => $this->idmonster,]);
                $this->usergold = App::getDB()->sum("user",['gold',],['login' => $login]);
                $this->finalgold=$this->usergold+$this->monstergold;
                
                
                
                App::getDB()->update("user" ,['exp' => $this->finalexp],['login' => $login]);
                App::getDB()->update("user" ,['gold' => $this->finalgold],['login' => $login]);
                
                $this->lvl($login);
                
                
                
            }catch(\PDOException $e){
            Utils::addErrorMessage("blad polaczenia czy jakos tka");
            }
        
        }else{
         $this->hp_user = $this->hp_user - $this->at_monster;
        }
        
          
         App::getSmarty()->assign("hp_monster", $this->hp_monster);
        App::getSmarty()->assign("at_monster", $this->at_monster);
        App::getSmarty()->assign("hp_user", $this->hp_user);
        App::getSmarty()->assign("at_user", $this->at_user);
        
       
        
        if($this->hp_user<1){
        App::getSmarty()->assign("result", "Przegrana...");   
        }
        
         }while($this->hp_monster>0 and $this->hp_user>0);
         
            
       
         
         
         
      

    }
    
    
    
    
     public function generateView(){
        $this->idmonster = SessionUtils::load($this->idmonster, $keep = true);
        $this->accountData = $this->getUserDB($this->login);
        $this->monsterData = $this->getMonsterDB();
        $this->location = SessionUtils::load('location', $keep = true);
        App::getSmarty()->assign("location", $this->location);
        App::getSmarty()->assign("player", $this->accountData);
        App::getSmarty()->assign("monster", $this->monsterData); 
        $this->getfight = $this->getfight($this->login);
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
