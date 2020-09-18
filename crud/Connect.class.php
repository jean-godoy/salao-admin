<?php 


class Connect{

	private static $DB = "182tattoo";
	private static $Host = "localhost";
	private static $User = "root";
	private static $Pass = "";
	private static $Conn = NULL;

	public static function Conn(){

		try{
			if(self::$Conn == NULL){

				$dns = "mysql:dbname=".self::$DB.";host=".self::$Host;
				$options = [PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8'];

				self::$Conn = new PDO($dns, self::$User, self::$Pass);
				// echo "conecxao com DB ok";
			}

			self::$Conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return self::$Conn;

		}catch(PDOException $e){
			PHPError($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
			die();
		}
	}

	public function getDados(){
		echo '<pre>----------debug------------ <br>';
		print_r($this);
		echo '</pre>';
	}

	public static function getConn(){
		return self::Conn();
	}


}







 ?>