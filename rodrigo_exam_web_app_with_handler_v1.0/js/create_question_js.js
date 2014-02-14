$(document).ready(function(){
	$('input[type=submit]').click(function(){
		var question_num = $('#question_num').val();
		var question = $('#question').val();
		var choiceA = $('#choiceA').val();
		var choiceB = $('#choiceB').val();
		var choiceC = $('#choiceC').val();
		var choiceD = $('#choiceD').val();
		var cor_ans = $(':checked').val();

		if(question_num == "") {
			alert("The question number is invalid");
			return false;
		} else if(question.length < 8) {
			alert("The question is invalid");
			return false;
		} else if(choiceA == "") {
			alert("The choiceA is invalid");
			return false;
		} else if(choiceB == "") {
			alert("The choiceB is invalid");
			return false;
		} else if(choiceC == "") {
			alert("The choiceC is invalid");
			return false;
		} else if(choiceD == "") {
			alert("The choiceD is invalid");
			return false;
		} else {
			return true;
		}
	});
});