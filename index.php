<?php
	session_start();


	spl_autoload_register(function($class_name){
		include str_replace("\\", DIRECTORY_SEPARATOR,  $class_name) .".php";
	});





	new \system\Routes;