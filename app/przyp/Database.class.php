<?php
	require_once $conf->root_path.'/lib/messages.class.php';

	class dbConn{
		//SINGLETON-------------------------------------------------------
		private static $instance;
		public static function getInstance(){
			if(self::$instance == null) self::$instance = new dbConn();
			return self::$instance;
	    }
		//----------------------------------------------------------------
		
		private $msg;
		public $pdo;
		
		public function __construct(){
			//SINGLETON------------------------------------
			$this->msg = messages::getInstance();
			//---------------------------------------------
			$this->getConnection();
		}
		
		public function getConnection(){
			
			$mysql_host = 'localhost'; 
			$username = 'root';
			$password = '';
			$database = 'myDB';
			 
			try{
				$this->pdo = new PDO('mysql:host='.$mysql_host.';dbname='.$database, $username, $password );
				//echo 'Połączenie nawiązane!';
				$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}catch(PDOException $e){
				$this->msg->addError ($e->getMessage());
				//echo 'Problem z połączeniem!'.$e->getMessage();
				die();
			}
		}
	}
	
?>