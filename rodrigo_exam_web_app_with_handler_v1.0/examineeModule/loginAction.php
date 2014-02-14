<?php 
	include_once('ExamineeClassHandler.php');

	$email = $_POST['email'];
	$password = $_POST['password'];
	$position = $_POST['position'];

	if (isset($_POST['submit-btn-login'])) {
		$obj = new ExamineeClassHandler();

		$result = $obj->testLogIn($email, $password, $position);
		if ($result) {
			$_SESSION = array('only_path'=> $_POST['submit-btn-login']);
			if ($position == "examinee") {
				session_start();
				$_SESSION = array('fname'=>$obj->testGetName($password)['fname'], 'lname'=>$obj->testGetName($password)['lname']);
				echo "<script type = 'text/javascript'>
						alert('You successfully login, get ready for the quiz');
						document.location.href = 'question.php';
					  </script>";
			} else if ($position == "admin"){
				echo "<script type = 'text/javascript'>
						alert('You successfully login');
						document.location.href = '../adminModule/admin.php';
					  </script>";
			} else {
				echo "<script type = 'text/javascript'>
						document.location.href = 'registrationForm.php';
					  </script>";
			}
		} else {
			echo "<script type = 'text/javascript'>
					alert('Unsuccessfully login, check your account');
					document.location.href = 'login.php';
				  </script>";
		}
	} else {
		header('Location: Location: ');
	}

 ?>