<?php

define('API_KEY','hnc7sl5zmi');
$address = "http://freedomainapi.com?key=".API_KEY."&domain=";
if(isset($_POST['domain'])){
	$extension = $_POST['extension'];
	$domain = $_POST['domain'];
	}
//$domain = "rayweb.co";
$url = $address.$domain.'.'.$extension;

$channel = curl_init();
curl_setopt($channel, CURLOPT_URL, $url);
curl_setopt($channel, CURLOPT_HEADER, false);
curl_setopt($channel, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($channel);
$decodedResult = json_decode($result);

curl_close($channel);

//var_dump($decodedResult);
if($decodedResult->status = 'success'){
	//echo $decodedResult->domain;
	if($decodedResult->available){
		$decodedResult->available = 'موجود است';
		}else{
		$decodedResult->available = 'موجود نیست';
		}
	echo 'دامنه : '.$decodedResult->domain.' = '.$decodedResult->available.'<br>';	
}

?>