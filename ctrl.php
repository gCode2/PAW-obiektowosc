<?php
require_once 'init.php';
//require_once dirname(__FILE__).'/../config.php';

//$action = isset($_REQUEST['action']) ? $_REQUEST["action"] : '';

switch($action){
    default:
        include 'check.php';
        $control = new app\controllers\CalcCtrl();
        $control->generateView();
    break;
    case 'login':
        $control = new app\controllers\LoginCtrl();
        $control->doLogin();
    break;
    case 'calcCompute':
        include 'check.php';
        $control = new app\controllers\CalcCtrl();
        $control->process();
    break;
    case 'logout':
        include 'check.php';
        $control = new app\controllers\LoginCtrl();
        $control->doLogout();
    break;    

}




?>