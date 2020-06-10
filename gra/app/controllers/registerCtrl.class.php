<?php



namespace app\controllers;


use core\App;


class registerCtrl {
   
    
    public function action_register() {
        App::getSmarty()->display("registerView.tpl");
        
    }
}
