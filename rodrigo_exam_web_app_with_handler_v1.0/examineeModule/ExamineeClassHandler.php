<?php 
	include_once('ExamineeClass.php');
	class ExamineeClassHandler extends ExamineeClass{

		public function __construct(){

		}

		public function testGetName($password) {
			try {
				$result = parent::getName($password);
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

		public function testLogIn($email, $password, $position){
			try {
				$result = parent::login($email, $password, $position);
				if ($result != false) {
					return true;
				} else {
					error_log('Unsuccessfully login');
					return false;
				}
			} catch (Exception $e) {
				error_log($e->getMessage());
				return false;
			}
		}

		public function testTakeExam($num){
			try {
				$result = parent::takeExam($num);
				if ($result !== false) {
					return $result;
				} else {
					error_log('Unsuccessfully take exam');
					return false;
				}
			} catch (Exception $e) {
				error_log($e->getMessage());
				return false;
			}
		}

		public function testComputeScore($answers) {
			try {
				$result = parent::computeScore($answers);
				if ($result !== false) {
					return $result;
				} else {
					error_log('Unsuccessfully to compute the score');
					return false;
				}
			} catch (Exception $e) {
				error_log($e->getMessage());
				return false;
			}
		}

		public function testNumberOfQuestion() {
			$result = parent::numberOfQuestion();
			try {
				if($result !== false) {
					return $result;
				} else {

				}
			} catch(Exception $e) {
				error_log($e->getMessage());
				return false;
			}
		}

		public function testLogOut(){
			try {
				return parent::logOut();
			} catch (Exception $e) {
				error_log($e->getMessage());
				return false;
			}	
		}
	}
 ?>