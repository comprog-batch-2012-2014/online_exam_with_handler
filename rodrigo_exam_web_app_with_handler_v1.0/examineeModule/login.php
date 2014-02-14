<html>
	<head>
		<title>Log in</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<style type="text/css">
			form{
				font-size: 30px;
				width: 50%;
				margin: auto;
			}

			td{
				font-size: 18px;
			}
		</style>
	</head>
	<body>
		<form method = 'POST' action = 'loginAction.php'>
			<table class = 'table'>
				<tr>
					<td>
						Examinee: <input type = 'radio' name = 'position' value = 'examinee' checked/>
						Admin: <input type = 'radio' name = 'position' value = 'admin' />
					</td>
				</tr>
				<tr>
					<td>Emailadd: <input type = 'email' name = 'email' id = 'login-email'><span id = 'help_email'></span></td>
				</tr>
				<tr>
					<td>Password: <input type = 'password' name = 'password' / id = 'login-password'><span id = 'help_password'></span></td>
				</tr>
				<tr>
					<td>
						<input type = 'submit' value = 'SUBMIT' name = 'submit-btn-login' class = 'btn btn-primary'/>
						<a href="../outsiderModule/registrationForm.php" class = 'btn'>Back</a>
					</td>
				</tr>
			</table>
		</form>

		<script src = '../js/jquery-1.8.3.js'></script>
		<script src = '../js/js_for_login.js'></script>
	</body>
</html>