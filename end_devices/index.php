<?php 
	
	//Services required
	$services = array('aqaas', 'haas','taas', 'waas','wfaas' );
	$simple_services = array('aqaas', 'haas','taas','wfaas' );
	$complex_services = 'waas';

	//Service structure
	$simple = array('service_id','token','value','expiration');
	$complex = array('service_id', 'service_elements', 'token', 'default', 'expiration');

	//Check Service
	$service = $services[rand(0, sizeof($services)-1)]
	if (in_array($service, $simple_services)) {
		
	}else{

	}
	$reqService = array('service_id' => );
	// echo $reqService['service_id'];
	$req = json_encode($reqService);
	echo $req;

 ?>