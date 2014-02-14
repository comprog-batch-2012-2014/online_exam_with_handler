<html>
	<head>
		<title>Admin Page</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<style type="text/css">
			a{
				width: 40px;
				height: 18px;
			}

			table{
				font-size: 15px;
			}

			caption{
				font-size: 41px;
				letter-spacing: 11px;

			}

			.btn-for-create{
				width: 150;
				float: right;
				margin: 12px 20px 0 0;
			}
		</style>
	</head>
	<body>
		<a href="createExamineeAction.php" class = 'btn btn-primary btn-for-create'>Create User</a>
		<?php 
			include_once('AdminClassHandler.php');

			$obj = new AdminClassHandler();
			$users = $obj->testGetAllExaminee();

			if($users === false) {
				echo "No Data";
			} else {
				echo "<table class = 'table table-striped'>
						<caption>Users Table</caption>
						<th>User id</th>
						<th>Name</th>
						<th>Surname</th>
						<th>Gender</th>
						<th>Email address</th>
						<th>Password</th>
						<th>Actions</th>";
				foreach($users as $user) {
					echo "<tr>
							<td>".$user['user_id']."</td>
							<td>".$user['fname']."</td>
							<td>".$user['lname']."</td>
							<td>".$user['gender']."</td>
							<td>".$user['email']."</td>
							<td>".$user['password']."</td>
							<td>
								<a href = 'updateExamineeAction.php?id=".$user['user_id']."' class = 'btn btn-success'>Update</a>
								<a href = 'deleteExamineeAction.php?id=".$user['user_id']."' class = 'btn btn-danger' onclick = \"return confirm('Are you sure do you want to delete?')\">Delete</a>
							</td>
						 </tr>";
				}
				echo "</table>";
			}

		 ?>
		 <a href="admin.php" class = 'btn'>Back</a>
		<script src = '../js/jquery-1.8.3.js'></script>
	</body>
</html>