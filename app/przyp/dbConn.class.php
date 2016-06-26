<?php
 
require_once $conf->root_path.'/app/przyp/PrzypCtrl.class.php';
require_once $conf->root_path.'/lib/messages.class.php';

//db connection class using singleton pattern
class dbConn{
 
//variable to hold connection object.
protected static $db;
private $msg;
//private construct - class cannot be instatiated externally.
private function __construct() {
 
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "myDB";
			$this->msg = new Messages();

try {
// assign PDO object to db variable
self::$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
self::$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
// echo "Connected successfully"; 

}

catch (PDOException $e) {
//Output error - would normally log this to error file rather than output to user.
//echo "Connection Error: " . $e->getMessage();
$this->msg->addError ($e->getMessage());
}
 
}
 
// get connection function. Static method - accessible without instantiation
public static function getConnection() {
 
//Guarantees single instance, if no connection object exists then create one.
if (!self::$db) {
//new connection object.
new dbConn();
}
else {
	new dbConn();
}
 
//return connection.
return self::$db;
}
 
}//end class
 

?>