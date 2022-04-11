<?php
require_once 'init.php';
//require_once dirname(__FILE__).'/../config.php';

//$action = isset($_REQUEST['action']) ? $_REQUEST["action"] : '';

getRouter()->setDefaultRoute('calcShow'); 
getRouter()->setLoginRoute('login');

getRouter()->addRoute('calcShow', 'CalcCtrl', ['user','admin']);
getRouter()->addRoute('calcCompute', 'CalcCtrl', ['user','admin']);
getRouter()->addRoute('login', 'LoginCtrl');
getRouter()->addRoute('logout', 'LoginCtrl', ['user','admin']);

getRouter()->go();

?>