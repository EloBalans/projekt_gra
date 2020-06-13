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

class rankingCtrl {
   
    private $records; 
   

    public function action_rankingload() {
       try {
           
            $this->records = App::getDB()->select("user", [ 
                
                "nick",
                "iduser",
                "lvl",
                
                ],[
                "lvl[>]" => "ASC",
        ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        
        App::getSmarty()->assign('players', $this->records); 
        App::getSmarty()->display('rankView.tpl');
    }

}
