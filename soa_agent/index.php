<?php 
include '../httpPost.php';
$url = "https://localhost/iot_infrastructure/main/";
$json_input_data=json_decode(file_get_contents('php://input'),TRUE);

// print_r( $json_input_data);

if (file_exists($json_input_data['service_id'].'.txt')) {
	$myfile = fopen($json_input_data['service_id'].'.txt', "r") or die("Unable to open file!");
	echo fread($myfile,filesize($json_input_data['service_id'].'.txt'));
	fclose($myfile);

}else{
	$url.=$json_input_data['service_id'].'/index.php';
	$myfile = fopen($json_input_data['service_id'].'.txt', "w") or die("Unable to open file!");
	$txt = httpPost(json_encode($json_input_data),$url);
	fwrite($myfile, $txt);
	fclose($myfile);
	echo $txt;
}

?>