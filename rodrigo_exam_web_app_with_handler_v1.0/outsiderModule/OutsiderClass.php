<?php 
	include_once('../config.php');
	class OutsiderClass {
		public static function register($fname, $lname, $gender, $emailadd, $password) {
			global $db;
			if (!self::checkIfExist($password)) {
				$query = "INSERT INTO user(fname, lname, gender, email, password, user_position) 
							VALUES('$fname', '$lname', '$gender', '$emailadd', sha1('$password'), 'examinee')";
				$result = $db->query($query);
				if ($result > 0) {
					return true;
				} else {
					return false;
				}
			} else {
				echo "<script type = 'text/javascript'>alert('Your password is already taken');</script>";
				return false;
			}
		}

		public static function checkIfExist($password){
			global $db;
			$query = "SELECT * FROM user WHERE password = '$password' LIMIT 1";
			$result = $db->query($query);
			if ($result->num_rows > 0) {
				$result->free();
				return true;
			} else {
				return false;
			}
		}
	}
 ?>