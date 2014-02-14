<?php 
	include_once('OutsiderClassHandler.php');

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$gender = $_POST['btn-radio'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	if (!isset($_POST['btn-submit-form'])) {
		header('Location: registrationForm.php');
	} else {
		$obj = new OutsiderClassHandler();
		$result = $obj->testRegister($fname, $lname, $gender, $email, $password);
		if ($result) {
			echo "<script type = 'text/javascript'>
					alert('You successfully register');
					document.location.href = 'registrationForm.php';
				  </script>";
		} else {
			echo "<script type = 'text/javascript'>
					document.location.href = 'registrationForm.php';
				  </script>";
		}
	}
 ?>