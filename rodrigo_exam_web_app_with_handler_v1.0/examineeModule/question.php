<?php 
	include_once('ExamineeClassHandler.php');

	$obj = new ExamineeClassHandler();
	if (isset($_POST['choice']) && isset($_POST['submit-btn-question'])) {
		$answers = $_POST['answers'] . $_POST['choice'];
		$counter = $_POST['question_num'] + 1;
		if ($counter > $obj->testNumberOfQuestion()['num']) {
			session_start();
			$_SESSION = array('fname'=>$_SESSION['fname'], 'lname'=>$_SESSION['lname'], 'answers'=> $answers);
			header('Location: result.php');
		} else {
			$row = $obj->testTakeExam($counter);

			$question_num = $row['question_num'];
			$question = $row['question'];
			$a = $row['choiceA'];
			$b = $row['choiceB'];
			$c = $row['choiceC'];
			$d = $row['choiceD'];
		}
	} else if (!isset($_POST['choice']) && isset($_POST['submit-btn-question'])) {
		$answers = $_POST['answers'];
		$row = $obj->testTakeExam($_POST['question_num']);

		$question_num = $row['question_num'];
		$question = $row['question'];
		$a = $row['choiceA'];
		$b = $row['choiceB'];
		$c = $row['choiceC'];
		$d = $row['choiceD'];
	} else {
		if($obj->testNumberOfQuestion() !== false) {
			$row = $obj->testTakeExam(1);

			$question_num = $row['question_num'];
			$question = $row['question'];
			$a = $row['choiceA'];
			$b = $row['choiceB'];
			$c = $row['choiceC'];
			$d = $row['choiceD'];
		} else {
			$question_num = "No data";
			$question = "No data";
			$a = "No data";
			$b = "No data";
			$c = "No data";
			$d = "No data";
		}
	}

 ?>

<html>
	<head>
		<title>Questions Page</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	</head>
	<body onload = 'startTime()'>
		<div id = 'time'></div>
		<form method = 'POST' action = '<?= $_SERVER['PHP_SELF']; ?>'>
			<input type = 'hidden' name = 'answers' value = '<?= @$answers; ?>'>
			<input type = 'hidden' name = 'question_num' value = '<?= $question_num; ?>'>
			Question #<?= $question_num; ?>
			<table>
				<caption><?= $question; ?></caption>
				<tr>
					<td><input type = 'radio' value = 'a' name = 'choice'></td>
					<td><?= $a; ?></td>
				</tr>
				<tr>
					<td><input type = 'radio' value = 'b' name = 'choice'></td>
					<td><?= $b; ?></td>
				</tr>
				<tr>
					<td><input type = 'radio' value = 'c' name = 'choice'></td>
					<td><?= $c; ?></td>
				</tr>
				<tr>
					<td><input type = 'radio' value = 'd' name = 'choice'></td>
					<td><?= $d; ?></td>
				</tr>
				<tr>
					<td><input type = 'submit' value = 'SUBMIT' name = 'submit-btn-question' class = 'btn btn-primary'></td>
				</tr>
			</table>
		</form>
		<!--<script src = '../js/jquery-1.8.3.js'></script>
		<script src = '../js/my_timer.js'></script>-->
	</body>
</html>