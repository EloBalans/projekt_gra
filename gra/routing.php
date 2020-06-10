<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('gameview'); 
App::getRouter()->setLoginRoute('login');

Utils::addRoute('login', 'loginCtrl');
Utils::addRoute('logout', 'loginCtrl');
Utils::addRoute('register', 'registerCtrl');
Utils::addRoute('gameview', 'gameCtrl',['user','admin']);
Utils::addRoute('ranking', 'rankCtrl');
Utils::addRoute('location', 'locationCtrl',['user','admin']);



//Utils::addRoute('action_name', 'controller_class_name');