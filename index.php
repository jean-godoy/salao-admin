<?php 
session_start();
require ('./config.php');


spl_autoload_register(function($class){

	if(file_exists('controller/'.$class.'.php')){

		require 'controller/'.$class.'.php';
	}

	elseif(file_exists('models/'.$class.'.php')){
		require 'models/'.$class.'.php';
	}

	elseif(file_exists('core/'.$class.'.php')){
		require 'core/'.$class.'.php';

	}elseif(file_exists('factory/'.$class.'.php')){
		require 'factory/'.$class.'.php';
	}
});


$core = new Core();
$core->run();


?>
