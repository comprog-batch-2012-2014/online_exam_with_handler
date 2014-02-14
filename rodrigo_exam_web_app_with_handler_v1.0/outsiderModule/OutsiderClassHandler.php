<?php 
	include_once('OutsiderClass.php');
	class OutsiderClassHandler extends OutsiderClass {

		public function __construct(){

		}

		public function testRegister($fname, $lname, $gender, $emailadd, $password) {
			try {
				$result = parent::register($fname, $lname, $gender, $emailadd, $password);
				if ($result) {
					return true;
				} else {
					error_log('There\'s no row affected');
					return false;
				}
			} catch(Exception $e) {
				error_log($e->getMessage());
				return false;
			}
		}

	}
 ?>