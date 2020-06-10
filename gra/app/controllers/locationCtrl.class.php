<?php


namespace app\controllers;

use core\App;


class locationCtrl {
    
    
    
    
    public function generateView() {
       
        App::getSmarty()->display('locationView.tpl');
    }
    
    public function action_location(){
        
           
        $this->generateView();
    }
    

}
