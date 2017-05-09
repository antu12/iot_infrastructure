<?php
	function taas(){
		$result = array('service_id' => 'taas',
					 'token' => 'abcdef123',
					 'value' => '32c',
					 'expiration' => '3600');
			return $result;
		}

		echo json_encode(taas());

?>