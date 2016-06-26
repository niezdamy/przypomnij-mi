<?php 

require_once $conf->root_path.'/app/przyp/dbConn.class.php';

$data = date('j-m-y');
$czas = date('H:i');

$db = dbConn::getConnection();


			 $stmt = $db->query("SELECT Nazwa, Miejsce, Opis, user_id FROM reminders WHERE data =  '$data' AND czas = '$czas' ");


			 $cols = $stmt->columnCount(); 

			 if ($cols>0)

			{

					  foreach($stmt as $row)
				      {
				      		$nazwa=$row['Nazwa'];
				      		$miejsce=$row['Miejsce'];
				      		$opis=$row['Opis']
				        	$id_user=$row['user_id'];
				      }


					$sth = $db->query("SELECT Imie, Mail FROM users WHERE id_user =  '$id_user' ");


					foreach($sth as $row)
						      {
						      		$imie=$row['Imie'];
						      		$mail=$row['Mail'];
						      }

		  	}

		  	//dopisać klasę wysylajaca


?>