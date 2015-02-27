<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
ob_start();

##### CONNECT TO DB ######
define('HOST_NAME','localhost');
//define('USER_NAME','rayweb');
//define('PASSWORD','Rayweb1393');

define('USER_NAME','root');
define('PASSWORD','');

define('DB_NAME','rayweb');

$connection = mysqli_connect(HOST_NAME,USER_NAME,PASSWORD,DB_NAME) or die('CONNECTION FAILED!!!');
mysqli_set_charset($connection,'utf8');
##########################
include('class/class.hire.php');
include('class/class.seo.php');

?>