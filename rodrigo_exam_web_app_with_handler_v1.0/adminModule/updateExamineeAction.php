<?php 
	include_once('AdminClassHandler.php');
	
	if(isset($_GET['btn-submit-update'])) {
		$id = isset($_GET['id']) ? $_GET['id']: false;
		$fname = isset($_GET['fname']) ? $_GET['fname']: false;
		$lname = isset($_GET['lname']) ? $_GET['lname']: false;
		$gender = isset($_GET['gender']) ? $_GET['gender']: false;
		$email = isset($_GET['email']) ? $_GET['email']: false;
		$password = isset($_GET['password']) ? $_GET['password']: false;

		if($id !== false && $fname !== false && $lname !== false && $gender !== false
			&& $email !== false && $password !== false) {
			$obj = new AdminClassHandler();
			if($obj->testPasswordIsTaken($password)) {
				echo "<script type = 'text/javascript'>
						alert('The Password is already taken of other user');
					  </script>";
					  $user = $obj->testGetAllExamineeById($id);
			} else {
				$result = $obj->testUpdateExaminee($id, $fname, $lname, $gender, $email, $password);
				if($result) {
					echo "<script type = 'text/javascript'>
							alert('Successfully Update');
							document.location.href = 'examineeTable.php';
						  </script>";
				} else {
					echo "<script type = 'text/javascript'>
							alert('Unsuccessfully Update');
							document.location.href = 'examineeTable.php';
						  </script>";
				}
			}
		} else {
			echo "<script type = 'text/javascript'>
					alert('There\'s something not set, please double check');
					document.location.href = 'updateQuestionAction.php';
				  </script>";
		}
	} else {
		@$id = $_GET['id'];

		$obj = new AdminClassHandler();
		$user = $obj->testGetAllExamineeById($id);
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
	 				<td>User id: <?= $user['user_id']; ?></td>
	 				<td><input type = 'hidden' name = 'id' value = '<?= $user['user_id']; ?>'></td>
	 			</tr>
	 			<tr>
	 				<td>First Name:</td>
	 				<td><input type = 'text' id = 'fname' name = 'fname' value = '<?= $user['fname']; ?>'></td>
	 			</tr>
	 			<tr>
	 				<td>Last name:</td>
	 				<td><input type = 'text' id = 'lname' name = 'lname' value = '<?= $user['lname']; ?>'></td>	 				
	 			</tr>
	 			<tr>
	 				<td>Gender:</td>
	 				<td>
	 					<?php 
	 						if($user['gender'] == 'male') {
	 							echo "Male: <input type = 'radio' name = 'gender' value = 'male' checked />
	 									Female: <input type = 'radio' name = 'gender' value = 'female' />";
	 						} else {
	 							echo "Male: <input type = 'radio' name = 'gender' value = 'male' />
	 									Female: <input type = 'radio' name = 'gender' value = 'female' checked />";
	 						}
	 					 ?>
	 				</td>
	 			</tr>
	 			<tr>
	 				<td>Email address:</td>
	 				<td><input type = 'email' id = 'email' name = 'email' value = '<?= $user['email']; ?>'></td>
	 			</tr>
	 			<tr>
	 				<td>Password:</td>
	 				<td><input type = 'password' id = 'password' name = 'password' value = '<?= $user['password']; ?>'></td>
	 			</tr>
	 		</table>
	 		 <br/>
	 		 <input type = 'submit' value = 'DONE' name = 'btn-submit-update' class = 'btn btn-primary'>
	 		 <a href="examineeTable.php" class = 'btn'>Back</a>
	 	</form>
	 <script src = '../js/jquery-1.8.3.js'></script>
	 <script src = '../js/update_examinee_js.js'></script>
	 </body>
 </html>