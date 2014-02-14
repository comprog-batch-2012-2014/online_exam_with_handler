<html>
	<head>
		<title>Admin Page</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<style type="text/css">
			div {
				margin: auto;
			}

			.eye-left {
				margin: 25px auto;
				width: 250px;
				height: 250px;
				background: radial-gradient(green, white, blue);
				border-radius: 175px;
				text-align: center;
				float: left;
				margin-left: 26%;
			}

			.eye-right {
				margin: 25px auto;
				width: 250px;
				height: 250px;
				background: radial-gradient(green, white, blue);
				border-radius: 175px;
				text-align: center;
				float: right;
				margin-right: 22%;
			}

			.eye-left > a > p {
				margin-top: 115px;
				font-size: 24;
				color: rgb(11, 11, 10);
			}

			.eye-right > a > p {
				margin-top: 115px;
				font-size: 24;
				color: rgb(11, 11, 10);
			}

			.logOut {
				margin-left: 49%;
			}

			.teeth {
				width: 492px;
				height: 166px;
				background: linear-gradient(45deg, blue, white);
				margin: 45px 32.5%;
				border-radius: 50px;
			}
		</style>
	</head>
	<body>
		<div>
			<div class = 'eye-left'>
				<a href="examineeTable.php"><p>View Users Table</p></a>
			</div>
			<div class = 'eye-right'>
				<a href="questionsTable.php"><p>View Questions Table</p></a>
			</div>

			<a href="../outsiderModule/registrationForm.php" class = 'btn btn-warning logOut'>Log out</a>
			<div class = 'teeth'>
				<p style = 'font-size: 60; font-family: tahoma; letter-spacing: 17; padding: 64 28; color: rgb(79, 109, 94);'>Welcome !</p>
			</div>
		</div>
		<script src = '../js/jquery-1.8.3.js'></script>
	</body>
</html>