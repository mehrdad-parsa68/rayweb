<?php

	error_reporting(E_ALL);
	ini_set('display_errors','1');	
	
	define('HOST_NAME','localhost');
	define('USER_NAME','rayweb');
	define('PASSWORD','Rayweb1393');
	define('DB_NAME','rayweb');
	
	$connection = mysqli_connect(HOST_NAME,USER_NAME,PASSWORD,DB_NAME) or die('CONNECTION FAILED!!!');
	mysqli_set_charset($connection,'utf8');
	
	$query = "INSERT INTO `news`(`id`, `title`, `description`,`date`) VALUES ('','$_POST[title]','$_POST[description]','".time()."')";
	mysqli_query($connection,$query);

	