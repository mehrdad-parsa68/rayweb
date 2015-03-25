<?php

	error_reporting(E_ALL);
	ini_set('display_errors','1');
	
	
	define('HOST_NAME','localhost');
	define('USER_NAME','rayweb');
	define('PASSWORD','Rayweb1393');
	define('DB_NAME','rayweb');
	
	
	
	$connection = mysqli_connect(HOST_NAME,USER_NAME,PASSWORD,DB_NAME) or die('CONNECTION FAILED!!!');
	mysqli_set_charset($connection,'utf8');
	
	
	$string = file_get_contents("http://www.zoomit.ir/");
	libxml_use_internal_errors(true);
	$dom = new DOMDocument();
	$dom->loadHTML($string);
	libxml_use_internal_errors(false);
	
	$query = '//h3[@class="catItemTitle"]//a';
	$xpath = new DOMXpath($dom);
	$result = $xpath->query($query);
	if($result->length > 0) {
		$href =  $result->item(0)->getAttribute('href');
		$title =  $result->item(0)->nodeValue;
	}
	
	$link = "http://www.zoomit.ir$href";
	$description = file_get_contents($link);
	
	
	libxml_use_internal_errors(true);
	$dom1 = new DOMDocument();
	$dom1->loadHTML($description);
	libxml_use_internal_errors(false);
	
	$query1 = '//div[@class="itemFullText"]';
	$xpath1 = new DOMXpath($dom1);
	$result1 = $xpath1->query($query1);
	if($result1->length > 0) {
		$khorooji = $result1->item(0)->nodeValue;
		$khorooji = str_replace("\n",'</p><p>',$khorooji);
		$khorooji = str_replace("<p></p>",' ',$khorooji);
	}
	
	$query = "INSERT INTO `news`(`id`, `title`, `description` , `date`) VALUES ('','$title','$khorooji',NOW())";
	mysqli_query($connection,$query);