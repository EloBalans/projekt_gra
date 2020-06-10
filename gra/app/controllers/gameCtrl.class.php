<?php

namespace app\controllers;

use core\App;



class gameCtrl {
    
    public function action_gameview() {
        App::getSmarty()->display("gameView.tpl");
        
    }
    
    
}
