<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/app/przyp/PrzypForm.class.php';
require_once $conf->root_path.'/app/przyp/dbConn.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';


class PrzypCtrl {

	
	private $form;   
	private $user;
	private $msg;
	private $res;
	private $usr_name;

	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new PrzypForm();
		$this->msg = new Messages();	
	}	
	
	public function getParams(){

		$this->nazwa = $_REQUEST ['nazwa'];
		$this->data = $_REQUEST ['data'];
		$this->czas = $_REQUEST ['czas'];
		$this->mail = $_REQUEST ['mail'];
	}

	public function getParamsRejestracja(){

		$this->imieR = $_REQUEST ['imieR'];
		$this->mailR = $_REQUEST ['mailR'];
		$this->hasloR = $_REQUEST ['hasloR'];
	}

	public function getParamsLogin(){

		$this->mailL = $_REQUEST ['mailL'];
		$this->hasloL = $_REQUEST ['hasloL'];
	}
	
	public function getParamsUpdate(){

		$this->id = $_REQUEST ['id'];
		$this->nazwa = $_REQUEST ['nazwa'];
		$this->data = $_REQUEST ['data'];
		$this->czas = $_REQUEST ['czas'];
		$this->miejsce = $_REQUEST ['miejsce'];
		$this->opis = $_REQUEST ['opis'];
	}


	

		public function sql_insert(){
				
			
			$this->getParams();
			
			$mail = $this->mail;

			

			$db = dbConn::getConnection();


			 $stmt = $db->query("SELECT id_user FROM users WHERE mail =  '$mail' ");	

			  //szukanie użytkownika w bazie
		      foreach($stmt as $row)
		      {
		          $id_user=$row['id_user'];
		      }

		      $stmt->closeCursor();


		     //jeżeli istnieje użytkownik dodaj do wydarzenia jego id
		     if (isset($id_user))
		     	{

		      		$db->exec("INSERT INTO reminders (nazwa, data, czas, user_id) VALUES ('$this->nazwa', '$this->data', '$this->czas', '$id_user')");
					$this->msg->addInfo('Dodano przypomnienie do bazy użytkownika: ' .$mail ); 

				} 

				else {
					//tworzenie nowego użytkownika w bazie i dodanie wydarzenia
					$db->exec("INSERT INTO users (mail) VALUES ('$mail')");
		      		$id_user = $db->lastInsertId();
		      		$db->exec("INSERT INTO reminders (nazwa, data, czas, user_id) VALUES ('$this->nazwa', '$this->data', '$this->czas', '$id_user')");
		  			$this->msg->addInfo('Dodano przypomnienie oraz utworzono nowego użytkownika: ' .$mail );
		  		}
					

			$this->generateLoginView();

		}

		public function sql_rejestracja(){


			$this->getParamsRejestracja();

			$password = $this->hasloR;
					
     		$hash = password_hash($password, PASSWORD_DEFAULT);
     		
			$db = dbConn::getConnection();
			$db->exec("INSERT INTO users (Imie, Mail, Haslo) VALUES ('$this->imieR', '$this->mailR', '$hash')");
			
			$this->msg->addInfo('Dodano użytkownika do bazy danych '); 

			$this->generateLoginView();
			    
		}


		public function sql_update(){


			$this->getParamsUpdate();

			$db = dbConn::getConnection();

			//$cos = $this->nazwa;
			if (!empty($this->nazwa)){
				$db->exec("UPDATE reminders SET Nazwa= '$this->nazwa' WHERE id_przyp='$this->id' ");
			}

			//$cos = $this->data;
			if (!empty($this->data)){
				$db->exec("UPDATE reminders SET Data= '$this->data' WHERE id_przyp='$this->id' ");
			}

			//$cos = $this->czas;
			if (!empty($this->czas)){
				$db->exec("UPDATE reminders SET Czas= '$this->czas' WHERE id_przyp='$this->id' ");
			}

			//$cos = $this->miejsce;
			if (!empty($this->miejsce)){
				$db->exec("UPDATE reminders SET Miejsce= '$this->miejsce' WHERE id_przyp='$this->id' ");
				echo "kapa";
			}

			if (!empty($this->opis)){
				$db->exec("UPDATE reminders SET Opis= '$this->opis' WHERE id_przyp='$this->id' ");
			}
			
			$this->generateUserView();
			    
		}

		public function sql_insertPassword($mail, $password){

			$db = dbConn::getConnection();

			$hash = password_hash($password, PASSWORD_DEFAULT);

			$db->exec("UPDATE users SET (Haslo = '$hash') WHERE (Mail = '$mail')");
			
			$this->msg->addInfo('Dodano hasło do użytkownika '. $mail); 

			$this->generateLoginView();


		}

	        public function sql_login()
		    {
		    	$db = dbConn::getConnection();
		    	
		    	//blad polaczenia
		    	if (!$db) { 
				   $this->msg->addError('Błąd połączenia z bazą danych :( '); 
					$this->generateErrorView();
					die();
		    	}

				//pobranie parametrow
				$this->getParamsLogin();
				
				$pass = $this->hasloL;
				$mail = $this->mailL;

				$this->usr_name = $mail;

				$sth = $db->query("SELECT haslo FROM users WHERE mail =  '$mail' ");	

				$cols = $sth->columnCount(); 

				if ($cols<1)
				{
					$this->sql_insertPassword($mail, $pass);
				}

		     	 $sth->closeCursor();

		       try
		       {
		          $stmt = $db->prepare("SELECT * FROM users WHERE mail=:mail LIMIT 1");
		          $stmt->execute(array(':mail'=>$mail));
		          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
		          if($stmt->rowCount() > 0)
		          {
		             if(password_verify($pass, $userRow['haslo']))
		             {
		                $_SESSION['user_session'] = $userRow['id_user'];
		                
		                $id_uzytkownika =  $userRow['id_user'];
		                
		                //echo $id_uzytkownika;

		                
		               	  $stmt = $db->prepare("SELECT * FROM reminders WHERE user_id = '$id_uzytkownika'");
				          $stmt->execute(array());


				          $this->res =$stmt->fetchAll(PDO::FETCH_ASSOC);
						
				          $this->generateUserView();
				                      
		             }
		             else
		             {
		             	
		             	$this->msg->addError('Błąd logowania '); 
		               $this->generateErrorView();

		               return(0);
		             }
		          }
		       }

		       catch(PDOException $e)
		       {
		           $e->getMessage();
		       }

			}
		
	/**
	 * Wygenerowanie widoku domyślnego
	 */

	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('form',$this->form);
		$smarty->assign('page_title','Przypomnij.mi');

		$smarty->display($conf->root_path.'/app/przyp/MainView.tpl');
	}

	/**
	 * Wygenerowanie widoku użytkownika (po zalogowaniu)
	 */

	public function generateUserView(){
		global $conf; 
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		$smarty->assign('usr_name',$this->usr_name);
		$smarty->assign('res',$this->res); 
		$smarty->assign('form',$this->form);
		$smarty->assign('page_title','Przypomnij.mi - Widok użytkownika');
		$smarty->display($conf->root_path.'/app/przyp/UserView.tpl');

		}


	/**
	 * Wygenerowanie widoku po dodaniu przypomnienia (możliwość zalogowania)
	 */
		public function generateLoginView(){

		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		$smarty->assign('msg',$this->msg);
		$smarty->assign('page_title','Przypomnij.mi - dodano przypomnienie');
		$smarty->assign('form',$this->form);
		//$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/przyp/loginView.tpl');

		}

	/**
	 * Wygenerowanie widoku z błędami (możliwość zalogowania)
	 */

		public function generateErrorView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);		

		$smarty->assign('form',$this->form);
		$smarty->assign('msg',$this->msg);
		$smarty->assign('page_title','Przypomnij.mi - błąd DB');

		$smarty->display($conf->root_path.'/app/przyp/errorView.tpl');
	}

}
