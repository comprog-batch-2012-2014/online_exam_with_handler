<?php 
	include_once('../config.php');
	class ExamineeClass {
		public static function logIn($emailadd, $password, $position) {
			global $db;
			$query = "SELECT * FROM user WHERE email = '$emailadd' 
					AND password = sha1('$password') AND user_position = '$position' LIMIT 1";
			$result = $db->query($query);
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				$result->free();
				return true;
			} else {
				return false;
			}
		}

		public static function logOut() {
			return true;
		}

		public static function takeExam($num) {
			global $db;
			$query = "SELECT * FROM questionnaire WHERE question_num = '$num' LIMIT 1";
			$result = $db->query($query);
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				$result->free();
				return $row;
			} else {
				return false;
			}
		}

		public static function computeScore($answers) {
			global $db;
			$query = "SELECT * FROM questionnaire";
			$result = $db->query($query);
			if ($result->num_rows > 0) {
				$score = 0;
				$i = 0;
				while ($cor_answer = $result->fetch_assoc()) {
					($cor_answer['correct_answer'] == $answers[$i]) ? $score++ : $score;
					$i++;
				}
				$result->free();
				return $score;
			} else {
				return false;
			}
		}

		public static function numberOfQuestion() {
			global $db;
			$query = "SELECT count(*) as num FROM questionnaire";
			$result = $db->query($query);
			if ($result->num_rows > 0) {
				$number = $result->fetch_assoc();
				$result->free();
				return $number;
			} else {
				return false;
			}
		}

		public static function getName($password) {
			global $db;
			$query = "SELECT fname, lname FROM user WHERE password = sha1('$password') LIMIT 1";
			$result = $db->query($query);
			if($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				$result->free();
				return $row;
			} else {
				return false;
			}
		}
	}

 ?>