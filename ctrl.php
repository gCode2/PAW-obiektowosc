<?php
require_once 'init.php';
//require_once dirname(__FILE__).'/../config.php';

//$action = isset($_REQUEST['action']) ? $_REQUEST["action"] : '';

switch($action){
    default:
        include_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
        $control = new CalcCtrl();
        $control->generateView();
    break;
    case 'calcCompute':
        include_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
        $control = new CalcCtrl();
        $control->process();
    break;
    

}




?>