$(document).ready(function(){
	// Start function for registration
	$('#fname').blur(function(){
		if($(this).val() == ""){
			$('#xfname').html("<span class = 'icon-remove'></span>&nbsp&nbsp");
		}else{
			$('#xfname').html("<span class = 'icon-ok'></span>&nbsp&nbsp");
		}
	});
		
	$('#lname').blur(function(){
		if($(this).val() == ""){
			$('#xlname').html("<span class = 'icon-remove'></span>&nbsp&nbsp");
		}else{
			$('#xlname').html("<span class = 'icon-ok'></span>&nbsp&nbsp");
		}
	});

	$('#emailadd').blur(function(){
		if($(this).val() == ""){
			$('#xemail').html("<span class = 'icon-remove'></span>&nbsp&nbsp");
		} else {
			$('#xemail').html("");
		}
	});


	$('#password').blur(function(){
		if($(this).val().length < 8 || $(this).val() == ""){
			$('#xpassword').html("<span class = 'icon-remove'></span>&nbsp&nbsp");
			alert("Require atleast 8 characters");
		}else{
			$('#xpassword').html("<span class = 'icon-ok'></span>&nbsp&nbsp");
		}
	});

	$('#con-password').blur(function(){
		if($(this).val() != $('#password').val() || $(this).val() == $('#password').val() && $(this).val().length < 8 || $(this).val() == ""){
			$('#xcon-pass').html("<span class = 'icon-remove'></span>&nbsp&nbsp");
		}else{
			$('#xcon-pass').html("<span class = 'icon-ok'></span>&nbsp&nbsp");
		}
	});

	$('#submit').click(function(){
		var ok = false;
		var fname = $('#fname').val();
		var lname = $('#lname').val();
		var gender = $(':checked').val();
		var email = $('#emailadd').val();
		var password = $('#password').val();
		var con_password = $('#con-password').val();
		
		if (fname == "") {
			alert('Your First name is Invalid');
		} else if (lname == "") {
			alert('Your Last name is Invalid');
		} else if (emailadd == "") {
			alert('Your Emailadd is Invalid');
		} else if (password == "") {
			alert('Your Password is Invalid');
		} else if (con_password == "") {
			alert('Your Confirm Password is Invalid');
		} else if (con_password.length < 8 || password.length < 8) {
			alert('The lenght of Password and Confirm Password must be 8 characters')
		} else if(con_password != password) {
			alert('Your Password and Confirm Password is not match');
		} else {
			ok = true;
		}

		return ok;
	});

	$('#reset').on('click', function(){
		$('#xfname').html("");
		$('#xmname').html("");
		$('#xlname').html("");
		$('#xemail').html("");
		$('#xpassword').html("");
		$('#xcon-pass').html("");
	});
	// End function for registration

	$('input[type=submit]').click(function(){
		var email = $('input[type=email]').val();
		var password = $('input[type=password]').val();
		if (email == '') {
			alert('Invalid Emailadd');
			return false;
		} else if (password.val() == ''){
			alert('Invalid Password');
			return false;
		} else {
			return true;
		}
	});
});