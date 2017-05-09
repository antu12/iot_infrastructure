<?php 
	include '../httpPost.php';

	$url = "https://localhost/iot_infrastructure/soa_agent/index.php";
	//Services required
	$services = array('aqaas', 'haas','taas', 'waas','wfaas' );
	$simple_services = array('aqaas', 'haas','taas','wfaas' );
	$complex_services = 'waas';
	$req;

	//Service structure
	$simple = array('token','value','expiration');
	$complex = array('service_elements', 'token', 'default', 'expiration');

	//Check Service
	$service = $services[rand(0, sizeof($services)-1)];
	if (in_array($service, $simple_services)) {
		$reqService = array('service_id' => $service, 'components' => $simple);
		$req = json_encode($reqService);
	}else{
		$reqService = array('service_id' => $service, 'components' => $complex);
		$req = json_encode($reqService);
	}
	
	
	echo "REQ:".$req."<br>";


	
	echo "RES:".httpPost($req,$url);

	

 ?>