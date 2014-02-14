<html>
	<head>
		<title>Admin Page</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<style type="text/css">
			a{
				width: 40px;
				height: 18px;
			}

			table{
				font-size: 15px;
			}

			caption{
				font-size: 41px;
				letter-spacing: 11px;

			}
			.btn-for-create{
				width: 150;
				float: right;
				margin: 12px 20px 0 0;
			}
		</style>
	</head>
	<body>
		<a href="createQuestionAction.php" class = 'btn btn-primary btn-for-create'>Create Question</a>
		<?php 
			include_once('AdminClassHandler.php');

			$obj = new AdminClassHandler();
			$questions = $obj->testGetAllQuestions();

			if($questions === false) {
				echo "no data";
			} else {
				echo "<table class = 'table table-striped'>
						<caption>Questions Table</caption>
						<th>Question id</th>
						<th>Question Number</th>
						<th>Question</th>
						<th>Choice A</th>
						<th>Choice B</th>
						<th>Choice C</th>
						<th>Choice D</th>
						<th>Correct Answer</th>
						<th>Actions</th>";
				foreach($questions as $question) {
					echo "<tr>
							<td>".$question['question_id']."</td>
							<td>".$question['question_num']."</td>
							<td>".$question['question']."</td>
							<td>".$question['choiceA']."</td>
							<td>".$question['choiceB']."</td>
							<td>".$question['choiceC']."</td>
							<td>".$question['choiceD']."</td>
							<td>".$question['correct_answer']."</td>
							<td>
								<a href = 'updateQuestionAction.php?id=".$question['question_id']."' class = 'btn btn-success'>Update</a>
								<a href = 'deleteQuestionAction.php?id=".$question['question_id']."' class = 'btn btn-danger' onclick = \"return confirm('Are you sure do you want to delete?')\">Delete</a>
							</td>
						 </tr>";
				}
				echo "</table>";

			}
		 ?>
		 <a href="admin.php" class = 'btn'>Back</a>
		<script src = '../js/jquery-1.8.3.js'></script>
	</body>
</html>