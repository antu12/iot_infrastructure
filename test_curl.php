<?php 
	$json_input_data=json_decode(file_get_contents('php://input'),TRUE);

	print_r( $json_input_data);

	if (strcmp($json_input_data['service_id'], "aqaas") == 0) {
		echo "Service Id: " . $json_input_data['service_id']."<br>";
		echo "Token:  ".$json_input_data['token']."<br>";
		echo "Value of NO2: ".$json_input_data['value']['NO2']."<br>";
		echo "Value of SO2: ".$json_input_data['value']['SO2']."<br>";
		echo "Value of O2: ".$json_input_data['value']['O2']."<br>";
		echo "Expiration Time: ".$json_input_data['expiration']."<br>";
	}
	elseif (strcmp($json_input_data['service_id'], "haas") == 0) {
		echo "Service Id: " . $json_input_data['service_id']."<br>";
		echo "Token:  ".$json_input_data['token']."<br>";
		echo "Value: ".$json_input_data['value']."<br>";
		echo "Expiration Time: ".$json_input_data['expiration']."<br>";
	}
	elseif (strcmp($json_input_data['service_id'], "taas") == 0) {
		echo "Service Id: " . $json_input_data['service_id']."<br>";
		echo "Token:  ".$json_input_data['token']."<br>";
		echo "Value: ".$json_input_data['value']."<br>";
		echo "Expiration Time: ".$json_input_data['expiration']."<br>";
	}
	elseif (strcmp($json_input_data['service_id'], "waas") == 0) {
		echo "Service Id: " . $json_input_data['service_id']."<br>";
		echo "Token:  ".$json_input_data['token']."<br>";
		echo "Default for ". $json_input_data['service_elements'][0] .": ".$json_input_data['default'][$json_input_data['service_elements'][0]]."<br>";
		echo "Default for ". $json_input_data['service_elements'][1] .": ".$json_input_data['default'][$json_input_data['service_elements'][1]]."<br>";
		echo "Default for ". $json_input_data['service_elements'][2] .": ".$json_input_data['default'][$json_input_data['service_elements'][2]]."<br>";
		echo "Default for ". $json_input_data['service_elements'][3] .": ".$json_input_data['default'][$json_input_data['service_elements'][3]]."<br>";
		echo "Expiration Time: ".$json_input_data['expiration']."<br>";
	}
	elseif (strcmp($json_input_data['service_id'], "wfaas") == 0) {
		echo "Service Id: " . $json_input_data['service_id']."<br>";
		echo "Token:  ".$json_input_data['token']."<br>";
		echo "Value of Direction: ".$json_input_data['value']['direction']."<br>";
		echo "Value of Speed: ".$json_input_data['value']['speed']."<br>";
		echo "Expiration Time: ".$json_input_data['expiration']."<br>";
	}
	

 ?>