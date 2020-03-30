<?php
require_once dirname(__FILE__).'/../config.php';

$action = isset($_GET["action"]) ? $_GET["action"]:"";

switch($action){
	case "process":
			include $conf->root_path.'/app/libs/CalcCtrl.class.php';
			
			$ctrl = new CalcCtrl();
			$ctrl->process();
	break;
	default:
			include $conf->root_path.'/app/libs/CalcCtrl.class.php';
			
			$ctrl = new CalcCtrl();
			$ctrl->generateView();
	break;
}

?>