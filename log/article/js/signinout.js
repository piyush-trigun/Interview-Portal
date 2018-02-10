$(function() {
$('.newMessage').hide();
$('#messageBoxSignIn').click(function() {
	$('#username').focus();
  });
});
$(function() {
	$('.error').hide();
	$('#signIn').click(function(){
		var username = $('#username').val();

		if (username == "" || username == "enter username") {
			$('.error').show();
			return false;
		}
		$('#messageBoxSignInForm').hide();
		$('.newMessage').show();
		var dataString = 'username=' + username;
		$.ajax({
			type: "GET",
			url: "signinout.php",
			data: dataString,
			Success: function() {
				$('.user').html('<span> Welcome <span id="loggedUser">' + username + '</span>!</span> <a
					id="signOut" onclick="window.location.reload()">SIGN OUT</a>');
			}
		})
		});
	})

