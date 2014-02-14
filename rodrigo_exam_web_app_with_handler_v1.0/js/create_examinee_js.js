$(document).ready(function(){
	$('input[type=submit]').click(function(){
		var fname = $('#fname').val();
		var lname = $('#lname').val();
		var email = $('#email').val();
		var password = $('#password').val();

		if(fname == "") {
			alert("Your First name is invalid");
			return false;
		} else if(lname == "") {
			alert("Your Last name is invalid");
			return false;
		} else if(email == "") {
			alert("Your Email address is invalid");
			return false;
		} else if(password.length < 8) {
			alert("Your Password must be atleast 8 characters");
			return false;
		} else {
			return true;
		}
	});
});