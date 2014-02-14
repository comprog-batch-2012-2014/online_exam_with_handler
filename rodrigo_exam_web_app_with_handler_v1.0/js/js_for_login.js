$(document).ready(function(){
	$('#login-email').blur(function(){
		if ($(this).val() == '') {
			$('help_email').html("Invalid Emailadd");
		} else {
			$('help_email').html("");
		}
		
	});

	$('#login-password').blur(function(){
		if ($(this).val() == '') {
			$('help_password').html("Invalid Password");
		} else {
			$('help_password').html("");
		}
	});
});