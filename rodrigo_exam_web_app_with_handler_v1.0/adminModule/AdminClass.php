<?php
	include_once('../config.php'); 
	class AdminClass {

		// Start function for Examinee

		public static function createExaminee($fname, $lname, $gender, $email, $password) {
			global $db;
			$query = "INSERT INTO user(fname, lname, gender, email, password) VALUES('$fname',
						'$lname', '$gender', '$email', sha1('$password'))";
			$result = $db->query($query);
			if($result > 0) {
				return true;
			} else {
				return false;
			}
		}

		public static function updateExaminee($id, $fname, $lname, $gender, $email, $password) {
			global $db;
			$query = "UPDATE user SET fname = '$fname', lname = '$lname', gender = '$gender',
				email = '$email', password = sha1('$password') WHERE user_id = '$id'";
			$result = $db->query($query);
			if($result > 0) {
				return true;
			} else {
				return false;
			}
		}

		public static function deleteExaminee($id) {
			global $db;
			$query = "DELETE FROM user WHERE user_id = '$id'";
			$result = $db->query($query);
			if($result > 0) {
				return true;
			} else {
				return false;
			}
		}
		
		public static function getAllExaminee() {
			global $db;
			$query = "SELECT * FROM user WHERE user_position = 'examinee'";
			$result = $db->query($query);
			if ($result->num_rows > 0) {
				$record = array();
				while ($rec = $result->fetch_assoc()) {
					$record[] = $rec;
				}
				$result->free();
				return $record;
			} else {
				return false;
			}
		}

		public static function getAllExamineeById($id) {
			global $db;
			$query = "SELECT * FROM user WHERE user_position = 'examinee' AND user_id = '$id'";
			$result = $db->query($query);
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				$result->free();
				return $row;
			} else {
				return false;
			}
		}

		public static function passwordIsTaken($password) {
			global $db;
			$query = "SELECT * FROM user WHERE user_position = 'examinee' AND password = sha1('$password') LIMIT 1";
			$result = $db->query($query);
			if ($result->num_rows > 0) {
				$result->free();
				return true;
			} else {
				return false;
			}
		}
		// End function

		// Start function for question
		public static function getAllQuestions() {
			global $db;
			$query = "SELECT * FROM questionnaire";
			$result = $db->query($query);
			if ($result->num_rows > 0) {
				$questions = array();
				while ($question = $result->fetch_assoc()) {
					$questions[] = $question;
				}
				$result->free();
				return $questions;
			} else {
				return false;
			}
		}

		public static function createQuestion($num, $question, $a, $b, $c, $d, $correct_answer) {
			global $db;
			$query = "INSERT INTO questionnaire(question_num, question, choiceA, choiceB, choiceC,
						choiceD, correct_answer) VALUES('$num', '$question', '$a', '$b', '$c', '$d',
						'$correct_answer')";
			$result = $db->query($query);
			if ($result > 0) {
				return true;
			} else {
				return false;
			}
		}

		public static function getQuestionById($id) {
			global $db;
			$query = "SELECT * FROM questionnaire WHERE question_id = '$id'";
			$result = $db->query($query);
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				$result->free();
				return $row;
			} else {
				return false;
			}
		}

		public static function updateQuestion($id, $num, $question, $a, $b, $c, $d, $correct_answer) {
			global $db;
			$query = "UPDATE questionnaire SET question_num = '$num', question = '$question', choiceA = '$a', choiceB = '$b',
					choiceC = '$c', choiceD = '$d', correct_answer = '$correct_answer' WHERE question_id = '$id'";
			$result = $db->query($query);
			if ($result > 0) {
				return true;
			} else {
				return false;
			}
		}

		public static function deleteQuestion($id) {
			global $db;
			$query = "DELETE FROM questionnaire WHERE question_id = '$id'";
			$result = $db->query($query);
			if ($result > 0) {
				return true;
			} else {
				return false;
			}
		}
		// End function

		public static function logOut(){
			echo "<script type = 'text/javascript'>
					document.location.href = '../outsiderModule/registrationForm.php';
				  </script>";
		}
	}
 ?>