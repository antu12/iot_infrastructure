<?php
function waas(){
		$result = array('service_id' => 'waas',
				'service_elements' => array('taas',
											'haas',
											'waas',
											'aqaas'),
				'token' => 'abcdef123',
				'default' => array('taas' => 'http://40.77.60.97/taas',
									'haas' => 'http://40.77.60.97/haas',
									'wfaas' => 'http://40.77.60.97/wfaas',
									'aqaas' => 'http://40.77.60.97/aqaas'),
				'expiration' => '3600');
	return $result;
}


?>
