<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('gameview'); 
App::getRouter()->setLoginRoute('loginview');

Utils::addRoute('login', 'loginCtrl');
Utils::addRoute('loginview', 'loginCtrl');
Utils::addRoute('logout', 'loginCtrl');
Utils::addRoute('register', 'registerCtrl');
Utils::addRoute('registershow', 'registerCtrl');
Utils::addRoute('gameview', 'gameCtrl',['user','admin']);
Utils::addRoute('map1', 'gameCtrl',['user','admin']);
Utils::addRoute('map2', 'gameCtrl',['user','admin']);
Utils::addRoute('map3', 'gameCtrl',['user','admin']);
Utils::addRoute('rankingload', 'rankingCtrl');
Utils::addRoute('location', 'locationCtrl',['user','admin']);
Utils::addRoute('locationfight', 'locationfightCtrl',['user','admin']);
Utils::addRoute('looplocation', 'locationfightCtrl',['user','admin']);








//Utils::addRoute('action_name', 'controller_class_name');