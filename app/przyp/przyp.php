<?php
//Skrypt uruchamiający akcję wykonania obliczeń kalkulatora
// - należy zwrócić uwagę jak znacząco jego rola uległa zmianie
//   po wstawieniu funkcjonalności do klasy kontrolera

require_once dirname(__FILE__).'/../config.php';

//załaduj kontroler
require_once $conf->root_path.'/app/PrzypCtrl.class.php';

//utwórz obiekt i użyj
$ctrl = new PrzypCtrl();
//$ctrl->process();
