<?php
if(isset($_GET["token"]) && isset($_GET["service_id"])){

	$token = $_GET["token"];
	$service_id = $_GET["service_id"];

	// require 'db.php';
	// require 'config.php';
$result = "unknown service";
	if($service_id == "taas"){
		$result = '{
			  "service_id": "taas",
			  "token": "acdef123",
			  "value": "32c",
			  "expiration": 3600
			}';
	}else if ($service_id == "hmaas"){
		
	}

	
	 echo json_encode($result);
}else{

	echo json_encode("invalid call");
}
?>