<?php
if(isset($_GET["token"]) && isset($_GET["service_id"])){

	$token = $_GET["token"];
	$service_id = $_GET["service_id"];

	// require 'db.php';
	// require 'config.php';
$result = "unknown service";
	if($service_id == "wfaas"){
		$result = '{
			  "service_id": "wfaas",
			  "token": "acdef123",
			  "value": {"direction": "north", "speed": "25mph"},
			  "expiration": 3600
			}';
	}

	
	 echo json_encode($result);
}else{

	echo json_encode("invalid call");
}
?>