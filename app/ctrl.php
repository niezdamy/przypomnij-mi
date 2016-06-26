<?php
// Skrypt kontrolera głównego uruchamiający określoną
// akcję użytkownika na podstawie przekazanego parametru

//każdy punkt wejścia aplikacji (skrypt uruchamiany bezpośrednio przez klienta) musi dołączać konfigurację
require_once dirname (__FILE__).'/../config.php';

//1. pobierz nazwę akcji

if (isset($_REQUEST['action']))
{
$action = $_REQUEST['action'];
}
else $action = ' ';

//2. wykonanie akcji
switch ($action) {
	default : // 
	    // definicja konolera
		include_once $conf->root_path.'/app/przyp/PrzypCtrl.class.php';
		// tworzenie obiektu
		$ctrl = new PrzypCtrl ();
		$ctrl->generateView ();
	break;
	case 'sql_insert' :
		
		include_once $conf->root_path.'/app/przyp/PrzypCtrl.class.php';
	
		$ctrl = new PrzypCtrl ();
		$ctrl->sql_insert ();
	break;
	case 'sql_rejestracja' :
		
		include_once $conf->root_path.'/app/przyp/PrzypCtrl.class.php';
		$ctrl = new PrzypCtrl ();
		$ctrl->sql_rejestracja ();

		break;
		
	case 'sql_login' :

		include_once $conf->root_path.'/app/przyp/PrzypCtrl.class.php';
		$ctrl = new PrzypCtrl ();
		$ctrl->sql_login ();
	break;

		case 'sql_update' :

		include_once $conf->root_path.'/app/przyp/PrzypCtrl.class.php';
		$ctrl = new PrzypCtrl ();
		$ctrl->sql_update ();
	break;
}
