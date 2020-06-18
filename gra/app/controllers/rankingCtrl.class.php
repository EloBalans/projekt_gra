<?php

namespace app\controllers;

use app\forms\LoginForm;
use app\forms\RankingForm;
use core\ParamUtils;
use core\App;
use core\RoleUtils;
use core\Utils;
use core\SessionUtils;
use core\Validator;
use core\Message;

class rankingCtrl {
   
    private $form;
    private $records; 
   
    
    public function __construct() {
        $this->form = new RankingForm();
    }
    public function validate() {
        
        $this->form->nick = ParamUtils::getFromRequest('nick');
        return !App::getMessages()->isError();
    }

    public function action_rankingload() {
        
        
        $this->validate();

      
        $search_params = []; 
        if (isset($this->form->nick) && strlen($this->form->nick) > 0) {
            $search_params['nick[~]'] = $this->form->nick . '%'; 
        }
        
        
        

        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        
        
        $where ["ORDER"] = "nick";
       
      
        
           
        
        
        
       try {
           
            $this->records = App::getDB()->select("user", [ 
                
                "nick",
                "iduser",
                "lvl",
                ], ['LIMIT' => 20],$where );
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        App::getSmarty()->assign('searchnickForm', $this->form);
        App::getSmarty()->assign('players', $this->records); 
        App::getSmarty()->display('rankView.tpl');
    }
    
    
  
    
    
    

}
