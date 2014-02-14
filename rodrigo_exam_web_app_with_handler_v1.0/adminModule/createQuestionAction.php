<?php 
	include_once('AdminClassHandler.php');
	
	if(isset($_GET['btn-submit-create'])) {
		$id = isset($_GET['question_id']) ? $_GET['question_id']: false;
		$num = isset($_GET['question_num']) ? $_GET['question_num']: false;
		$question = isset($_GET['question']) ? $_GET['question']: false;
		$a = isset($_GET['choiceA']) ? $_GET['choiceA']: false;
		$b = isset($_GET['choiceB']) ? $_GET['choiceB']: false;
		$c = isset($_GET['choiceC']) ? $_GET['choiceC']: false;
		$d = isset($_GET['choiceD']) ? $_GET['choiceD']: false;
		$ans = isset($_GET['choice']) ? $_GET['choice']: false;

		if($num !== false && $question !== false && $a !== false
			&& $b !== false && $c !== false && $d !== false && $ans !== false) {

			$obj = new AdminClassHandler();
			$result = $obj->testCreateQuestion($num, $question, $a, $b, $c, $d, $ans);
			if($result) {
				echo "<script type = 'text/javascript'>
						alert('Successfully Create question');
						document.location.href = 'questionsTable.php';
					  </script>";
			} else {
				echo "<script type = 'text/javascript'>
						alert('Unsuccessfully Create question');
						document.location.href = 'questionsTable.php';
					  </script>";
			}
		} else {
			echo "<script type = 'text/javascript'>
					alert('There\'s somthing not set, please double check');
					document.location.href = 'createQuestionAction.php';
				  </script>";
		}
	}
 ?>

 <html>
	 <head>
	 	<title>Create Page</title>
	 	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	 </head>
	 <body>
	 	<form method = 'GET' action = '<?= $_SERVER['PHP_SELF']; ?>'>
	 		<table>
	 			<tr>
	 				<td>Question num:</td>
	 				<td><input type = 'text' id = 'question_num' name = 'question_num' /></td>	 				
	 			</tr>
	 			<tr>
	 				<td>Question:</td>
	 				<td><textarea name = 'question' id = 'question' rows = '4px'></textarea></td>
	 			</tr>
	 			<tr>
	 				<td>Choice A:</td>
	 				<td><input type = 'text' id = 'choiceA' name = 'choiceA' /></td>
	 			</tr>
	 			<tr>
	 				<td>Choice B:</td>
	 				<td><input type = 'text' id = 'choiceB' name = 'choiceB' /></td>
	 			</tr>
	 			<tr>
	 				<td>Choice C:</td>
	 				<td><input type = 'text' id = 'choiceC' name = 'choiceC' /></td>
	 			</tr>
	 			<tr>
	 				<td>Choice D:</td>
	 				<td><input type = 'text' id = 'choiceD' name = 'choiceD' /></td>
	 			</tr>
	 			<tr>
	 				<td>Correct Answer:</td>
	 				<td>
	 					<input type = 'radio' name = 'choice' value = 'a' checked />
	 					<input type = 'radio' name = 'choice' value = 'b' />
	 					<input type = 'radio' name = 'choice' value = 'c' />
	 					<input type = 'radio' name = 'choice' value = 'd' />
	 				</td>
	 			</tr>
	 		</table>
	 		 <br/>
	 		 <input type = 'submit' value = 'DONE' name = 'btn-submit-create' class = 'btn btn-primary'>
	 		 <a href="questionsTable.php" class = 'btn'>Back</a>
	 	</form>
	 <script src = '../js/jquery-1.8.3.js'></script>
	 <script src = '../js/create_question_js.js'></script>
	 </body>
 </html>
	 </body>
 </html>