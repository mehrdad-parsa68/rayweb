<?php
session_start();
ob_start();

##### CONNECT TO DB ######
define('HOST_NAME','localhost');
define('USER_NAME','rayweb');
define('PASSWORD','rayweb1393');
define('DB_NAME','rayweb');

$connection = mysqli_connect(HOST_NAME,USER_NAME,PASSWORD,DB_NAME) or die('CONNECTION FAILED!!!');
mysqli_set_charset($connection,'utf8');
##########################



include('jdf.php');
include('SendSMS-parsgreen.php');
include('GetCredit.php');
?>