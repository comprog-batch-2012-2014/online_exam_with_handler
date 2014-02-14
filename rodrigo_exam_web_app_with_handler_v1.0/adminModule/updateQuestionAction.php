<?php 
	include_once('AdminClassHandler.php');
	
	if(isset($_GET['btn-submit-update'])) {
		$id = isset($_GET['question_id']) ? $_GET['question_id']: false;
		$num = isset($_GET['question_num']) ? $_GET['question_num']: false;
		$question = isset($_GET['question']) ? $_GET['question']: false;
		$a = isset($_GET['choiceA']) ? $_GET['choiceA']: false;
		$b = isset($_GET['choiceB']) ? $_GET['choiceB']: false;
		$c = isset($_GET['choiceC']) ? $_GET['choiceC']: false;
		$d = isset($_GET['choiceD']) ? $_GET['choiceD']: false;
		$ans = isset($_GET['choice']) ? $_GET['choice']: false;

		if($id !== false && $num !== false && $question !== false && $a !== false
			&& $b !== false && $c !== false && $d !== false && $ans !== false) {
			$obj = new AdminClassHandler();
			$result = $obj->testUpdateQuestion($id, $num, $question, $a, $b, $c, $d, $ans);
			if($result) {
				echo "<script type = 'text/javascript'>
						alert('Successfully Update');
						document.location.href = 'questionsTable.php';
					  </script>";
			} else {
				echo "<script type = 'text/javascript'>
						alert('Unsuccessfully Update');
						document.location.href = 'questionsTable.php';
					  </script>";
			}
		} else {
			echo "<script type = 'text/javascript'>
					alert('There\'s somthing not set, please double check');
					document.location.href = 'updateQuestionAction.php';
				  </script>";
		}
	} else {
		$id = $_GET['id'];

		$obj = new AdminClassHandler();
		$question = $obj->testGetQuestionById($id);
	}
 ?>

 <html>
	 <head>
	 	<title>Update Page</title>
	 	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	 </head>
	 <body>
	 	<form method = 'GET' action = '<?= $_SERVER['PHP_SELF']; ?>'>
	 		<table>
	 			<tr>
	 				<td>Question id:</td>
	 				<td><?= $question['question_id']; ?><input type = 'hidden' name = 'question_id' value = '<?= $question['question_id']; ?>'></td>
	 			</tr>
	 			<tr>
	 				<td>Question num:</td>
	 				<td><input type = 'text' id = 'question_num' name = 'question_num' value = '<?= $question['question_num']; ?>'></td>	 				
	 			</tr>
	 			<tr>
	 				<td>Question:</td>
	 				<td><textarea name = 'question' id = 'question' rows = '4px'><?= $question['question']; ?></textarea></td>
	 			</tr>
	 			<tr>
	 				<td>Choice A:</td>
	 				<td><input type = 'text' id = 'choiceA' name = 'choiceA' value = '<?= $question['choiceA']; ?>'></td>
	 			</tr>
	 			<tr>
	 				<td>Choice B:</td>
	 				<td><input type = 'text' id = 'choiceB' name = 'choiceB' value = '<?= $question['choiceB']; ?>'></td>
	 			</tr>
	 			<tr>
	 				<td>Choice C:</td>
	 				<td><input type = 'text' id = 'choiceC' name = 'choiceC' value = '<?= $question['choiceC']; ?>'></td>
	 			</tr>
	 			<tr>
	 				<td>Choice D:</td>
	 				<td><input type = 'text' id = 'choiceD' name = 'choiceD' value = '<?= $question['choiceD']; ?>'></td>
	 			</tr>
	 			<tr>
	 				<td>Correct Answer:</td>
	 				<td><?php 
	 						$temp = array('a', 'b', 'c', 'd');
				 			for($i = 0; $i < 4; $i++) {
				 				if($temp[$i] == $question['correct_answer']) {
				 					echo $temp[$i] . "<input type = 'radio' name = 'choice' value = '".$temp[$i]."' checked>";
				 					continue;
				 				}
				 				echo $temp[$i] . "<input type = 'radio' name = 'choice' value = '".$temp[$i]."'>";
				 			}
	 					 ?>
	 				</td>
	 			</tr>
	 		</table>
	 		 <br/>
	 		 <input type = 'submit' value = 'DONE' name = 'btn-submit-update' class = 'btn btn-primary'>
	 		 <a href="questionsTable.php" class = 'btn'>Back</a>
	 	</form>
	 <script src = '../js/jquery-1.8.3.js'></script>
	 <script src = '../js/update_question_js.js'></script>
	 </body>
 </html>