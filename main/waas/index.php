<?php
function waas(){
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
	return $result;
}
?>