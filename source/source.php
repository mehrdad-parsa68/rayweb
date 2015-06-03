<?php
	require('../core/core.php');

	$query="SELECT * FROM price_list ";
	$result = mysqli_query($connection,$query);
	
	$arr = array();
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$arr[] = $row;	
		}
	}
	
	# JSON-encode the response
	$json_response = json_encode($arr);
	
	// # Return the response
	echo $json_response;