<?php
	function aqaas(){
		$result = array('service_id' => "aqaas",
					 'token' => "abcdef123",
					 'value' => array('NO2' => '0.50ppb',
					  					'SO2' => '0.37ppb',
					  					'O2' => '0.48ppb'),
					 'expiration' => '3600');
		return $result;
	}

	echo json_encode(aqaas());

?>