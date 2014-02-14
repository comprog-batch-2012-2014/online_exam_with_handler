<?php 
	include_once('ExamineeClassHandler.php');

	if ($_GET['permission'] == true) {
		$obj = new ExamineeClassHandler();

		$result = $obj->testLogOut();

		if ($result !== false) {
			header('Location: ../outsiderModule/registrationForm.php');
		}
	} else {
		header('Location: Location:');
	}
 ?>