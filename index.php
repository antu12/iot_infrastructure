<?php 
	include "main/aqaas/index.php";
	include "main/haas/index.php";
	include "main/taas/index.php";
	include "main/waas/index.php";
	include "main/wfaas/index.php";

	$json = json_encode(wfaas());
	$url = "https://localhost/iot_infrastructure/curl.php";
	function httpPost($data_string, $url)
	{

		// Open connection
		$ch = curl_init();
		// Set the url, number of POST vars, POST data
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    		'Content-Type: application/json',
    		'Content-Length: '. strlen($data_string)));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		
		// Execute post
		$result = curl_exec($ch);
		// Close connection
		curl_close($ch);
		return $result;
	}

	echo httpPost($json,$url);



 ?>
