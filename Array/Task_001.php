<?php 
	# Normal Array
	$data = ['James Bond', '0998123112','45'];
	echo '<pre>';
	print_r($data)

	# Associative Array
	$data = ['name'=> 'John Cena', 'country'=> 'USA', 'state'=>'NY','age'=>45];
	foreach($data as $key => $value){
		echo $key.'<br/>';
	}

	var_dump($data);
 ?>