<?php
if(isset($_GET["token"]) && isset($_GET["service_id"])){

	$token = $_GET["token"];
	$service_id = $_GET["service_id"];

	// require 'db.php';
	// require 'config.php';
$result = "unknown service";
	if($service_id == "waas"){
		$result = '  {
		  "service_id": "waas",
		  "service_elements": [
		    "taas",
		    "haas",
		    "waas",
		    "aqaas"
		  ],
		  "token": "acdef123",
		  "default": {
		    "taas": "http://40.77.60.97/taas",
		    "haas": "http://40.77.60.97/haas",
		    "wfaas": "http://40.77.60.97/waas",
		    "aaas": "http://40.77.60.97/aaas"
		  },
		  "expiration": 3600
	}';
	}else if ($service_id == "hmaas"){
		
	}

	
	 echo json_encode($result);
}else{

	echo json_encode("invalid call");
}
?>