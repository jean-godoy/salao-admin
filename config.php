<?php 

require 'enviroment.php';

$config = array();

if(ENVIROMENT == 'denvelopment'){
	define("BASE_URL", "http://localhost/mvc/");
	$config['dbname'] = 'brothers_style';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}else{
	define("BASE_URL", "http://mvc.com");
	$config['dbname'] = 'brothers_style';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

global $db;

try {
	
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
} catch (PDOException $e) {
	echo "ERRO: ".$e->getMesage();
	exit;
}

 ?>