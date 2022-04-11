<?php
require_once 'init.php';
//require_once dirname(__FILE__).'/../config.php';

//$action = isset($_REQUEST['action']) ? $_REQUEST["action"] : '';

getConf()->login_action = 'login';


switch($action){
   default :
		control('app\\controllers', 'CalcCtrl', 'generateView', ['user','admin']);
	case 'login': 
		control('app\\controllers', 'LoginCtrl','doLogin');
	case 'calcCompute' : 
		control(null, 'CalcCtrl', 'process', ['user','admin']);
	case 'logout' : 
		control(null, 'LoginCtrl',	'doLogout',	['user','admin']);
}




?>