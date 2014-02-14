<?php
	include_once('OutsiderClassHandler.php');

	$fname = (isset($_POST['fname']) ? $_POST['fname']: "");
	$lname = (isset($_POST['lname']) ? $_POST['lname']: "");
	$gender = (isset($_POST['gender']) ? $_POST['gender']: "");
	$emailadd = (isset($_POST['emailadd']) ? $_POST['emailadd']: "");
	$password = (isset($_POST['password']) ? $_POST['password']: "");
	$con_password = (isset($_POST['con_password']) ? $_POST['con_password']: "");

	if($fname == ""){
		echo json_encode(
			array(
				'result'=> 'Your First Name is Invalid',
				'valid'=> false
				)
			);
	}elseif ($lname == "") {
		echo json_encode(
			array(
				'result'=> 'Your Last Name is Invalid',
				'valid'=> false
				)
			);	
	}elseif ($emailadd == "") {
		echo json_encode(
			array(
				'result'=> 'Your Emailadd is Invalid',
				'valid'=> false
				)
			);
	}elseif ($password == "") {
		echo json_encode(
			array(
				'result'=> 'Your Password is Invalid',
				'valid'=> false
				)
			);
	}elseif ($con_password == "") {
		echo json_encode(
			array(
				'result'=> 'Your Confirm Password is Invalid',
				'valid'=> false
				)
			);
	}elseif (strlen($con_password) < 8 || strlen($password) < 8) {
		echo json_encode(
			array(
				'result'=> 'Your password and confirm password must be atleast 8 characters',
				'valid'=> false
				)
			);
	}elseif($con_password != $password){
		echo json_encode(
			array(
				'result'=> 'Your Password and Confirm Password is not match',
				'valid'=> false
				)
			);
	}else{
		echo json_encode(
			array(
				'result'=> 'You successfully register',
				'valid'=> true
				)
			);
	}

 ?>