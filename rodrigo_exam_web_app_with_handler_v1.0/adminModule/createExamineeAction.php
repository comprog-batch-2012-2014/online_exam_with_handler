<?php 
	include_once('AdminClassHandler.php');
	
	if(isset($_GET['btn-submit-update'])) {
		$fname = isset($_GET['fname']) ? $_GET['fname']: false;
		$lname = isset($_GET['lname']) ? $_GET['lname']: false;
		$gender = isset($_GET['gender']) ? $_GET['gender']: false;
		$email = isset($_GET['email']) ? $_GET['email']: false;
		$password = isset($_GET['password']) ? $_GET['password']: false;

		if($fname !== false && $lname !== false && $gender !== false
			&& $email !== false && $password !== false) {
			$obj = new AdminClassHandler();
			if($obj->testPasswordIsTaken($password)) {
				echo "<script type = 'text/javascript'>
						alert('The Password is already taken of other user');
						document.location.href = 'updateUserAction.php?id=$id';
					  </script>";
			} else {
				$result = $obj->testCreateExaminee($fname, $lname, $gender, $email, $password);
				if($result) {
					echo "<script type = 'text/javascript'>
							alert('Successfully Create');
							document.location.href = 'examineeTable.php';
						  </script>";
				} else {
					echo "<script type = 'text/javascript'>
							alert('Unsuccessfully Create');
							document.location.href = 'examineeTable.php';
						  </script>";
				}
			}
		} else {
			echo "<script type = 'text/javascript'>
					alert('There\'s something not set, please double check');
					document.location.href = 'updateExamineeAction.php';
				  </script>";
		}
	}
 ?>

 <html>
	 <head>
	 	<title>Update Page</title>
	 	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	 </head>
	 <body>
	 	<form method = 'GET' action = '<?= $_SERVER['PHP_SELF']; ?>'>
	 		<table>
	 			<tr>
	 				<td>First Name:</td>
	 				<td><input type = 'text' id = 'fname' name = 'fname' /></td>
	 			</tr>
	 			<tr>
	 				<td>Last name:</td>
	 				<td><input type = 'text' id = 'lname' name = 'lname' /></td>	 				
	 			</tr>
	 			<tr>
	 				<td>Gender:</td>
	 				<td>
	 					Male: <input type = 'radio' name = 'gender' value = 'male' checked />
	 					Female: <input type = 'radio' name = 'gender' value = 'female' />
	 				</td>
	 			</tr>
	 			<tr>
	 				<td>Email address:</td>
	 				<td><input type = 'email' id = 'email' name = 'email' /></td>
	 			</tr>
	 			<tr>
	 				<td>Password:</td>
	 				<td><input type = 'password' id = 'password' name = 'password' /></td>
	 			</tr>
	 		</table>
	 		 <br/>
	 		 <input type = 'submit' value = 'DONE' name = 'btn-submit-update' class = 'btn btn-primary' />
	 		 <a href="examineeTable.php" class = 'btn'>Back</a>
	 	</form>
	 <script src = '../js/jquery-1.8.3.js'></script>
	 <script src = '../js/create_examinee_js.js'></script>
	 </body>
 </html>/