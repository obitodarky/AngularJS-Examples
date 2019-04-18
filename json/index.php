<?php 

	$json_data = file_get_contents('json_data.json');
	$decoded_json_data = json_decode($json_data);

	foreach ($decoded_json_data as $key) {
		echo $key->name.'<br> ';
		echo $key->price;
	}

