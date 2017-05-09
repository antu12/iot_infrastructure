
<?php
	function wfaas(){
		$result = array('service_id' => "wfaas",
					 'token' => "abcdef123",
					 'value' => array('direction' => 'north',
					  					'speed' => '25mph'),
					 'expiration' => '3600');
			return $result;
	}

	echo json_encode(wfaas());
?>

