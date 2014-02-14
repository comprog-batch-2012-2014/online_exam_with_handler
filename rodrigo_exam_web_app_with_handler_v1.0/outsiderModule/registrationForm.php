<!--  DOCTYPE html -->
<html>
	<head>
		<title>Registration Form</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<style type="text/css">
			table, caption{
				font-size: 24px;
				margin: auto;
			}

			input{
				width: 220px;
			}
		</style>
	</head>
	<body>
		<form method = 'POST' action = 'register.php'>
			<table class = 'table span3'>
				<caption>Registration Form</caption>
				<tr>
					<td><span id = 'xfname'></span>First name:<input type = 'text' name = 'fname' id = 'fname' /> </td>
					<td><span id = 'xlname'></span>Last name:<input type = 'text' name = 'lname' id = 'lname' /></td>
				</tr>
				<tr>
					<td><span id = 'xemail'></span>Emailadd:<input type = 'email' name = 'email' id = 'emailadd' /></td>
					<td><span id = 'xgender'></span>
						Gender:
						Male<input type = 'radio' name = 'btn-radio' value = 'male' checked/>
						Female<input type = 'radio' name = 'btn-radio' value = 'female' />
					</td>
				</tr>
				<tr>
					<td><span id = 'xpassword'></span>Password:<input type = 'password' name = 'password' id = 'password' /></td>
					<td><span id = 'xcon-pass'></span>Confirm Password:<input type = 'password' name = 'con-password' id = 'con-password' /></td>
				</tr>
				<tr>
					<td><input type = 'submit' value = 'Submit' name = 'btn-submit-form' class = 'btn' id = 'submit' /><input type = 'reset' value = 'Reset' class = 'btn' id = 'reset' /></td>
					<td><a href="../examineeModule/login.php" class = 'btn btn-primary'>Log in</a></td>
				</tr>
			</table>
		</form>
		<script src = '../js/jquery-1.8.3.js'></script>
		<script src = '../js/regForm_js.js'></script>
	</body>
</html>