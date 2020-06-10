<?php


namespace app\controllers;

use core\App;


class rankCtrl {
    
    public function generateView(){
        
            App::getSmarty()->assign('page_title','Ranking');
            App::getSmarty()->assign('page_description','Ranking');
            App::getSmarty()->display('rankView.tpl');
        
    }
    
    public function action_ranking(){
        
       $this->generateView();
    }
    
    

}
