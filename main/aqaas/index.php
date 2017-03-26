<?php
if(isset($_GET["token"]) && isset($_GET["service_id"])){

	$token = $_GET["token"];
	$service_id = $_GET["service_id"];

	// require 'db.php';
	// require 'config.php';
$result = "unknown service";
	if($service_id == "aqaas"){
		$result = '{
			  "service_id": "aqaas",
			  "token": "acdef123",
			  "value": { "NO2": "0.50ppb", "SO2": "0.37ppb", "O2": "0.48ppb" },
			  "expiration": 3600
			}';
	}

	
	 echo json_encode($result);
}else{

	echo json_encode("invalid call");
}
?>