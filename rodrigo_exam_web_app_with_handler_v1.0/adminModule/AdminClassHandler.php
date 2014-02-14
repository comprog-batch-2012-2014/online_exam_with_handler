<?php
	include_once('AdminClass.php');
	class AdminClassHandler extends AdminClass{

		// constructor
		public function __construct() {

		}

		// Start function for Question
		public function testGetAllQuestions() {
			try {
				$result = parent::getAllQuestions();
				if ($result !== false) {
					return $result;
				} else {
					return false;
				}
			} catch (Exception $e) {
				error_log($e->getMessage());
				return false;
			}
		}

		public function testGetQuestionById($id) {
			try {
				$result = parent::getQuestionById($id);
				if($result !== false) {
					return $result;
				} else {
					return false;
				}
			} catch(Exception $e) {
				error_log($e->getMessage());
				return false;
			}
		}

		public function testCreateQuestion($num, $question, $a, $b, $c, $d, $correct_answer) {
			try {
				$result = parent::createQuestion($num, $question, $a, $b, $c, $d, $correct_answer);
				if($result !== false) {
					return $result;
				} else {
					return false;
				}
			} catch(Exception $e) {
				error_log($e->getMessage());
				return false;
			}
		}

		public function testUpdateQuestion($id, $num, $question, $a, $b, $c, $d, $correct_answer) {
			try {
				$result = parent::updateQuestion($id, $num, $question, $a, $b, $c, $d, $correct_answer);
				if($result !== false) {
					return $result;
				} else {
					return false;
				}
			} catch(Exception $e) {
				error_log($e->getMessage());
				return false;
			}
		}

		public function testDeleteQuestion($id) {
			try {
				$result = parent::deleteQuestion($id);
				if($result !== false) {
					return $result;
				} else {
					return false;
				}
			} catch(Exception $e) {
				error_log($e->getMessage());
				return false;
			}
		}
		// End function

		// Start function for User
		public function testCreateExaminee($fname, $lname, $gender, $email, $password){
			try {
				$result = parent::createExaminee($fname, $lname, $gender, $email, $password);
				if($result !== false) {
					return true;
				} else {
					return false;
				}
			} catch(Exception $e) {
				error_log($e->getMessage());
			}
		}

		public function testUpdateExaminee($id, $fname, $lname, $gender, $email, $password) {
			try {
				$result = parent::updateExaminee($id, $fname, $lname, $gender, $email, $password);
				if($result !== false) {
					return true;
				} else {
					return false;
				}
			} catch (Exception $e) {
				error_log($e->getMessage());
				return false;
			}
		}

		public function testDeleteExaminee($id) {
			try {
				$result = parent::deleteExaminee($id);
				if($result !== false) {
					return true;
				} else {
					return false;
				}
			} catch(Exception $e) {
				error_log($e->getMessage());
				return false;
			}
		}

		public function testGetAllExaminee() {
			try {
				$result = parent::getAllExaminee();
				if ($result !== false) {
					return $result;
				} else {
					return false;
				}
			} catch (Exception $e) {
				error_log($e->getMessage());
				return false;
			}
		}

		public function testGetAllExamineeById($id) {
			try {
				$result = parent::getAllExamineeById($id);
				if ($result !== false) {
					return $result;
				} else {
					return false;
				}
			} catch (Exception $e) {
				error_log($e->getMessage());
				return false;
			}
		}

		public function testPasswordIsTaken($password) {
			try {
				if(parent::passwordIsTaken($password)) {
					return true;
				} else {
					return false;
				}
			} catch(Exception $e) {
				error_log($e->getMessage());
				return false;
			}
		}
		// End function

		public function testLogOut(){
			try {
				parent::logOut();
			} catch(Exception $e) {
				error_log($e->getMessage());
			}
		}
	}
 ?>









