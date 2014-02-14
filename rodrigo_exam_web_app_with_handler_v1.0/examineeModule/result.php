<?php
	include_once('ExamineeClassHandler.php');
	session_start();
	
	$obj = new ExamineeClassHandler();
	$fname = $_SESSION['fname'];
	$lname = $_SESSION['lname'];
	$result = $obj->testComputeScore($_SESSION['answers']);
	if ($result !== false) {
		$score = $result;
	} 
 ?>

 <html>
	 <head>
	 	<title>Result Page</title>
	 	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	 	<style type="text/css">
	 		div.container-result{
	 			border: 1px solid black;
	 			width: 69%;
	 			height: 85%;
	 			margin: 3% auto;
	 			border-radius: 20px;
	 		}
	 		div.container-result > div{
	 			font-size: 37px;
	 			margin: 11% auto;
	 			text-align: center;
	 		}
	 		a{
	 			margin-left: 38.4%;
	 			width: 20%;
	 		}
	 	</style>
	 </head>
	 <body>
	 	<div class = 'container-result'>
	 		<div><?= "$fname $lname"; ?></div>
	 		<div><?= $score; ?></div>
	 		<div><?= $score / $obj->testNumberOfQuestion()['num'] * 50 + 50 . "%"; ?></div>
	 		<div><?= ($score / $obj->testNumberOfQuestion()['num'] * 50 + 50 >= 75) ? "PASSED" : "FAILED"; ?></div>
	 		<a href="logOut.php?permission=true" class = 'btn btn-warning'>Log out</a>
	 	</div>

	 	<script src = '../js/jquery-1.8.3.js'></script>
	 </body>
 </html>