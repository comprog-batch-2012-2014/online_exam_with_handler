<?php 
	$config = array(
		'host'=> 'localhost',
		'user'=> 'root',
		'password'=> '',
		'database'=> 'rodrigo_exam_web_app'
		);

	$db = new mysqli(
		$config['host'],
		$config['user'],
		$config['password'],
		$config['database']
		);

 ?>